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

Route::get('/', function () {
    return view('welcome');
});

//using routing to direct to hospitals page
Route::get('/hospitals', function(){
    return view('hospitals');
  });

//using the Controller
//Route::get('hospitals', array('uses' => 'patients@index'));
