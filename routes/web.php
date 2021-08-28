<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\compteController;
use App\Http\Controllers\connexionController;
use App\Http\Controllers\subscribesController;
use Illuminate\Support\Facades\Route;
use Prophecy\Call\CallCenter;

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

Route::view('/','welcome');

Route::get('/inscription','AccueilController@accueil');

Route::post('/inscription','AccueilController@traitement');

Route::get('/subscribes','subscribesController@liste');

Route::get('/connexion','connexionController@accueil');

Route::post('/connexion','connexionController@traitement');

Route::get('/compte','compteController@accueil')->middleware('App\Http\Middleware\verification');


Route::get('/Deconnexion','compteController@Deconnexion');

Route::post('/mot_passe','compteController@mot_passe');

Route::post('/messages','messagesController@nouveau')->middleware('App\Http\Middleware\verification');


Route::get('/{email}','subscribesController@voir');
