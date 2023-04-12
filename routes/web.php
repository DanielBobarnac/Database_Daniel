<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PubblicController;

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

Route::get('/', [PubblicController::class , 'homepage'])->name('homepage');

Route::get('/product/create' , [ProductController::class , 'create'])->name('product.create');
Route::post('/product/store' , [ProductController::class , 'store'])->name('product.store');
Route::get('product/brand/{brand}', [ProductController::class , 'getProductsByBrand'])->name('product.brand');
Route::get('/article/create' , [ArticleController::class , 'articleCreate'])->name('article.create');
Route::post('article/store' , [ArticleController::class , 'articleStore'])->name('article.store');
Route::get('/article' , [ArticleController::class ,'article'])->name('article.home');
Route::get('/article/detail/{id}' , [ArticleController::class , 'detail'])->name('article.detail');
Route::get('article/update/{article}' , [ArticleController::class , 'update'])->name('article.update');