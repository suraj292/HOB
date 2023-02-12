<?php

use App\Http\Controllers\Api\AddressController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\UserVerificationController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\SubCategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
// user
Route::apiResource('/user', UserController::class)->only(['store', 'update']);
Route::post('login', [AuthController::class, 'login']);
// user verification
Route::post('/user/verification/{id}/email', [UserVerificationController::class, 'email']);
Route::post('/user/verification/{id}/mobile', [UserVerificationController::class, 'mobile']);
Route::get('/user/verification/{id}/', [UserVerificationController::class, 'verification']);
// user address
Route::apiResource('/address', AddressController::class);
Route::get('/user_address', [AddressController::class, 'userAddress']);
// Product Category
Route::apiResource('/category', CategoryController::class);
// Product Sub Category
Route::apiResource('/sub-category', SubCategoryController::class);
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

