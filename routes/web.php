<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\DummyController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\SidebarController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\DashboardController;

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

Auth::routes();
Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('/', [DashboardController::class, 'index']);

Route::middleware('auth')->group(function(){
    Route::resource('katalog', KatalogController::class);
    Route::resource('test', DummyController::class);
    Route::resource('client', ClientController::class);
    Route::resource('brand', BrandController::class);
    Route::resource('slider', SliderController::class);
    Route::get('welcome', [SidebarController::class, 'index']);
});



