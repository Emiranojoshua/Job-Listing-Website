<?php

namespace App\Http\Controllers;

use App\Models\Employers;
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

    public function store(Request $request, User $user, Auth $auth, Employers $employers)
    {

        //get the request data and validate
        $attr = $request->validate(
            [
                'email' => ['required', 'email', 'unique:users,email'],
                'full_name' => ['required'],
                'password' => ['required', 'confirmed'],
                'password_confirmation' => ['required'],
                'employer_name' => [],
            ]
        );


        //create user
        $authUser = $user::create($attr);

        //create employers table
        if ($request->employer_name) {
            $employers::create([
                'name' => $request->employer_name,
                'user_id' => $authUser->id,
            ]);
        }

        //login user
        $auth::login($authUser);
        //redirect user
        return redirect('/');
    }
}
