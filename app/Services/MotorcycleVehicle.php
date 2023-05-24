<?php

namespace App\Services;

use App\Contracts\AbstractVehicle;
use App\Models\Brand;
use App\Models\Model;
use App\Models\User;
use App\Models\Vehicle_type;

class MotorcycleVehicle extends AbstractVehicle {


    public function __construct(
        int          $pneus,
        User         $user,
        Brand        $brand,
        Model        $model,
        Vehicle_type $vehicle_types,
        bool         $parked,
        string       $created_at,
        string       $date_de_mise_a_jour,
    )
    {
        $this->pneus = $pneus;
        $this->user = $user;
        $this->brand = $brand;
        $this->model = $model;
        $this->vehicle_types = $vehicle_types;
        $this->parked = $parked;
        $this->created_at = $created_at;
        $this->date_de_mise_a_jour = $date_de_mise_a_jour;
    }



    public function toArray(): array
    {
        return [
            "user" => $this->user,
            "brand" => $this->brand,
            "model" =>$this->model,
            "vehicle_types" => $this->vehicle_types,
            "parked" => $this->parked,
            "date_de_creation" => $this->date_de_creation,
            "date_de_mise_a_jour" => $this->date_de_mise_a_jour,
        ];
    }

}
