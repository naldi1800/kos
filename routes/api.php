<?php

use App\Http\Controllers\HouseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/boarding-house-all', [HouseController::class, 'getAllAPI']);
