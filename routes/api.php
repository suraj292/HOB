<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\UserVerificationController;

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
// Public
Route::apiResource('/user', UserController::class)->only(['store', 'update']);
Route::post('/user/verification/{id}/email', [UserVerificationController::class, 'email']);
Route::post('/user/verification/{id}/mobile', [UserVerificationController::class, 'mobile']);
Route::get('/user/verification/{id}/', [UserVerificationController::class, 'verification']);
// User
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/userdata', function () {
        return 'UserStore Dashboard';
    });
});

// Admin
Route::middleware(['auth:sanctum', 'role:admin'])->group(function () {
    Route::get('/admin', function () {
        return 'Admin Dashboard';
    });
});

