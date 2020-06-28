<?php
   include("dbcon.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['uname']);
      $mypassword = mysqli_real_escape_string($db,$_POST['pass']); 
      
      $sql = "SELECT id FROM admin WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count <1)
      {
         echo ("<SCRIPT LANGUAGE='JavaScript'>
         window.alert('username or password do not match');
         window.open('login.php','_self');
         </SCRIPT>");
      }
      else
      {
     
         $_SESSION['login_user'] = $myusername;
         
         header("location: admin/admindash.php");
      }
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin login</title>
<style> 
table {
  width: 80%;
}

th,tr,td{
  height: 40px;
  font-size: 25px;
  width:50%;
}

input{
    height: 25px; 
    padding: 8px;
    font-size: 20px;
    width:95%;
    background-color:rgb(111, 226, 239);
}


.button {
  display: inline-block;
  border-radius: 4px;
  background-color:rgb(65, 210, 20);
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 15px;
  width: 150px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
   background-color: rgb(7, 171, 67);
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

</style> 
</head>
<body style="background-color: blanchedalmond">

<div class="container" style=" padding-top: 100px;" align="center">
  <div class="jumbotron" style="background-color: rgb(111, 226, 239); width:80%; padding:40px;" align="center">

<h1 align="center">Admin Login</h1>
<form method= "post" action="login.php">
<table border="2" align="center" style="width:80%">

<tr align="center">
<td>UserName</td>
<td><input type="text" name="uname" required="required"</td>
</tr>
<tr align="center">
<td>Password</td>
<td><input type="password" name="pass" required="required"</td>
</tr>


</table>
<td colspan="2" align="center"> <button class="button" type="submit" name="login" value="login" style="vertical-align:middle" align="center"><span>Log In </span></button></td>

</form>
</div>
</div>


</body>
</html>
