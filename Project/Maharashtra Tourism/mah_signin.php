<?php include 'signinform.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>


	<style type="text/css">

  *{
    margin: 0px;
    padding: 0px;
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

		
/* Login */

/* Full-width input fields */
input[type=text], input[type=password],input[type=date] {
    width: 40%;
    padding: 12px 20px;
    margin: 4px 10px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    margin-bottom: 2%;

}

/* Set a style for all buttons */

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.container{

	margin-top: 0%;
	margin-bottom: 16%;
}
.img{

	background-image: url(road.jpg);
	width: 100%;
  height: 100%;
	background-repeat: no-repeat;
}
.error{

    color: white;
    font-size: 20px;
    padding: 14px 20px;
    margin: 8px 0;
    width: 50%;
}

</style>
</head>
<body>
<div class="img">


<ul>

  <li><a href="Travel_Talk1.html"><font  color="red" size="4">Get a quote</font></a></li>
  <li><a href="blog.html"><font size="4">Blogs</font></a></li>
  
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
      <a href="Beach.php"><font size="4">Beach Holidays</font></a>
      <a href="Adventure.php"><font size="4">Adventure Tours</font></a>
      <a href="Break.php"><font size="4">Family Packages</font></a>
    
      <a href="#"><font size="4">Chota break</font></a>
     

    </div></li>
    
    
  <li><a href="mah_tourism_homepage.html"><font size="4">Home</font></a></li>

  <li class="head"><b><font color="#b30000">M</font><font color="#ffff99">aharashtra</font> <font color="#b30000">T</font><font color="#ffff99">ourism</font></font></b></li>


</ul>
<form action="mah_signin.php" method="POST">
<div class="container"><center>


      <font size="7" color="#194d33">Welcome....</font><br><br>
      <font size="5" color="#194d33">New user...Please register here...</font><br>
<div class="error">
<!-- display error-->
<?php include('errors.php'); ?>
      </div>
      <input type="text" id="fname" name="fname" value="<?php echo "$f_name";?>" placeholder="Enter your first name...." style="width: 19%;" > 
 
      <input type="text" id="lname" name="lname" value="<?php echo "$l_name";?>" placeholder="Enter your last name...." style="width: 19%;"><br>

      <input type="date" id="dob" name="dob" value="<?php echo "$dob";?>" placeholder="Enter date of birth...." style="width: 40%;"><br>

      <input type="text" id="email" name="Email" value="<?php echo "$Email";?>" placeholder="Enter email...." style="width: 40%;"></span><br>
  
      <input type="text" id="contact" name="no" value="<?php echo "$no";?>" placeholder="Enter number...." style="width: 40%;" maxlength="10"><br>

      <input type="password" id="pass" name="pass" placeholder="Enter 6 digits password" style="width: 40%;"><br>

      <input type="password" id="cpass" name="cpass" placeholder="Enter confirm password" style="width: 40%;"><br>


      <button type="submit" name="signup" style="width: 20%;font-size: 18px;">Sign up</button></font>
<font color="white">Already registered? <a href="mah_login.php" style="color: red;">Login</font></a>
</font>
</center>
</div>
</form>

     
</font>
</center>
</div>


<div class="navbar">
  <a href="#">About us</a>
  <a href="#">Terms & conditions</a>
  <a href=" https://www.easymapmaker.com/map/860bd0f81c8a7ccbe455b29b18fda0fc ">Sitemap</a>
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