<?php
// Base class
class Vehicle
{
    public function __construct()
    {
        echo "This is a vehicle class.<br>";
    }
}

class FourWheeler extends Vehicle
{
    public function __construct()
    {
        parent::__construct(); 
        echo "This is a four-wheeler vehicle class.<br>";
    }
}

class Truck extends FourWheeler
{
    public function __construct()
    {
        parent::__construct();
        echo "This is a truck class.<br>";
    }
}

class Car extends FourWheeler
{
    public function __construct()
    {
        parent::__construct();
        echo "This is a car class.<br>";
    }
}

echo "Creating a truck object:<br>";
$truck = new Truck();

echo "<br>-----------------------<br>";

echo "Creating a car object:<br>";
$car = new Car();
