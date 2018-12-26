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

# Les articles
Route::get('/', 'PostController@index')->name('posts');

Route::group(['prefix' => 'posts'], function () {
    Route::get('/create', 'PostController@create')->name('posts.create');
    Route::post('', 'PostController@store')->name('posts.store');
    Route::get('{post}', 'PostController@show')->name('posts.show');
    Route::post('{post}/comments', 'PostController@addComment')->name('posts.addcomment');
});

Route::group(['prefix' => 'tutorials'], function () {
    Route::get('', 'TutorialController@index')->name('tutorials.index');
    Route::get('create', 'TutorialController@create')->name('tutorials.create');
    Route::post('', 'TutorialController@store')->name('tutorials.store');
    Route::get('{tutorial}', 'TutorialController@show')->name('tutorials.show');
    Route::post('{tutorial}/comments', 'TutorialController@addComment')->name('tutorials.addcomment');

});
/**
 # Les profils
 Route::get('/', 'ProfileController@index');
 Route::get('profile/{user}', 'ProfileController@show');
*/
