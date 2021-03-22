<?php

session_start();

echo "<BR> Session Set";

$fname = $_SESSION["First_Name"];
$lname = $_SESSION["Last_Name"];
echo "<BR>Session Value: ".$fname."<BR>";
echo "Session Value: ".$lname."<BR>";

?>