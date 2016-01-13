<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showLogin');
Route::get('login', array('uses' => 'HomeController@showLogin'));
Route::post('login', array('uses' => 'HomeController@doLogin'));
Route::get('logout', array('uses' => 'HomeController@doLogout'));
Route::get('register', array('uses' => 'HomeController@showRegistration'));
Route::post('register', array('uses' => 'HomeController@doRegistration'));
//Route::get('forgotpassword', 'HomeController@getEmail');
//Route::post('forgotpassword', 'HomeController@postEmail');
Route::controller('password', 'RemindersController');
Route::get('forgotpassword', 'RemindersController@getRemind');
Route::post('forgotpassword', 'RemindersController@postRemind');

Route::group(array('before' => 'auth'), function ()
{
   Route::get('dashboard', array('uses' => 'DashBoardController@showDashboard'));   
   Route::get('profile', array('uses' => 'DashBoardController@showProfile'));
   Route::get('schoolcontacts', array('uses' => 'DashBoardController@showSchoolContacts'));
   Route::get('forms', array('uses' => 'DashBoardController@showForms'));
   
   Route::post('profile', array('uses' => 'DashBoardController@updateProfile'));
   Route::post('schoolcontacts', array('uses' => 'DashBoardController@gotodashboard'));
   Route::post('forms', array('uses' => 'DashBoardController@filltheform'));
   
   Route::get('forms/fillform', array('uses' => 'FormController@showForm'));
});
