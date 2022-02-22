<?php
// $connection = mysqli_connect('localhost','root','','Moretech');
$connection = mysqli_connect('localhost','moretechplccom_admin ','BBJEk1H@CITt','moretechplccom_backend');
if (!$connection) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}




