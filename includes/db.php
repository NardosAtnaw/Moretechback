<?php
// $connection = mysqli_connect('localhost','root','','Moretech');
$connection = mysqli_connect('localhost','moretechplccom_user ','GrC+-4(g9!a9','moretechplccom_db');
if (!$connection) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}





