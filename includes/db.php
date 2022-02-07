<?php
// $connection = mysqli_connect('localhost','root','','5a');
$connection = mysqli_connect('localhost','versavvymediacom_5a',')XmM]e?x0?3I','versavvymediacom_5a');
if (!$connection) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}



