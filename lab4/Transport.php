<?php

class Transport
{
    private $name; //имя
    private $type; //тип
    private $weight; //масса
    private $carcase; //кузов
    private $engine; //двигатель
    private $chassis; //шасси
    private $service; //сто
    public function __construct($name, $type, $weight, $carcase, $engine, $chassis, ServiceStation $service)
    {
        $this->name = $name;
        $this->type = $type;
        $this->weight = $weight;
        $this->carcase = $carcase;
        $this->engine = $engine;
        $this->chassis = $chassis;
        $this->service = $service;

    }
    //изменение значений
    public function setName($value)
    {
        $this->name = $value;
    }

    public function setType($value)
    {
        $this->type = $value;
    }

    public function setWeight($value)
    {
        $this->weight = $value;
    }

    public function setCarcase($value)
    {
        $this->carcase = $value;
    }

    public function setEngine($value)
    {
        $this->engine = $value;
    }

    public function setChassis($value)
    {
        $this->chassis = $value;
    }

    public function setService(ServiceStation $value)
    {
        $this->service = $value;
    }

    //получение значений
    public function getName()
    {
        return $this->name;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function getCarcase()
    {
        return $this->carcase;
    }

    public function getEngine()
    {
        return $this->engine;
    }

    public function getChassis()
    {
        return $this->chassis;
    }

    public function getService()
    {
        return $this->service;
    }

    public function showTransport()
    {
        echo "Name=" . $this->getName() . ", Type=" . $this->getType() . "
       , Weight=" . $this->getWeight() . ", Carcase=" . $this->getCarcase() .
            ", Engine=" . $this->getEngine() . ", Chassis=" . $this->getChassis() . ", " . $this->service->showService();
    }
}