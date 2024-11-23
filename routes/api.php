<?php

use App\Http\Controllers\API\Auth\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\BlogController;
use App\Http\Controllers\API\BookingController;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\LocationController;
use App\Http\Controllers\API\VendorController;
use App\Models\Category;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:api');
Route::get('/blogs', [BlogController::class, 'index']);
Route::get('/blogs/{id}', [BlogController::class, 'show']);
Route::get('/blog/{slug}', [BlogController::class, 'getBlogBySlug']);

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/category/{slug}', [CategoryController::class, 'show']);

Route::get('/locations', [LocationController::class, 'index']);
Route::get('/location/{slug}', [LocationController::class, 'show']);

Route::get('/bookings', [BookingController::class, 'index']);
Route::get('/booking/{id}', [BookingController::class, 'show']);

Route::get('/vendors', [VendorController::class, 'index']);
Route::get('/vendor/{slug}', [VendorController::class, 'show']);
Route::get('/{slug}', [VendorController::class, 'byCategory']);



Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/login', [AuthController::class, 'login']);

Route::group(['middleware' => 'auth:api'], function () {

    Route::post('/auth/logout', [AuthController::class, 'logout']);
    Route::get('/auth/refresh-token', [AuthController::class, 'refreshToken']);
    Route::get('/profile', [AuthController::class, 'profile']);

    Route::post('/blogs', [BlogController::class, 'store']);
    //Route::get('/blogs', [BlogController::class, 'index']);
    // Route::get('/blogs/{id}', [BlogController::class, 'show']);
    // Route::put('/blogs/{id}', [BlogController::class, 'update']);
    // Route::delete('/blogs/{id}', [BlogController::class, 'destroy']);
    // Route::get('/blogs/{id}/edit', [BlogController::class, 'edit']);
    // Route::get('/list-blogs', [BlogController::class, 'listBlogs']);
    Route::get('/blog-details/{blog_id}', [BlogController::class, 'getSingleBlog']);
});
