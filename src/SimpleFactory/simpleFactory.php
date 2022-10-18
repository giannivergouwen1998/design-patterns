<?php

namespace App\SimpleFactory;

$bicycle = BicycleFactory::createBicycle('Breda', 25);

echo 'Destination ='.$bicycle->getDestination();
echo 'Distance ='.$bicycle->getDistance();
