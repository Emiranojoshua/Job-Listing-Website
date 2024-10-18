<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view("auth.register");
    }

    public function store(Request $request, User $user, Auth $auth)
    {
        //get the request data and validate
        $attr = $request->validate(
            [
                'email' => ['required', 'email'],
                'full_name' => ['required'],
                'password' => ['required', 'confirmed'],
                'password_confirmation' => ['required'],
            ]
        );

        //create user
        $authUser = $user::create($attr);
        //login user
        $auth::login($authUser);
        //redirect user
        return redirect('/');
    }
}
