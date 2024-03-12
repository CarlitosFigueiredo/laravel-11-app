<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/user/{id?}', function (Request $request, ?string $id = null) {
    return 'User ' . $id;
})->where('id', '[0-9]+');

Route::permanentRedirect('/here', '/greeting');

require __DIR__ . '/auth.php';
