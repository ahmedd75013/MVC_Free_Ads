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
Auth::routes(['verify' => true]);
Route::get('posts/posts', function () {return view('posts');});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/edit', 'UserController@edit')->name('user.edit');
Route::post('/user/edit', 'UserController@update')->name('user.update');
Route::get('/annonce', 'AnnonceController@create')->name('annonce.create');
Route::post('/annonce/create','AnnonceController@store')->name('annonce.store');
Route::get('/', function () {return view('layout');});






// Route::get('/posts','PostsController@index');

// Route::post('/inscription',function(){

//     $utilisateurs = new App\Utilisateur;
//     $utilisateurs->nom = request('nom');
//     $utilisateurs->prenom = request('prenom');
//     $utilisateurs->email = request('email');
//     $utilisateurs->email_verified_at = request('email_verified_at');
//     $utilisateurs->password = request('password');

//     $utilisateurs->save();

//     // return "Nous avons recu votre email qui est " .request('email');
// Route::get('/inscription', function () {
//     return view('inscription');
// });
   
// });