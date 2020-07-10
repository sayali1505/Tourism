<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">
div{

	margin-left: 25%;
	margin-top: 10%;
	margin-right: 15%;
	padding: 20px 20px 20px 20px;
	border: 1px solid  black;
}
		input[type=text],

select{
	width: 30%;
	padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;

}
input[type=submit] {
    width: 15%;
    background-color: darkgreen;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: 1px solid gray;
    border-radius: 4px;
    cursor: pointer;
}
input[type=submit]:hover {
    background-color: green;
}


input[type=reset] {

	width: 15%;
    background-color: red;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: 1px solid gray;
    border-radius: 4px;
    cursor: pointer;
    align-content: center;

}
input[type=reset]:hover {
    background-color: gray;
}
.font{
	size: 4;
	color: black;
	padding-left: 18%;
	padding-top: 15%;

}

	</style>
</head>
<body>

<?php
	include_once('config.php');

	if( isset($_GET['newedit3']) )
	{
		$loc_spot_id = $_GET['newedit3'];
		$res= mysqli_query($conn,"SELECT * from tbl_loc_spots WHERE loc_spot_id='$loc_spot_id'");
		$row=mysqli_fetch_array($res);
		$id=$row['loc_spot_id'];
		$name=$row['loc_spot_name'];
		$desc=$row['loc_spot_desc'];
		$loc_id=$row['loc_spot_location_id'];

	

	echo	"<div><form action=newedit3.php method=POST>
<input type=hidden name=oldloc_spot_id value=$loc_spot_id>
Spot id: <input type=text name=newspot_id value=$id><br />
Spot name:<input type=text name=newspot_name value=$name><br>

Spot description<textarea name=newspot_desc cols=40 rows=10 wrap value=$desc>$desc</textarea><br>
location id:<input type=text name=newloc_id value=$loc_id><br>
<input type=submit value=update name=update>
</form>";

	}
 
	if(isset($_POST['update']) )
	{
	
	    $oldloc_spot_id=$_POST['oldloc_spot_id'];
		$newspot_name = $_POST['newspot_name'];
		$newspot_id = $_POST['newspot_id'];
		$newspot_desc=$_POST['newspot_desc'];

	  $sql = "UPDATE tbl_loc_spots SET loc_spot_id='$newspot_id' , loc_spot_name='$newspot_name' , loc_spot_desc='$newspot_desc' WHERE loc_spot_id='$oldloc_spot_id'";

		$update_result=mysqli_query($conn,$sql);
		if ($update_result) 
		{
			if (mysqli_affected_rows($conn)>0) 
			{
			echo("Data updated");	
			}
			else{
				echo "Data not updated";
			}
			
		}
		$res= mysqli_query($conn,$sql) or die("Could not update".mysql_error());
		echo "<meta http-equiv='refresh' content='0;url=show_loc_spot.php'>";
	echo "</div>";
}
?>
	

</body>
</html>
