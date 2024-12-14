<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/email/verify/test', function () {
    $url = url('/email/verify/1/' . sha1('test@example.com')); // Cambia 'test@example.com' por un email de prueba
    return view('emails.verify', ['url' => $url]);
});