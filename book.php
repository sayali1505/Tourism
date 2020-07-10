<!DOCTYPE html>
<html>
<head>
	<title></title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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


/*bottom navigation bar*/

.navbar {
  overflow: hidden;
  background-color: #333;
  position:;
  bottom: 0;
  width: 100%;
  background-color: mediumseagreen;
  margin-top: 30px;
}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background: gray;
  color: black;
}

.navbar a.active {
  background-color: #4CAF50;
  color: white;
}


/* footer */

.footer {

   position: relative;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: gray;
   color: white;
   text-align: center;

}


.fa {
  
  padding: 10px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin-bottom: 5px;
  margin-top: 5px;
  margin-right: 20px;
  float: right;

}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}


/* Book_now */

input[type=text],
select{

    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
   
    border-radius: 4px;
    box-sizing: border-box;
    
    margin-bottom: 8px;
}
input[type=text]:hover{
  border-bottom: 3px solid darkgreen;
}
input[type=number]{
  width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    border-bottom: darkgreen;
    margin-bottom: 8px;

}
.bgimg{
        background-image: url();
        width: 100%;
        height: 500px;
        padding-bottom: 80px;
        padding-right: 0px;
        background-repeat: no-repeat;
        margin-bottom: 0px;
        margin-right:px;
        padding-top: 20px;

}

.border{

    border: 1px solid black;
    margin-left: 200px;
    margin-right: 200px;
    padding-bottom: 2px;
    margin-bottom: 2px;           
    padding-left: 10px;
}


/* Booking  */

button.booking{
    
    color: darkorange;
    cursor: pointer;
    padding: 10px;
    margin:center;
    border: 4px;
    outline- color: black;
    font-size: 30px;
    transition: 0.4s;
    background-color: green;
    margin-left: 20px;
    margin-top: 20px;
    margin-bottom: 45px;
    padding-bottom: 15px;
    width: 15%;
    color: white;

}

button.booking:hover {
    background-color:red;
}

/* footer */

.footer {

   position: relative;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: gray;
   color: white;
   text-align: center;

}


.fa {
  
  padding: 10px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin-bottom: 5px;
  margin-top: 5px;
  margin-right: 20px;
  float: right;

}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}




</style>

</head>
<body>

<ul>

  <li><a href="Travel_Talk1.html"><font  color="red" size="4">Get a quote</font></a></li>
  <li><a href="#"><font size="4">Blogs</font></a></li>
  
  <li class="dropdown">
    
    <a href="#" class="dropbtn"><font size="4">Destinations</font> </a>
    <div class="dropdown-content">
      
      <a href="#"><font size="4">Mumbai</font></a>
      <a href="#"><font size="4">Mahabaleshwar</font></a>
      <a href="#"><font size="4">Pune</font></a>
      <a href="#"><font size="4">Kolhapur</font></a>
    
    </div>
    
  </li>

  <li class="dropdown">
    <a href="#" class="dropbtn"><font size="4">Packages</font> </a>
    <div class="dropdown-content">
        <a href="#"><font size="4"><b>By Themes</b></font></a>  
      <a href="mah_packages.html"><font size="4">Beach Holidays</font></a>
      <a href="#"><font size="4">Adventure Tours</font></a>
      <a href="#"><font size="4">Family Packages</font></a>
      <a href="#"><font size="4">Golden triangle tour</font></a>
      <a href="#"><font size="4">Chota break</font></a>
     

    </div></li>
    

  <li><a href="mah_tourism_home.html"><font size="4">Home</font></a></li>

</ul>


<?php

/*


        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'db_tourism';
        
        //Create connection and select DB
                
            
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

        $query = "SELECT * FROM register";  
          
              $result = mysqli_query($db,$query);
                if($result->num_rows!=0)
                { 

                    while($row=$result->fetch_array())  
                    {
                        $name=$row['f_name'];
                        $Email=$row['image'];
                        $state_id=$row['s_id'];
                        $pac_name=$row['pac_name'];
                        $cat_name=$row['cat_name'];
                        $days=$row['days'];
                        $night=$row['night'];
                        $cost=$row['cost'];
                        $description=$row['pac_desc'];
                      }
                    }

*/
?>



<div class="bgimg">

<div class="border">
<center><font size="8" color="blue">Book your package now....</font></center>
<font size="4">

<font size="5">
<label for="fname"><b>Enter full name:</b></label><br>
<input type="text" id="fname" name="fullname" placeholder="your full name...." style="width: 250px;"><br>

<label for="email"><b>Email:</b></label><br>
<input type="text" id="email" name="email" placeholder="Enter email...." style="width: 250px;"><br>

<label for="contact"><b>Contact:</b></label><br>
<input type="text" id="contact" name="contact" placeholder="Enter number...." style="width: 250px;"><br>


<label for="arrival"><b>Arrival:</b></label>
<input type="text" id="arrival" name="arrival" placeholder="Arrival" style="width: 250px;">

<label for="dept"><b>Departure:</b></label>
<input type="text" id="dept" name="dept" placeholder="Departure" style="width: 250px;"><br>

<label for="adults"><b>Adults:</b></label>
<input type="number" id="adults" name="adults" placeholder="Adults">

<label for="children"><b>Children:</b></label>
<input type="number" id="children" name="children" placeholder="Children"><br>

</font>

<button class="booking" name="btn_submit">Book Now</button>

<button class="booking">Cancel</button> 

</div>


</font>
</center>
</div>


<div class="navbar">
  <a href="#">About us</a>
  <a href="#">Terms & conditions</a>
  <a href="#">Sitemap</a>
  <a href="Travel_Talk1.html">Inquire now</a>
  
</div>


<div class="footer">

<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-youtube"></a>

</div>

</div>
</body>
</html>