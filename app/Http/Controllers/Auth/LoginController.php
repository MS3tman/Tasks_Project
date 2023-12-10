<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
           
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.login');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $login_data)
    {
        if($login_data->email == User::where('email', $login_data->email)->get() && $login_data->password == User::where('password', $login_data->password)->get()){
            return redirect()->route('tasks.main');
        }
        else
        return redirect()->route('go_welcome');

        // $user_data = User::all();
        
        // if( $login_data->email == $user_data->email && $login_data->password == $user_data->password){
        //     return redirect('home');
        // }
        // else
        // return redirect('login');


    }

    /**
     * Display the specified resource depend on id, علي حسب الاي دي هيرجعلك قيمة من قواعد البيانات.
     */
    // public function show(string $id)
    // {
    //     $user = User::find($id);
    //     return view('auth.home',[
    //         'user'=>$user
    //     ]);
    // }

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
