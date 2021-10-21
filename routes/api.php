<?php

use App\Http\Controllers\API\terbergController;
use App\Http\Controllers\API\userController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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


Route::middleware('auth:sanctum')->post('/insert', [terbergController::class,'insert']);


Route::middleware('auth:sanctum')->get('/balance', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->get('/change_pass', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->get('/deposit', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->get('/withdraw', function (Request $request) {
    return $request->user();
});


Route::post('/login',[userController::class,'login']);


//Illuminate\Support\Facades\DB::table('cards')->insert([
//    'user_id' => 1,
//  'card_no' => '5555-6666-7777-8888',
//  'pass_code' => '1234',
//    'expire_date'=> \Carbon\Carbon::now(),
//    "is_active"=> true,
//]);
