<?php

use App\Faltas;
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

 Route::prefix('api')->group(function(){
     
     Route::get('','Listagem@index');
     Route::get('/faltas','Listagem@faltas');
     Route::get('/apostilas','Listagem@apostilas');
    
     Route::get('sobre/{mensagem}','Listagem@getSobre');
 });
