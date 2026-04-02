<?php

class Car{
    //properties
    public $name;

    public function __construct($car_name){
        $this->name=$car_name;
        echo "inside the constructor <br/>";
    }
    
    //methods(function)
    public function getCarName(){
        return $this->name;
    }
    public function __destruct()
    {
        echo "inside the destrutor<br/>";
    }
}

$bmw=new Car("BMW x5 series");
echo "object ".$bmw->name." is created<br/>";
echo $bmw->getCarName()." car <br/>";
unset($bmw);

$marcedes=new Car("Marcedes Benz");
// $bmw->name="Marcedes benz series";
echo "object ".$marcedes->name." is created<br/>";
echo $marcedes->getCarName()." car <br/>";
?>
