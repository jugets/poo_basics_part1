<?php

require_once 'Highway.php';

final class MotorWay extends Highway{

    public function __construct(protected array $currentVehicles)
    {
        parent :: __construct($currentVehicles);
        $this->nbLane = 4;
        $this->maxSpeed = 130;
    }

    public function addVehicle($vehicle)
    {
        if($vehicle instanceof Car || $vehicle instanceof Truck){
            $this->currentVehicles[] = $vehicle;
        }
    }
}