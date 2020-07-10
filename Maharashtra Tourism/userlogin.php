<?php

// if(session_status()==PHP_SESSION_NONE)
// {
//   session_start();
// }
// if (isset($_SESSION['uname'])&&isset($_SESSION['upassword'])) 
// {
//   header("Location:home.php");
//   exit;
// }
if (!empty($_SESSION['id'])) {
  header("Location:book.php");
  exit;
}
?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	form{
		border: 1px solid black;
		
	}
		input[type=text],
		select{
			width: 20%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
		input[type=submit]{
			width: 20%;
			background-color:green;
			color:white;
			padding: 14px 20px;
			margin: 8px 0;
			border: 1px solid gray;
			cursor: pointer;
		}
		input[type=submit]:hover{
			background-color:green;
		}
		input[type=cancel]{
			width: 20%;
			background-color:green;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: 1px solid gray;
			cursor: pointer;
		}
		input[type=cancel]:hover{
			background-color:#ffff99;
		}
		  .button {
    width: 50px;
    padding: 10px 18px;
    background-color:black;

}
.submit
{
  display: inline-block;
  background-color:green;
  border-radius: 6px;
  font-size: 16px;
  color: #FFFFFF;
  text-decoration: none;
  padding: 12px 30px;
  transition: all .5s;
}
.submit:hover 
{
  background-color: #3339FF;
}

.cancelbtn 
{
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}
form 
{
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] 
{
    width: 20%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

.submit
{
  display: inline-block;
  background-color:#ff6600;
  border-radius: 6px;
  font-size: 16px;
  color: #FFFFFF;
  text-decoration: none;
  padding: 12px 30px;
  transition: all .5s;
}
.submit:hover 
{
  background-color: #3339FF;
}

.cancelbtn 
{
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer 
{
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar 
{
    width: 20%;
    border-radius: 50%;
}

.container 
{
    padding: 16px;
}

span.psw 
{
    float: right;
    padding-top: 16px;
}


@media screen and (max-width: 300px) 
{
    span.psw 
    {
       display: block;
       float: none;
    }
    .cancelbtn 
    {
       width: 100%;
    }
}
#message 
{
    display:none;
    background: #f1f1f1;
    color: #000;
    position: relative;
    padding: 20px;
    margin-top: 10px;
}

#message p 
{
    padding: 10px 35px;
    font-size: 18px;
}


.valid 
{
    color: green;
}

.valid:before 
{
    position: relative;
    left: -35px;
    content: "✔";
}


.invalid 
{
    color: red;
}

.invalid:before 
{
    position: relative;
    left: -35px;
    content: "✖";
}



	</style>
</head>
<body>
<?php
$package_id=$_GET['id'];

//session_start();
if (isset($_POST['btn']))
{

$Email=$_POST['email'];
$pass=$_POST['pass'];

$dbHost='localhost';
$dbUser='root';
$dbpassword='';
$dbName='db_tourism';
 

$db=new mysqli($dbHost, $dbUser, $dbpassword, $dbName);
$ret=$db->query("SELECT * from register where Email='$Email' AND pass='$pass' ") or die("Could not execute query:".mysql_error($db));
  $row=mysqli_fetch_assoc($ret);
  if ( !$row) 
  {
     header("Location: welcome.html");
     echo '<script>alert("Invalid username or password")</script>';
     echo '<script>window.location=</script>';
  }
  else
  {
    session_start();

    $_SESSION['id'] = 1;
    $_SESSION['Email']=$email;
    $_SESSION['pass']=$pass;
    header('location: view_details1.php');
  } 
}
?>







<font size="4.5" color="darkblue"><b><p style="text-indent: 60em;"><a href="home.php"><u>Home</u></a></p></b></font>

<center><font size="4">
	
		<img src="loginn.jpg" style="height:350px">
<center>
        <form action="userlogin.php" method="post" enctype="multipart/form-data">
       
         Email :
        <input type="text" name="email"><br>
         Password:
        <input type="text" name="pass"><br>
        <input type="hidden" name="package_id" value="<?= $package_id ?>">
        <input type="submit" class="submit" value="submit" name="btn"> 
    <input type="checkbox" checked="checked"> Remember me
  </div>

  <div class="container">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
        <script>
var myInput = document.getElementById("uname");

var myInput = document.getElementById("upassword");

myInput.onfocus = function() 
{
    document.getElementById("message").style.display = "block";
}

myInput.onblur = function() 
{
    document.getElementById("message").style.display = "none";
}



  if(myInput.value.length >= 8) 
  {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } 
  else 
  {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
        
      

	
</font>
</form>
</div>
</center>
</body>
</html>