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

Route::post('login', 'AuthController@login')->middleware('cors') ;
Route::get('unauthorize', 'AuthController@unauthorize');
Route::group(['middleware' => 'auth:api'], function () {
    Route::post('register', 'AuthController@register') ;
    Route::post('vehicules/exitVehicle', 'VehiculeController@exitVehicle') ;
    Route::post('vehicules/changeVehicleRegistration', 'VehiculeController@changeVehicleRegistration') ;
    Route::get('vehicules/immatriculation/{immat}', 'VehiculeController@getVehicleByImmat') ;
    Route::get('sinistres/document/{path}', 'SinistreController@downloadFile') ;
    Route::post('sinistres/document', 'SinistreController@saveSinistreDocument') ;
    Route::apiResource('categories','CategorieController');
    Route::apiResource('garanties','GarantieController');
    Route::apiResource('usages','UsageController');
    Route::apiResource('vehicules','VehiculeController');
    Route::apiResource('sinistres','SinistreController');
    Route::apiResource('persons','PersonController');
    Route::apiResource('circonstances','CirconstanceController');
    Route::apiResource('connexes','ConnexeController');
    Route::apiResource('countries','CountryController');
    Route::apiResource('bodies','BodyController');
    Route::apiResource('societes','SocieteController');
    Route::apiResource('services','ServiceController');
    Route::apiResource('dommages','DommageController');
    Route::apiResource('dommagesline','DommageLineController');
    Route::apiResource('natures','NatureController');
    Route::apiResource('vehiculecategorie','VehiculeCategorieController');
    Route::apiResource('personnes','PersonneController');
});
