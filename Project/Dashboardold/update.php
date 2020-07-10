<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php
include("config.php");
$state_id="";
$state_name="";

//get data from form
function getdata()
{
	$data=array();
	$data[0]=$_POST['state_id'];
	$data[1]=$_POST['state_name'];
	return $data;
}
//update edit
if (isset($_POST['update'])) 
{
	$info= getdata();
	$update_query="UPDATE `tbl_states` SET `state_id`='$info[0]',`state_name`='$info[1]' WHERE state_id='$info[0]'";
	try{
		$update_result=mysqli_query($conn,$update_query);
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
	}catch(Exception $ex){
		echo "Error in update".$ex->getMessage();
	}
	# code...
}

?>

<form action="update.php" method="POST">

		
	<center><h1 style="color: navy">Add States</h1></center>
<center>

<label for="state_id"><b>Enter state id:</b></label>
<input type="text" id="state_id" name="state_id" placeholder="Enter state id " value="<?php echo($data[0])?>"><br><br>

<label for="state_name"><b>Enter state name:</b></label>
<input type="text" id="state_name" name="state_name" placeholder="Enter state name " value="<?php echo($state_name) ?>"><br><br>

<input type="submit" name="update"  value="update">
<input type="submit" name="edit" value="edit">
<input type="submit" name="delete" value="delete">
<input type="submit" name="search" value="search">

 
</div>
</form>

</body>
</html>