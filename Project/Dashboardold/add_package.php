<?php


$name=$_POST['name'];
$cities=$_POST['cities'];
$days=$_POST['days'];
$nights=$_POST['nights'];
$cost=$_POST['cost'];
$pac_desc=$_POST['pac_desc'];

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

    $sql= "INSERT INTO package ( pac_name,cities,days,nights,cost,description) VALUES ( '$name','$cities','$days','$nights','$cost','$pac_desc')";

    if (mysqli_query($conn, $sql)) {
      echo "<div class=ck>New record created successfully<br><br><a href=package.php><button float=right>Back</button></a></div>";
    }
    else{
      echo "<div class=ck>ERROR: <br><br>".$sql. "<br>".mysqli_error($conn);
    echo "<br><a href=package.php><button float=right>Back</button></a></div>";
    }

mysqli_close($conn);



//$con= mysql_connect("localhost"," "," ") or die(mysql_error());

//mysql_select_db("db_tourism","$con") or die(mysql_error());



}


?>