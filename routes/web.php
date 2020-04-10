<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('roles', function () {
    return view('role');
});
Route::get('permisos', function () {
    return view('permission');
});

Route::get('usuarios', function () {
    return view('user');
});