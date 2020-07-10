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
    <center>
	<form action="new_exprice.php" method="POST">
<?php 
	include('config.php'); 
        
        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'db_tourism';
        
        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

?>
<h2>Price wise Package Report<br></h2>
<label><b>Enter price range from <input type="text" name="srange"> to <input type="text" name="erange"></b></label><br><br>

<label for="submit"></label><br>
<input type="submit" id="submit" name="btn_submit"  value="Show packages" >
</center>
</body>
</html>
</form>