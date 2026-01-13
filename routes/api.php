<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PetController;
use App\Http\Controllers\Api\ClientController;

//Rutas de clients

Route::get('/clients', [ClientController::class, 'getAll']);

Route::get('/clients/{clientId}', [ClientController::class, 'getOne']);

Route::post('/clients', [ClientController::class, 'create']);

Route::put('/clients/{clientId}', [ClientController::class, 'update']);

Route::delete('/clients/{clientId}', [ClientController::class, 'delete']);

Route::get('/clients/{clientId}/with-pets', [ClientController::class, 'getWithPets']);

Route::get('/clients/{clientId}/pets', [PetController::class, 'getByClient']);

//Rutas de pets
Route::get('/pets', [PetController::class, 'getAll']); 

Route::get('/pets/{id}', [PetController::class, 'getOne']);

Route::post('/pets', [PetController::class, 'addOne']); //Falta

Route::put('/pets/{id}', [PetController::class, 'updateOne']); //Falta

Route::delete('/pets/{id}', [PetController::class, 'deleteOne']); //Falta







