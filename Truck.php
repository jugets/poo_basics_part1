<?php

require_once 'Vehicle.php';

class Truck extends Vehicle{

    public function __construct(private int $capacity, protected string $color, protected int $nbSeats, protected string $energy)
    {
        parent:: __construct($color,$nbSeats);
        $this->setEnergy($energy);
    }
    private int $charge = 0;

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
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

    public function getCapcity(): int
    {
        return $this->capacity;
    }

    public function setCapacity(int $capacity): void
    {
        $this->capacity = $capacity;
    }

    public function getCharge(): int
    {
        return $this->charge;
    }

    public function setCharge(int $charge): void
    {
        $this->charge += $charge;
    }

    public function isFull(): string
    {
        $sentence = '';
        if($this->charge < $this->capacity)
        {
            $sentence = 'in filling';
        } else {
            $sentence = 'full';
        }
        return $sentence;
    }
}