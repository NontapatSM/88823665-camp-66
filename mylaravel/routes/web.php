<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mycontroller;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Registercontroller;

Route::get('/login', [LoginController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);

Route::get('/home', [HomeController::class, 'index']);

Route::get('/Mycontroller', [Mycontroller::class, 'myfunction']);

Route::post('/Mycontroller', [Mycontroller::class, 'myfunction']);

Route::get('/404', function(){
    abort(404);
});

Route::get('/500', function(){
    abort(500);
});

Route::get('/', function () {
    return view('home');
});

Route::get('/Hello', function ($val="") {
    return "<h1>Hello World! </h1>";
});
