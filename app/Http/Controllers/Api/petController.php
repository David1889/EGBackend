<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pet;

class petController extends Controller
{
    public function getAll(){
        $pets = Pet::all();
        if ($pets->isEmpty()) {
           $data = [
            'message' => 'No se encontraron mascotas',
            'status' => 404
           ];
           return response()->json($data, 404); 
        }

        $data = [
            'pets' => $pets,
            'status' => 200
        ];

        return response()->json($data, 200);
    }
}
