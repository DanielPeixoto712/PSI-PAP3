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

Auth::routes();


Route::get('/index', function () {
    return view('index');
});

//HOME
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//INDEX
Route::post('index','App\Http\Controllers\IndexController@index')->name('index')->middleware('auth');




//produto
Route::get('/produtos', 'App\Http\Controllers\ProdutosController@index')->name('produtos.index')->middleware('auth');
Route::get('/produtos/{id}/show', 'App\Http\Controllers\ProdutosController@show')->name('produtos.show')->middleware('auth');
Route::get('/produtos/create', 'App\Http\Controllers\ProdutosController@create')->name('produtos.create')->middleware('auth');
Route::post('/produtos', 'App\Http\Controllers\ProdutosController@store')->name('produtos.store')->middleware('auth');
Route::get('/produtos/{id}/showMarca', 'App\Http\Controllers\ProdutosController@showMarca')->name('produtos.showMarca')->middleware('auth');

Route::get('/produtos/edit/{id}', 'App\Http\Controllers\ProdutosController@edit')->name('produtos.edit')->middleware('auth');
Route::patch('/produtos', 'App\Http\Controllers\ProdutosController@update')->name('produtos.update')->middleware('auth');
Route::get('/produtos/delete', 'App\Http\Controllers\ProdutosController@delete')->name('produtos.delete')->middleware('auth');
Route::delete('/produtos', 'App\Http\Controllers\ProdutosController@destroy')->name('produtos.destroy')->middleware('auth');

//Categorias
Route::get('/categorias', 'App\Http\Controllers\CategoriasController@index')->name('categorias.index')->middleware('auth');
Route::get('/categorias/{id}/show', 'App\Http\Controllers\CategoriasController@show')->name('categorias.show')->middleware('auth');

//Sobre
Route::get('/sobre', 'App\Http\Controllers\SobreController@index')->name('sobre')->middleware('auth');

//Admin
Route::get('/admins', 'App\Http\Controllers\AdminsController@index')->name('admins.index')->middleware('auth');
