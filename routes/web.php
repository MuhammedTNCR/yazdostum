<?php

use App\Mail\Mail;
use App\Story;

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

//Route::get('/', function () { return view('welcome'); });
Route::get('/','StoriesController@welcome');
//Route:resource(['stories'=>'StoriesController','series'=>'SeriesController']);

//Route::get('autocomplete', 'StoriesController@autocomplete')->name('autocomplete');

Route::get('/stories','StoriesController@index');
Route::get('/stories/create','StoriesController@create');
Route::get('/stories/{story}','StoriesController@show');
Route::post('/stories','StoriesController@store');
Route::get('/stories/{story}/edit','StoriesController@edit');
Route::patch('/stories/{story}','StoriesController@update');
Route::delete('/stories/{story}','StoriesController@destroy');

//Route::get('/stories/search','StoriesController@search');

Route::get('/mystories','MyStoriesController@index');

Route::get('/series','SeriesController@index');
Route::get('/series/create','SeriesController@create');
Route::get('/series/{serie}','SeriesController@show');
Route::post('/series','SeriesController@store');
Route::get('/series/{serie}/edit','SeriesController@edit');
Route::patch('/series/{serie}','SeriesController@update');
Route::delete('/series/{serie}','SeriesController@destroy');

Route::get('/myseries','MySeriesController@index');


Route::post('/series/{serie}/stories','SerieStoriesController@store');

Route::any('/search','StoriesController@search');




Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/comment/store', 'CommentController@store')->name('comment.add');
Route::post('/reply/store', 'CommentController@replyStore')->name('reply.add');

Route::get('profile','UserController@profile');
Route::post('profile', 'UserController@update_avatar');

//Route::get('searchindex','SearchController@search');

//Route::get('mail','MailController@mail');


