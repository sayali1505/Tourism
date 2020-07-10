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
	<form action="new_ex1.php" method="POST">
<?php 
	include('config.php'); 
        
        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'db_tourism';
        
        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

?>
<h2>Category wise Package Report<br></h2>
<label><b>Categorie name:</b></label><br><br>
<select name="cat">
<option>----Select Categories name-----</option>

<?php
        $sql="SELECT cat_id,cat_name FROM tbl_categories";
            $res=$db->query($sql);

            if ($res->num_rows!=0) 
            {
                while ($r=$res->fetch_assoc()) 
                    {
                        echo "<option value='".$r['cat_id']."'>".$r['cat_name']."</option>";
                    }   
            }
        ?>
    </select><br>

<label for="submit"></label><br>
<input type="submit" id="submit" name="btn_submit"  value="Show packages" >
</center>
</body>
</html>
</form>