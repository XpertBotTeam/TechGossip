<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Validation\ValidationException;
use Illuminate\Validation\Rule;

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
            return redirect("/");
        }
        else{
            throw ValidationException::withMessages([
                'password' => "username and password don't match "
            ]);
        }
    }
    
    public function construction(){
        $attributes = request()->validate([
            'email' => ['required','email','max:255',Rule::unique('users','email')],
            'username' => ['required','max:255',Rule::unique('users','email')],
            'password' => ['required','min:7','max:255'],
        ]);
        
        $user = new User;
        $user -> email = $attributes['email'];
        $user -> username = $attributes['username'];
        $user -> password = bcrypt($attributes['password']);
        $user -> save();
        return redirect("/");
    }
    
    public function viewSignUpPage(){
            return view('pages.signup');
    }

    public function destruct(){
        auth()->logout();
        return redirect("/");
    }


}
