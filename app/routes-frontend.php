<?php


//routes
$route_padding = '/';
Route::get($route_padding, 'HomeController@showWelcome');
Route::get($route_padding . 'login', array('before' => '', 'uses' => 'FrontendController@login_masterView'));
//protected
//Route::group(array('before' => 'auth.required'), function()
//{
//    Route::get('/admin', array('before' => '', 'uses' => 'FrontendController@dashboard_masterView'));
//});
Route::get($route_padding . 'admin', array('before' => '', 'uses' => 'FrontendController@dashboard_masterView'));
Route::get($route_padding . 'reports', array('before' => '', 'uses' => 'FrontendController@dashboard_masterView'));


//Route::get($route_padding . 'admin/dashboard', array('before' => 'auth.required', 'uses' => 'FrontendController@view'));
