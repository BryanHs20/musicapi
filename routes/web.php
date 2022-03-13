<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongsController;

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

Route::get('/verVista', [SongsController::class, 'verVista'])->name('vista.genero');
Route::get('/verContenido', [SongsController::class, 'verConte'])->name('vista.conte');

Route::get('/verCancionesPop', [SongsController::class, 'verPop'])->name('vista.pop');
Route::get('/verCancionesRock', [SongsController::class, 'verRock'])->name('vista.rock');
Route::get('/verCancionesReggaeton', [SongsController::class, 'verReggaeton'])->name('vista.reggaeton');
Route::get('/verCancionesBanda', [SongsController::class, 'verBanda'])->name('vista.banda');
Route::get('/verCancionesNorteño', [SongsController::class, 'verNorte'])->name('vista.norteño');
Route::get('/verCancionesBalada', [SongsController::class, 'verBalada'])->name('vista.balada');
Route::get('/verCancionesTrap', [SongsController::class, 'verTrap'])->name('vista.trap');
Route::get('/verCancionesRap', [SongsController::class, 'verRap'])->name('vista.rap');

/* Route::get('/verRock', [SongsController::class, 'verRock'])->name('vista.cancion');
Route::get('/verPop', [SongsController::class, 'verPop'])->name('vista.cancion');
Route::get('/verTrap', [SongsController::class, 'verTrap'])->name('vista.cancion');
Route::get('/verBanda', [SongsController::class, 'verBanda'])->name('vista.cancion');
Route::get('/verNorte', [SongsController::class, 'verNorte'])->name('vista.cancion');
Route::get('/verReggaeton', [SongsController::class, 'verReggaeton'])->name('vista.cancion');
Route::get('/verBalada', [SongsController::class, 'verBalada'])->name('vista.cancion');
Route::get('/verRap', [SongsController::class, 'verRap'])->name('vista.cancion'); */

