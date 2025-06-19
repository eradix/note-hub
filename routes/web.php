<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $test = request()->all();
    return view('welcome');
});
