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
//pages
Route::get('/','PagesController@index');
Route::get('/our_services','PagesController@our_services');
Route::get('/careers','PagesController@careers');
Route::get('/contacts','PagesController@contacts');

//footer pages
Route::get('/events','PagesController@contacts');
Route::get('/teams','PagesController@teams');
Route::get('/mentors','PagesController@mentorss');
Route::get('/gallery','PagesController@gallery');
Route::get('/collections','PagesController@collections');
Route::get('/company','PagesController@company');
Route::get('/terms_and_condtions','PagesController@terms_and_conditions');



//resource - search controller
Route::resource('searches','SearchController');
// resource - company information controller
Route::resource('company_schedules','CompanyController');
// resource - message
Route::resource('messages','MessagesController');
// resource - contents
Route::resource('contents','ContentsController');

// resource - customer list
Route::resource('customers','CustomerController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
