<?php

use Illuminate\Support\Facades\Route;
use Fijey\Kalkulator\Calculator;

use \App\Http\Controllers\ConvertBinerController;
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


Route::get('/testing', function () {
 
    $array = [2, 89, 99, 150, 89, 64, 39];
    echo implode(' + ', $array) . ' = ' . Calculator::sum($array) . '<br>';
 
    
});

Route::get('/convert', [ConvertBinerController::class, 'index']);
Route::post('/convert', [ConvertBinerController::class, 'store']);