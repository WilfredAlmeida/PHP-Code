<?php

require('Connection.php');

$bool = mysqli_query("select * from user_info");
$data = mysqli_fetch_assoc($bool);

print_r($data);

?>