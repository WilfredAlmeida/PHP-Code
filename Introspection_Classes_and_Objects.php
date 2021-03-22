<?php

class Car
{
    var $car_name="abc",$car_number=123;

    function __construct($name,$number)
    {
        $this->car_name = $name;
        $this->car_number = $number;
    }

    function displayData()
    {
        echo "<br>Car Name: ".$this->car_name;
        echo "<br>Car Number: ".$this->car_number;
    }
}

//--------------------Start: Introspection Classes---------------------------------
echo "<br>//--------------------Start: Introspection Classes---------------------------------";


echo "<br>Car class Exists: ".class_exists('Car');

echo "<br>Car class Methods: ";
print_r(get_class_methods('Car'));

echo "<br>Car class Variables: ";
print_r(get_class_vars('Car'));


echo "<br>//--------------------End: Introspection Classes---------------------------------";
//--------------------End: Introspection Classes---------------------------------

echo"<br><br>";

//-------------------Start: Introspection Object----------------------------------

echo "<br>//-------------------Start: Introspection Object----------------------------------";


$car = new Car("BMW",2323);
$car->displayData();

echo "<br>Is Object: ".is_object($car);
echo '<br>Class of object $car: '.get_class($car);
echo "<br>Method displayData() exists: ".method_exists($car,'displayData');


echo "<br>//-------------------End: Introspection Object----------------------------------";
//-------------------End: Introspection Object----------------------------------
?>