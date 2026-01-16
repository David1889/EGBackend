<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\PetRepository;
use Illuminate\Http\Request;


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

    public function create(Request $request)
    {
    $data = $request->validate([
        'cliente_id'   => 'required|exists:clients,id',
        'nombre'       => 'required|string',
        'foto'         => 'nullable|string',
        'raza'         => 'required|string',
        'color'        => 'required|string',
        'fecha_de_nac' => 'required|date',
        'fecha_muerte' => 'nullable|date'
    ]);

    $pet = $this->petRepository->create($data);

    return response()->json($pet, 201);
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

    public function update(Request $request, $petId)
    {
    $data = $request->validate([
        'cliente_id'   => 'sometimes|exists:clients,id',
        'nombre'       => 'sometimes|string',
        'foto'         => 'nullable|string',
        'raza'         => 'sometimes|string',
        'color'        => 'sometimes|string',
        'fecha_de_nac' => 'sometimes|date',
        'fecha_muerte' => 'nullable|date'
    ]);

    $pet = $this->petRepository->update($petId, $data);

    if (!$pet) {
        return response()->json([
            'message' => "No se encontró la mascota con petId = $petId"
        ], 404);
    }

    return response()->json([
        'message' => 'Mascota actualizada correctamente',
        'pet' => $pet
    ], 200);
    }

    public function delete($petId)
    {
    $deleted = $this->petRepository->delete($petId);

    if (!$deleted) {
        return response()->json([
            'message' => "No se encontró la mascota con petId = $petId"
        ], 404);
    }

    return response()->json([
        'message' => 'Mascota eliminada correctamente'
    ], 200);
    }
}
