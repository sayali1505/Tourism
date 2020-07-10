<?php
$state_id=$_POST['state_id'];
$state_name=$_POST['state_name'];

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
$sql="INSERT INTO tbl_states (state_id, state_name) VALUES ('$state_id', '$state_name')";

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