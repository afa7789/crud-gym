<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/listadmins', 'AdminController@listAdmins');

<<<<<<< HEAD
Route::get('/teste', 'AdminController@Teste');

Route::post('/printa','AdminController@printatela');

Route::get('/','AdminController@index');
Route::post('/addadmin','AdminController@insert');
=======
Route::post('/coisinha','AdminController@insert');
>>>>>>> 82e194a84e5970e2ad5d7ca32d45224bc7800fd4
