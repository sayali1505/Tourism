<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
        form{
            border:1px solid black;
            margin: 20px 600px 0px 400px;
            padding: 30px;
            background-color: #B0C4DE;
            width: 40%;
        }
    </style>
</head>
<body>
	<form action="new_ex2.php" method="POST">
<?php 
	include('config.php'); 
        
        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'db_tourism';
        
        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

?>

<h2>Day wise Package Report<br></h2>
<b>Enter number of day:</b><input type="number" name="day">

<label for="submit"></label><br><br>
<input type="submit" id="submit" name="btn_submit" placeholder="Save" value="Show Packages">

</body>
</html>
</form>