<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
//alle view si possono passare anche dati, come array
Route::get('/', function () {
    return view('home', ['greeting' => 'Yo']);
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
        [
            'id' => 1,
            'title' => 'Direttore',
            'salary' => '€150k/anno'
        ],
        [
            'id' => 2,
            'title' => 'Programmatore',
            'salary' => '€100k/anno'
        ],
        [
            'id' => 3,
            'title' => 'Professore',
            'salary' => '€50k/anno'
        ]
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Direttore',
            'salary' => '€150k/anno'
        ],
        [
            'id' => 2,
            'title' => 'Programmatore',
            'salary' => '€100k/anno'
        ],
        [
            'id' => 3,
            'title' => 'Professore',
            'salary' => '€50k/anno'
        ]
    ];
    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

    return view('job', ['job' => $job]);
});

Route::get('/contacts', function () {
    return view('contacts');
});
