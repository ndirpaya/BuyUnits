<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/register2', function(){
//    return view('auth.register2');
//});

Auth::routes();

//route::get('register2', 'HomeController@register2');

Route::get('admin_login', 'AdminAuth\LoginController@showLoginForm');
Route::post('admin_login', 'AdminAuth\LoginController@login');
Route::post('admin_logout', 'AdminAuth\LoginController@logout');
Route::post('admin_password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail');
Route::get('admin_password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm');
Route::post('admin_password/reset', 'AdminAuth\ResetPasswordController@reset');
Route::get('admin_password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
/**OPEN ADMIN REGISTRATION NOT NEEDED FOR THIS APPLICATION**/
//Route::get('admin_register', 'AdminAuth\RegisterController@showRegistrationForm');
//Route::post('admin_register', 'AdminAuth\RegisterController@register');


Route::get('/home', 'HomeController@index');
//Route::get('/admin_home', 'AdminHomeController@index');


Route::group(['middleware' => ['auth']], function(){
    Route::get('/my-profile/{id}', 'UserProfileController@showDetails');
    Route::patch('/my-profile/{id}', 'UserProfileController@updateDetails');
    Route::resource('transactions', 'UserTransactionsController');
});

//Route::group(['prefix' => 'auth'], function(){

    Route::group(['middleware' => ['admin']], function(){
        Route::get('/admin/dashboard', 'Admin\AdminHomeController@index');
        Route::resource('/admin/customers', 'Admin\CustomersController');
        Route::resource('/admin/users', 'Admin\AdminUsersController');
        Route::resource('/admin/transactions', 'Admin\TransactionsController');
    });

//});