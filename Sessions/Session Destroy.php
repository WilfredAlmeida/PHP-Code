<?php

session_start();

//unset($_SESSION["First_Name"]);//unsets/destroys session variable First_Name
session_destroy();//unsets all session variables

echo "Destroyed";
?>