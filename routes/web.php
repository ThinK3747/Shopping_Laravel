<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;
use PhpParser\Builder\ClassConst;
use App\Http\Controllers\Admin\AdminController;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/',[AdminController::class,'loginAdmin'])->name('loginAdmin');
Route::prefix('/admin')->group(function () {
    Route::get('/', [AdminController::class,'loginAdmin'])->name('admin.loginAdmin');
    Route::get('/home', function () {     return view('admin.home');    });
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
    Route::get('/product/{id}',[ProductController::class,'update'])->name('product.update');
    Route::delete('/product/{id}',[ProductController::class,'destroy'])->name('product.destroy');
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
