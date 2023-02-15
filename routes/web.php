<?php

use App\Exports\OrderExport;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/trang-chu', function () {
    return view('homes');
});
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin'])->name('postlogin');



Route::prefix('/')->middleware(['auth', 'preventBackHistory'])->group(function () {
Route::get('/home', [HomeController::class,'index'])->name('home');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// category=====================
Route::get('/user/{id}', [CategoryController::class, 'edit'])->name('category_edit');
Route::put('/user/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::put('/softdeletes/{id}', [CategoryController::class, 'softdeletes'])->name('category.softdeletes');
Route::get('category/trash', [CategoryController::class, 'trash'])->name('category.trash');
Route::put('category/restoredelete/{id}', [CategoryController::class, 'restoredelete'])->name('category.restoredelete');
Route::get('category/destroy/{id}', [CategoryController::class, 'destroy'])->name('category_destroy');
Route::get('/viewtrash', [CategoryController::class, 'viewtrash'])->name('viewtrash');
// products================
Route::get('/product-index', [ProductController::class, 'index'])->name('product.index');
Route::get('/product-create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product-store', [ProductController::class, 'store'])->name('product.store');
Route::put('/product/{id}', [ProductController::class, 'update'])->name('product.update');
Route::get('/product/trash', [ProductController::class, 'trash'])->name('product.trash');
Route::put('product/softdeletes/{id}', [ProductController::class, 'softdeletes'])->name('product.softdeletes');
Route::put('product/restoredelete/{id}', [ProductController::class, 'restoredelete'])->name('product.restoredelete');
Route::get('product/destroy/{id}', [ProductController::class, 'destroy'])->name('product_destroy');
Route::get('/product/{id}', [ProductController::class, 'edit'])->name('product.edit');

// search======================
Route::get('/search-category', [CategoryController::class, 'search'])->name('category.search');
Route::get('/search-product', [ProductController::class, 'search'])->name('product.search');




//shop

Route::prefix('shop')->group(function () {
    Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
    Route::get('/showProduct/{id}', [ShopController::class, 'show'])->name('shop.showProduct');
    Route::get('/store/{id}', [ShopController::class, 'store'])->name('shop.store');
    Route::get('/cart', [ShopController::class, 'Cart'])->name('cart.index');
    Route::delete('/remove-from-cart/{id}', [ShopController::class, 'remove'])->name('remove.from.cart');
    Route::get('/checkOuts', [ShopController::class, 'checkOuts'])->name('checkOuts');
    Route::post('/login', [ShopController::class, 'checklogin'])->name('shop.checklogin');
    Route::get('/register', [ShopController::class, 'register'])->name('shop.register');
    Route::get('/login-index', [ShopController::class, 'indexlogin'])->name('login.index');
    Route::post('/checkregister', [ShopController::class, 'checkregister'])->name('shop.checkregister');
    Route::post('/shoplogout', [ShopController::class, 'logout'])->name('shoplogout');
    Route::post('/order', [ShopController::class, 'order'])->name('order');
});

Route::prefix('order')->group(function () {
    Route::get('/', [OrderController::class, 'index'])->name('order.index');
    Route::get('/detail/{id}', [OrderController::class, 'detail'])->name('order.detail');
});
Route::get('/xuat', [OrderExport::class, 'exportOrder'])->name('xuat');

//Chức vụ
Route::group(['prefix' => 'groups'], function () {
    Route::get('/', [GroupController::class, 'index'])->name('group.index');
    Route::get('/create', [GroupController::class, 'create'])->name('group.create');
    Route::post('/store', [GroupController::class, 'store'])->name('group.store');

    Route::get('/edit/{id}', [GroupController::class, 'edit'])->name('group.edit');
    Route::put('/update/{id}', [GroupController::class, 'update'])->name('group.update');
    Route::delete('destroy/{id}', [GroupController::class, 'destroy'])->name('group.destroy');
    // trao quyền
    Route::get('/detail/{id}', [GroupController::class, 'detail'])->name('group.detail');
    Route::put('/group_detail/{id}', [GroupController::class, 'group_detail'])->name('group.group_detail');
   });
   Route::group(['prefix' => 'users'], function () {
    Route::get('/', [UserController::class, 'index'])->name('user.index');
    Route::get('/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/store', [UserController::class, 'store'])->name('user.store');
    Route::get('/show/{id}', [UserController::class, 'show'])->name('user.show');
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::delete('destroy/{id}', [UserController::class, 'destroy'])->name('user.destroy');
    Route::get('/editpass/{id}', [UserController::class, 'editpass'])->name('user.editpass');
    Route::put('/updatepass/{id}', [UserController::class, 'updatepass'])->name('user.updatepass');
    Route::get('/adminpass/{id}', [UserController::class, 'adminpass'])->name('user.adminpass');
    Route::put('/adminUpdatePass/{id}', [UserController::class, 'adminUpdatePass'])->name('user.adminUpdatePass');
});
});
