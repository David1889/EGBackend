<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\PetRepository;

class PetController extends Controller
{
    public function __construct(
        private PetRepository $petRepository
    ) {}

    public function getAll()
    {
        $pets = $this->petRepository->getAll();

        if ($pets->isEmpty()) {
            return response()->json([
                'message' => 'No se encontraron mascotas'
            ], 404);
        }

        return response()->json($pets, 200);
    }

    public function getOne($petId)
    {
        $pet = $this->petRepository->getOne($petId);

        if (!$pet) {
            return response()->json([
                'message' => "No se encontró la mascota con petId = $petId"
            ], 404);
        }

        return response()->json($pet, 200);
    }

    public function getByClient($clientId)
    {
        $pets = $this->petRepository->getByClient($clientId);

        if ($pets->isEmpty()) {
            return response()->json([
                'message' => 'Este cliente no tiene mascotas'
            ], 404);
        }

        return response()->json($pets, 200);
    }
}
