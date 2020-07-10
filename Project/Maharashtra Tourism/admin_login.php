
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
input[type=text], input[type=password] {
    width: 40%;
    padding: 12px 20px;
    margin: 4px 10px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    margin-bottom: 2%;

}

/* Set a style for all buttons */

button  {
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
h5  {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

h5:hover {
    opacity: 0.8;
}
.container{

	margin-top: 5%;
	margin-bottom: 16%;
}
.img{

	background-image: url(signimage.jpeg);
	width: 100%;
	background-repeat: no-repeat;
  height: 200%;
}


	</style>
</head>
<body>

<div class="img">


<ul>

  <li><a href="Travel_Talk1.html"><font  color="red" size="4">Get a quote</font></a></li>
  <li><a href="blog.html"><font size="4">Blogs</font></a></li>
    
  <li><a href="mah_tourism_homepage.html"><font size="4">Home</font></a></li>

  <li class="head"><b><font color="#b30000">M</font><font color="#ffff99">aharashtra</font> <font color="#b30000">T</font><font color="#ffff99">ourism</font></font></b></li>


</ul>


<form action="admin_login1.php" method="POST">
<div class="container"><center>
      <font size="8" color="#194d33">Welcome </font><br><br>
      <font size="6" color="#194d33">Login as Admin</font><br><br>
<div class="error">
<!-- display error
<?php include('errors.php'); ?>
<?php include('config.php');
$id=$_GET['id'];

$_SESSION['pac_id']=$id;
 ?>    -->  
      </div>

      <input type="text" placeholder="Enter Username" name="Email" >
      <br>

      <input type="password" placeholder="Enter Password" name="pass" ><br>
      <input type="submit" name="submit" style="width: 40%; height: 35px; font-size: 20px; background-color: darkgreen;" value="Login">
     <!-- <button type="submit"  name="submit">LOGIN</button><br>

     <br> <font size="4" color="white">--------------------------OR-------------------------</font><br>

	  Forgot password?<br>-->
</form>

     
</font>
</center>
</div>

</div>
</body>
</html>