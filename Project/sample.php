<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		

*{
	margin: 0px;
	padding: 0px;
}
/* Navigation Bar */

 ul {
    list-style-type: none;
    margin: 0;
    padding: 0px;
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


/* Sidebar */

.shadow{
	 box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
	 max-width: 300px;
  margin: auto;
  margin-top: 10px;
  margin-left: 5px;
  text-align: center;
  font-family: arial;
  float: left;
  padding-left: 20px;
  padding-right: 40px;
  padding-top: 30px;
  align-content: center;
 border:1px solid black;
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
  padding-left: 20px;
  padding-right: 40px;
  padding-top: 30px;
  align-content: center;
  width: 100%;
  height:400px; 
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
  width: 100%;
  font-size: 18px;
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
      <a href="#">Beach Holidays</a>
      <a href="#">Adventure Tours</a>
      <a href="#">Family Packages</a>
      <a href="#">Golden triangle tour</a>
      <a href="#">Chota break</a>


    </div>
  </li>

  <li><a href="#">Home</a></li>
</ul>
</div>


<div class="shadow">
	<div class="font1">
		<font size="6px" color="red">
			Trip Themes<br><br></font>
			<font size="4px" color="Black">
			
	<a href="#"><input type="checkbox" name="checkbox">Adventure Tours</a><br><br>
	<a href="#"><input type="checkbox" name="checkbox">Family Package </a><br><br>
	<a href="#"><input type="checkbox" name="checkbox">Golden Triangle</a><br><br>
	<a href="#"><input type="checkbox" name="checkbox">Chota break</a><br><br>
	<a href="#"><input type="checkbox" name="checkbox">Beach Holidays</a><br><br>
	<a href="#"><input type="checkbox" name="checkbox">Adventure Tours</a><br><br>
</font>
</div>
</div>


<div class="title">
	MAHARASHTRA TOUR PACKAGES
</div>

<?php 



        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'db_tourism';
        
        //Create connection and select DB
                
            
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

        $query = "SELECT package_id,s_id,pac_name,cat_name,days,night,cost,image FROM tbl_create_package";  
        	
      		    $result = mysqli_query($db,$query);
                if($result->num_rows!=0)
                { 

                    while($row=$result->fetch_array())  
                    {
                        $packageid=$row['package_id'];
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
}
 						
 					
             echo '<div class=columns><div class=card>

  <img class=img src="data:image/jpg;base64,'.base64_encode($row['image']).'" alt=John style=width:100% ;height:20%><br>
  <h3>'.($row['pac_name']).'</h3><br>
  <h4>'.$package.'</h4><br>
    Days:'.($row['days']).'<br>';
    
    echo "   <a href=view_details.php?id=$row[package_id]><p><button>View Details</button></p></a>
</div></div></body>
</html>";
              
        
}
      // $q="select pac_name,cities from pac_cities where pac_name=$pac_name";
                   }
                 