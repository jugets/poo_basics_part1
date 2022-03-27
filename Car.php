<?php

class Car
{
    public function __construct(private string $color, private int $nbSeats, private string $energy) {}
    private int $nbWheels = 4;
    private int $currentSpeed = 0;
    private int $energyLevel = 2;

    public function forward(): string
    {
        $this->currentSpeed = 50;
        return "Forward !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "The car is stopped !";
        return $sentence;
    }

    public function start(): string
    {   
        $sentence = "Speed up !";
        while ($this->currentSpeed < 30){
            $this->currentSpeed++;
        }
        return $sentence;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }
    
    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
}   