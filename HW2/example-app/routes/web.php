<?php

use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here   is where you can register  web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MainController::class, 'home']);
Route::get('/about', [MainController::class, 'about']);
Route::get('/review', [MainController::class, 'review'])
     ->name('review');
Route::post('/review/check', [MainController::class, 'reviewCheck']);

//ADMIN ROUTE
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::resource('/categories', AdminCategoryController::class);
    Route::resource('/news', AdminNewsController::class);
});

Route::get('/news', [NewsController::class, 'index'])
     ->name('news');

Route::get('/news/base/show/{id}', [NewsController::class, 'show'])
     ->where('id', '\d+')
     ->name('news.show');

