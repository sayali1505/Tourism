<!DOCTYPE html>
<html>
<head>
	<title></title>

    

	<style type="text/css">
    *{
  margin: 0px;
  padding: 0px;
}

/* Maharashtra Tourism */ 
.name{
  background-image: url("trees.jpg");
  /*width: 100%;
  /*background-color:#77b300; 
  height: 300px;
  font-family: ;*/
  background-size: 100%;
  background-repeat: no-repeat;
  background-position: center;
  padding-left: 25px;
  padding-right: 25px;
  padding-bottom: 20px;
  padding-top: 20px;

}

/* Admin panel */
.title{

  width: 100%;
  background-color: #85adad;
  height: 40%;
  padding-top: 10px;
  padding-bottom: 10px;
/*  background-image: url(sunset.jpg); */
}

.container {
    position: relative;
    /*text-align: center;*/

    margin-left: 5%;
    margin-top: 10%;
}
/*
.centered {
    position: absolute;
   /* top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  margin-left: 5%;
    margin-top: 5%;   

}*/

/* Megamenu */

.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial;

}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 25px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: gray;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    width: 100%;
    left: 0;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content .header {
    background:#80aaff;
    padding: 16px;
    color: white;

}

.dropdown:hover .dropdown-content {
    display: block;
}

/* Create three equal columns that floats next to each other */
.column {
    float: left;
    width: 31.80%;
    padding: 10px;
    background-color:#ffffcc;
    height: 200px;
    
}

.column a {
    float: none;
    color: black;
    padding: 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.column a:hover {
    background-color: #ddd;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
    .column {
        width: 100%;
        height: auto;
    }
}


		
        .bg{
           /* background-image: url("1.jpg");
            /*Full height*/ 
            height: 700px; 
            /*Center and scale the image nicely*/   
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
      }

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

input[type=text]:hover,

select:hover{
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border-bottom: 1px solid #ccc;
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

.div {
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
    color: black;
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

.pad{
    margin-top: 20px;
}
.container{
    width: 50%;
    height: 280px;
    padding-left: 30px;
    padding-top: 15px;
    margin: 0 50px;
    margin-left: 30%;
    margin-top: 20px;
    box-shadow: 0  40px 60px rgba(0,0,0,0.3);
    
}
</style>
</head>
<body>

<div class="name">
    <center><font size="16" color="white">M</font><font size="10" color="white">AHARASHTRA</font>&nbsp&nbsp <font size="16" color="white">T</font><font size="10" color="white">OURISM </font></center>

</div>

<div class="title">
    <font size="9" color="#334d4d"><center><b>ADMIN PANEL</b></center></font>

</div>

<div class="navbar">
  <div class="dropdown">
    <button class="dropbtn">Admin 
      <i class="fa fa-caret-down"></i>

    </button>
    <div class="dropdown-content">
      <div class="header">
        <h2>Admin can add ,edit or delete data here.</h2>
      </div>   
      <div class="row">
        <div class="column">
          <h1>Add</h1>
          <a href="#">States</a>
          <a href="#">Locations</a>
          <a href="#">Categories</a>
        </div>
        <div class="column">
          <h1>Create</h1>
          <a href="#">Packages</a>
          <a href="#">Itinerary</a>
        </div>
        <div class="column">
          <h1>View</h1>
          <a href="#">State details </a>
          <a href="#">Location details</a>
          <a href="#">Package details</a>
        </div>
      </div>
    </div>
  </div> 
</div>


<div class="pad">
<center>
<?php

//require_once 'config.php';
include("config.php");

$sql="select state_id,state_name from tbl_states";
$result= mysqli_query($conn,$sql)or die(mysql_error());


if (mysqli_num_rows($result)>0) 
{
    //Output data of each row
    echo "<table id=t01>
            <tr>
              <th>State id</th>
             <th>State name</th>
            </tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "     <tr>
                        <td>$row[state_id]</td>
                        <td>$row[state_name]</td>
                    </tr>";
    }
    echo "</table>";
}
else
        echo "No result found";

//mysqli_close($conn);

?>
</center>
<form action="add_state.php" method="POST">

<div class="container">		
	<center><h1 style="color: navy">Add States</h1></center>


<label for="state_id" ><font  size="4"><b>Enter state id:</b></font></label><br>
<input type="text" id="state_id" name="state_id" placeholder="Enter state id "><br>

<label for="state_name"><font size="4"><b>Enter state name:</b></font></label><br>
<input type="text" id="state_name" name="state_name" placeholder="Enter state name "><br>



<label for="submit"></label>
<input type="submit" id="submit" name="btn_submit1" placeholder="Save" value="ADD">



<label for="reset"></label>
<input type="reset" id="reset" name="btn_cancel" placeholder="reset" value="Reset"><br> 
</div>

</form>
</div>


</body>
</html>