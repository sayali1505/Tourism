<?php

$state=$_POST['state'];
$name=$_POST['name'];
$city=$_POST['city'];
$cat=$_POST['cat'];
$days=$_POST['days'];
$nights=$_POST['nights'];
$cost=$_POST['cost'];
//$description=$_POST['pac_desc'];

$image=$_POST['image'];
//$check = getimagesize($_FILES["image"]["tmp_name"]);
  //if($check !== false){
    //$image = $_FILES['image']['tmp_name'];
    //$imgContent = addslashes(file_get_contents($image));



$day=$_POST['txtbox'];
$p_desc=$_POST['txtbox1'];
//$pid=$_POST['pid'];



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

    $sql= "INSERT INTO tbl_create_package(s_id,pac_name,cat_name,days,night,cost,image) VALUES ( '$state','$name','$cat','$days','$nights','$cost','$image')";

    if (mysqli_query($conn, $sql)) {
      echo "<div class=ck>New record created successfully<br><br><a href=create_package.php><button float=right>Back</button></a></div>";
    }
    else{
      echo "<div class=ck>ERROR: <br><br>".$sql."<br>".mysqli_error($conn);
    echo "<br><a href=create_package.php><button float=right>Back</button></a></div>";
    }

$city= $_POST['city'];
if ($city) {
	foreach ($city as $c) {
		mysqli_query($conn,"INSERT INTO pac_cities ( pac_name,cities) VALUES ( '$name','$c')");
			}
}

$i=0;

for($i=0;$i<count($day);$i++){
mysqli_query($conn,"insert into iternary(day,p_desc,pac_name) values('$day[$i]','$p_desc[$i]','$name')");	
}

mysqli_close($conn);
}


?>
