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

    public function getByClient(int $clientId)
    {
        return Pet::where('cliente_id', $clientId)->get();
    }
}
