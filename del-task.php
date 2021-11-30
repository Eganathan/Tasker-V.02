<?php

include '../admin/conect.php';

$task_id = $_GET['id'];

$sql = "DELETE FROM tasks WHERE task_id = '$task_id'";
$result = $conn->query($sql);

if($result == true){
	header('location: ../php-files/app.php');

}else{
	echo("unable to connect");
}

?>