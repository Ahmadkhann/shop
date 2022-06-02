<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\shopController;
use App\Http\Controllers\frontend\ProductDetailController;


use App\Http\Controllers\backend\DashboardHomeController;
use App\Http\Controllers\backend\AddProductController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Front End

// About Home page
Route::get('/', [HomeController::class, 'index'])->name('home');

// About Route
Route::get('about', [AboutController::class, 'index'])->name('about-us');

// Contact Us Route
Route::get('contact', [ContactController::class, 'index'])->name('contact');

//Shop Controller
Route::get('shop', [shopController::class, 'index'])->name('shop');

// product detail page
Route::get('product-detail', [ProductDetailController::class, 'index'])->name('product-detail');


// BackEnd

Route::get('dashboard', [DashboardHomeController::class, 'index'])->name('dashboard-home');
Route::get('addproduct', [AddProductController::class, 'index'])->name('add-product');