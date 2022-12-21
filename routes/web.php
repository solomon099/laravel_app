<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Routing\RouteGroup;
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

// Route::get('/dashboard', function () {
//     // return view('welcome');
//     return view('back-end.dashboard');
// });

Route::prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'login'])->name('login');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // category
        Route::resource('category', CategoryController::class);
    // product    
        Route::resource('product', ProductController::class);

});



