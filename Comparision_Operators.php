<?php

$num1 = 3;
$num2 = 4;

echo "num1 = $num1  num2 = $num2";
echo "<br>Equal to: $num1 == $num2: ".(($num1==$num2)?"True":"False");
echo "<br>Equal to with type: $num1 === $num2: ".($num1 === $num2?"True":"False");
echo "<br>Greater than: $num1 > $num2: ".($num1 > $num2?"True":"False");
echo "<br>Less than: $num1 < $num2: ".($num1 < $num2?"True":"False");
echo "<br>Greater than or equal to: $num1 >= $num2: ".($num1 >= $num2?"True":"False");
echo "<br>Less than or equal to: $num1 <= $num2: ".($num1 <= $num2?"True":"False");
echo "<br>Not equal to: $num1 != $num2: ".($num1 != $num2?"True":"False");

?>