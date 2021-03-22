<?php
//PHP supports only single, MULTI-LEVEL Inheritance
class Car
{
    var $car_name,$car_number;

    function __construct($name,$number)
    {
        $this->car_name = $name;
        $this->car_number = $number;
    }

    function putCar()
    {
        echo "<BR> Name: ".$this->car_name;
        echo "<BR> Number: ".$this->car_number;
    }
}

class SuperCar extends Car //Single Inheritance
{
    var $top_speed;

    function __construct($name,$number,$top_speed)
    {
        parent::__construct($name,$number);
        $this->top_speed = $top_speed;
    }

    function putSuperCar()
    {
        parent::putCar();
        echo "<BR>Top Speed: ".$this->top_speed;
    }
}

class ElectricCar extends SuperCar //Multi Level Inheritance
{
    var $charging_time;

    function __construct($name,$number,$top_speed,$charging_time)
    {
        parent::__construct($name,$number,$top_speed);
        $this->charging_time = $charging_time;
    }

    function putElectricCar()
    {
        parent::putSuperCar();
        echo "<BR>Charging Time: ".$this->charging_time;
    }
}

$car = new Car("BMW","MH04 2354");
$super_car = new SuperCar("Audi","MH04 6584","600km/hr");
$electric_car = new ElectricCar("Tesla","MH04 9876","200km/hr","3hr");

$car->putCar();
$super_car->putSuperCar();
$electric_car->putElectricCar();

?>