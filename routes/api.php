<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongsController;
use App\Http\Controllers\Songs2Controller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/canciones', [Songs2Controller::class, 'mostrarSong']);
Route::get('/verCancion/{id}', [Songs2Controller::class, 'consumoApi']);
Route::get('/verLetra', [Songs2Controller::class, 'consumoLetra']);


