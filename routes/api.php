<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\DatasetController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/mobilelogin', [LoginController::class, 'MobileLogin']);

// Sensor Data API
Route::get('/dataset', [DatasetController::class, 'dataset']);
Route::get('/getdataset', [DatasetController::class, 'getdataset']);




Route::get('/test', [TestController::class, 'create']);