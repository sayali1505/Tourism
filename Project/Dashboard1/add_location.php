<?php

$loc_id=$_POST['loc_id'];
$loc_name=$_POST['loc_name'];
$loc_state_id=$_POST['loc_state_id'];

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
$sql="INSERT INTO tbl_location (loc_id, loc_name, loc_state_id) VALUES ('$loc_id','$loc_name','$loc_state_id')";

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