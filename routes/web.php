<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('welcome');
});

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
        Route::get('/dashboard', function () {
            return view('layouts.master');
        })->middleware(['auth', 'verified'])->name('dashboard');

        Route::get('/admin_dashboard', function () {
            return view('layouts.admin');
        })->middleware(['auth:admin','verified'])->name('admin_dashboard');

        Route::get('/superAdmin_dashboard', function () {
            return view('layouts.super_admin');
        })->middleware(['auth:super_admin','verified'])->name('superAdmin_dashboard');

        /// categories
             Route::resource('categories', CategorieController::class);

                    /// products
            Route::resource('products', ProductController::class);

                   /// invoices
            Route::resource('invoices',InvoiceController::class);
            Route::get('/product/{id}' , [InvoiceController::class,'getProduct']);

        require __DIR__.'/auth.php';
    });







Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


