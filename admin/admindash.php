<?php
   include('dbcon.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select username from admin where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:../login.php");
      die();
   }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>admin_dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  .button {
  width: 60%;
  background-color: white; 
  border: 4px solid #4CAF50;;
  color: black;
  padding: 20px 40px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 8px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
  border-radius: 14px;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
  background-color: #4CAF50;
  color: black;
}

  </style>
</head>
<body  style="background-color: rgb(255,235,205);">

<h2 align="right" style="margin-right:20px ; padding-top: 15px;"><a href="logout.php">Logout</a></h2>

<div class="container" style=" padding-top: 30px;">
  <div class="jumbotron" style="background-color: rgb(111, 226, 239);" align="center">
    <h1>Welcome to School Management System</h1>      
    <br>
    <br>
    <br>
    <button class="button"><a href = "addstudent.php"> Add Student Details</a></button>
    <button class="button"><a href = "updatestudent.php">Update Student Details</a></button>
    <button class="button"><a href = "deletestudent.php">Delete Student Details</a></button>
  </div>    
</div>

</body>
</html>
