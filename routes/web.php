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
Route::get('/calc', function () {
    return view('calc');
});
/*Route::get('/hello',function()
{
echo "hello world";
});*/

Route::get('/hello/{name}','helloController@index');

Route::get('/polikk/1',function()
{
echo "polikk thankal!";
});
Route::get('/hello/{name1}/{name}','helloController@index2');