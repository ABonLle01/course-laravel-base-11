<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('category/all', [CategoryController::class, 'all'])->name('category.all');
Route::get('category/slug/{category:slug}', [CategoryController::class, 'slug'])->name('category.slug');
Route::get('post/all', [PostController::class, 'all'])->name('post.all');
Route::get('post/slug/{slug}', [PostController::class, 'slug'])->name('post.slug');

Route::resource('category', CategoryController::class)->except(['create', 'edit']);
Route::resource('post', PostController::class)->except(['create', 'edit']);