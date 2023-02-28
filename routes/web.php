<?php

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
//Route::group(['prefix'=>'/admin', 'as' => 'admin.'], function (){
//    Route::view('/', 'admin.login')->name('login');
//    Route::view('/home', 'admin.Pages.index')->name('home');
//    Route::view('/category', 'admin.Pages.Category')->name('category');
//    return view('admin.index');
//});
Route::get('/admin/{any?}', function (){
   return view('admin.index');
});
Route::get('/{any}', function () {
    return view('welcome');
})->where("any", ".*");
