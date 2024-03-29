<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;

class UserController extends Controller
{
    
    public function loginView(){
        return view('home.login');
    }

    public function registerView(){
        return view('home.register');
    }

    public function homeView(){
        return view('user.home');
    }

    public function profileView(){
        return view ('user.profile');
    }

    public function landingView(){
        return view('home.landing');
    }

    public function adminView(){
        return view('admin.welcome');
    }

    public function createJobView(){
        return view('admin.create-job-field');
    }

    public function signIn(Request $request){
        $username = $request->username;
        $password = $request->password;

        if (Auth::attempt(['username' => $username , 'password' => $password])){
            

            $user = User::find(Auth::id());
            if ($user->role == "Admin"){
                return redirect('/welcome-admin');
            }
            
            return redirect('/home');
        }
        else {
            return redirect()->back()->with('errors', 'wrong username or password');
        }
    }

    public function editProfileView(){
        $id = Auth::id();
        $user = User::find($id);
        return view ('user.edit-profile', compact('user'));
    }

    public function updateProfile(Request $request){        
        $user = User::find(Auth::id());

        $username = $request->username;
        $password = $request->password;
        $email = $request->email;
        $phone = $request->phone;
        $confirmPass = $request->confirm_password;
        $fullName = $request->full_name;
        $role = $user->role;

        $user->full_name = $fullName;
        $user->username = $username;
        $user->password = bcrypt($password);
        $user->email = $email;
        $user->phone_number = $phone;
        $user->role = $role;
        $user->save();

        return redirect('/home');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
    

    public function register(Request $request){

        $request->validate([
            'fullName' => 'min:3',
            'username' => 'min:3',
            'email' => 'email',
            'password' => 'min:8',
            'phone' => 'required|min:11|numeric'
        ]);

        $username = $request->username;
        $password = $request->password;
        $email = $request->email;
        $phone = $request->phone;
        $confirmPass = $request->confirm_password;
        $fullName = $request->full_name;

        $user = new User;
        $user->full_name = $fullName;
        $user->username = $username;
        $user->password = bcrypt($password);
        $user->email = $email;
        $user->phone_number = $phone;
        $user->role = 'Member';
        $user->save();


        Mail::to($email)->send(new SendEmail);
        

        return redirect()->back()->with('success', 'User Registered Succesfully');
    }

    public function user(){
        return view('user.profile');
    }
}
