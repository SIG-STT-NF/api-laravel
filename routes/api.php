<?php

use App\Http\Controllers\Api\AgriculturalController;
use App\Http\Controllers\Api\DistrictController;
use App\Http\Controllers\Api\ProvinceController;
use App\Http\Controllers\Api\RegencyController;
use App\Http\Controllers\Api\StatisticController;
use App\Http\Controllers\Api\VillageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/provinces', ProvinceController::class);
Route::apiResource('/regencies', RegencyController::class);
Route::apiResource('/districts', DistrictController::class);
Route::apiResource('/villages', VillageController::class);

Route::apiResource('/statistics', StatisticController::class);
Route::apiResource('/agriculturals', AgriculturalController::class);