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

Route::get('/', 'IndexController@showIndex')->middleware('verified');
Route::get('/inscription', function () {
    return view('inscription');
});
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/edit/user', 'UserController@edit')->name('user.edit');
Route::post('/edit/user', 'UserController@update')->name('user.update');




// Route::post('/inscription',function(){

//     $utilisateurs = new App\Utilisateur;
//     $utilisateurs->nom = request('nom');
//     $utilisateurs->prenom = request('prenom');
//     $utilisateurs->email = request('email');
//     $utilisateurs->email_verified_at = request('email_verified_at');
//     $utilisateurs->password = request('password');

//     $utilisateurs->save();

//     // return "Nous avons recu votre email qui est " .request('email');
   
// });
// Route::get('/', function () {
//     return view('index');
// });