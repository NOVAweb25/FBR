Route::get('/customadmin', function () {
    return view('customadmin');
});
<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/test', function () {
    return view('test');
});
