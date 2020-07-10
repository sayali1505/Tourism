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
		$cat_id = $_GET['newedit3'];
		$res= mysqli_query($conn,"SELECT * from tbl_categories WHERE cat_id='$cat_id'");
		$row=mysqli_fetch_array($res);
		$id=$row['cat_id'];
		$name=$row['cat_name'];
		$desc=$row['cat_desc'];
		

	

	echo	"<div><form action=newedit3.php method=POST>
<input type=hidden name=oldcat_id value=$cat_id>
Category id: <input type=text name=newcat_id value=$id><br />
Category name:<input type=text name=newcat_name value=$name><br>

Category description<textarea name=newcat_desc cols=40 rows=10 wrap value=$desc>$desc</textarea><br>

<input type=submit value=update name=update>
</form>";

	}
 
	if(isset($_POST['update']) )
	{
	
	    $oldcat_id=$_POST['oldcat_id'];
		$newcat_name = $_POST['newcat_name'];
		$newcat_id = $_POST['newcat_id'];
		$newcat_desc=$_POST['newcat_desc'];

	  $sql = "UPDATE tbl_categories SET cat_id='$newcat_id' , cat_name='$newcat_name' , cat_desc='$newcat_desc' WHERE cat_id='$oldcat_id'";

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
		echo "<meta http-equiv='refresh' content='0;url=show_cat.php'>";
	echo "</div>";
}
?>
	

</body>
</html>
