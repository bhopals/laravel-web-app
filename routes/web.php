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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', function() {
    $clients = [
        ['name'=> 'Client 11', 'code' => '11'],
        ['name'=> 'Client 22', 'code' => '22'],
        ['name'=> 'Client 33', 'code' => '33'],
        ['name'=> 'Client 44', 'code' => '44']
    ];
    return view('test', [
        'clients' => $clients
    ]);
});


Route::get('/login', function() {
    $clients = [
        ['name'=> 'Client 11', 'code' => '11'],
    ];
    return view('test', [
        'clients' => $clients
    ]);
})->name('login');

Route::get('/register', function() {
    $clients = [
        ['name'=> 'Client 11', 'code' => '11'],
    ];
    return view('test', [
        'clients' => $clients
    ]);
})->name('register');

Route::get('/clients', 'App\Http\Controllers\ClientController@index')->name('clients.index');
Route::post('/clients', 'App\Http\Controllers\ClientController@store')->name('clients.store');
// Route::get('/clients/{id}', 'App\Http\Controllers\ClientController@show')->name('clients.show');
Route::get('/clients/create', 'App\Http\Controllers\ClientController@create')->name('clients.create');;
Route::delete('/clients/{id}', 'App\Http\Controllers\ClientController@destroy')->name('clients.destroy');;

Route::get('/clients/code/{code}', 'App\Http\Controllers\ClientController@where');


// Route::get('/pizzas', 'PizzaController@index')->name('pizzas.index')->middleware('auth');
// Route::get('/pizzas/create', 'PizzaController@create')->name('pizzas.create');
// Route::post('/pizzas', 'PizzaController@store')->name('pizzas.store');
// Route::get('/pizzas/{id}', 'PizzaController@show')->name('pizzas.show')->middleware('auth');
// Route::delete('/pizzas/{id}', 'pizzaController@destroy')->name('pizzas.destroy')->middleware('auth');

// Auth::routes([
//   'register' => false,
// ]);

// Route::get('/home', 'HomeController@index')->name('home');