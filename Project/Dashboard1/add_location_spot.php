<?php

$loc_spot_id=$_POST['loc_spot_id'];
$loc_id=$_POST['loc_id'];
$loc_spot_name=$_POST['loc_spot_name'];
$loc_spot_desc=$_POST['loc_spot_desc'];

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
$sql="INSERT INTO tbl_loc_spot (loc_spot_id, loc_spot_location_id, loc_spot_name, loc_spot_desc) VALUES ('$loc_spot_id', '$loc_id', '$loc_spot_name','$loc_spot_desc')";

if (mysqli_query($conn, $sql)) {
	echo "New record created successfully";
}
else{
	echo "ERROR: ".$sql."<br>".mysql_error($conn);
}

mysqli_close($conn);



//$con= mysql_connect("localhost"," "," ") or die(mysql_error());

//mysql_select_db("db_tourism","$con") or die(mysql_error());



}
?>