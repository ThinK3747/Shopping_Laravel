<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;
use PhpParser\Builder\ClassConst;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Admin\DashboardController;

//route Frontend
Route::get('/', [HomeController::class,'index'])->name('index');

Route::get('/product', [HomeController::class,'showProduct'])->name('showProduct');
Route::get('/detail/{slug}', [HomeController::class,'detail'])->name('product.detail');

Route::get('/login', [UserController::class,'login'])->name('login');
Route::post('/login', [UserController::class,'postLogin']);

Route::get('/register', [UserController::class,'register'])->name('register');
Route::post('/register', [UserController::class,'postRegister']);
Route::get('/logout', [UserController::class,'logout'])->name('logout');

Route::post('/add-cart', [CartController::class,'add'])->name('cart.add');
Route::get('/cart', [CartController::class,'index'])->name('cart.index');



//admin
Route::get('/login-admin', [AdminController::class,'loginAdmin'])->name('loginAdmin');
Route::post('/login-admin', [AdminController::class,'postLoginAdmin'])->name('admin.login');
Route::get('/sign-out', [AdminController::class,'signOut'])->name('admin.signout');

Route::prefix('/admin')->middleware('admin')->group(function () {
    Route::get('/home',[DashboardController::class,'index'])->name('admin.index');

    Route::get('/categories-index',[CategoryController::class,'index'])->name('categories.index');
    Route::get('/categories-create',[CategoryController::class,'create'])->name('categories.create');
    Route::post('/categories-store',[CategoryController::class,'store'])->name('categories.store');
    Route::get('/categories-edit/{id}',[CategoryController::class,'edit'])->name('categories.edit');
    Route::post('/categories-update/{id}',[CategoryController::class,'update'])->name('categories.update');
    Route::get('/categories-delete/{id}',[CategoryController::class,'delete'])->name('categories.delete');

    Route::resource('product',ProductController::class);
    Route::get('/product',[ProductController::class,'index'])->name('product.index');
    Route::get('/product/create',[ProductController::class,'create'])->name('product.create');
    Route::post('/product',[ProductController::class,'store'])->name('product.store');

    Route::get('/product/{id}',[ProductController::class,'show'])->name('product.show');

    Route::get('/product/{id}/edit',[ProductController::class,'edit'])->name('product.edit');
    Route::put('/product/{id}',[ProductController::class,'update'])->name('product.update');

    Route::delete('/product/{id}',[ProductController::class,'destroy'])->name('product.destroy');
    Route::get('/product-trash',[ProductController::class,'trash'])->name('product.trash');
});

/*

Route::prefix('categories')->group(function (){
    Route::get('/',[
        'as'=> 'categories.index',
        'uses'=> 'App\Http\Controllers\CategoryController@index'

    ]);
    Route::get('/create',[
        'as'=> 'categories.create',
        //'uses'=> 'CategoryController@create'
        'uses'=> 'App\Http\Controllers\CategoryController@create'

    ]);
    Route::get('/categories.index',[CategoryController::class,'index'])->name('categories.index');

    Route::get('/categories.create',[CategoryController::class,'create'])->name('categories.create');

    Route::post('/store',[CategoryController::class,'store'])->name('categories.store');
    Route::get('/edit/{id}',[CategoryController::class,'edit'])->name('categories.edit');
    Route::post('/update/{id}',[CategoryController::class,'update'])->name('categories.update');
    Route::get('/delete/{id}',[CategoryController::class,'delete'])->name('categories.delete');
});*/
