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

/**home */
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'IndexController@showIndex')->middleware('verified');
Route::get('/', function () {return view('layout');});
Auth::routes(['verify' => true]);


/**user */
Route::get('/edit/user', 'UserController@edit')->name('user.edit');
Route::post('/edit/user', 'UserController@update')->name('user.update');


/**Annonce */
Route::get('posts/posts', function () {return view('posts');});
Route::get('/annonce', 'AnnonceController@create')->name('annonce.create');
Route::post('/annonce/create','AnnonceController@store')->name('annonce.store');
Route::get('/show', 'AnnonceController@show');
Route::post('/posts/update/{id}', 'AnnonceController@update')->name('update');
Route::get('/posts/edit/{id}', 'AnnonceController@edit')->name('edit');
Route::get('/posts/show', 'AnnonceController@show')->name('show');


/* search */
Route::get('/search' ,'AnnonceController@search')->name('annonce.search');


/* Message */

Route::get('/message/{seller_id}/{ad_id}', 'MessageController@create')->name('message.create');























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