<?php

//$loc_spot_id=$_POST['loc_spot_id'];
$loc_spot_name=$_POST['loc_spot_name'];
$loc_spot_desc=$_POST['loc_spot_desc'];
$id=$_POST['modelnm'];

if(isset($_POST['btn_submit1']))
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

$check=mysqli_query($conn,"select * from tbl_loc_spots where  loc_spot_name='$loc_spot_name'");
$checkrows=mysqli_num_rows($check);

if(!empty( $loc_spot_name))
{

  if($checkrows>0)
  {
    echo "<div class=ck>Already exists in table<br><br><a href=loc_spot.php><button float=right>Back</button></a></div>";
  }
  else
  {
    $sql= "INSERT INTO tbl_loc_spots ( loc_spot_name,loc_spot_desc,loc_spot_location_id) VALUES ( '$loc_spot_name','$loc_spot_desc','$id')";

    if (mysqli_query($conn, $sql)) {
      echo "<div class=ck>New record created successfully<br><br><a href=loc_spot.php><button float=right>Back</button></a></div>";
    }
    else{
      echo "<div class=ck>ERROR: <br><br>".$sql. "<br>".mysqli_error($conn);
    echo "<br><a href=loc_spot.php><button float=right>Back</button></a></div>";
    }
  }
}
else{
  echo "<div class=ck>Field should not be empty.<br><br><a href=loc_spot.php><button float=right>Back</button></a></div>";
}
mysqli_close($conn);



//$con= mysql_connect("localhost"," "," ") or die(mysql_error());

//mysql_select_db("db_tourism","$con") or die(mysql_error());



}


?>