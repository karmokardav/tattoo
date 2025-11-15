<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [UserController::class, 'index'])->name('home');


Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register_action', [AuthController::class, 'register_action'])->name('register_action');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login_action', [AuthController::class, 'login_action'])->name('login_action');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');






// Route::middleware('auth')->group(function () {
//     Route::resource('/users', UserController::class);
// });



Route::get("/gallery", function () {
    return view("gallery.gallery");
});
Route::get("/blog", function () {
    return view("blog.blog");
});
Route::get("/dashboard", function () {
    return view("dashboard.dashboard");
});
Route::get("/contact", function () {
    return view("contact.contact");
});
Route::get("/about", function () {
    return view("about.about");
});
