<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{
    public function __construct(protected string $color, protected int $nbSeats, private string $energy) 
    {
        parent::__construct($color, $nbSeats);
    }
    private int $energyLevel;

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    
    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {   
        if(in_array($energy,self::ALLOWED_ENERGIES)){
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
}   