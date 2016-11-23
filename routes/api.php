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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::post('usuario', 'Usuario@store');
Route::get('usuario', 'Usuario@index');
Route::get('usuario/{id}', 'Usuario@show');
Route::get('usuario/{id}/mensagem', 'Usuario@getMensagem');
Route::get('usuario/{id}/hashtag', 'Usuario@getHashtag');

Route::post('mensagem', 'Mensagem@store');