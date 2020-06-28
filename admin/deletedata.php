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


$sql = "DELETE FROM kash WHERE id='" . $_GET["id"] . "'";
 $run=mysqli_query($link,$sql) or die(mysqli_error($link));
 
 if($run==true)
 {
  ?>
  <script>
   alert('data deleted succesfully');
   window.open('deletestudent.php','_self');
  </script>
  <?php
 }
 else
 {
  ?>
  <script>
   alert('error');
   window.open('deletestudent.php','_self');
  </script>
  <?php
 }

?>