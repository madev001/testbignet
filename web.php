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
    return view('index');
});

Route::get('/apropos', function () {
    return view('show');
});

Route::get('/acceuil', function () {
    return view('home');
});

Route::get('/test', function () {
    return view('acceuil');
});

Route::get('/devis', function () {
    return view('devis');
});

Route::get('/contacter', function () {
    return view('contacter');
});

Route::get('/contacter' , 'SendEmailController@index');
Route::post('/contacter' , 'SendEmailController@send');


Route::post('/contacter' , 'SendEmailController@send');


Route::get('/devis' , 'devisController@index');
Route::post('/devis' , 'devisController@send');


Route::get('/fin_de_chantier', function () {
    return view('/services/finChantier');
});

Route::get('/arrangement_chantier', function () {
    return view('/services/ac');
});
Route::get('/avant_chape', function () {
    return view('/services/nac');

});
Route::get('/escalier', function () {
    return view('/services/ne');
});

Route::get('/maison_appart', function () {
    return view('/services/nma');
});

Route::get('/vitres', function () {
    return view('/services/nv');
});

Route::get('/services', function () {
    return view('/services');
});