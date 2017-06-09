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

Route::get('/test', function () {
    return view('test');
});

Route::get('/test2', 'TestController@getBrand');

Route::get('/test1', 'TestController@getView');

Route::get('/tasks', 'TestController@getTasks');

Route::post('/addTask', 'TestController@addTask');

Route::get('/deleteTask/{id}', 'TestController@deleteTask');

Route::post('/editTask/{id}', 'TestController@editTask');

Route::get('/doneTask/{id}', 'TestController@doneTask');
