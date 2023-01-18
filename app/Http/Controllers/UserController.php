<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function loginView(){
        return view('login');
    }

    public function registerView(){
        return view('register');
    }

    public function signIn(Request $request){
        $username = $request->username;
        $password = $request->password;

        if (Auth::attempt(['username' => $email , 'password' => $password])){
            
            return redirect('/home');
        }  
    }

    public function register(Request $request){
        $full_name = $request->full_name;
        $username = $request->username;
        $password = $request->password;
        $email = $requset->email;
        $phone = $request->phone;

        $user = new User;
        $user->full_name = $full_name;
        $user->username = $username;
        $user->password = bcrypt($password);
        $user->email = $email;
        $user->phone = $phone;
        $user->save();

        
        return redirect()->back()->with('success', 'User Registered Succesfully');
    }
}
