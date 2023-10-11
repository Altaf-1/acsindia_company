<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/getUserCourse/{email}', 'AdminController\AdminResultController@getUserCourse')
    ->name('get.user.course');
    
    
Route::get('/getCourse/{course}', 'AdminController\AdminStudentAdmissionController@getCourse')
    ->name('get.course');

Route::get('/couponCheck/{coupon}', [\App\Http\Controllers\UserController::class, 'checkCoupon'])
    ->name('coupon.check');
    

Route::post('/chat-message/store',
    [\App\Http\Controllers\ChatController::class, 'store'])
    ->name('chat-message.store');