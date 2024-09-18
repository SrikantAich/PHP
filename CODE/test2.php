<?php

class PlanetClass {
    public $Planets = array(
        "mercury" => "10",
        "venus" => "20",
        "earth" => "30",
        "mars" => "40",
        "jupiter" => "50",
    );

    public function __construct() {
        foreach ($this->Planets as $key => $value) {
            echo $key . " => " . $value . PHP_EOL;
        }
    }

    public function disp() {
        foreach ($this->Planets as $key => &$value) {
            $value = (int)$value + 10; // Explicitly cast to integer and add 10
        }


      
    }

    public function dispup()
    {
        foreach ($this->Planets as $key => $value) {
            echo $key . " => " . $value . PHP_EOL;
        }
    }

    public function dispdown()
    {
        foreach ($this->Planets as $key => $value) {
           $this->Planets[$key]=$value-10;
        }
    }
}

$planetObj = new PlanetClass();
echo "after update" . PHP_EOL;
$planetObj->disp();
$planetObj->dispup();
$planetObj->dispdown();
$planetObj->dispup();
