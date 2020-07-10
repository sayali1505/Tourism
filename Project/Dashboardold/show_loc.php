<!DOCTYPE html>
<html>
<head>
	<title></title>

     <link rel="stylesheet" type="text/css" href="nav.css">
  

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
    text-align: center;
    margin-left: 35%;
}
.pad2{
  margin-top: 20px;
  margin-left: 20px;
  margin-right: 20px;
  padding-top: 30px;
  margin-left: 24%;
  border:1px solid black;
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
    <li><a href="#">states<span></span></a>
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

include("config.php");

$sql="select loc_id,loc_name from tbl_location";
$result= mysqli_query($conn,$sql)or die(mysql_error());


if (mysqli_num_rows($result)>0) 
{
    //Output data of each row
    echo "<table  id=t01 border=1px>
            <tr>
              <th>Location id</th>
             <th colspan=2>Location name</th>
            </tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "     <tr>
                        <td>$row[loc_id]</td>
                        <td>$row[loc_name]</td>
                        <td><a href=newedit2.php?newedit2=$row[loc_id]>Edit</a></td>
                    </tr>";
    }
    echo "</table>";
}
else
        echo "No result found";



?>
</div>
</body>
</html>