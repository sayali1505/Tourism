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
<a style="float: right;" href="locations.php">Back</a>
</body>
</html>
<?php
$loc_id=$_POST['loc_id'];
$loc_name=$_POST['loc_name'];
$sid=$_POST['modelnm'];

$dbHost='localhost';
	$dbUser='root';
	$dbPassword='';
	$dbName='db_tourism';

	$conn=mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

if(isset($_POST['btn_submit1']))
{

	
if (!$conn) 
{
	die("connection failed: ".mysqli_connect_error());
}

$check=mysqli_query($conn,"select * from tbl_location where loc_id='$loc_id' and loc_name='$loc_name'");
$checkrows=mysqli_num_rows($check);



if(!empty($loc_id && $loc_name))
{

	if($checkrows>0)
	{
		echo "<div class=ck>Already exists in table<br><br><a href=locations.php><button float=right>Back</button></a></div>";
	}
	else
	{
		$sql= "INSERT INTO tbl_location (loc_id, loc_name ,loc_state_id) VALUES ('$loc_id', '$loc_name','$sid')";

		if (mysqli_query($conn, $sql)) {
			echo "<div class=ck>New record created successfully<br><br><a href=locations.php><button float=right>Back</button></a></div>";
		}
		else{
			echo "<div class=ck>ERROR: <br><br>".$sql. "<br>".mysqli_error($conn);
		echo "<br><a href=locations.php><button float=right>Back</button></a></div>";
		}
	}
}
else{
	echo "<div class=ck>Field should not be empty.<br><br><a href=locations.php><button float=right>Back</button></a></div>";
}
mysqli_close($conn);



//$con= mysql_connect("localhost"," "," ") or die(mysql_error());

//mysql_select_db("db_tourism","$con") or die(mysql_error());



}
?>