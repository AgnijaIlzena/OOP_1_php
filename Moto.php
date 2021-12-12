<?php

class Moto
{
    private string $color='black';
    private int $speed=10;

    /**
     * @return int
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }

    /**
     * @param int $speed
     */
    public function setSpeed(int $speed): void
    {
        if ($speed >= 0) {
            $this->speed=$speed;
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


    public function forward(): string
    {
        $this->speed = 5;
        return 'GO!';
    }

    public function brake(): string
    {
        $text = "";
        while ($this->speed > 0)
        {
           $this->speed --;
           $text .= "I'm slowing down.";
        }
        $text .= "I'm stopped!";
        return $text;
    }
}