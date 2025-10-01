<?php
$db_server = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "people";
$connection = " ";

$connection = mysqli_connect($db_server, $db_username, $db_password, $db_name);
if($connection){echo "Nice!";}




?>