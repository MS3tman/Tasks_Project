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
        $tasks_to_edit = Task::find($id);
        return view('tasks.edit',[
            'edit_id' => $tasks_to_edit->id,
            'edit_name' => $tasks_to_edit->name,
            'edit_description' => $tasks_to_edit->description,
        ]);
       // return view('tasks.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $old_task = Task::find($id);       // old_task pointer to the specific row depend on $id 
        $old_task->name = $request->name;  // to do overwrite name , to replace the old name to new name.
        $old_task->description = $request->description; // to do overwrite description , to replace the old description to new description
        $old_task->save();
       
        return redirect()->route('tasks.main');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Task::destroy($id);
        return redirect()->route('tasks.main');
    }
}
