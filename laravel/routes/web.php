<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/', function () {
    dd(User::all());
    return view('welcome');
});
