<?php

namespace App\Services;

use App\Contracts\AbstractVehicle;
use App\Models\Brands;
use App\Models\Models;
use App\Models\User;
use App\Models\Vehicle_types;

class CarVehicle extends AbstractVehicle
{
    public function __construct(
        int $pneus,
        User $user,
        Brands $brand,
        Models $model,
        Vehicle_types $vehicle_types,
        bool $parked,
        string $date_de_creation,
        string $date_de_mise_a_jour,

    )
    {
        $this->pneus = $pneus;
        $this->user = $user;
        $this->brand = $brand;
        $this->model = $model;
        $this->vehicle_types = $vehicle_types;
        $this->parked = $parked;
        $this->date_de_creation = $date_de_creation;
        $this->date_de_mise_a_jour = $date_de_mise_a_jour;

    }

    private function toArray(): array
    {
        return [
            "user" => $this->user,
            "brand" => $this->brand,
            "model" =>$this->model,
            "vehicle_types" => $this->vehicle_types,
            "parked" => $this->parked,
        ];
    }

}
