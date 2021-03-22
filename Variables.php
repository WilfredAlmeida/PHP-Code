<?php

//Variables in PHP are defned using '$' at their beginning and also to use the variables '$' is needed.

$name = "Wilfred";
$age = 17;

$a = $age*2;
echo 'Name = ',$name;
echo "</br>Age = ",$a;
echo "<BR> $name"; //This prints the variable
echo '<BR> $name';  //This prints $name as it is.

//Inside '' whatever is written is printed driectly
//Inside "" if there are PHP code statements then they are interpreted
?>