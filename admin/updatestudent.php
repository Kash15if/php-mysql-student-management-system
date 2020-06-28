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
   
    <style> 
table {
  width: 80%;
}

th,tr{
  height: 40px;
  font-size: 25px;
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

.button {
  display: inline-block;
  border-radius: 4px;
  background-color: rgb(242, 25, 75);
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
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
</head>
<body style="background-color: blanchedalmond">     

<ul>
      <li style="float:left;"><a href="admindash.php">Back to Dashboard</a></li>

      <li  style="float:right;padding-right:15px;"><a href="logout.php">log out</a></li>
</ul>

<h1 align="center">WELCOME TO STUDENT MANAGEMENT SYSTEM</h1> 



<div class="container" style=" padding-top: 20px;" align="center">
  <div class="jumbotron" style="background-color: rgb(111, 226, 239); width:80%; padding:40px;" align="center">


<form action="updatestudent.php" method="post">
<table class="table table-borderless" align="center">
    
<tr align="left">
      <th scope="row">Choose Standard:</th>
       <td>
                <select name="std" required style="font-size: 25px; border-radius: 10px;">
                    <option value="1">1st</option>
                    <option value="2">2nd</option>
                    <option value="3">3rd</option>
                    <option value="4">4th</option>
                    <option value="5">5th</option>
                    <option value="6">6th</option>
                    <option value="7">7th</option>
                    <option value="8">8th</option>
                    <option value="9">9th</option>
                    <option value="10">10th</option>
                    <option value="11">11th</option>
                    <option value="12">12th</option>
                </select>
    </tr>

    <tr align="left">
      <th scope="row">Enter your name:</th>
       <td>
        <input type="text" name="name" id="name">
    </td>
    </tr>
    </table>
    <button class="button" style="vertical-align:middle" align="center"><span>Submit </span></button>

</form>
</div>
</div> 
<br>
<br>


<table align=center border=2 style="width:98%" style="margin-top: 20px;padding-top:50px;">
 <tr style="background-color:pink; color:black;">
  <th>no</th>
  <th>image</th>
  <th>name</th>
  <th>roll</th>
  <th>pcon</th>
  <th>city</th>
  <th>edit</th>
 </tr>
<?php
 
$std=mysqli_real_escape_string($link,$_POST['std']);;
$name=mysqli_real_escape_string($link,$_POST['name']);;
$sql="SELECT * FROM `kash` WHERE `std`='$std' AND `name` LIKE '%$name%'";;
$ton=mysqli_query($link,$sql);
 $row=mysqli_num_rows($ton);
 if($row < 1)
  {
   echo "<tr><td colspan=5>not found</td></tr>";
 
  
  }
else{
  
 $count=0; 
while($data=mysqli_fetch_array($ton))
  {
   $count++;
 ?>
  <tr align="center">
  <td><?php echo "$count"; ?></td>
  <td><img src="../dataimg/<?php echo $data['image'];?>" style="max-width:100px;max:height:150px;"></td>
  <td><?php echo $data['name']; ?></td>
  <td><?php echo $data['rollno']; ?></td>
  <td><?php echo $data['city']; ?></td>
  <td><?php echo $data['pcon']; ?></td>
  <td><a href="updateform.php?id=<?php echo $data['id'];?>">edit</a></td>
 </tr>
 <?php
   
     }

 
   }
  

 
 
  ?>
 
 
 
 </table>

  
</body>
</html>








