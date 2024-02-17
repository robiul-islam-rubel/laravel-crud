<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadDataController;
use App\Models\personal;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\ProductContoller;
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

Route::get('/',function(){
    return view('welcome');
});

Route::get('/product',[ProductContoller::class,'index'])->name('product.index');

Route::get('/product/create',[ProductContoller::class,'create'])->name('product.create');
Route::post('',[ProductContoller::class,'store'])->name('product.store');
Route::get('product/{product}/edit',[ProductContoller::class,'edit'])->name('product.edit');
Route::put('/product/{product}/update',[ProductContoller::class,'update'])->name('product.update');
Route::delete('/product/{product}/delete',[ProductContoller::class,'delete'])->name('product.delete');

