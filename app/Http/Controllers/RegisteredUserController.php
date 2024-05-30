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
        return view('auth.register-customer'); 
        /* per sanity check -> dd('register customer');*/
    }

    public function store()
    {
        $validatedAttributes = request()->validate([
            'first_name'=> ['required'],
            'last_name'=> ['required'],
            'fiscal_code'=> ['required'],
            'email'=> ['required', 'email'],
            'password'=> ['required', Password::min(8), 'confirmed']
        ]);

        dd(request()->all($validatedAttributes));

/*         $customer = Customer::create($validatedAttributes);
        Auth::login($customer);
        return redirect('/'); */
    }
}