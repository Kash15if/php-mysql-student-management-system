<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Management System</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body style="background-color: blanchedalmond">         

<h3 align="right" style="margin-right:20px"><a href="login.php">Login</a></h3>
<h1 align="center">WELCOME TO STUDENT MANAGEMENT SYSTEM</h1> 

<div class="row justify-content-md-center">
        <div class="col-xs-12">

<form action="index.php" method="post">
    <table style = "background: aqua;border: 2px solid black; 
    border-radius: 25px;" style="height: 250 px; width : 50%; " align = "center" >
        <tr style="font-size: 35px;">
            <td colspan="2" style=" border-color: black;
            border-radius: 25px;" align = "center">Student Information</td>
        </tr>
        <tr>
            <td style="font-size: 20px;">Choose Standard</td>
            <td>
                <select name="std" required style="font-size: 25px; border-radius: 10px;">
                    <option value="1">1st</option>
                    <option value="2">2nd</option>
                    <option value="3">3rd</option>
                    <option value="4">4th</option>
                    <option value="5">5th</option>
                    <option value="6">6th</option>
                </select>
            </td>
        </tr>
        <tr style="font-size: 20px;">
            <td>Enter Rollno</td>
            <td>
                <input type = "text" name = "rollno" required style="font-size: 25px; border-radius: 10px;">
            </td>
        </tr>
        <tr>
            <td colspan="2" style="border-color: black;
            border-radius: 25px;" align="center"><input type = "submit" name = "submit" value = "Show info" style="font-size: 25px; border-radius: 10px; width: 20%;"></td>
        </tr>
    </table>
</form>
</div>
</div> 


<table style="width:80%; margin-top:50px;" align="center" border="1px">
    <tr style="background-color:black; color:white">
        <th>Roll no</th>
        <th>Name</th>
        <th>City</th>
        <th>Parent's contact</th>
        <th>Standard</th>
        <th>Photo</th>
    </tr>
</table>
  
</body>