<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="sample_booking.php" method="POST">
	<label>Rooms</label>
	<select name="model">
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
	</select>
	<input type="submit" name="submit">
</form>
<?php

$model=$_POST['model'];

if ($model==1) {?>
<label>Adult(12 years above)</label>
<select>
	<option>0</option>
	<option>1</option>
	<option>2</option>
	<option>3</option>
	<option>4</option>
	<option>5</option>
</select>

<?php }
?>


</body>
</html>