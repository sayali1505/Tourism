<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
*{
  margin: 0px;
}

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

/*bottom navigation bar*/

.navbar {
  overflow: hidden;
  background-color: #333;
  position:;
  bottom: 0;
  width: 100%;
  background-color: mediumseagreen;
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



.title{

    padding-top: 60px;
    padding-bottom: 30px;
    align-content: center;
}

input[type=text], input[type=Number], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing:border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

input[type=button] {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
    
}


div.form {
	margin: auto;
	width: 40%;
    border-radius: 5px;
    color: #825309;
    padding: 20px;
    
}

.bgimg{

    background-image: url("about_us_bgimg.jpg");
    width: 100%;
    padding-bottom: 40px;

}

	</style>
</head>
<body>
<ul>
<li><a href="adminlogin.php">Admin login</a></li>
  <li><a href="Travel.php"><font  color="red" size="4">Get a quote</font></a></li>
  <li><a href="blog.html"><font size="4">Blogs</font></a></li>
  

  <li class="dropdown">
    <a href="#" class="dropbtn"><font size="4">Packages</font> </a>
    <div class="dropdown-content">
      <a href="#"><font size="4"><b>By Themes</b></font></a>  
      
      <a href="Adventure.php"><font size="4">Adventure Tours</font></a>
      <a href="Family.php"><font size="4">Family Packages</font></a>
      <a href="Break.php"><font size="4">Chota break</font></a>
      <a href="Beach.php"><font size="4">Beach Holidays</font></a>
      <a href="samplenew.php"><button style="color: white; background-color: darkgreen; height: 35px;">All packages</button></a>     

    </div></li>
    
    
  <li><a href="mah_tourism_homepage.html"><font size="4">Home</font></a></li>

  <li class="head"><b><font color="#b30000">M</font><font color="#ffff99">aharashtra</font> <font color="#b30000">T</font><font color="#ffff99">ourism</font></font></b></li>

</ul>




<div class="bgimg">

<div class="title">
    <font size="6" color="red"><b><center>Welcome...! Let's Plan Your Travel...</center></b></font>
</div>

<div class="form">
  <form action="travel_talk.php" method="POST">
    <label for="name"><b>Enter Your Name:</b></label>
    <input type="text" id="name" name="name" placeholder="Enter Your Full name..">

    <label for="address"><b>Enter Your Address:</b></label>
    <input type="text" id="address" name="address" placeholder="Enter Your address..">

    <label for="Mno"><b>Enter Your Mobile Number:</b></label>
    <input type="text" id="Mno" name="Mno" placeholder="Enter Your Mobile Number.." maxlength="10">

    <label for="Eid"><b>Enter Your Email-id:</b></label>
    <input type="text" id="Eid" name="Eid" placeholder="Enter Your Email-id..">


  
    <label for="state">State:</label>
<input type="text" name="state"><br>

    <label for="cities">Cities:</label>
    <input type="text" name="cities"><br>
  <label for="days">Enter Number of days:</label>
    <input type="Number" id="days" name="days" >

    <label for="requirements">Your requirements:</label>
  <textarea name="req" rows="9" cols="45"></textarea>

    <a href="quote.html"><input type="submit" name="btn_submit" value="Submit">
  <input type="submit" name="btn_cancel" value="Cancel" style="background-color: red"></a>

    

</form>
</div>
</div>


<div class="navbar">
  <a href="#">About us</a>
  <a href="#">Terms & conditions</a>
  <a href="#">Sitemap</a>
  <a href="Travel_Talk1.html">Inquire now</a>
  
</div>



</body>
</html>