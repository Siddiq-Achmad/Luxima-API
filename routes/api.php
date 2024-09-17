<?php

use App\Http\Controllers\API\Auth\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\BlogController;


// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:api');
Route::get('/blogs', [BlogController::class, 'index']);

Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/login', [AuthController::class, 'login']);

Route::group(['middleware' => 'auth:api'], function () {

    Route::post('/auth/logout', [AuthController::class, 'logout']);
    Route::get('/auth/refresh-token', [AuthController::class, 'refreshToken']);
    Route::get('/profile', [AuthController::class, 'profile']);

    Route::post('/blogs', [BlogController::class, 'store']);
    //Route::get('/blogs', [BlogController::class, 'index']);
    Route::get('/blogs/{id}', [BlogController::class, 'show']);
    Route::put('/blogs/{id}', [BlogController::class, 'update']);
    Route::delete('/blogs/{id}', [BlogController::class, 'destroy']);
    Route::get('/blogs/{id}/edit', [BlogController::class, 'edit']);
    Route::get('/list-blogs', [BlogController::class, 'listBlogs']);
    Route::get('/blog-details/{blog_id}', [BlogController::class, 'getSingleBlog']);
    Route::get('/blog/{slug}', [BlogController::class, 'getBlogBySlug']);

});
