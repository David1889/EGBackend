<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\ServiceRepository;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function __construct(
        private ServiceRepository $serviceRepository
    ) {}

    public function getAll()
    {
        $services = $this->serviceRepository->getAll();

        if ($services->isEmpty()) {
            return response()->json([
                'message' => 'No se encontraron servicios'
            ], 404);
        }

        return response()->json($services, 200);
    }

    public function getOne($serviceId)
    {
        $service = $this->serviceRepository->getOne($serviceId);

        if (!$service) {
            return response()->json([
                'message' => "No se encontró el servicio con serviceId = $serviceId"
            ], 404);
        }

        return response()->json($service, 200);
    }

    public function create(Request $request)
    {
        $service = $this->serviceRepository->create($request->all());

        return response()->json($service, 201);
    }

    public function update(Request $request, $serviceId)
    {
        $service = $this->serviceRepository->update($serviceId, $request->all());

        if (!$service) {
            return response()->json([
                'message' => "No se encontró el servicio con serviceId = $serviceId"
            ], 404);
        }

        return response()->json($service, 200);
    }

    public function delete($serviceId)
    {
        $deleted = $this->serviceRepository->delete($serviceId);

        if (!$deleted) {
            return response()->json([
                'message' => "No se encontró el servicio con serviceId = $serviceId"
            ], 404);
        }

        return response()->json([
            'message' => 'Servicio eliminado correctamente'
        ], 200);
    }
}
