<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Models\Book;
use App\Models\Customer;
use App\Models\Genre;
use App\Models\Order;
use Illuminate\Support\Facades\Route;


Route::get('/dashboards', function () {
    $customerCount = Customer::count();
    $bookCount = Book::count();
    $booksInStock = Book::where('stock_quantity', '>', 0)->get();
    $totalGenres = Genre::count();
    $totalOrders = Order::count();
    $totalOrderPrice = Order::sum('total_amount');
    return view('backend.index', compact('customerCount', 'bookCount', 'booksInStock', 'totalGenres','totalOrders', 'totalOrderPrice'));
})->name('dashboard');

Route::get('/book/in-stock', function () {
    $booksInStock = Book::where('stock_quantity', '>', 0)->get(); // Get books with stock > 0
    return view('backend.book.in_stock', compact('booksInStock')); // Ensure this path is correct
})->name('book.in-stock');
// Define the route for viewing the book details

// Route::get('/dashboard', function () {
//     $totalGenres = Genre::count(); // Count all genres in the genres table
//     return view('dashboard', compact('totalGenres'));
// });

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
Route::resource('payments', PaymentController::class);
Route::post('/order/get-customer-info', [OrderController::class, 'getCustomerInfor'])->name('order.getCustomerInfor');
// In routes/web.php
Route::delete('order/{order}/item/{item}', [OrderController::class, 'deleteItem'])->name('order.deleteItem');

Route::resource('order', OrderController::class);
