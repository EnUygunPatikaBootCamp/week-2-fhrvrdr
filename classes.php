<?php
abstract class Vehicle
{
    protected $plate;
    protected $name;
    protected $model;
    protected $numberOfWheels;
    protected $wingspan;

    function __construct($plate, $name, $model, $numberOfWheels)
    {
        $this->plate = $plate;
        $this->name = $name;
        $this->model = $model;
        $this->numberOfWheels = $numberOfWheels;
    }
    abstract protected function getPropertys();
}


class Car extends Vehicle
{
    public function getPropertys()
    {
        return "Araba Taşıtına Ait Öznitelikler Şunlardır:\n" . "Plaka No: " . $this->plate . "\nMarka: " . $this->name . "\nModel: " . $this->model . "\nTekerlek Sayısı: " . $this->numberOfWheels;
    }
}

class Motorcycle extends Vehicle
{
    public function getPropertys()
    {
        return "Motorsiklet Taşıtına Ait Öznitelikler Şunlardır:\n" . "Plaka No: " . $this->plate . "\nMarka: " . $this->name . "\nModel: " . $this->model . "\nTekerlek Sayısı: " . $this->numberOfWheels;
    }
}

class Plane extends Vehicle
{
    function __construct($wingspan, $name, $model)
    {
        $this->name = $name;
        $this->model = $model;
        $this->wingspan = $wingspan;
    }

    public function getPropertys()
    {
        return "Uçak Taşıtına Ait Öznitelikler Şunlardır:\n" . "Marka: " . $this->name . "\nModel: " . $this->model . "\nKanat Açıklığı: " . $this->wingspan;
    }
}
