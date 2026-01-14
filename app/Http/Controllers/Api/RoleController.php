<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\RoleRepository;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function __construct(
        private RoleRepository $roleRepository
    ) {}

    public function getAll()
    {
        $roles = $this->roleRepository->getAll();

        if ($roles->isEmpty()) {
            return response()->json([
                'message' => 'No se encontraron roles'
            ], 404);
        }

        return response()->json($roles, 200);
    }

    public function getOne($roleId)
    {
        $role = $this->roleRepository->getOne($roleId);

        if (!$role) {
            return response()->json([
                'message' => "No se encontró el rol con roleId = $roleId"
            ], 404);
        }

        return response()->json($role, 200);
    }

    public function create(Request $request)
    {
        $role = $this->roleRepository->create($request->all());

        return response()->json($role, 201);
    }

    public function update(Request $request, $roleId)
    {
        $role = $this->roleRepository->update($roleId, $request->all());

        if (!$role) {
            return response()->json([
                'message' => "No se encontró el rol con roleId = $roleId"
            ], 404);
        }

        return response()->json($role, 200);
    }

    public function delete($roleId)
    {
        $deleted = $this->roleRepository->delete($roleId);

        if (!$deleted) {
            return response()->json([
                'message' => "No se encontró el rol con roleId = $roleId"
            ], 404);
        }

        return response()->json([
            'message' => 'Rol eliminado correctamente'
        ], 200);
    }

    public function getWithPersonals($roleId)
    {
        $role = $this->roleRepository->getWithPersonals($roleId);

        if (!$role) {
            return response()->json([
                'message' => "No se encontró el rol con roleId = $roleId"
            ], 404);
        }

        return response()->json($role, 200);
    }
}
