<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Croatia;
use App\Http\Controllers\Osiguranje;

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

Route::view('/osiguranje/home', 'home');

Route::get('/osiguranje/croatia', [Osiguranje::class, 'croatia']);//->middleware('croatia');

Route::get('/osiguranje/grawe', [Osiguranje::class, 'grawe']);//->middleware('grawe');