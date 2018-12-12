<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// con esto basicamente estamos rutiando a este metodo Api\CategoriaController@listar con esta ruta categoria/listar
Route::get("categoria/listar","Api\CategoriaController@listar");
