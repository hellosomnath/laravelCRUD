<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

Route::get('/', [ListingController::class, 'index']);
Route::get('listing/{listing}', [ListingController::class, 'show']);
Route::get('post-job', [ListingController::class, 'create'])->middleware('auth');
Route::post('post-job', [ListingController::class, 'store'])->middleware('auth');
Route::get('listing/edit/{listing}', [ListingController::class, 'edit'])->middleware('auth');
Route::post('listing/edit/{listing}', [ListingController::class, 'update'])->middleware('auth');
Route::delete('listing/delete/{listing}', [ListingController::class, 'delete'])->middleware('auth');

Route::get('register', [UserController::class, 'register'])->middleware('guest');
Route::post('register', [UserController::class, 'create'])->middleware('guest');
Route::get('login', [UserController::class, 'login'])->middleware('guest')->name('login');
Route::post('authenticate', [UserController::class, 'authenticate'])->middleware('guest');
Route::get('logout', [UserController::class, 'logout'])->middleware('auth');
Route::get('jobs', [UserController::class, 'jobs'])->middleware('auth');