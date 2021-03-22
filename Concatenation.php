<?php

//Concatenation in PHP is done using the . (Dot) operator rather than , or +

$name = "Wilfred";
$surname = "Almeida";

echo $name.$surname; // Here . and , both work. + does not work
echo "<BR>Name = " . $name;//Here also, ',' works
echo "<BR>Surname = ". $surname;

?>