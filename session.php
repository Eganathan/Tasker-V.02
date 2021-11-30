<?php
   include('conect.php');

  session_start(); 
  $_SESSION['login_user'];
  $_SESSION['ID_user'];

  $curr_user_id = $_SESSION['ID_user'];
  
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"select userName from users where userName = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['userName'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:../index.php");
      die();
   }
?>