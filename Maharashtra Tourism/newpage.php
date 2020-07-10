<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

  $dbHost='localhost';
  $dbUser='root';
  $dbPassword='';
  $dbName='db_tourism';

  $conn=mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

	mysqli_query($conn,"insert into tbl_book () values ()");
?>
</body>
</html>