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

// Auth Routes
Auth::routes();

// Basic Routes
Route::get('/', function(){
    return redirect('home');
});

Route::get('welcome', function(){
    return view('welcome');
});

Route::get('home', 'HomeController@index');

// 注册路由正则表达式 
Route::pattern('redirect', '^((?!(api|admin|welcome|login|logout|home|docs)).)*$');

// Protected Routes
Route::group(['middleware' => 'auth'], function () {
    Route::get('users','UserController@getUserList');
    Route::get('/{redirect}', function(){
        return redirect('home');
    });
});

// Mobile Routes
Route::group(['prefix' => 'm', 'namespace' => 'Mobile'], function () {

    // Mobile App
    Route::get('/', 'MobileController@getIndex');

    Route::get('/app', 'MobileController@getApp');

    // Protected Routes
    Route::group(['middleware' => 'auth'], function () {

        Route::get('users', 'UserController@getUserList');

        Route::get('users/{id}', 'UserController@getUserDetail');

    });

});

// Console Routes
Route::group(['prefix' => 'console', 'middleware' => 'auth', 'namespace' => 'Console'], function () {

    Route::get('/', 'ConsoleController@getConsoleHome');
    Route::get('oauth', 'ConsoleController@getOauth');
    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

    Route::group(['prefix' => 'users'], function () {
        Route::get('/', 'UserController@getUserList');
    });

});

// Image Routes
// @WARNING: The 'image' prefix is reserved for SomelineImageService
Route::group(['prefix' => 'image'], function () {

    Route::post('/', 'ImageController@postImage');

    Route::get('/{name}', 'ImageController@showOriginalImage');

});

// Locale Routes
// @WARNING: The 'locales' prefix is reserved for SomelineLocaleController
Route::group(['prefix' => 'locales'], function () {

    Route::get('/{locale}.js', '\Someline\Support\Controllers\LocaleController@getLocaleJs');

    Route::get('/switch/{locale}', '\Someline\Support\Controllers\LocaleController@getSwitchLocale');

});
