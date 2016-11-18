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
    return view('index');
})->name('main');


Route::get('/author', [
    'uses' => 'AppController@getAuthorPage',
    'as' => 'author',
    'middleware' => 'roles',
    'roles' => ['Admin', 'Author']
]);

Route::get('/author/generate-article', [
    'uses' => 'AppController@getGenerateArticle',
    'as' => 'author.article',
    'middleware' => 'roles',
    'roles' => ['Author']
]);


Route::get('/admin', [
    'uses' => 'AppController@getAdminPage',
    'as' => 'admin',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);

Route::post('/admin/assign-roles', [
    'uses' => 'AppController@postAdminAssignRoles',
    'as' => 'admin.assign',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);

Route::get('/signup', [
    'uses' => 'AuthController@getSignUpPage',
    'as' => 'signup'
]);

Route::post('/signup', [
    'uses' => 'AuthController@postSignUp',
    'as' => 'signup'
]);

Route::get('/signin', [
    'uses' => 'AuthController@getSignInPage',
    'as' => 'signin'
]);

Route::post('/signin', [
    'uses' => 'AuthController@postSignIn',
    'as' => 'signin'
]);

Route::get('/logout', [
    'uses' => 'AuthController@getLogout',
    'as' => 'logout'
]);

// 5.3 內建 auth  ，需要遺忘密碼的功能，所以加入這部份。
Auth::routes();
Route::get('/home', function () {
    return view('index');
})->name('main');
