<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PetController;
use App\Http\Controllers\Api\ClientController;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\UserController;

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

//Rutas de services
Route::get('/services', [ServiceController::class, 'getAll']);
Route::get('/services/{serviceId}', [ServiceController::class, 'getOne']);
Route::post('/services', [ServiceController::class, 'create']);
Route::put('/services/{serviceId}', [ServiceController::class, 'update']);
Route::delete('/services/{serviceId}', [ServiceController::class, 'delete']);

// Rutas de roles
Route::get('/roles', [RoleController::class, 'getAll']);
Route::get('/roles/{roleId}', [RoleController::class, 'getOne']);
Route::post('/roles', [RoleController::class, 'create']);
Route::put('/roles/{roleId}', [RoleController::class, 'update']);
Route::delete('/roles/{roleId}', [RoleController::class, 'delete']);
Route::get('/roles/{roleId}/personals', [RoleController::class, 'getWithPersonals']);


//Rutas de users
Route::post('/users', [UserController::class, 'create']);
Route::post('/users/login', [UserController::class, 'login']);
Route::middleware('auth:sanctum')->post('/users/logout', [UserController::class, 'logout']);


