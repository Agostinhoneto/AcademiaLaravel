<?php

use App\Http\Controllers\TreinosController;
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

Route::controller(TreinosController::class)->group(function () {
    Route::post('logout', 'logout')->name('auth_logout');
    Route::post('refresh', 'refresh')->name('refresh');
    Route::post('register', 'register')->middleware('AdminMiddleware');
    Route::get('get_user', 'get_user')->name('refresh');
    Route::get('index','index')->name('index.auth');
    Route::get('show/{id}','show')->name('show.auth');
    Route::put('update/{id}','update')->name('update.auth');
    Route::delete('destroy/{id}','destroy')->name('destroy.auth');
});
