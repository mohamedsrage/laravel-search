<?php

use App\Http\Controllers\VisitorController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Route::any('/ecommerce', [App\Http\Controllers\ecommerceController::class, 'index'])->name('ecommerce.index');
Route::any('/ecommerce/list', [App\Http\Controllers\ecommerceController::class, 'index_list'])->name('ecommerce.index_list');
Route::get('/ecommerce/create', [App\Http\Controllers\ecommerceController::class, 'create'])->name('ecommerce.create');
Route::post('/ecommerce/create', [App\Http\Controllers\ecommerceController::class, 'store'])->name('ecommerce.store');
Route::get('/ecommerce/{id}/edit', [App\Http\Controllers\ecommerceController::class, 'edit'])->name('ecommerce.edit');
Route::patch('/ecommerce/{id}/edit', [App\Http\Controllers\ecommerceController::class, 'update'])->name('ecommerce.update');
Route::delete('/ecommerce/{id}', [App\Http\Controllers\ecommerceController::class, 'destroy'])->name('ecommerce.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
