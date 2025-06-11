<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CategoryController;


// Route for signup and login
Route::get('/', [AuthController::class, 'Rindex'])->name('signup');
Route::post('/signupstore', [AuthController::class, 'store'])->name('signup.store');
Route::get('/login', [AuthController::class, 'Lindex'])->name('login');
Route::post('/loginstore', [AuthController::class, 'Auth'])->name('login.store');
// Route for Role selection
Route::get('/addrole', [AuthController::class, 'role'])->name('role');
Route::post('/rolestore', [AuthController::class, 'rolestore'])->name('role.store');
// Route for Dashboard
Route::get('/customerhome', [HomeController::class, 'Chome'])->name('User.home');
Route::get('/adminhome', [AdminController::class, 'Ahome'])->name('Admin.home');

// Route for Product
Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/productlist', [ProductController::class, 'productlist'])->name('product.list');
Route::post('/productstore', [ProductController::class, 'productstore'])->name('product.store');
Route::post('/Productdelete', [ProductController::class, 'destroy'])->name('products.destroy');
Route::post('/ProductEdit', [ProductController::class, 'edit'])->name('products.edit');
Route::post('/ProductUpdate', [ProductController::class, 'update'])->name('products.update');

Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::post('/categorystore', [CategoryController::class, 'categorystore'])->name('category.store');

//customer side product listing by catogory
Route::get('/category/{category_id}/products', [ProductController::class, 'ShowCategory'])->name('category.products.show');

