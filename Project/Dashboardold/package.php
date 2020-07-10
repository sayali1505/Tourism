<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			margin-left: 20px;
			margin-top: 35px;
		}
	</style>
</head>
<body>
	<form action="add_package.php" method="POST">
<h2>Package creation</h2>



<label for="name"><b>Enter package name:</b></label><br>
<input type="text" id="name" name="name" placeholder="Package name" value=""><br><br>

<label for="cities"><b>Enter cities to visit:</b></label><br>
<input type="text" id="city" name="cities" placeholder="cities to visit" value=""><br><br>

<label for="days"><b>Enter number of days:</b></label><br>
<input type="text" id="days" name="days" placeholder="number of days" value=""><br><br>

<label for="nights"><b>Enter number of nights:</b></label><br>
<input type="text" id="nights" name="nights" placeholder="Number of nights" value=""><br><br>

<label for="cost"><b>Enter total cost(per person):</b></label><br>
<input type="text" id="cost" name="cost" placeholder="Total cost" value=""><br><br>


<label for="pac_desc"><b>Enter package description:</b></label><br>
<textarea name=pac_desc cols=70 rows=10 wrap value=pac_desc></textarea><br><br>


<label for="submit"></label>
<input type="submit" id="submit" name="btn_submit" placeholder="Create" value="Save">



</form>
</body>
</html>