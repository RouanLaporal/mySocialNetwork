<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends BaseController{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function addNewUser(Request $request){
        $fullName = $request->input('fullName');
        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request-> input('password');
        $data = array('fullName' => $fullName, 'username' => $username, 'email' => $email, 'password' => Hash::make($password));
        User::create($data);
        return view('profil');
    }

    public function authenticate(Request $request){
        
        $credentials = $request->validate([
            'email' =>  ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)){
            //ddd(Auth::attempt($credentials));
            //echo "ok";
            $request->session()->regenerate();
            return redirect()->intended('profil');
        }
        return back()->withErrors([
            'email' => "The credentials provided doesn't match",
        ]);
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}