<?php
/**
 * Created by PhpStorm.
 * User: Ernie
 * Date: 17/9/15
 * Time: 3:43 PM
 */

//GET


Route::get('/auth', 'AuthController@get');
Route::get('/auth/logout', 'AuthController@logout');
Route::get('/getAccount_T', 'AdminController@listAccountTypes');
Route::get('/listAgencies', 'AdminController@listAgencies');
Route::get('/agency/list', 'AgencyController@listing');
//POST
Route::post('/auth/login', 'AuthController@login');
Route::post('/account/validate/{name}', 'AdminController@accValidate');
Route::post('/agency/create', 'AgencyController@create');
//Route::post('/account/create', 'AdminController@createAcc');

Route::resource('account' ,'AccountController');