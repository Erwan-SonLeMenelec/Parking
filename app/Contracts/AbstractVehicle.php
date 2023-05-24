<?php

namespace App\Contracts;

abstract class AbstractVehicle implements VehicleInterface
{
    protected int $pneus;
    private bool $park=true;
    public function repair(): void
    {
        $this->setPneus(self::PNEUS_REPAIRED);
    }

    /**
     * @return int
     */
    public function getPneus(): int
    {
        return $this->pneus;
    }

    /**
     * @param int $pneus
     */
    public function setPneus(int $pneus): void
    {
        $this->pneus = $pneus;
    }



    public function park(): void
    {

        $this->setPark();
    }

    public function setPark(bool $park): void
    {
        $this->park = $park;
    }

    public function getPark (bool $park) : bool
    {
        return $this->park;
    }

}
