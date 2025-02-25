<?php

use App\Http\Controllers\API\Auth\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RolePermissionController;
use App\Http\Controllers\API\BlogController;
use App\Http\Controllers\API\BookingController;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\LocationController;
use App\Http\Controllers\API\VendorController;
use App\Http\Controllers\API\TestimonialController;
use App\Http\Controllers\API\ReviewController;
use App\Http\Controllers\API\ServiceController;
use App\Models\Testimonial;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:api');
//AUTH
Route::post('/auth/register', [AuthController::class, 'register'])->name('api.register');
Route::post('/auth/login', [AuthController::class, 'login'])->name('api.login');
//Blogs
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blogs/{id}', [BlogController::class, 'show'])->name('blogs.show');
Route::get('/blog/{slug}', [BlogController::class, 'getBlogBySlug'])->name('blogs.slug');
//Categories
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('categories.show');
//Locations
Route::get('/locations', [LocationController::class, 'index'])->name('locations.index');
Route::get('/location/{slug}', [LocationController::class, 'show'])->name('locations.show');

//Vendors
Route::get('/vendors', [VendorController::class, 'index'])->name('vendors.index');
Route::get('/vendor/{slug}', [VendorController::class, 'show'])->name('vendors.show');
Route::get('/vendor/category/{category}', [VendorController::class, 'byCategory'])->name('vendors.byCategory');
Route::get('/vendor/location/{location}', [VendorController::class, 'byLocation'])->name('vendors.byLocation');
// Route::get('/{slug}', [VendorController::class, 'byCategory'])->name('vendors.slug');
Route::get('/search', [VendorController::class, 'search'])->name('vendors.search');

//Bookings
Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');
Route::get('/booking/{id}', [BookingController::class, 'show'])->name('bookings.show');
//Testimonials
Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonials.index');
Route::get('/testimonilas/{id}', [TestimonialController::class, 'show'])->name('tesimonials.show');
//Reviews
Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews.index');
Route::get('/reviews/{id}', [ReviewController::class, 'show'])->name('reviews.show');
//Services
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{id}', [ServiceController::class, 'show'])->name('services.how');



Route::group(['middleware' => 'auth:api'], function () {

    Route::post('/auth/logout', [AuthController::class, 'logout'])->name('api.logout');
    Route::get('/auth/refresh-token', [AuthController::class, 'refreshToken'])->name('users.refresh-token');
    Route::get('/profile', [AuthController::class, 'profile'])->name('users.profile');

    Route::get('/roles', [RolePermissionController::class, 'roles'])->middleware('role:administrator, admin');
    Route::get('/permissions', [RolePermissionController::class, 'permissions'])->middleware('role:administrator, admin');

    Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');
    Route::put('/blogs/{id}', [BlogController::class, 'update'])->name('blogs.update');
    Route::delete('/blogs/{id}', [BlogController::class, 'destroy'])->name('blogs.destroy')->middleware('role:administrator, admin');
    Route::get('/blogs/{id}/edit', [BlogController::class, 'edit'])->name('blogs.edit')->middleware('role:administator, admin');
    // Route::get('/list-blogs', [BlogController::class, 'listBlogs']);
    Route::get('/blog-details/{blog_id}', [BlogController::class, 'getSingleBlog']);

    Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');
});
