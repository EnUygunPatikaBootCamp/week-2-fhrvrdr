<?php

require('classes.php');

$araba = new Car('06 ARAC 06', 'Mercedes', 'C180', '4');
$motor = new Motorcycle('06 MOTOR 06', 'Honda', 'Forza 750', '2');
$ucak = new Plane('80m', 'Airbus', 'A380');
echo $araba->getProperties();
echo "\n";
echo $motor->getProperties();
echo "\n";
echo $ucak->getProperties();
