<?php
#app/routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('home', [DashboardController::class, 'index'])->name('home');
Route::group(['middleware' => ['admin']], function () {
   Route::get('product', [DashboardController::class, 'products'])->name('product.index');
});
