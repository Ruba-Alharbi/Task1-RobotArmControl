<?php

//Create Connection

$user    = 'root';
$pass    = '';
$db      = 'motors';

$connection = new mysqli('localhost' , $user , $pass , $db);

//To Check The Connection is working or not

if ($connection-> connection_error)
{
    die("Unable to connect to the database" . connction_error);
}
echo "Database connection successfully.";
//error_reporting(0);
if(isset($_POST['save'])) 
{
$motor1 = $_POST['motor1'];
$motor2 = $_POST['motor2'];
$motor3 = $_POST['motor3'];
$motor4 = $_POST['motor4'];
$motor5 = $_POST['motor5'];
$motor6 = $_POST['motor6'];
$run    = $_POST['run'];

// database insert SQL code
$SQL = "INSERT INTO motorsControl (motor1, motor2, motor3, motor4, motor5, motor6 ) VALUES 
('$motor1' , '$motor2' , '$motor3' , '$motor4' , '$motor5' , '$motor6');";


if ($connection->query($SQL) === TRUE) {
  $last_id = $connection->insert_id;
  echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
  echo "Error: " . $SQL . "<br>" . $connection->error;
}
}

//For Run Button
if(isset($_POST['run'])){

  $runing = "INSERT INTO runMotors (run) VALUES (1) ";

  if ($connection->query($runing) === TRUE) {
    echo "\nRunning successfully.";
  } else {
    echo "Error: " . $runing . "<br>" . $connection->error;
  }
}

  $connection->close();
?>    