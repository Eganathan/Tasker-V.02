<?php 

include '../admin/conect.php';
include '../admin/session.php';

//1. Get input from the user to processing the data
 $curr_task_input_value="";
        

  //process the value from the form and save it on DB
  //check if the submit button is clicked
if (isset($_POST['submit'])) {

    //checks if the input is not empty
    if(!empty($_POST['task_inp'])){
        
        $curr_task_input_value = $_POST['task_inp'];
        

        //2. SQl query to save the data
        $sql = "INSERT INTO tasks SET user_id = '$curr_user_id', task_text = '$curr_task_input_value' ";
        //3. executing the SQL to insert the data
        $result = $conn->query($sql);}

        header('location: ../php-files/app.php');
        
      }else{
        echo "no input";
      }
?>