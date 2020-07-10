<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="ex2.php" method="POST">
<?php 
	include('config.php'); 
        
        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'db_tourism';
        
        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

?>
<b>Enter number of day:</b><input type="number" name="day">

<label for="submit"></label>
<input type="submit" id="submit" name="btn_submit" placeholder="Save" value="Show Packages">

</body>
</html>
</form>