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

Route::prefix('admin')
    ->namespace('Admin')
    ->group(function(){

     /**
     * Routes Details Plans
     */
    Route::post('plans/{url}/details','DetailPlanController@index')->name('details.plan.index');
    Route::get('plans/{url}/details','DetailPlanController@index')->name('details.plan.index');

    /**
     * Routes Plans
     */
        Route::get('plans/create','PlanController@create')->name('plans.create');
        Route::put('plans/{url}','PlanController@update')->name('plans.update');
        Route::get('plans/{url}/edit','PlanController@edit')->name('plans.edit');
        Route::any('plans/search','PlanController@search')->name('plans.search');
        Route::delete('plans/{url}','PlanController@delete')->name('plans.delete');
        Route::get('plans/{url}','PlanController@show')->name('plans.show');
        Route::post('plans','PlanController@store')->name('plans.store');
        Route::get('plans','PlanController@index')->name('plans.index');

        /**
         * Home DashBoard
         */
        Route::get('/','PlanController@index')->name('admin.index');
});





Route::get('/', function () {
    return view('welcome');
});
