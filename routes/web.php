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

Route::group(['prefix' => '/', 'namespace' => 'Frontend'], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/about', function () {
        return view('frontend.pages.about');
    });
    Route::get('/contact', function () {
        return view('frontend.pages.contact');
    });
    Route::get('category/{slug}', 'CategoryController@show')->name('category.show');
    Route::get('category/type/{type}', 'CategoryController@type')->name('category.type');
});

Route::group(['namespace' => 'Backend'], function () {
    Auth::routes();
    Route::group(['prefix' => 'backend', 'as' => 'backend.', 'middleware' => ['auth']], function () {
        Route::get('/', 'HomeController@index')->name('home.index');
        Route::post('summernote/image', 'HomeController@summernoteImage')->name('summernote.image');
        Route::resource('user', 'UserController');
        Route::resource('category', 'CategoryController', [
            'except' => ['index', 'create', 'show']
        ]);
        Route::get('category/type/{type}', 'CategoryController@type')->name('category.type');
        Route::resource('post', 'PostController');
        Route::resource('slide', 'SlideController');
        Route::resource('menu', 'MenuController', [
            'except' => ['show', 'create']
        ]);
        Route::POST('menu/serialize', 'MenuController@serialize')->name('menu.serialize');
    });
});
