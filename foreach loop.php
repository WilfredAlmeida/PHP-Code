<?php

$arr1 = array(1,2,3,4);

foreach($arr1 as $val)
{
    echo $val."<BR>";
}

$arr2 = array(array(1,2,3),array('a','b','c'));

foreach($arr2 as $arr)
{
    foreach($arr as $val)
    {
        echo $val."<BR>";
    }
}

// $str = "abc"//12; //Does not work
// foreach($str as $s)
// {
//     echo s;
// }

?>