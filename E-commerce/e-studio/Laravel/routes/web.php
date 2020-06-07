<?php

use App\Http\Controllers\StudioController;
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

// Route::get('/', function () {
//     return response()->json(['name' => 'Abigail', 'state' => 'CA']);
// });

Route::get('/','StudioController@index');


// ****************---studio

Route::post('/studio/create', 'StudioController@store');
Route::get('/studio', 'StudioController@index');

// ****************---user
Route::post('/create_account',"UserController@store");
Route::post('/login',"UserController@login");
Route::get('/test',"UserController@test");

Route::get('/validate_account/{token}',"UserController@validate_account");
