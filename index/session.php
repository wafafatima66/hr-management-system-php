<?php session_start();
  require '../includes/conn.php';
   
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"select username,user_id from users where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   $login_session_id = $row['user_id'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:../index/login.php");
      die();
   }
?>