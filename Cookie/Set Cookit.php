<?php

$time = time();

setcookie('sname','ABC',$time+60);
echo "Cookie Set";


$name = $_COOKIE['sname'];
echo "<br> Cookie Set is: ".$name;

?>