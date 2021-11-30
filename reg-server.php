<?php
	include 'conect.php';

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$user_name = $_POST['user_name'];
$user_pass = $_POST['user_pass'];
$user_pass_cnf = $_POST['user_pass_cnf'];
$user_email = $_POST['user_email'];


$sql = "INSERT INTO users (userName, userEmail, userPass)
VALUES ('$user_name', '$user_email', '$user_pass')";

if ($conn->query($sql) === TRUE) {
  echo "Registred Sucesfully! ";
 header('location: ../index.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>