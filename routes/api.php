<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\petController;

Route::get('/pets', [petController::class, 'getAll']);


Route::get('/pets/{id}', function () {
    return "Obteniendo una pet";
});


Route::post('/pets', function () {
    return "Creando pet";
});


Route::put('/pets/{id}', function () {
    return "Actualizando pet";
});


Route::delete('/pets/{id}', function () {
    return "Eliminando pet";
});