<?php

class Car
{
    private int $nbWheel;
    private int $currentSpeed;
    private string $color;  //
    private int $nbSeat;  //
    private string $energyType;  //
    private int $currentFuelLevel;


    public function __construct(string $color, int $nbSeat, string $energyType)
    {
        $this->color = $color;
        $this->nbSeat = $nbSeat;
        $this->energyType = $energyType;
    }

    public function setNbWheel(int $nbWheel): int
    {
        $this->nbWheel = $nbWheel;
    }

     public function getNbWheel(): int
    {
        return $this->nbWheel;
    }

    public function setCurrentSpeed(int $currentSpeed)
    {
        $this->currentSpeed = $currentSpeed;
    }

    public function getCurrentSpeed(): int
    {
      return  $this->currentSpeed;
    }

    public function getColor(): string
    {
        return  $this->color;
    }

    public function getNbSeat()
    {
        return  $this->nbSeat;
    }

    public function getEnergyType(): string
    {
        return  $this->energyType;
    }

    public function setCurrentFuelLevel(int $currentFuelLevel)
    {
       $this->currentFuelLevel = $currentFuelLevel;
    }

    public function getCurrentFuelLevel(): int
    {
        return $this->currentFuelLevel = $currentFuelLevel;
    }

    public function start(): ?string
    {
        if ($this->getCurrentSpeed() === 0) {
            return 'START!';
        } else
        {
            return null;
        }
    }

    public function forward(): ?string
    {
        if ($this->getCurrentSpeed() > 0) {
            return
                'GO GO!';
        } else {
            return null;
        }
    }

    public function brake(): ?string
    {
        if ($this->getCurrentSpeed() > 100)
        {
            return 'BREAK!';
        } else
        {
            return null;
        }
    }
}

