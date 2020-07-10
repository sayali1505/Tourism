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
$displayblock="States";
$get_names="select state_id,state_name from tbl_states";
$get_names_result=$mysqli->query($get_names)or die(mysql_error());

if (mysqli_num_rows($get_names_result)<1) 
{
	$displayblock.="There is no states";# code...
}
else
	while ($states=mysqli_fetch_array($get_names_result)) {
		$state_id=$states['state_id'];
		$state_name=$states['state_name'];

		$displayblock.="<table><tr><td>State id</td><td>$state_id</td></tr>
		<tr><td>State name</td><td>$state_name</td></tr></table>";
	}
	echo $displayblock;


?>