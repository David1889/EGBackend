<?php

namespace App\Repositories;

use App\Models\Pet;

class PetRepository
{
    public function getAll()
    {
        return Pet::all();
    }

    public function getOne(int $id)
    {
        return Pet::find($id);
    }

        public function create(array $data)
    {
        return Pet::create($data);
    }

    public function getByClient(int $clientId)
    {
        return Pet::where('cliente_id', $clientId)->get();
    }

    public function update(int $id, array $data)
    {
    $pet = Pet::find($id);

    if ($pet) {
        $pet->update($data);
    }

    return $pet;
    }

    public function delete(int $id)
    {
    $pet = Pet::find($id);

    if ($pet) {
        $pet->delete();
        return true;
    }

    return false;
    }
}
