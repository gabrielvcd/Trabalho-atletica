<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;

Route::get('/', [EventController::class, 'index']);
Route::post('/times', [EventController::class, 'store']);
Route::post('/events', [EventController::class, 'store_E']);
Route::post('/members', [EventController::class, 'store_M']);
Route::post('/login',[UserController::class, 'login'])->name('login');
Route::post('/home',[UserController::class, 'index'])->name('home');
Route::get('/logout',[UserController::class, 'destroyy'])->name('destroyy');
Route::get('/', function () {
    return view('sobre');
});

Route::get('home', [EventController::class, 'show']);
    /*Route::get('/home', function () {
    return view('home');
});*/

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/cadastro_time', function () {
    return view('cad-time');
});

Route::get('/eventos', function () {
    return view('eventos');
});

Route::get('/cadastro_eventos', function () {
    return view('cadastro_eventos');
});

Route::get('/cadastro_membros', function () {
    return view('cad-membros');
});
