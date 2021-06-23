<?php

error_reporting(0);

//Create Connection

$user    = 'root';
$pass    = '';
$db      = 'motors';

$connection = new mysqli('localhost' , $user , $pass , $db);

//Will select the last record
$query = "SELECT    *
FROM      motorsControl
ORDER BY  id DESC
LIMIT     1 " ;
//="SELECT * from runMotors";

$res = mysqli_query($connection,$query);


if (mysqli_num_rows($res) > 0) {


   $row = mysqli_fetch_array($res); 

//Print the last values inserted for the motors
    echo "ID:  "  . $row["id"] . "<br>";
    echo "Motor 1:  " .   $row["motor1"] . "<br>"; 
    echo "Motor 2:  " .   $row["motor2"] . "<br>"; 
    echo "Motor 3:  " .   $row["motor3"] . "<br>"; 
    echo "Motor 4:  " .   $row["motor4"] . "<br>";
    echo "Motor 5:  " .   $row["motor5"] . "<br>"; 
    echo "Motor 6:  " .   $row["motor6"]; 
}
else{
    echo "No Result Found!!";
}
?>
