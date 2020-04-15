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

Route::get('/', 'IndexController@showIndex');

Route::get('/inscription', function () {
    return view('inscription');
});

Route::post('/inscription',function(){

    $utilisateur = new App\Utilisateur;
    $utilisateur->nom = request('nom');
    $utilisateur->prenom = request('prenom');
    $utilisateur->email = request('email');
    $utilisateur->password = request('password');

    $utilisateur->save();

    return "Nous avons recu votre email qui est " .request('email');
   
});


// Route::get('/', function () {
//     return view('index');
// });

