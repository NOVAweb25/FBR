<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// صفحة البداية
Route::get('/', function () {
    return view('login');
});
Route::get('/admin', function () {
    if(!session()->has('user_id')){
        return redirect('/login');
    }
    return view('admin'); 
});

Route::get('/customadmin', function () {
    return view('customadmin');
});

// صفحة اختبار
Route::get('/test', function () {
    return view('test');
});

// صفحات التسجيل والدخول
Route::get('/register', function() {
    return view('register'); // Blade file
});
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', function() {
    return view('login'); // Blade file
});
Route::post('/login', [AuthController::class, 'login']);
