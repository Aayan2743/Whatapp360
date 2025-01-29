<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;


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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware'=>'api'],function($routes){
    Route::post('/sendOtp',[CustomerController::class,'sendOtp']);
    Route::post('/verifyOtp',[CustomerController::class,'verifyOtp']);
    // Route::post('/login',[ApiUserController::class,'login']);
 

});

Route::group(['middleware'=>'jwt.verify'],function($routes){
    Route::get('/profile',[CustomerController::class,'profile']);
 Route::post('/refresh',[ApiUserController::class,'refresh']);
 Route::post('/logout',[ApiUserController::class,'logout']);


});


