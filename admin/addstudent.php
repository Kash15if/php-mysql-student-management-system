<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "kash");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>



<?php
 
   session_start();
  
   if(!isset($_SESSION['login_user'])){
      header("location:../login.php");
      die();
   }
?>




<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Insert Students</title>
<style> 
table {
  width: 80%;
}

th,tr,{
  height: 40px;
  font-size: 20px;
}
li{
  height: 50px;
  font-size: 30px;
  display: inline;
}
input{
    height: 25px; 
    padding: 8px;
    font-size: 20px;
    background-color:rgb(111, 226, 239);
}


</style>
</head>
<body style="background-color: black">




<ul>
      <li style="float:left;"><a href="admindash.php">Back to Dashboard</a></li>

      <li  style="float:right;padding-right:15px;"><a href="logout.php">log out</a></li>
</ul>




<div class="container" style=" padding-top: 70px;" align="center">
  <div class="jumbotron" style="background-color: rgb(111, 226, 239); width:70%; padding: 80px;" align="center">


    <h1>Welcome to School Management System</h1> 
    <h2> Enter your details</h2>     
    <br>
<form action="addstudent.php" method="post" enctype="multipart/form-data" align="center">

<table class="table table-borderless" align="center">

<tr align="left">
      <th scope="row">Enter your roll no:</th>
       <td>
        <input type="text" name="rollno" id="rollno">
    </td>
    </tr>
    <tr align="left">
      <th scope="row">Full Name:</th>
       <td>
        <input type="text" name="name" id="name">
        </td>
    </tr>
    <tr align="left">
      <th scope="row">city::</th>
       <td>
        <input type="text" name="city" id="city">
        </td>
    </tr>
    <tr align="left">
      <th scope="row">Parents contact no::</th>
       <td>
        <input type="text" name="pcon" id="pcon">
        </td>
    </tr>
    <tr align="left">
      <th scope="row">image:</th>
       <td>
   <input type="file" name="img" >
   </td>
    </tr>
    <tr align="left">
      <th scope="row">Standard:</th>
       <td>
        <input type="text" name="std" id="std">
        </td>
    </tr>

    </table>
   
    <input type="submit" value="submit" align="center" style="height:45px; padding:15px;">
</form>

</div>    
</div>

</body>
</html>



<?php

$rollno = mysqli_real_escape_string($link, $_REQUEST['rollno']);
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$city = mysqli_real_escape_string($link, $_REQUEST['city']);
$pcon = mysqli_real_escape_string($link, $_REQUEST['pcon']);
$std = mysqli_real_escape_string($link, $_REQUEST['std']);
$imagename=$_FILES['img']['name'];
$f_tmp=$_FILES['img']['tmp_name'];



move_uploaded_file($f_tmp,"../dataimg/".$imagename);
// Attempt insert query execution
$sql = "INSERT INTO kash (rollno, name, city, pcon, std, image) VALUES ('$rollno', '$name', '$city','$pcon','$std','$imagename')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);



?>








