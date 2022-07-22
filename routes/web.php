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

Route::get('/clients', 'App\Http\Controllers\ClientController@index');
Route::get('/clients/{id}', 'App\Http\Controllers\ClientController@show');
Route::get('/clients/code/{code}', 'App\Http\Controllers\ClientController@where');