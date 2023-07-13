<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::resource('/employees',  EmployeesController::class);

    // Only managers can access this route
    Route::get('/managers', [EmployeesController::class, 'managers'])->middleware('isManager');

    // Only supervisors can access this route
    Route::get('/supervisors', [EmployeesController::class, 'supervisors'])->middleware('isSupervisor');

    // Only clerks can access this route
    Route::get('/clerks', [EmployeesController::class, 'clerks'])->middleware('isClerk');
});


