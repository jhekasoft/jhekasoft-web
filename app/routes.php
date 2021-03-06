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

Route::get('/', function()
{
	return View::make('hello');
});

Route::controller('markup', 'MarkupController');
//Route::get('markup', ['uses' => 'MarkupController@index']);
//Route::get('markup/admin', ['uses' => 'MarkupController@admin']);

Route::resource('roles', 'RolesController');

Route::resource('cities', 'CitiesController');

Route::resource('companies', 'CompaniesController');

Route::resource('tags', 'TagsController');

Route::resource('offers', 'OffersController');

Route::resource('comments', 'CommentsController');

Route::resource('posts', 'PostsController');
