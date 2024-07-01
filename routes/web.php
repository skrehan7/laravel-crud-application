<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('index',[PostController::class,'index'])->name('post.index');
Route::get('create', [PostController::class, 'create'])->name('create.post');