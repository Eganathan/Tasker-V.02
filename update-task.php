<?php

include '../admin/conect.php';

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$task_id = $_GET['id'];
$modText = "MODIFIED";

$sql_v = "UPDATE tasks SET task_text = '$modText' WHERE task_id = '$task_id' ";
$result = $conn->query($sql_v);




if($result == true){

	header('location: ../php-files/app.php');

}else{
	echo("unable to connect");
}

?>