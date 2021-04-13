<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return 'Sesión acerca de';
});

Route::view('profile', 'profile');

Route::post('profile', function (Request $request) {
    $request->file('photo')->store('profile');
    return redirect('profile');
});
