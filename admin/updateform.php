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


$result = mysqli_query($link,"SELECT * FROM kash WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
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

th,tr{
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

      <li  style="float:right;padding-right:15px;"><a href="../logout.php">log out</a></li>
</ul>




<div class="container" style=" padding-top: 70px;" align="center">
  <div class="jumbotron" style="background-color: rgb(111, 226, 239); width:70%; padding: 80px;" align="center">


    <h1>Welcome to School Management System</h1> 
    <h2> Enter your details</h2>     
    <br>
<form action="updatedata.php" method="post" enctype="multipart/form-data" align="center">

<table class="table table-borderless" align="center">





<tr align="left">
      <th scope="row">Enter your roll no:</th>
       <td>
       <input type="text" name="rollno" class="txtField" value="<?php echo $row['rollno']; ?>">

    </td>
    </tr>
    <tr align="left">
      <th scope="row">Full Name:</th>
       <td>
        <input type="text" name="name" class="txtField" value="<?php echo $row['name']; ?>">
        </td>
    </tr>
    <tr align="left">
      <th scope="row">city::</th>
       <td>
        <input type="text" name="city" class="txtField" value="<?php echo $row['city']; ?>">
        </td>
    </tr>
    <tr align="left">
      <th scope="row">Parents contact no::</th>
       <td>
    <input type="text" name="pcon" class="txtField" value="<?php echo $row['pcon']; ?>">
        </td>
    </tr>
    <tr align="left">
      <th scope="row">image:</th>
       <td>
   <input type="file" name="image" class="txtField" value="<?php echo $row['image']; ?>">
   </td>
    </tr>
    <tr align="left">
      <th scope="row">Standard:</th>
       <td>
       <input type="text" name="std" class="txtField" value="<?php echo $row['std']; ?>">
        </td>
    </tr>

    </table>
    <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
    <input type="submit" value="submit" align="center" style="height:45px; padding:15px;">
</form>

</div>    
</div>

</body>
</html>


