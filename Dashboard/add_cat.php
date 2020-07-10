<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
    .ck{
      background-color: silver;
      border: 1px solid black;
      text-align: center;
      padding: 20px 20px 20px 20px;
      margin-left: 250px;
      margin-right: 250px;
      margin-top: 200px;
    }
  </style>
</head>
<body>

</body>
</html>


<?php

//$loc_spot_id=$_POST['loc_spot_id'];
$cat_name=$_POST['cat_name'];
$cat_desc=$_POST['cat_desc'];


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

$check=mysqli_query($conn,"select * from tbl_categories where  cat_name='$cat_name'");
$checkrows=mysqli_num_rows($check);

if(!empty( $cat_name))
{

  if($checkrows>0)
  {
    echo "<div class=ck>Already exists in table<br><br><a href=select_category.php><button float=right>Back</button></a></div>";
  }
  else
  {
  $sql= "INSERT INTO tbl_categories (cat_name,cat_desc) VALUES ('$cat_name','$cat_desc')";

    if (mysqli_query($conn, $sql)) {
      echo "<div class=ck>New record created successfully<br><br><a href=select_category.php><button float=right>Back</button></a></div>";
    }
    else{
      echo "<div class=ck>ERROR: <br><br>".$sql. "<br>".mysqli_error($conn);
    echo "<br><a href=select_category.php><button float=right>Back</button></a></div>";
    }
  }
}
else{
  echo "<div class=ck>Field should not be empty.<br><br><a href=select_category.php><button float=right>Back</button></a></div>";
}
mysqli_close($conn);



//$con= mysql_connect("localhost"," "," ") or die(mysql_error());

//mysql_select_db("db_tourism","$con") or die(mysql_error());



}


?>