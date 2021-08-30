<?php

use App\Models\Rol;
use Illuminate\Support\Facades\Auth;
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

Route::get('contact', function(){
    return view('contact');
})->name('contact');

Route::post('contact', 'App\Http\Controllers\MessagesController@store');

//--- Listado de todos los usuarios ---//
Route::get('users', 'App\Http\Controllers\UsersController@index')->name('users');
//--- Listado y almacenado de un usuario ---//
Route::get('users/new', 'App\Http\Controllers\UsersController@new')->name('users.new');
Route::post('users/newUser', 'App\Http\Controllers\UsersController@newUser')->name('users.newUser');
//--- Listar un solo usuario ---//
Route::get('users/{us}', 'App\Http\Controllers\UsersController@getUser')->name('users.getUser');
//--- Listado y actualizar un usuario ---//
Route::get('users/edit/{us}', 'App\Http\Controllers\UsersController@edit')->name('users.edit');
Route::put('users/{user}', 'App\Http\Controllers\UsersController@update')->name('users.update');
//--- Eliminar un usuario ---//
Route::delete('users/{user}', 'App\Http\Controllers\UsersController@destroy')->name('users.destroy');

Auth::routes();

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');

//--- Listado de todos los roles ---//
Route::get('roles', function(){
    return Rol::with('user')->get();
})->name('roles');


Route::get('register', 'App\Http\Controllers\UsersController@register')->name('register');
//Route::post('registerUser', 'App\Http\Controllers\UsersController@newUser')->name('registerUser');
