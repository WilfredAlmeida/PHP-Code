<?php

// Arithmetic Operations possible in PHP are 
//Addition, Subtraction, Multiplication, Division, Modulas,
//Exponent, Increment, Decrement


$num1 = $_GET["num1"];
$num2 = $_GET["num2"];

echo "Numbers = ". $num1.", ".$num2;
echo "<BR>Addition = ".($num1 + $num2);
echo "<BR>Subtraction = ".($num1 - $num2);
echo "<BR>Multiplication = ".($num1 * $num2);
echo "<BR>Division = ".($num1 / $num2);
echo "<BR>Modulas = ".($num1 % $num2);
echo "<BR>Exponent = ".($num1 ** $num2);
echo "<BR>Increment $num1 = ".(++$num1);
echo "<BR>Decrement $num2 = ".(--$num2);
?>