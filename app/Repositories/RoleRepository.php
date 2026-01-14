<?php

namespace App\Repositories;

use App\Models\Role;

class RoleRepository
{
    public function getAll()
    {
        return Role::all();
    }

    public function getOne(int $id)
    {
        return Role::find($id);
    }

    public function create(array $data)
    {
        return Role::create($data);
    }

    public function update(int $id, array $data)
    {
        $role = Role::find($id);

        if ($role) {
            $role->update($data);
        }

        return $role;
    }

    public function delete(int $id)
    {
        $role = Role::find($id);

        if ($role) {
            $role->delete();
            return true;
        }

        return false;
    }

    public function getWithPersonals(int $id)
    {
        return Role::with('personals')->find($id);
    }
}
