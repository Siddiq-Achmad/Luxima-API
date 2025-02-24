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
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blogs/{id}', [BlogController::class, 'show'])->name('blogs.show');
Route::get('/blog/{slug}', [BlogController::class, 'getBlogBySlug'])->name('blogs.slug');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('categories.show');

Route::get('/locations', [LocationController::class, 'index'])->name('locations.index');
Route::get('/location/{slug}', [LocationController::class, 'show'])->name('locations.show');

Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');
Route::get('/booking/{id}', [BookingController::class, 'show'])->name('bookings.show');

Route::get('/vendors', [VendorController::class, 'index'])->name('vendors.index');
Route::get('/vendor/{slug}', [VendorController::class, 'show'])->name('vendors.show');
Route::get('/vendor/category/{category}', [VendorController::class, 'byCategory'])->name('vendors.byCategory');
Route::get('/vendor/location/{location}', [VendorController::class, 'byLocation'])->name('vendors.byLocation');
// Route::get('/{slug}', [VendorController::class, 'byCategory'])->name('vendors.slug');
Route::get('/search', [VendorController::class, 'search'])->name('vendors.search');


Route::post('/auth/register', [AuthController::class, 'register'])->name('api.register');
Route::post('/auth/login', [AuthController::class, 'login'])->name('api.login');

Route::group(['middleware' => 'auth:api'], function () {

    Route::post('/auth/logout', [AuthController::class, 'logout'])->name('api.logout');
    Route::get('/auth/refresh-token', [AuthController::class, 'refreshToken'])->name('users.refresh-token');
    Route::get('/profile', [AuthController::class, 'profile'])->name('users.profile');

    Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');
    Route::put('/blogs/{id}', [BlogController::class, 'update'])->name('blogs.update');
    Route::delete('/blogs/{id}', [BlogController::class, 'destroy'])->name('blogs.destroy');
    Route::get('/blogs/{id}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
    // Route::get('/list-blogs', [BlogController::class, 'listBlogs']);
    Route::get('/blog-details/{blog_id}', [BlogController::class, 'getSingleBlog']);
});
