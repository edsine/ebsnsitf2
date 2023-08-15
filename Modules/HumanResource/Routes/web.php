<?php

use Illuminate\Support\Facades\Route;

use Modules\HumanResource\Http\Controllers\Leavetypescontroller;
use Modules\HumanResource\Http\Controllers\LeaveRequestController;
use Modules\HumanResource\Http\Controllers\RankingController;

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



Route::prefix('leave_request_data')->group(function() {
    Route::get('/', 'LeaveRequestController@index');
    //Route::get('/', 'LeaveRequestController@index')->middleware('role');
    Route::get('/leave_types','LeaveTypesController@index')->name("atp");
    Route::get('/get-data/{id}','LeaveRequestController@getDuration');

});



Route::middleware(['auth'])->group(function () {
    Route::prefix('leave_request')->group(function () {
        Route::resource('leave_request', Modules\HumanResource\Http\Controllers\LeaveRequestController::class);
        Route::resource('/leave_type', Modules\HumanResource\Http\Controllers\Leavetypescontroller::class);
   
    });
    
}


);
Route::prefix('ranking')->group(function(){
    Route::get('/','RankingController@index')->name('ranking');

});

Route::middleware(['auth'])->group(function () {
    Route::prefix('ranking')->group(function () {
        Route::resource('ranking', Modules\HumanResource\Http\Controllers\RankingController::class);
         
    });
    
}

);

