<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\ClientRepository;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function __construct(
        private ClientRepository $clientRepository
    ) {}

    public function getAll()
    {
        $clients = $this->clientRepository->getAll();

        if ($clients->isEmpty()) {
            return response()->json([
                'message' => 'No se encontraron clientes'
            ], 404);
        }

        return response()->json($clients, 200);
    }

    public function getOne($clientId)
    {
        $client = $this->clientRepository->getOne($clientId);

        if (!$client) {
            return response()->json([
                'message' => "No se encontró el cliente con clientId = $clientId"
            ], 404);
        }

        return response()->json($client, 200);
    }

    public function create(Request $request)
    {
        $client = $this->clientRepository->create($request->all());

        return response()->json($client, 201);
    }

    public function update(Request $request, $clientId)
    {
        $client = $this->clientRepository->update($clientId, $request->all());

        if (!$client) {
            return response()->json([
                'message' => "No se encontró el cliente con clientId = $clientId"
            ], 404);
        }

        return response()->json($client, 200);
    }

    public function delete($clientId)
    {
        $deleted = $this->clientRepository->delete($clientId);

        if (!$deleted) {
            return response()->json([
                'message' => "No se encontró el cliente con clientId = $clientId"
            ], 404);
        }

        return response()->json([
            'message' => 'Cliente eliminado correctamente'
        ], 200);
    }

    public function getWithPets($clientId)
    {
        $client = $this->clientRepository->getWithPets($clientId);

        if (!$client) {
            return response()->json([
                'message' => "No se encontró el cliente con clientId = $clientId"
            ], 404);
        }

        return response()->json($client, 200);
    }
}
