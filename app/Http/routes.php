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

Route::post('/admissions/view/{id}','AdmissionController@admit');

Route::get('/admissions/create/{id}','AdmissionController@create');

Route::post('/admissions/create/{id}','AdmissionController@store');

Route::get('/admissions/search','PatientController@search');

Route::get('/admissions/view/print/{id}','PdfController@index');

Route::get('/admissions/select/{id}','AdmissionController@selectForm');

