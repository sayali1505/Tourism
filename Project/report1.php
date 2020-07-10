<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="ex1.php" method="POST">
<?php 
	include('config.php'); 
        
        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'db_tourism';
        
        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

?>
<label><b>Categorie name:</b></label>
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

<label for="submit"></label>
<input type="submit" id="submit" name="btn_submit" placeholder="Save" value="Show package">

</body>
</html>
</form>