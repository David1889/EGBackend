<?php

namespace App\Repositories;

use App\Models\Client;

class ClientRepository
{
    public function getAll()
    {
        return Client::all();
    }

    public function getOne(int $id)
    {
        return Client::find($id);
    }

    public function create(array $data)
    {
        return Client::create($data);
    }

    public function update(int $id, array $data)
    {
        $client = Client::find($id);

        if ($client) {
            $client->update($data);
        }

        return $client;
    }

    public function delete(int $id)
    {
        $client = Client::find($id);

        if ($client) {
            $client->delete();
            return true;
        }

        return false;
    }

    public function getWithPets(int $id)
    {
        return Client::with('pets')->find($id);
    }
}
