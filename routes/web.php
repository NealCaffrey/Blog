<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ArticlesController;

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

Route::get('/', [IndexController::class, 'home'])->name('home');

Route::get('category/{category}', [CategoriesController::class, 'show'])->name('category.show');
Route::get('article/{article}', [ArticlesController::class, 'show'])->name('article.show');
Route::get('search/{keyword}', [ArticlesController::class, 'search'])->name('article.search');
Route::get('tag/{tag}', [ArticlesController::class, 'tag'])->name('article.tag');
Route::patch('/article/{article}', [ArticlesController::class, 'star']);

Route::post('uploadImage', [IndexController::class, 'uploadImage'])->name('uploadImage');
