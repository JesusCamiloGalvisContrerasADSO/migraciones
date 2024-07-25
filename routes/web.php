<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});



Route::prefix('users')->group(function () {

    Route::get('/', [UserController::class, 'index']) -> name('users.index');

    // Auth::routes();

    Route::get('/create', [UserController::class, 'create']) -> name('users.create');


    Route::post('/store', [UserController::class, 'store']) -> name('users.store');

    Route::get("/edit/{id}", [UserController::class, "edit"])->name('users.edit');

    Route::post('/update/{id}', [UserController::class, 'update'])->name('users.update');

    Route::post(('/destroy/{id}'), [UserController::class, 'destroy'])->name(('users.destroy'));
});

Route::prefix('posts')->group(function () {
    Route::get('/', [PostController::class, 'index']) -> name('posts.index');
    Route::get('/create', [PostController::class, 'create']) -> name('posts.create');
    Route::post('/store', [PostController::class, 'store']) -> name('posts.store');
});