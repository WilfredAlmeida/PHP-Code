<?php

/*
Name Age
A     12
B     14
C     16
*/

$arr = array(
                array("A",12),
                array("B",14),
                array("Name"=>"C","Age"=>16),
            );
print_r($arr);
echo "<BR>";

//accessing $arr[row][column]
echo $arr[0][0]." ".$arr[0][1]."<BR>";
echo $arr[1][0]." ".$arr[1][1]."<BR>";
echo $arr[2]["Name"]." ".$arr[2]["Age"];

?>