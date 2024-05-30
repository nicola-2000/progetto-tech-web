<?php

use Illuminate\Support\Facades\Route;
use App\Models\Booking;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
//alle view si possono passare anche dati, come array
Route::get('/', function () {
    return view('home', ['greeting' => 'Yo']);
});

Route::get('bookings', function () {
    return view('bookings', [
        'bookings' => Booking::all()
    ]);
});

Route::get('/bookings/{id}', function ($id) {
    $listing = Booking::find($id);

    return view('listing', ['listing' => $listing]);
});

Route::get('/contacts', function () {
    return view('contacts');
});

// rotte autenticazione
Route::get('/register-customer', [RegisteredUserController::class, 'create']);
Route::patch('/register-customer', [RegisteredUserController::class, 'store']);

Route::get('/login-customer', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);