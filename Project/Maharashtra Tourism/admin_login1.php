<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>

<?php
if (isset($_POST['submit'])) 
{
  $email=$_POST['Email'];
  $pass=$_POST['pass'];
/*
  $dbHost='localhost';
  $dbUser='root';
  $dbPassword='';
  $dbName='db_tourism';

  $conn=mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);*/

if ($email=="admin" && $pass=="admin123") {
    header ("Location: new_adminpanel.html");
  }  
}
?>