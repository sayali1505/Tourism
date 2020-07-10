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

	if( isset($_GET['newedit1']) )
	{
		$state_id 	= $_GET['newedit1'];
		$res= mysqli_query($conn,"SELECT * from tbl_states WHERE state_id='$state_id'");
		$row= mysqli_fetch_array($res);
		$id=$row['state_id'];
		$name=$row['state_name'];

	

	echo	"<div><form action=newedit1.php method=POST>
<input type=hidden name=oldstate_id value=$state_id>
State name: <input type=text name=newstate_name value=$name><br />
State id:<input type=text name=newstate_id value=$id>
<input type=submit value=update name=update>
</form>";

	}
 
	if(isset($_POST['update']) )
	{
	
	    $oldstate_id=$_POST['oldstate_id'];
		$newstate_name = $_POST['newstate_name'];
		$newstate_id = $_POST['newstate_id'];
		

	$sql     = "UPDATE tbl_states SET state_id='$newstate_id' , state_name='$newstate_name'  WHERE state_id='$oldstate_id'";

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
		echo "<meta http-equiv='refresh' content='0;url=show_states.php'>";
	echo "</div>";
}
?>
	

</body>
</html>
