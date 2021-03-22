<?php

class Car
{
    var $car_name, $car_number;

    function setData($name,$num)
    {
        $this->car_name = $name;
        $this->car_number = $num;
    }

    function putData()
    {
        echo "<br>Car Name: ".$this->car_name;
        echo "<br>Car Number: ".$this->car_number;
    }
}

$car1 = new Car();
$car1->setData("BMW",24234);
$car1->putData();

$car2 = clone($car1);
$car2->setData("Audi",3434);
$car2->putData();

//----------------------Start:Another way of object creation-----------------------
$car3 = new Car;
$car3->setData("R15",4342);
$car3->putData();
//----------------------End:Another way of object creation-----------------------

//Simply can't do $ca2 = $car1 bcz then they both will point to same object and hence change done using $car1
//will affect $car2.
//clone() function simply copies whole object into new memory space :}

?>