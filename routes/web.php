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
//Rota do login
Route::middleware ('guest')->group(function() {
Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@login')->name('login.login');
});
Route::get('logout', 'LoginController@logout')->name('login.logout');

//Ddaqui para baixo somente usuário autenticado
Route::middleware ('auth')->group(function() {
route::get('dashboard', 'DashboardController@index')->name('dashboard.index');

//Customers
Route::resource('customers', 'CustomerController');

//Rota de Usuários= User
Route::resource('users', 'UserController')->middleware('is-admin');

Route::get('/produtos', 'ProdutoController@index')->name('produtos.index');
Route::get('/produtos/create', 'ProdutoController@create')->name('produtos.create');
Route::get('/lista', 'ProdutoController@lista');
Route::get('/produtos/{id}/edit', 'ProdutoController@edit')->name('produtos.edit');


Route::post('/produtos', 'ProdutoController@store')->name('produtos.store');

Route::put('/produtos/{id}', 'ProdutoController@update')->name('produtos.update');

Route::delete('/produtos/{id}', 'ProdutoController@destroy')->name('produtos.destroy');
});