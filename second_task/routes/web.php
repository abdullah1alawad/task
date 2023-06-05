<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\ProductController;
use App\Models\Owner;
use App\Models\Product;
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

Route::resource('/category',CategoryController::class);
Route::resource('/owner',OwnerController::class);
Route::resource('/product',ProductController::class);

Route::get('/', function () {
    return view('home_page');
});
//
////homePageRoutes
Route::get(
    'productHome',
    function () {
        return view('product.home');
    }

);
//Route::get(
//    'categoryHome',
//    function () {
//        return view('Category.home');
//    }
//
//);
//Route::get(
//    'ownerHome',
//    function () {
//        return view('owner.home');
//    }
//);
////categoryRoutes
//Route::get(
//    'showAllCategory',
//    [CategoryController::class, 'index']
//);
//Route::get(
//    'addCategory',
//    [CategoryController::class, 'create']
//);
//Route::post(
//    'storeCategory',
//    [CategoryController::class, 'store']
//)->name('storeCategory');
////ownerRoutes
//Route::get(
//    'showAllOwner',
//    [OwnerController::class, 'index']
//);
//Route::get(
//    'addOwner',
//    [OwnerController::class, 'create']
//);
//Route::post(
//    'storeOwner',
//    [OwnerController::class, 'store']
//)->name('storeOwner');
//
Route::get(
    'addProductToOwner/{id}',
    [OwnerController::class, 'addProduct']
);
Route::post(
    'storeProductToOwner',
    [OwnerController::class, 'storeProduct']
)->name('storeProductToOwner');
////productRoutes
//Route::get(
//    'showAllProduct',
//    [ProductController::class, 'index']
//);
//Route::get(
//    'addProduct',
//    [ProductController::class, 'create']
//);
//Route::post(
//    'storeProduct',
//    [ProductController::class, 'store']
//)->name('storeProduct');
Route::get(
    'addOwnerToProduct/{id}',
    [ProductController::class, 'addOwner']
);
Route::post(
    'storeOwnerToProduct',
    [ProductController::class, 'storeOwner']
)->name('storeOwnerToProduct');



