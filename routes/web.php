<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

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
// Route::get('/', 'App\Http\Controllers\ClientController@index')->name('index');
// Route::get('/test', function() {
//     $clients = [
//         ['name'=> 'Client 11', 'code' => '11'],
//         ['name'=> 'Client 22', 'code' => '22'],
//         ['name'=> 'Client 33', 'code' => '33'],
//         ['name'=> 'Client 44', 'code' => '44']
//     ];
//     return view('test', [
//         'clients' => $clients
//     ]);
// });


// Route::get('/login', function() {
//     $clients = [
//         ['name'=> 'Client 11', 'code' => '11'],
//     ];
//     return view('test', [
//         'clients' => $clients
//     ]);
// })->name('login');

// Route::get('/register', function() {
//     $clients = [
//         ['name'=> 'Client 11', 'code' => '11'],
//     ];
//     return view('test', [
//         'clients' => $clients
//     ]);
// })->name('register');

Route::get('/', function() { return view('welcome'); });
Route::get('/clients', 'App\Http\Controllers\ClientController@index')->name('clients.index')->middleware('auth');
Route::post('/clients', 'App\Http\Controllers\ClientController@store')->name('clients.store')->middleware('auth');
Route::get('/clients/{id}', 'App\Http\Controllers\ClientController@show')->name('clients.show')->middleware('auth');
Route::get('/clients-create', 'App\Http\Controllers\ClientController@create')->name('clients.create')->middleware('auth');
Route::delete('/clients/{id}', 'App\Http\Controllers\ClientController@destroy')->name('clients.destroy')->middleware('auth');

Route::get('/clients/code/{code}', 'App\Http\Controllers\ClientController@where')->middleware('auth');

Route::get('/metadata', 'App\Http\Controllers\ClientController@metadata')->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


