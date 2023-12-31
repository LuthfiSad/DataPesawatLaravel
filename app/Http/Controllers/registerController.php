<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class registerController extends Controller
{
    public function register ()
    {

    
    return view  ('auth.register');
    }


    public function store(Request $request)
    {
        $request->validate([

        'name' => 'required|string',
        'email' => 'required|string|email:dns',
        'password' => 'required|string|min:5'

        ]);

        User::create([

            'name' => $request ->name,
            'email' => $request ->email,
            'password' => bcrypt($request ->password)

        ]);

        return to_route('login')->with('registersuccess', 'Register Successfully');
    }

}
