<?php

use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/countriescities', function (Request $request) {
//     return $request->user();
// });
Route::get('/country', 'ApiCountryController@all')->name('country.all');
Route::post('/country', 'ApiCountryController@store')->name('country.store');
Route::get('/country/{id}', 'ApiCountryController@show')->name('country.show');

