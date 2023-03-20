<?php

use App\Http\Controllers\Api\AddressController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\UserVerificationController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\SubCategoryController;
use App\Http\Controllers\Api\ProductDetailController;
use App\Http\Controllers\Api\ProductImageController;
use App\Http\Controllers\Api\CouponController;
use App\Http\Controllers\Api\SlugController;
use App\Http\Controllers\Api\CartController;
use App\Http\Controllers\Api\iThinkLogisticsController;
use App\Http\Controllers\Api\RazorpayController;
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
Route::post('/login', [AuthController::class, 'login']);
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
Route::get('category-subCategory/{id}', [SubCategoryController::class, 'subCategoryWhere']);
// Product Detail
Route::apiResource('/product-detail', ProductDetailController::class);
Route::get('product/{id}', [ProductDetailController::class, 'productWithImage']);
// Product Image
Route::apiResource('/product-image', ProductImageController::class);
// Get Product and Images with Category or SubCategory
Route::get('/productSubCategory', [ProductImageController::class, 'getProductWithSubCategory']);
// Coupon
Route::apiResource('/coupon', CouponController::class);
// Cart
Route::apiResource('/cart', CartController::class);
// Slug url
Route::apiResource('/slug', SlugController::class);
// User
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/userdata', function () {
        return 'UserStore Dashboard';
    });
});
// Logistics
Route::group(['prefix' => 'logistics'], function () {
    Route::post('/state', [iThinkLogisticsController::class, 'getState']);
    Route::post('/city/{id}', [iThinkLogisticsController::class, 'getCity']);
    Route::post('/pincode/{pincode}', [iThinkLogisticsController::class, 'getPincode']);
});

// Razorpay Payment Gateway
Route::post('/razorpay', [RazorpayController::class, 'getOrder']);
Route::get('/success', [RazorpayController::class, 'success']);

// Admin
Route::middleware(['auth:sanctum', 'role:admin'])->group(function () {
    Route::get('/admin', function () {
        return 'Admin Dashboard';
    });
});

