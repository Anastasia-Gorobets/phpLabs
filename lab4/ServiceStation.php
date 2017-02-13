<?php

class ServiceStation
{
    private $name;
    private $address;

    public function __construct($name = null, $address = null)
    {
        $this->name = $name;
        $this->address = $address;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function showService()
    {
        return "Service name=" . $this->getName() . ", Service address=" . $this->getAddress() . "<br>";
    }


}