<!DOCTYPE html>
<html>
<head>
	<title></title>

     <link rel="stylesheet" type="text/css" href="text.css">
  <style type="text/css">
   body, html {
    height: 100%;
    margin: 0;
}
/*
.bg {
     The image used 
    background-image: url("");

     Full height 
    height: 100%; 


     Center and scale the image nicely   
      background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
      }*/
    
  
		
input[type=text],

select{
	width: 50%;
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

div {
    border-radius: 10px;
    background-image: 
    padding: 20px;

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
   

</center>

<div class="pad" id="bgimg">
      <h1><center><font size="10" color="white" style=" "> WESTERN  &nbsp INDIAN &nbsp  TOURISM</font></center></h1>
</div>
  
<div class="title">
      <font align="center" style="font-family: 'Oleo Script';font-size: 30px"><center style="background-color: black;color: white;padding: 10px 10px"><b>ADMIN &nbsp PANEL</b></center></font>
</div>

<div class="vertical-menu">
  <a href="test.html" class="active">Home</a>
  <a href="new.php">Show states</a>
  <a href="newloc.php">Add Location</a>
  <a href="loc_spot.php">Add Location spot</a>
  <a href="cat.php">Add category</a>
  <a href="#">Create package</a>
  <a href="#">View package</a>
  <a href="#">View user details</a>
  <a href="#">View booking details</a>
  <a href="#">Log out</a>
</div>
 

 <center>
<?php
//require_once 'config.php';
include("config.php");

$sql="select loc_id,loc_name from tbl_location";
$result= mysqli_query($conn,$sql)or die(mysql_error());


if (mysqli_num_rows($result)>0) 
{
    //Output data of each row
    echo "<table border=1px>
            <tr>
              <th>Location id</th>
             <th>Location name</th>
            </tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "     <tr>
                        <td>$row[loc_id]</td>
                        <td>$row[loc_name]</td>
                    </tr>";
    }
    echo "</table>";
}
else
        echo "No result found";

//mysqli_close($conn);

?>

<form action="add_loc.php" method="POST">

		
	<center><h1 style="color: navy">Add Location</h1></center>
<center>

<label for="loc_id"><b>Enter Location id:</b></label>
<input type="text" id="loc_id" name="loc_id" placeholder="Enter Location id "><br>

<label for="loc_name"><b>Enter Location name:</b></label>
<input type="text" id="loc_name" name="loc_name" placeholder="Enter Location name "><br>



<label for="submit"></label>
<input type="submit" id="submit" name="btn_submit1" placeholder="Save" value="Save">



<label for="reset"></label>
<input type="reset" id="reset" name="btn_cancel" placeholder="reset" value="Reset"><br> 

</form>


</body>
</html>