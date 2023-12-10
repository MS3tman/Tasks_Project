<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Requests\ValidateRequest;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $AllTasks = Task::all();    // to retrive all my tasks from database.
        return view('tasks.main',[
            'tasks' => $AllTasks
        ]);
      
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ValidateRequest $user_create_task)
    {
    //    $user_create_task->validate([
    //     'name' => ['required', 'min:3'],                   // the name is a value of name in input tag in html.
    //     'description' => 'required|min:5',             // reuire is meaning you must enter value.
    //    ], [
    //     'name.min' => 'please pro enter full name',   // to write special error for name feild.
    //     'description.min' => 'Enter full your Description',  // to write special error for secription feild.
    //    ]);

        Task::create($user_create_task->all());
        return to_route('tasks.main');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        Task::find($id);
        if($id = 1){
            Task::create([
                'completed' => 'true'
            ]);
        }
        return redirect()->route('tasks.main');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
