<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="nav.css">
	<style type="text/css">
		table{
    width: 30%;

}
table,th,td {
    border:1px solid black;
    border-collapse: collapse;
}
th,td{
    padding: 10px;
    text-align: center;
}
table#t01 th{
    background-color: green;
    color: white;
}

.pad1{
    padding-top: 30px;
    margin-left: 45%;
}
	</style>

	
</head>
<body>


	<div class="pad" id="bgimg">
      <h1><center><font size="10" color="white" style=" "> WESTERN  &nbsp INDIAN &nbsp  TOURISM</font></center></h1>
</div>
  
<div class="title">
      <font align="center" style="font-family: 'Oleo Script';font-size: 30px"><center style="background-color: black;color: white;padding: 10px 10px"><b>ADMIN &nbsp PANEL</b></center></font>
</div>


<div class="main-nav">
	<ul class="main-nav-ul">
		<li class="active"><a href="nav.html" class="active">Home</a></li>
		<li><a href="">states<span></span></a>
			<ul>
				<li><a href="states.php">Add states</a></li>
				<li><a href="show_states.php">Show states</a></li>
				
			</ul>
		</li>

		<li><a href="#">locations</a>
			<ul>
				<li><a href="locations.php">Add locations</a></li>
				<li><a href="show_loc.php">View Locations</a></li>
			</ul>
		</li>
		<li><a href="#">Location spots<span></span></a>
			<ul>
				<li><a href="#">Add spots</a></li>
				<li><a href="#">View spots</a></li>
				
			</ul>
		</li>
		<li><a href="#">Categories<span></span></a>
			<ul>
				<li><a href="#">Add categories</a></li>
				<li><a href="#">View categories</a></li>
				
			</ul>
		</li>
		<li><a href="#">Packages<span></span></a>
			<ul>
				<li><a href="#">Create package</a></li>
				<li><a href="#">View packages</a></li>
				
			</ul>
		</li>



		<li><a href="#">Logout</a></li>
	</ul>
</div>
<div class="pad1">
<?php


//require_once 'config.php';
include("config.php");

$sql="select state_id,state_name from tbl_states";
$result= mysqli_query($conn,$sql)or die(mysql_error());


if (mysqli_num_rows($result)>0) 
{
    //Output data of each row
    echo "<table id=t01 align=center>
            <tr>
              <th>State id</th>
             <th colspan=2>State name</th>
            </tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "     <tr>
                        <td>$row[state_id]</td>
                        <td>$row[state_name]</td>
                        <td><a href=newedit1.php?newedit1=$row[state_id]>Edit</a></td>
                    </tr>";
    }
    echo "</table>";
}
else
        echo "No result found";

//mysqli_close($conn);


?>
</div>
</body>
</html>
