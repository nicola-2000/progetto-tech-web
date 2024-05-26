<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use App\Models\Customer;

class RegisteredUserController extends Controller
{
    public function create()
    {
        /* return view('auth.register-customer'); */
        /* per sanity check -> */ dd('register customer');
    }

    public function store()
    {
        $attributes = request()->validate([
            'first_name'=> ['required'],
            'last_name'=> ['required'],
            'fiscal_code'=> ['required'],
            'email'=> ['required', 'email'],
            'password'=> ['required', Password::min(8), 'password']
        ]);

        $user = User::create($attributes);
        Auth::login($user);
        return redirect('/');
    }
}