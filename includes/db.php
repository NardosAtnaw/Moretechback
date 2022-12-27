<?php
// $connection = mysqli_connect('localhost','root','','Moretech');
$connection = mysqli_connect('localhost', 'moretechplccom_admin', 'cptV_&,2B2C.', 'moretechplccom_backend');
// $connection = mysqli_connect('localhost', 'versavvymediacom_moretechUser', '=4T(kn1o8ct[', 'versavvymediacom_moretechBack');
if (!$connection) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

