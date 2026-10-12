<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'name'=> 'Emi Nur Khamidah',
        'age'=> 21,
    ]);
});

Route::get('/hello', function() {
    return 'Hello World!';
});
