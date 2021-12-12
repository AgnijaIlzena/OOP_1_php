<?php

require_once 'Vehicle.php';

class Camion extends Vehicle
{
    private int $storageCapacity;
    private int $load=0;
    private string $energy;

    public function __construct(int $storageCapacity, string $color, int $nbSeats, string $energy)
    {
        $this->storageCapacity=$storageCapacity;
        parent::__construct($color, $nbSeats);
        $this->energy=$energy;
    }



    /**
     * @param int $storageCapacity
     */
    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }

    /**
     * @return int
     */
    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    /**
     * @return int
     */
    public function getLoad(): int
    {
        return $this->load;
    }

    /**
     * @param int $load
     */
    public function setLoad(int $load): void
    {
        $this->load = $load;
    }

    /**
     * @return string
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }

    /**
     * @param string $energy
     */
    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }

    public function isFull(): string
    {
        $text="";
        if ( $this->load >= $this->storageCapacity){
            $text .= "Full!" .PHP_EOL;
        }
        $text .= "In filling" .PHP_EOL;
        return $text;
    }


}