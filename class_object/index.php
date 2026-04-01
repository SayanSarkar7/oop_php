<?php

class Car{
    //properties
    public $name="Car name";

    //methods(function)
    public function getCarName(){
        return $this->name;
    }
    public function setCarName($car_name){
        $this->name=$car_name;
    }
}

$bmw=new Car();
$bmw->name="BMW x5 series";
echo $bmw->getCarName();

$marcedes=new Car();
$marcedes->setCarName("Marcedes");
// $bmw->name="Marcedes benz series";
echo $marcedes->getCarName();
?>
