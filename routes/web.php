<?php

use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProvisionServer;
use App\Http\Controllers\UserController;
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

Route::get('/user/{id}', [UserController::class, 'show']);

Route::post('/server', ProvisionServer::class); // Ação unica...

Route::resource('photos', PhotoController::class)->shallow();

Route::permanentRedirect('/here', '/greeting');

require __DIR__ . '/auth.php';
