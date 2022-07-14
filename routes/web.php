<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SectorController;
use App\Http\Controllers\UserController;
use App\Models\Sector;
use App\Models\User;
use GuzzleHttp\Client;

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


Route::get('/home', function () {
    return view('welcome');
});

Route::get('/user', function () {
    return view('user');
});

Route::get('/newuser', function () {
    return view('newuser');
});

//Rotas de Calendário
Route::resource('/calendars', CalendarController::class);

//Rotas de Usuários
Route::get('/user', [UserController::class, 'index'])->name('user');
Route::get('/newuser', [UserController::class, 'create'])->name('create.user');
Route::post('/newuser',[UserController::class, 'store'])->name('newuser.store');
Route::get('/user{id}/edit',[UserController::class, 'edit'])->name('users.edit');
Route::put('/user{id}', [UserController::class, 'update'])->name('users.update');

//Rotas de Setores
Route::get('/newsector', [SectorController::class, 'create'])->name('create.sector');
Route::get('/newsector', [SectorController::class, 'index'])->name('newsector');
Route::post('/newsector', [SectorController::class, 'store'])->name('newsector.store');