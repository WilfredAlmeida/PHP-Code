<?php
session_start();
$_SESSION["First_Name"] = "Wilfred";
$_SESSION["Last_Name"] = "Almeida";
echo "Session Values Set"."<BR>";

$fname = $_SESSION["First_Name"];
$lname = $_SESSION["Last_Name"];
echo $fname."<BR>";
echo $lname."<BR>";

session_destroy();
echo "Session Destroyed";
?>
