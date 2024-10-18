<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function index()
    {
        return view("auth.login");
    }

    public function store(Request $request)
    {

        //validate requst
        $attr = $request->validate([
            "email" => ["required", "email"],
            "password" => ["required", "string"],
        ]);

        //attempt to login
        if (!Auth::attempt($attr)) {
            # code...
            throw ValidationException::withMessages(
                ["email" => 'Invalid details supplied', 'password' => 'invalid details supplied']
            );
        }

        //regenerate token
        request()->session()->regenerate();

        //redirect if login sucessful
        return redirect('/');
    }

    public function destroy(){
        Auth::logout();

        return redirect('login');
    }
}
