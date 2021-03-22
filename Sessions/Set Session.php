<?php

session_start(); // Way of telling php that We are using sessions, be ready for it.
//Needed whenever session is needed to be created, accessed, destroyed

//Setting session variables
$_SESSION["First_Name"] = "Abc"; // creates session variable First_Name
//with value Wilfred. Syntax should be exact. underscore, Capital, Double Quotes, brackets
$_SESSION["Last_Name"] = "Def";

echo "Session Values Set";

?>