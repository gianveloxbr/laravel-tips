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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'Form'], function(){
/**
 * Verbo GET
*/
Route::get('usuarios','TestController@ListAllUsers')->name('users.listAll');
//Parametro
Route::get('usuarios/novo','TestController@FormAddUser')->name('users.formAddUser');
Route::get('usuarios/editar/{user}','TestController@FormEditUser')->name('users.formEditUser');
Route::get('usuarios/{user}','TestController@ListUser')->name('users.list');
/**
 * Verbo POST
*/
Route::post('usuarios/store', 'TestController@storeUser')->name('users.store');
/**
 * Verbo PUT/PATCH
*/
Route::patch('usuarios/edit/{user}', 'TestController@edit')->name('users.edit');
/**
 * Verbo DELETE
*/
Route::delete('usuarios/destroy/{user}', 'TestController@destroy')->name('user.destroy');
});
//Route::verb('uri', 'Controller@method')->name('route_name');
