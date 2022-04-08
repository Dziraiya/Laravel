<?php

use App\Http\Controllers\Account\AccountController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\TablesController as AdminTablesController;
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
//->name('global-home');
Route::get('/about', [MainController::class, 'about'])
     ->name('about');
Route::get('/review', [MainController::class, 'review'])
     ->name('review');
Route::post('/review/check', [MainController::class, 'reviewCheck']);

Route::get('/logout', function () {
    Auth::logout();

    return redirect()->route('login');
})->name('logout2');

Route::group(['middleware' => 'auth'], function () {
    //USER AUTH ROUTE
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/account', AccountController::class)->name('account');

    //ADMIN ROUTE
    Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
        Route::resource('/categories', AdminCategoryController::class);
        Route::resource('/news', AdminNewsController::class);
        Route::resource('/tables', AdminTablesController::class);
        Route::resource('/', AdminDashboardController::class);
    });

    Route::get('/news/create', [AdminNewsController::class, 'create']);
});

//ALL USERS
Route::get('/news', [NewsController::class, 'index'])
     ->name('news');

Route::get('/news/show/{id}', [NewsController::class, 'show'])
     ->where('id', '\d+')
     ->name('news.show');

Auth::routes();


