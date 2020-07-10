<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php session_start();
	?>
</head>
<body>
<?php



  $dbHost='localhost';
  $dbUser='root';
  $dbPassword='';
  $dbName='db_tourism';

  $conn=mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);
if (isset($_POST['submit'])) 
{


$adult=$_POST['adult'];
$child=$_POST['child'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$mobno=$_POST['mobno'];
$id=$_SESSION['package_id'];
$uemail= $_SESSION['Email'];


for ($i=1; $i <= $adult ; $i++) 
{ 
	mysqli_query($conn,"insert into tbl_adults (fname,lname,dob,email,mobno, package_id, user_email) values ('$fname','$lname','$dob','$email','$mobno','$id','$uemail')");	
 	
}
for ($j=1; $j <= $child ; $j++) 
{ 
	mysqli_query($conn,"insert into tbl_children (fname,lname,dob, package_id, user_email) values ('$fname','$lname','$dob','$id','$uemail')");	
 	
}

	
}

?>

</body>
</html>