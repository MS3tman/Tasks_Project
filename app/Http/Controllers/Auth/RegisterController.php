<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        // $users = User::all();  // to retrive all my users from database.
        // return view('/',[
        //     'users'=>$users
        // ]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(request $user_data){

        // 1. get date from user.
        // 2. insert the request data into the Databae.
        // 3. redirection to the next step.

        User::create($user_data->all());
        //return route('gologin');
        return redirect()->route('login');
       
    }

    /**
     * Display the specified resource depend on id, علي حسب الاي دي هيرجعلك قيمة من قواعد البيانات.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        return view('auth.home',[
            'user'=>$user
        ]);
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