<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [UserController::class, 'index'])->name('home');


Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register_action', [AuthController::class, 'register_action'])->name('register_action');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login_action', [AuthController::class, 'login_action'])->name('login_action');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');


    Route::resource('galleries', GalleryController::class)->only([
        'index',
        'store',
        'update',
        'destroy'
    ]);
    Route::get('/galleries/list', [GalleryController::class, 'list'])->name('galleries.list');
    Route::get('/galleries/form', [GalleryController::class, 'form'])->name('galleries.form');

    Route::resource('blogs', BlogController::class)->only([
        'index',
        'store',
        'update',
        'destroy'
    ]);
    Route::get('/blogs/list', [BlogController::class, 'list'])->name('blogs.list');
    Route::get('/blogs/form', [BlogController::class, 'form'])->name('blogs.form');

});



Route::get('galleries', [GalleryController::class, 'index'])->name('galleries.index');
Route::post('/gallery/view/{gallery}', [GalleryController::class, 'view']);
Route::post('/gallery/like/{gallery}', [GalleryController::class, 'like']);

Route::get("/blogs", [BlogController::class, 'index'])->name('blogs.index');
Route::post("/blog/view/{blog}", [BlogController::class, 'view']);




Route::get("/dashboard", function () {
    return view("dashboard.dashboard");
});
Route::get("/contact", function () {
    return view("contact.contact");
});
Route::get("/about", function () {
    return view("about.about");
});
