<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [UserController::class, 'home'])->name('home');

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
