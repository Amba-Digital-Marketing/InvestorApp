<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InvestorController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\InvestmentController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/investors', [App\Http\Controllers\InvestorController::class, 'index'])->name('investors');
//Route::get('/company', [App\Http\Controllers\CompanyController::class, 'index'])->name('company');
//Route::get('/investment', [App\Http\Controllers\InvestorController::class, 'index'])->name('investment');


Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
    Route::resource('company', CompanyController::class);
    Route::resource('investments', InvestmentController::class);
    Route::resource('investors', InvestorController::class);
});
