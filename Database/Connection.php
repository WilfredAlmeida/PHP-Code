<?php

$uname = "";
$pass = "";
$host = "localhost";

@mysqli_connect('localhost','root','') or die("Can't Connect");
//used to connect to database. note the i in mysqli, only mysql doesn't work
//@ is used to supress warnings, die() is executed when connection fails

@mysqli_select_db('capstone');//connects to the database

echo "Connected";

?>