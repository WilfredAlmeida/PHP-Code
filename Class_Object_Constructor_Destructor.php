<?php

class Student
{

    var $name,$age,$discipline;

    function __construct($sname,$sage,$disp)
    //Constructor can also work with class name just like in C++, Java.
    {
        $this-> name = $sname;
        $this-> age = $sage;
        $this-> discipline = $disp;
    }

    function putData()
    {
        echo "Name: ".$this->name;
        echo "<br>Age: ".$this->age;
        echo "<br>Discipline: ".$this->discipline;
    }

    function __destruct()
    {
        $name = null;
        $age = null;
        $discipline = null;
    }
}

$student1 = new Student("Wilfred",17,"CO");
$student1->putData();

?>