<?php

require_once 'Highway.php';

final class PedestrianWay extends Highway{
    
    public function __construct(protected array $currentVehicles)
    {
        parent :: __construct($currentVehicles);
        $this->nbLane = 1;
        $this->maxSpeed = 10;
    }

    public function addVehicle($vehicle)
    {
        if($vehicle instanceof Bicycle || $vehicle instanceof Skateboard){
            $this->currentVehicles[] = $vehicle;
        }
    }
}