<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\AdminController;


Route::get('/', [homecontroller::class, 'home']);
Route::get('/dashboard', [homecontroller::class, 'login_home'])->middleware(['auth', 'verified'])->name('dashboard');;
Route::get('/myorders', [homecontroller::class, 'myorders'])->middleware(['auth', 'verified']);




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
Route::get('admin/dashboard', [homecontroller::class, 'index'])->middleware(['auth', 'admin']);
Route::get('view_category', [AdminController::class, 'view_category'])->middleware(['auth', 'admin']);
Route::post('add_category', [AdminController::class, 'add_category'])->middleware(['auth', 'admin']);
Route::get('delete_category/{id}', [AdminController::class, 'delete_category'])->middleware(['auth', 'admin']);
Route::get('edit_category/{id}', [AdminController::class, 'edit_category'])->middleware(['auth', 'admin']);
Route::post('update_category/{id}', [AdminController::class, 'update_category'])->middleware(['auth', 'admin']);
Route::get('add_product', [AdminController::class, 'add_product'])->middleware(['auth', 'admin']);
Route::post('upload_product', [AdminController::class, 'upload_product'])->middleware(['auth', 'admin']);
Route::get('view_product', [AdminController::class, 'view_product'])->middleware(['auth', 'admin']);
Route::get('delete_product/{id}', [AdminController::class, 'delete_product'])->middleware(['auth', 'admin']);
Route::get('update_product/{slug}', [AdminController::class, 'update_product'])->middleware(['auth', 'admin']);
Route::post('edit_product/{id}', [AdminController::class, 'edit_product'])->middleware(['auth', 'admin']);
Route::get('search', [AdminController::class, 'search'])->middleware(['auth', 'admin']);
Route::get('product_details/{id}', [homecontroller::class, 'product_details']);
Route::get('add_cart/{id}', [homecontroller::class, 'add_cart'])->middleware(['auth', 'verified']);
Route::get('mycart', [homecontroller::class, 'mycart'])->middleware(['auth', 'verified']);
Route::get('remove_product/{id}', [homecontroller::class, 'remove_product'])->middleware(['auth', 'verified']);
Route::post('confirm_order', [homecontroller::class, 'confirm_order'])->middleware(['auth', 'verified']);
Route::get('view_orders', [AdminController::class, 'view_orders'])->middleware(['auth', 'admin']);
Route::get('on_the_way/{id}', [AdminController::class, 'on_the_way'])->middleware(['auth', 'admin']);
Route::get('delivered/{id}', [AdminController::class, 'delivered'])->middleware(['auth', 'admin']);
Route::get('print_pdf/{id}', [AdminController::class, 'print_pdf'])->middleware(['auth', 'admin']);

Route::controller(HomeController::class)->group(function () {
    Route::get('stripe/{value}', 'stripe');
    Route::post('stripe', 'stripePost')->name('stripe.post');
});
Route::get('shop', [homecontroller::class, 'shop']);
Route::get('why', [homecontroller::class, 'why']);
Route::get('testimonial', [homecontroller::class, 'testimonial']);
Route::get('contact', [homecontroller::class, 'contact']);
