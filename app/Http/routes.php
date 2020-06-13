<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::auth();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index');

Route::get('pagenotfound',['as'=>'notfound', 'uses'=>'HomeController@pagenotfound']);

Route::get('/admissions', ['as' => 'admit', 'uses' => 'AdmissionController@index'] );

Route::get('/admissions/view/{id}',['as'=>'admithistory','uses'=> 'AdmissionController@view' ]);

Route::post('/transtype/view/{id}','AdmissionController@admit');

Route::get('/admissions/create/{id}','AdmissionController@create');

Route::post('/admissions/create/{id}','AdmissionController@store');

Route::get('/admissions/search','PatientController@search');

Route::get('/admissions/view/print/{id}','PdfController@index');

Route::get('/admissions/select/{id}','AdmissionController@selectForm');

Route::get('/IM/{id}','InterMedController@index');

Route::get('/IM/admittinghistory/{id}','InterMedController@admittingHistory');

Route::post('/IM/admittinghistory/{id}','InterMedController@storeAdmit');

Route::post('/progStore', ['as' => 'store.note', 'uses' => 'ProgressnotesController@store']);

Route::put('/progUpdate/{id}',['as' => 'update.note', 'uses' =>'ProgressnotesController@update']);
