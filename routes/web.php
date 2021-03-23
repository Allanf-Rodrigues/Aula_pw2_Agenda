<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoaController;



Route::get('/', function () {
    return view('welcome');
});

Route::resource('pessoa', 'PessoaController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('pessoa', 'PessoaController');
Route::get('pessoa/delete/{id}','PessoaController@destroy');