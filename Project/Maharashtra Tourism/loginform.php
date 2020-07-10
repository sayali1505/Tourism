<?php

$Email=$_POST['Email'];
$pass=$_POST['pass'];

if(isset($_POST['btn_submit']))
{

  $dbHost='localhost';
  $dbUser='root';
  $dbPassword='';
  $dbName='db_tourism';

  $conn=mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

if (!$conn) 
{
  die("connection failed: ".mysqli_connect_error());
}
$check=mysqli_query($conn,"select * from login");
$checkrows=mysqli_num_rows($check);

if(!empty($Email && $pass))
{

if($checkrows>0)
{
  echo "<div class=ck>Already exists in table<br><br><a href=mah_login.html><button float=right>Back</button></a></div>";
  
header('location: mah_login.html');
exit;
}
else
{
  $sql="INSERT INTO login (Email, pass) VALUES ('$Email', '$pass')";

  if (mysqli_query($conn, $sql)) {
  echo "<div class=ck>New record created successfully.<br><br><a href=mah_login.html><button float=right>Back</button></a></div>";
  }
  else{
    echo "<div class=ck>ERROR: <br><br>".$sql. "<br>".mysqli_error($conn);
    echo "<br><a href=loginform.html><button float=right>Back</button></a></div>";
  }
}
}
else{
  echo "<div class=ck>Field should not be empty.<br><br><a href=loginform.html><button float=right>Back</button></a></div>";
}
mysqli_close($conn);


}
?>