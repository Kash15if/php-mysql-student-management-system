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

$id = mysqli_real_escape_string($link, $_REQUEST['id']);
$rollno = mysqli_real_escape_string($link, $_REQUEST['rollno']);
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$city = mysqli_real_escape_string($link, $_REQUEST['city']);
$pcon = mysqli_real_escape_string($link, $_REQUEST['pcon']);
$std = mysqli_real_escape_string($link, $_REQUEST['std']);
$imagename=$_FILES['image']['name'];
$f_tmp=$_FILES['image']['tmp_name'];


move_uploaded_file($f_tmp,"../dataimg/".$imagename);
// Attempt insert query execution
$sql = "UPDATE kash SET rollno = '$rollno', name = '$name', city = '$city', pcon = '$pcon', std = '$std', image = '$imagename' WHERE id = '$id'";



$result = mysqli_query($link,"SELECT * FROM kash WHERE id='" . $id. "'");
$row= mysqli_fetch_array($result);
if(mysqli_query($link, $sql)){
    ?>
    <script>
     alert('Data Updated Successfully.');
     window.open('updatestudent.php','_self');
    </script>
    <?php
   }
  
?>





