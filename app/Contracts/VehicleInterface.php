<?php

namespace App\Contracts;

interface VehicleInterface
{
    public const PNEUS_REPAIRED = 4;

    public function repair();
    public function park();

}
