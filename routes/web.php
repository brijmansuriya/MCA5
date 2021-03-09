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
Route::get('/', 'IndexController@index');
Auth::routes();
Route::get('/home','HomeController@index')->name('home');
// Route::get('/Project-List','ProjectListController@index')->name('home');
// Route::get('/Taskboard','TaskboardController@index')->name('home');
Route::get('/Team-Member','TeamMemberController@index')->name('home');
Route::get('/projecttodo','projecttodoController@index')->name('projecttodo');
// {{ route('projecttodo') }}
// Route::group(['prefix' => 'Client'], function () {
//     Route::get('/', 'ClientController@index');
//     Route::get('/add', 'ClientController@add');
// });
Route::group(['prefix' => 'ProjectList'], function () {
    Route::get('/', 'ProjectListController@index');
    Route::get('/add', 'ProjectListController@add');
    Route::post('/create','ProjectListController@insert');
    Route::get('/addmodule/{id}','ProjectListController@addmodule');
    
});
Route::group(['prefix' => 'Taskboard'], function () {
    Route::get('/', 'TaskboardController@index');
    Route::get('/add', 'TaskboardController@add');
    Route::post('/create','TaskboardController@insert');
    Route::get('/addmodule/{id}','TaskboardController@addmodule');
    Route::get('/addtask','TaskboardController@addtask');
});