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
Route::group(["prefix" => "auth"], function () {
    //categories
    Route::resource('categoria', 'CategorieController')->except([
        'show', 'create', 'edit'
    ]);
    Route::get('categoria/data', 'CategorieController@getdata');
    Route::put('categoria/available/{id}', 'CategorieController@available');
    Route::put('categoria/locked/{id}', 'CategorieController@locked');
    //endcategories
});