<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
  add role based authorization to the routes
*/



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
