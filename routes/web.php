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


    /* Rota principal que inicializa o sistema.. */
Route::get('/','NoticiasController@index');

    /*Rota para criar um form para uma nova notícia .. */
Route::get('/nova', 'NoticiasController@create');

    /* Rota para salvar notícia na BD */
Route::post('/salvar', 'NoticiasController@store');

    /* Rota para a área de gestão */
Route::get('gerir_noticias', 'NoticiasController@apresentargestaoTabelas');


/* Visibilidade e invisibilidade dos icones */
Route::get('tornarVisivel/{id}', 'NoticiasController@tornarVisivel');
Route::get('tornarInvisivel/{id}', 'NoticiasController@tornarInvisivel');

/* Apagar notícia */

Route::get('apagar/{id}', 'NoticiasController@destroy');

/* Editar | Atualizar */
Route::get('editar/{id}', 'NoticiasController@edit');
Route::post('atualizar/{id}', 'NoticiasController@update');
