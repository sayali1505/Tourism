	<?php include("db.php"); ?>
	<?php
	if(isset($_POST['s_id'])) {
	$sql = "select * from `locations` where `loc_state_id`=".mysqli_real_escape_string($con,$_POST['s_id']);
	$res = mysqli_query($con, $sql);
	if(mysqli_num_rows($res) > 0) {
	echo "<option value=''>------- Select --------</option>";
	while($row = mysqli_fetch_array($res)) {
	//echo "<option value='".$row->loc_id."'>".$row->loc_name."</option>";
	echo "<option value='".$row['loc_id']."'>".$row['loc_name']."</option>";
	}
	}
	} else {
	header('location spot: ./');
	echo "Hello";
	}
	?>

