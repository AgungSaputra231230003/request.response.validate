<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function() {
//     return view('user.index');
// });
Route::get('/user/create', [UserController::class, 'create']) -> name ('user.create');
Route::post('/user/store', [UserController::class, 'store']) -> name ('user.store');

Route::get('/contact/create', [ContactController::class, 'create']) -> name ('contact.create');
Route::post('/contact/store', [ContactController::class, 'store']) -> name ('contact.store');
