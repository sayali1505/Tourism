<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">
div{

	margin-left: 25%;
	margin-top: 15%;
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

	if( isset($_GET['newedit2']) )
	{
		$loc_id = $_GET['newedit2'];
		$res=mysqli_query($conn,"select * from tbl_location WHERE loc_id='$loc_id'");
		$row=mysqli_fetch_array($res);
		$id=$row['loc_id'];
		$name=$row['loc_name'];

	

	echo	"<div><form action=newedit2.php method=POST>
<input type=hidden name=oldloc_id value=$loc_id>
Location name: <input type=text name=newloc_name value=$name><br />
Location id:<input type=text name=newloc_id value=$id>
<input type=submit value=update name=update>
<input type=submit value=Delete name=Delete>
</form>";

	}
 
	if(isset($_POST['update']) )
	{
	
	    $oldloc_id=$_POST['oldloc_id'];
		$newloc_name = $_POST['newloc_name'];
		$newloc_id = $_POST['newloc_id'];
		

	$sql="update tbl_location SET loc_id='$newloc_id' , loc_name='$newloc_name'  WHERE loc_id='$oldloc_id'";

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
		echo "<meta http-equiv='refresh' content='0;url=locations.php'>";
	echo "</div>";
}
if (isset($_POST['Delete'])) 
	{
		$query1="DELETE from tbl_location WHERE loc_id=$loc_id";
		$result1=$db->query($query1) or die('failed');

		if ($result1) 
		{
			echo "Deleted";
		}
		else
		{
			echo "sorry";
		}
	
		$resn= mysqli_query($conn,$sql) or die("Could not delete()".mysql_error());
		echo "<meta http-equiv='refresh' content='0;url=locations.php'>";
	}
?>
	

</body>
</html>
