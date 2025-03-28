<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboards', function () {
    return view('backend.index');
})->name('dashboard');


Route::get('/', function () {
    return view('frontend.home.index');
})->name('home-page');

Route::get('/detail', function () {
    return view('frontend.detail.index');
})->name('detail');

Route::get('/category', function () {
    return view('frontend.category.index');
})->name('category');

Route::get('/about', function () {
    return view('frontend.about.index');
})->name('about');

Route::get('/sign_up', function () {
    return view('frontend.sign_up.index');
})->name('sign-up');
Route::get('/sign_in', function () {
    return view('frontend.sign_in.index');
})->name('sign-in');



Route::get('/privacy_policy', function () {
    return view('frontend.privacy_policy.index');
})->name('privacy-policy');


Route::get('/contact', function () {
    return view('frontend.contact.index');
})->name('contact');


Route::get('/embed', function () {
    return view('frontend.contact.embed');
})->name('embed');


Route::get('/embed', function () {
    return view('frontend.contact.embed');
})->name('embed');

// Resource controllers (no need to manually define edit/view routes)
Route::resource('user', UserController::class);
Route::resource('role', RoleController::class);
Route::resource('genre', GenreController::class);
Route::resource('author', AuthorController::class);
Route::resource('book', BookController::class);
Route::resource('customer', CustomerController::class);
Route::post('/order/get-customer-info', [OrderController::class, 'getCustomerInfor'])->name('order.getCustomerInfor');

Route::resource('order', OrderController::class);

