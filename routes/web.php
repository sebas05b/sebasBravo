<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovilesController;
use App\Http\Controllers\ComputadoresController;
use App\Http\Controllers\TelevisoresController;
use App\Http\Controllers\ContactoController;

Route::get('/',[MovilesController::class,'index']);
Route::get('/computadores',[ComputadoresController::class,'computadores']);
Route::get('/televisores',[TelevisoresController::class,'televisores']);
Route::get('/contacto',[ContactoController::class,'contacto']);

