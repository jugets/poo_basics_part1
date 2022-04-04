<?php

require_once 'Highway.php';

final class ResidentialWay extends Highway{
    
    public function __construct(protected array $currentVehicles)
    {
        parent :: __construct($currentVehicles);
        $this->nbLane = 2;
        $this->maxSpeed = 50;
    }

    public function addVehicle($vehicle)
    {
        $this->currentVehicles[] = $vehicle;   
    }
}