<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;
//alle view si possono passare anche dati, come array
Route::get('/', function () {
    return view('home', ['greeting' => 'Yo']);
});

Route::get('listings', function () {
    return view('listings', [
        'listings' => Listing::all()
    ]);
});

Route::get('/listings/{id}', function ($id) {
    $listing = Listing::find($id);

    return view('listing', ['listing' => $listing]);
});

Route::get('/contacts', function () {
    return view('contacts');
});
