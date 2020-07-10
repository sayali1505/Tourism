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
  margin-left: 20%;
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

/* Overview */
.overview{

    margin-top: 10px;
    margin-top: 18px;
    padding-left: 80px;
    padding-right: 80px;
    font-size: 25px;
    color: blue;
}

/* Itenarary */
.itenarary{

    margin-top: 18px;
    padding-right: 80px;
    padding-left: 80px;

    background-color: #fff9c6;
  
    font-size: 25px;

}
.side{
  border:1px solid black;
  margin: 20px;
}
.name{
  text-align: center;
  font-size: 25px;
  color: red;
}
.fontsize{
  font-size: 20px;
  margin-left: 15%;
}
.price{
  font-size:20px;
  color:red; 
  margin-left: 75%;

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

        $query = "SELECT s_id,pac_name,cat_name,days,night,cost,pac_desc,image FROM tbl_create_package";  
        	
      		    $result = mysqli_query($db,$query);
                if($result->num_rows!=0)
                { 

                    while($row=$result->fetch_array())  
                    {
                        $image=$row['image'];
                        $state_id=$row['s_id'];
                        $pac_name=$row['pac_name'];
                        $cat_name=$row['cat_name'];
                        $days=$row['days'];
                        $night=$row['night'];
                        $cost=$row['cost'];
                        $pac_desc=$row['pac_desc'];

                        

                    $q="select pac_name,cities from pac_cities where pac_name='$pac_name'";
             		$res=mysqli_query($db,$q) or mysqli_error();
 					$package="";
 					while ($r=$res->fetch_array()) 
 					{
 						$cities=$r['cities'];
 						$pac=$r['pac_name'];

 						if ($pac_name==$pac) {
 							$package =$package." ".$cities;
 							//$array1=array($cities);
 							//print_r($array1);
 						}
          }
            $q1="select cat_name,cat_desc from tbl_categories where cat_id='$cat_name'";
            $res=mysqli_query($db,$q1) or mysqli_error();
          $name="";
          while ($r=$res->fetch_array()) 
          {
            $cat_name=$r['cat_name'];
            $cat_desc=$r['cat_desc'];

            $name =$name." ".$cat_name."<br>".$cat_desc;
          }
 						
 					
             echo '<div class=side>
              <div class=name><h3>'.($row['pac_name']).'</h3></div><br>
             <img class=img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" alt=John style=width:70% ;height:30%; margin-left:20%;margin-right:20%><br>
  
            <p class=price>PRICE:'.($row['cost']).'</p>
             <div class=fontsize><h4>Destinations:'.$package.'<br>
             Days:'.($row['days']).'<br>
             Nights:'.($row['night']).'</h4><br>
             </div>
             <div class=overview><font color=red>Overview:</font><br>'.$name.'</div>

                  
            <div class=itenarary>Iternary:<br><br>'.($row['pac_desc']).'</div></div>
              </body>
              </html>';
                            
        
}
  }
                 








































