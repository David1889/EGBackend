<?php

namespace App\Repositories;

use App\Models\Service;

class ServiceRepository
{
    public function getAll()
    {
        return Service::all();
    }

    public function getOne(int $id)
    {
        return Service::find($id);
    }

    public function create(array $data)
    {
        return Service::create($data);
    }

    public function update(int $id, array $data)
    {
        $service = Service::find($id);

        if ($service) {
            $service->update($data);
        }

        return $service;
    }

    public function delete(int $id)
    {
        $service = Service::find($id);

        if ($service) {
            $service->delete();
            return true;
        }

        return false;
    }
}
