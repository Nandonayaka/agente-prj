<?php

use Illuminate\Support\Facades\Route;

Route::get('/about', function(){
    $data = [
        'name' => 'ali',
        'umur' => 12,
    ];
    return view ('pages.about' , $data);
});

Route::view('/', 'pages.dashboard');
Route::view('/contact', 'pages.contact' );
