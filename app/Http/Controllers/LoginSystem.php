<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Validation\ValidationException;

class LoginSystem extends Controller
{
    function validation(){
        $attributes = request()->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if(auth()->attempt($attributes)){
            $user = User::where('username', $attributes['username'])->first();
            auth()->login($user);
            return view('pages.welcome');
        }
        else{
            throw ValidationException::withMessages([
                'password' => "username and password don't match "
            ]);
        }
    }
    
    public function construction(){
        $attributes = request()->validate([
            'email' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);
        
        $user = new User;
        $user -> email = $attributes['email'];
        $user -> username = $attributes['username'];
        $user -> password = bcrypt($attributes['password']);
        $user -> save();
        return view('pages.welcome');
    }
    
    public function viewSignUpPage(){
            return view('pages.signup');
    }


}
