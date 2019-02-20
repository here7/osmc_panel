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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/manage', function () {
    return view('manage');
});


//This is post because it's arriving from a post FORM
Route::post('/manage/search', 'ManageController@formSearchByName');
Route::post('/manage/searchtype', 'ManageController@formSearchByType');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
