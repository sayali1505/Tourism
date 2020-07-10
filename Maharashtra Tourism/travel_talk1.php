
<?php

$name=$_POST['name'];
$address=$_POST['address'];
$Mno=$_POST['Mno'];
$Eid=$_POST['Eid'];
$Gender=$_POST['Gender'];

if(isset($_POST['button']))
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


$check=mysqli_query($conn,"select * from tbl_traveltalk "); 
$checkrows=mysqli_num_rows($check);

if(!empty($name && $Eid))
{

if($checkrows>0)
{
  echo "<div class=ck>Already exists in table<br><br><a href=travel_talk1.php><button float=right>Back</button></a></div>";
}
else
{
  $sql="INSERT INTO tbl_traveltalk (name,address,Mno,Eid,Gender) VALUES ('$name', '$address','Mno','Eid','Gender')";

  if (mysqli_query($conn, $sql)) {
  echo "<div class=ck>New record created successfully.<br><br><a href=travel_talk1.php><button float=right>Back</button></a></div>";
  }
  else{
    echo "<div class=ck>ERROR: <br><br>".$sql. "<br>".mysqli_error($conn);
    echo "<br><a href=travel_talk1.php><button float=right>Back</button></a></div>";
  }
}
}
else{
  echo "<div class=ck>Field should not be empty.<br><br><a href=travel_talk1.php><button float=right>Back</button></a></div>";
}
mysqli_close($conn);



//$con= mysql_connect("localhost"," "," ") or die(mysql_error());

//mysql_select_db("db_tourism","$con") or die(mysql_error());

}
?>