<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "P&S";

$fname= $_POST['name'];
$lname= $_POST['lastname'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$location= $_POST['location'];
$dine_preference= $_POST['dine_in'];
$visit_date= $_POST['visit_date'];
$visit_time= $_POST['visit_time'];
$cleanliness= $_POST['cleanliness'];
$food_quality= $_POST['food_quality'];
$service_quality= $_POST['service_quality'];
$comments= $_POST['comments'];

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO login_data (username,password) VALUES ('$fname', '$lname', '$email', '$phone', '$location', '$dine_preference', '$visit_date', '$visit_time', '$cleanliness', '$food_quality', '$service_quality', '$comments')";

if ($conn->query($sql) === TRUE) {
  echo "Successfully submitted your response  :)";
} 
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>