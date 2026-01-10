<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PetController;


//Rutas de clients

Route::get('/clients',[ClientController::class, 'getAll']); //Falta

Route::get('/clients/{id}',[ClientController::class, 'getOne']); //Falta

Route::get('/clients/{clientId}/pets', [PetController::class, 'getByClient']);



//Rutas de pets
Route::get('/pets', [PetController::class, 'getAll']); 

Route::get('/pets/{id}', [PetController::class, 'getOne']);

Route::post('/pets', [PetController::class, 'addOne']); //Falta

Route::put('/pets/{id}', [PetController::class, 'updateOne']); //Falta

Route::delete('/pets/{id}', [PetController::class, 'deleteOne']); //Falta







