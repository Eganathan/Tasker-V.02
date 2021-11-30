<?php
	include 'conect.php';

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$user_name = $_POST['user_name'];
$user_pass = $_POST['user_pass'];


$sql = "SELECT id FROM users WHERE userName = '$user_name' and userPass = '$user_pass'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

 $count = mysqli_num_rows($result);

if($count == 1){

	session_start();

	$_SESSION['login_user'] = $user_name;
	$_SESSION['ID_user'] = $row['id'];

	echo("Logging in sucessfully" . $_SESSION['ID_user']."<br>");
    echo("Logging in sucessfully" . $_SESSION['login_user']."<br>");

    header("location: ../php-files/app.php");

}else{
	echo("Sorry incorrect credentials!");
	header("location ../index.php");
}



$conn->close();
?>