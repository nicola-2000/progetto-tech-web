<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;
use App\Models\Customer;

class SessionController extends Controller
{
    public function create()
    {
        /* return view('auth.login-customer');  */
        /* per sanity check -> */ dd('login customer');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required', Password::min(8)]
        ]);

        if (!Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Sorry, those credentials do not match.'
            ]);
        }
        request()->session()->regenerate();
        return redirect('/');
    }

    public function destroy(){
        Auth::logout();
        return redirect('/');
    }
}