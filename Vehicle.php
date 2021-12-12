<?php

class Vehicle
{
    protected string $color;
    private int $currentSpeed;
    protected int $nbSeats;
    private int $nbWheels;

    public function __construct(string $color, int $nbSeats)
    {
        $this->color=$color;
        $this->nbSeats=$nbSeats;
    }

    public function forward(): string
    {
        $this->currentSpeed = 15;
        return 'Go!';
    }

    public function break()
    {
        $text="";
        while($this->currentSpeed > 0)
        {
            $this->currentSpeed--;
            $text .= "SLow down!";
        }
        $text .= "I am stopped!";
        return $text;
    }

    /**
     * @return int
     */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    /**
     * @param int $currentSpeed
     */
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0){
        $this->currentSpeed = $currentSpeed;
        }
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return int|string
     */
    public function getNbSeats()
    {
        return $this->nbSeats;
    }

    /**
     * @param int|string $nbSeats
     */
    public function setNbSeats($nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    /**
     * @return int
     */
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    /**
     * @param int $nbWheels
     */
    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }
}