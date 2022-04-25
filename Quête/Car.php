<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{
    private int $energyLevel;
    private bool $hasParkBrake =true;
    public function __construct(protected string $color, protected int $nbSeats, private string $energy) 
    {
        parent::__construct($color, $nbSeats);
    }
    

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

    public function getParkBrake(): int
    {
        return $this->hasParkBrake;
    }

    public function setParkBrake(): void
    {
        $this->hasParkBrake = $this->hasParkBrake ? false : true;
    }

    public function start():string 
    {
        if($this->hasParkBrake)
        {
            throw new Exception('The park brake is set !');
        }
        parent::start();

        return 'Car has started';
    }
}   