
<?php

$firstname=$_POST['name'];
$address=$_POST['address'];

$email=$_POST['Eid'];
$contact=$_POST['Mno'];
$state=$_POST['state'];
$cities=$_POST['cities'];
$days=$_POST['days'];
$req=$_POST['req'];

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

$sql="insert into  tbl_enquiry (name,address,number,email,state,city,days,requirements) values ('$firstname','$address','$contact','$email','$state','$cities','$days','$req')";
$result=mysqli_query($conn,$sql);

if ($result) {
  header("Location: Travel.php");
}
else{
  echo "Error";
}

mysqli_close($conn);



//$con= mysql_connect("localhost"," "," ") or die(mysql_error());

//mysql_select_db("db_tourism","$con") or die(mysql_error());

}
?>