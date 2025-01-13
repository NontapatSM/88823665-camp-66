<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mycontroller;

Route::get('/Mycontroller', [Mycontroller::class, 'myfunction']);

Route::post('/Mycontroller', [Mycontroller::class, 'myfunction']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Hello', function ($val="") {
    return "<h1>Hello World! </h1>";
});
