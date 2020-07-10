<!DOCTYPE html>
<html>
<head>
    <title></title>
<style type="text/css">
  *{
  margin: 0px;
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
    color: white;
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

.pad1{
    padding-top: 30px;
    margin-left: 25%;
}

</style>
</head>
<body>

<form method="POST" action="delete_state.php">
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
          <a href="states.php">States</a>
          <a href="locations.php">Locations</a>
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
   <font style="float: right; margin-right:  10px;"><a href="new_adminpanel.html">Home</a></font> 
</div>
<div class="pad1">
<?php

include("config.php");

$sql="select loc_id,loc_name from tbl_location";
$result= mysqli_query($conn,$sql)or die(mysql_error());


if (mysqli_num_rows($result)>0) 
{
    //Output data of each row
    echo "<table  id=t01    >
            <tr>
              <th>Location id</th>
              <th>Location name</th>
              <th>Update</th>
              <th>Delete</th>
            </tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "     <tr>
                        <td>$row[loc_id]</td>
                        <td>$row[loc_name]</td>
                        <td><a href=newedit2.php?newedit2=$row[loc_id]>Edit</a></td>
                        <td><form action=delete_state.php method=POST>
                        <input type=hidden value=$row[loc_id] name=loc_id><button type=submit>Delete</button></form></td>
                    </tr>";
    }
    echo "</table>";
}
else
        echo "No result found";



?>
</div>
</form>
</body>
</html>
