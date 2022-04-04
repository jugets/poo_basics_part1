<?php

require_once 'Vehicle.php';

abstract class Highway{

    protected array $currentVehicles;
    protected int $nbLane;
    protected int $maxSpeed;
    public function __construct(array $currentVehicles) 
    {
        $this->currentVehicles = $currentVehicles;
    }
    
    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles(int $currentVehicles): void
    {
        if($currentVehicles >= 0){
            $this->currentVehicles = $currentVehicles;
        }
    }

    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function setNbLane(int $nbLane): void
    {
        if($nbLane >= 0){
            $this->nbLane = $nbLane;
        }
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(int $maxSpeed): void
    {
        if($maxSpeed >= 0){
            $this->maxSpeed = $maxSpeed;
        }
    }

    abstract public function addVehicle($vehicle);

}