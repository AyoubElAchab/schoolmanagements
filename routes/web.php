<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\FormationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('etudiant',EtudiantController::class);
Route::resource('classe',ClasseController::class);
Route::resource('formation', FormationController::class);

Route::get('/rechercher',[FormationController::class,'rechercher']);
Route::get('/formations/search',[FormationController::class,'search']);

