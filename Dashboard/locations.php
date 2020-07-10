<!DOCTYPE html>
<html>
<head>
    <title></title>

<style type="text/css">
*{
    margin: 0px;
}


.container {
    position: relative;
    /*text-align: center;*/
    
    margin-left: 5%;
    margin-top: 2%;
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
input[type=submit] {
    width: 25%;
    background-color: darkgreen;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: 1px solid gray;
    border-radius: 4px;
    cursor: pointer;
}
input[type=submit]:hover {
    background-color: gray;
}

input[type=reset] {

    width: 25%;
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
    width: 99%;    
 color: black;

}
th,td {
    border:1px solid black;
    border-collapse: collapse;
}
th,td{
    width: 20%;
    padding: 10px;
/*    text-align: center; */
    float: left;
}
table#t01 th{
    background-color: green;
    color: white;
}

.pad{
    padding-top: 30px;
    background-image: url(admin2.jpg);
    width: 80%;
    height: 500px;

}
.pad1{
    margin-top: 10px;
    float: right;
    width:40%;
    text-align: center;

}
.border{

    box-shadow: 0 40px 60px rgba(0,0,0,0.9);
    margin-left: 100px;
    margin-right: 400px;
    padding-left: 150px;
    padding-top: 20px;
    padding-bottom: 30px;

}
button{
    background-color: green;
   
    color:white;
    
    cursor: pointer;
    width: 40%;
    border:none;

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
          <a href="states.php">States</a>
          <a href="">Locations</a>
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




<form action="locations.php" method="POST">
<!--
<form action="add_loc.php" method="POST">
<div class="pad2"> -->
        


<!--
 <?php
//DB details
        
        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'db_tourism';
        
        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

//if(isset($_POST['submit']))
//{                $loc_name=$_POST['loc_name'];
  /*  $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

        /*
         * Insert image data into database
         */
        
        //DB details
                
        // Check connection
//        if($db->connect_error){die("Connection failed: " . $db->connect_error);  }
        
        
   /*     $select=$_POST['modelnm'];
        //Insert image content into database
        $insert = $db->query("INSERT into tbl_location ( loc_id,loc_name, state_id) VALUES 
            ('$loc_id','$loc_name,'$select')");
        if($insert)
        {
            echo "File uploaded successfully.";
        }
        else
        {
            echo "File upload failed, please try again.";
        } 
    }*/
    
?>  -->
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
                        <td><a href=newedit2.php?newedit2=$row[loc_id]>Delete</a></td>
                    </tr>";
    }
    echo "</table>";
}
else
        echo "No result found";



?>
</div>

<div class="pad">
<div class="border">
<center><font size="6">Add Locations</font></center>

<label><b>State id:</b></label><br>
<select name="modelnm">
<option>------Select state id------</option>

<?php
        $sql="SELECT state_id,state_name FROM tbl_states";
            $res=$db->query($sql);

            if ($res->num_rows!=0) 
            {
                while ($r=$res->fetch_assoc()) 
                    {
                        echo "<option value='".$r['state_id']."'>".$r['state_name']."</option>";
                    }   
            }
        ?>
    </select><br>







<label for="loc_id"><font color="black" size="4"><b>Enter Location id:</b></font></label><br>
<input type="text" id="loc_id" name="loc_id" placeholder="Enter Location id " value=""><br>

<label for="loc_name"><font color="black" size="4"><b>Enter Location name:</b></font></label><br>
<input type="text" id="loc_name" name="loc_name" placeholder="Enter Location name "><br>


<label for="submit"></label>
<input type="submit" id="submit" name="btn_submit1" placeholder="Save" value="Save">

<label for="reset"></label>
<input type="reset" id="reset" name="btn_cancel" placeholder="reset" value="Reset"><br> 







<?php
if (isset($_POST['btn_submit1'])) {
 
$loc_id=$_POST['loc_id'];
$loc_name=$_POST['loc_name'];
$sid=$_POST['modelnm'];

$dbHost='localhost';
    $dbUser='root';
    $dbPassword='';
    $dbName='db_tourism';

    $conn=mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

if (!$conn) 
{
    die("connection failed: ".mysqli_connect_error());
}


if(isset($_POST['btn_submit1']))
{

    

$check=mysqli_query($conn,"select * from tbl_location where loc_id='$loc_id' and loc_name='$loc_name'");
$checkrows=mysqli_num_rows($check);



if(!empty($loc_id && $loc_name))
{

    if($checkrows>0)
    {
        echo "Already exists in table<br>";
    }
    else
    {
        $sql= "INSERT INTO tbl_location (loc_id, loc_name ,loc_state_id) VALUES ('$loc_id', '$loc_name','$sid')";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully<br>";
        }
        else{
            echo "ERROR: <br>".$sql. "<br>".mysqli_error($conn);
        
        }
    }
}
else{
    echo "Field should not be empty<br>";
}
mysqli_close($conn);
}
}
?>

</div>
</div>
</form>
</body>
</html>