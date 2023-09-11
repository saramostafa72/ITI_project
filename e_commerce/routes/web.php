<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registeration',[UserController::class,'registeration'])->name('registeration');
Route::get('/login',[UserController::class,'login'])->name('login');

Route::post('/registerForm',[UserController::class,'registerForm'])->name('registerForm');
Route::post('/loginForm',[UserController::class,'loginForm'])->name('loginForm');

Route::get('/Homepage',[UserController::class,'userHome'])->name('userHome');

Route::get('/AdminPage',[UserController::class,'adminHome'])->name('adminHome');

Route::get('/allusers',[UserController::class,'view'])->name('user.view');
Route::delete('/user/{id}',[UserController::class,'destroy'])->name('user.destroy');

Route::get('/userProfile',[UserController::class,'profile'])->name('userProfile');

Route::delete('/userlogout/{id}',[UserController::class,'logout'])->name('user.logout');


Route::resource('/category',CategoryController::class);

Route::get('/category',[CategoryController::class,'index'])->name('category.index');
Route::get('/allcategories',[CategoryController::class,'view'])->name('category.view');
Route::get('/category/create',[CategoryController::class,'create'])->name('category.create');
Route::get('/category/{id}',[CategoryController::class,'show'])->name('category.show');
Route::get('/category/update/{id}',[CategoryController::class,'update'])->name('category.update');
Route::put('/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');
Route::delete('/category/{id}',[CategoryController::class,'destroy'])->name('category.destroy');

Route::resource('/product',ProductController::class);

Route::get('/products',[ProductController::class,'index'])->name('product.index');
Route::get('/allproducts',[ProductController::class,'view'])->name('product.view');
Route::get('/products/create',[ProductController::class,'create'])->name('product.create');
Route::get('/products/update/{id}',[ProductController::class,'update'])->name('product.update');
Route::put('/products/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
Route::post('/products/store',[ProductController::class,'store'])->name('product.store');
Route::delete('/products/{id}',[ProductController::class,'destroy'])->name('product.destroy');

Route::get('/productsOrder/{id}',[ProductController::class,'productsOrder'])->name('productsOrder');
Route::get('/search',[ProductController::class,'search'])->name('search');

Route::resource('/order',OrderController::class);

Route::get('/userOrders',[OrderController::class,'index'])->name('order.index');
Route::get('/allOrders',[OrderController::class,'view'])->name('order.view');
Route::get('/userOrdersForAdmin/{id}',[OrderController::class,'indexForAdmin'])->name('order.adminIndex');
Route::get('/adminProductsOrder/{id}',[ProductController::class,'adminProductsOrder'])->name('adminProductsOrder');
Route::post('/productsOrder',[OrderController::class,'store'])->name('order.store');


Route::resource('/cart',CartController::class);

Route::get('/cart',[CartController::class,'index'])->name('cart.index');
Route::post('/cart/store',[CartController::class,'store'])->name('cart.store');
Route::delete('/cart/{id}',[CartController::class,'destroy'])->name('cart.destroy');

