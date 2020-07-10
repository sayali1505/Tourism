<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		
        table{
    width: 70%;

}
table,th,td {
    border:1px solid black;
  border-collapse: collapse;
}
th,td{
    padding: 15px;
    text-align: justify-all;
}
table#t01 th{
    background-color: green;
    color: white;
}


*{
	margin: 0px;
	padding: 0px;
}
/* Navigation Bar */

  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: mediumseagreen;
    
}

li {
    float: right;
    font-size: 6;
    font color: black;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: gray;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1; 
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

li.dropdown1 {
    display: inline-block;
}

li.head{

  padding-left: 12px;
  padding-top: 8px;
  font-size: 45px;
  font-family: Bradley Hand ITC;
  float: left;
}


/* Sidebar */

.shadow{
	 box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
	 max-width: 300px;
  margin: auto;
  
  margin-left: 5px;
  
  font-family: arial;
  float: left;
  padding-left: 20px;
  padding-right: 40px;
  padding-top: 30px;
  align-content: center;
 
position: fixed;
 height: 100%; 
}
a{
  text-decoration: none;
}


/* package card */
.card {

  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  margin-top: 10px;
  text-align: center;
  font-family: arial;
  float: left;
  padding-left: 10px;
  padding-right: 10px;
  padding-top: 20px;
  align-content: center;
  width: 100%;
  height:440px; 
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: black;
  background-color: lightblue;
  text-align: center;
  cursor: pointer;
  width: 60%;
  font-size: 15px;
margin-top: 2px;
}
.button2 {
background-color: #1E90FF;
}
img{
	height:250px;
	width:250px;
}

.columns 
{
    float: right;
    width: 33.3%;
    padding: 5px;
}
.font{
	font-size: 25px;
}
.font1{
 	font-size: 15px;
 	color: solid black;

}
a{
	color: black;
}
.title{
	text-align: center;
	font-size: 30px;
	color: red;
	margin-bottom: 10px;
	margin-top: 7px;
}

	</style>


</head><body>
<div class="font">
<ul>
  <li><a href="#"><font  color="red">Get a quote</font></a></li>
  <li><a href="#">Blogs</a></li>
  
  <li class="dropdown">
    <a href="#" class="dropbtn">Destinations </a>
    <div class="dropdown-content">
      <a href="#">Mumbai</a>
      <a href="#">Mahabaleshwar</a>
      <a href="#">Pune</a>
      <a href="#">Aurangabad</a>
    </div>
  </li>

  <li class="dropdown">
    <a href="#" class="dropbtn">Packages </a>
    <div class="dropdown-content">
        <a href="#"><font size="5"><b>By Themes</b></font></a>  
      <a href="Beach.php">Beach Holidays</a>
      <a href="Adventure.php">Adventure Tours</a>
      <a href="Family.php">Family Packages</a>
     <!-- <a href="#">Golden triangle tour</a> -->
      <a href="Break.php">Chota break</a>


    </div>
  </li>

  <li><a href="mah_tourism_homepage.html">Home</a></li>

  <li class="head"><b><font color="#b30000">M</font><font color="#ffff99">aharashtra</font> <font color="#b30000">T</font><font color="#ffff99">ourism</font></font></b></li>


</ul>
</div>
    
<?php 



        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'db_tourism';
        
        //Create connection and select DB
                
            
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

        $query = "SELECT package_id,s_id,pac_name,cat_name,days,night,cost,image FROM tbl_create_package where days<=6";  
        	
      		    $result = mysqli_query($db,$query);


    echo "<table>
    <tr><td>Package id</td>
    <td>Package name</td>
    <td>Cities</td>
    <td>Category id</td>
    <td>Days</td>
    <td>Nights</td>
    <td>Image</td></tr>";
    
                if($result->num_rows!=0)
                { 

                    while($row=$result->fetch_array())  
                    {
                        $package_id=$row['package_id'];
                        $image=$row['image'];
                        $state_id=$row['s_id'];
                        $pac_name=$row['pac_name'];
                        $cat_name=$row['cat_name'];
                        $days=$row['days'];
                        $night=$row['night'];
                        $cost=$row['cost'];
                        

                    $q="select pac_name,cities from pac_cities where pac_name='$pac_name'";
             		$res=mysqli_query($db,$q) or mysqli_error();
 					$package="";
 					while ($r=$res->fetch_array()) 
 					{
 						$cities=$r['cities'];
 						$pac=$r['pac_name'];

 						if ($pac_name==$pac) {
 							$package =$package." ".$cities;
 							
 						}

 		         //echo "<div class=columns><div class=card>";
             //echo "<img src='".$row['image']."'>";
echo "<tr>
<td>$row[package_id]</td>
  <td>$row[pac_name]</td>
  <td>$row[cat_name]</td>
  <td>".$package."</td>
  <td>$row[days]</td>
  <td>$row[night]</td>
  <td><img src=".$row['image']."></td>
  </tr></table>";
}
    
    echo " </body>
</html>";
}              
        

      // $q="select pac_name,cities from pac_cities where pac_name=$pac_name";
                   }
                 ?>

