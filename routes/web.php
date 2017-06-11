<?php

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('test', 'PrakerinController@percobaan' ); 
// Route::get('coba', 'PrakerinController@coba' );
// Route::get('cobi', 'PrakerinController@cobi' ); 
// Route::get('cobu', 'PrakerinController@cobu' );
// Route::get('cobe', 'PrakerinController@cobe' ); 
// Route::get('cobo', 'PrakerinController@cobo' ); 
// Route::get('halaman/{id}', 'PrakerinController@param' );
// Route::get('/{id}', 'PrakerinController@parameter' );
// Route::get('test1', 'CobaController@test' );
// Route::get('testt/{id}', 'CobaController@test2' );
Route::get('tes', 'CobaController@indexx' );
Route::get('coba5', 'CobaController@percobaan5' );
Route::get('namas', 'CobaController@namasiswa' );
Route::get('/{test}', 'CobaController@data' );