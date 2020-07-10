<!DOCTYPE html>
<html>
<head>
	<title></title>

     <link rel="stylesheet" type="text/css" href="nav.css">
  

  <style type="text/css">
   body, html {
    height: 100%;
    margin: 0;
}
/*
.bg {
     The image used 
    background-image: url("");

     Full height 
    height: 100%; 


     Center and scale the image nicely   
      background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
      }*/
    
  
		
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

div {
    
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

.pad1{
    padding-top: 30px;
}
.pad2{
  margin-top: 20px;
  margin-left: 50px;
  margin-right: 50px;
  padding-top: 50px;
  margin-left: 24%;
  
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}
</style>
</head>
<body>
   
<div class="pad" id="bgimg">
      <h1><center><font size="10" color="white" style=" "> MAHARASHTRA INDIAN &nbsp  TOURISM</font></center></h1>
</div>
  
<div class="title">
      <font align="center" style="font-family: 'Oleo Script';font-size: 30px"><center style="background-color: black;color: white;padding: 10px 10px"><b>ADMIN &nbsp PANEL</b></center></font>
</div>


<div class="main-nav">
  <ul class="main-nav-ul">
    <li class="active"><a href="nav.html" class="active">Home</a></li>
    <li><a href="#">states<span></span></a>
      <ul>
        <li><a href="states.php">Add states</a></li>
        <li><a href="show_states.php">Show states</a></li>
        
      </ul>
    </li>

    <li><a href="#">locations</a>
      <ul>
        <li><a href="locations.php">Add locations</a></li>
        <li><a href="show_loc.php">View Locations</a></li>
      </ul>
    </li>
    <li><a href="#">Location spots<span></span></a>
      <ul>
        <li><a href="#">Add spots</a></li>
        <li><a href="#">View spots</a></li>
        
      </ul>
    </li>
    <li><a href="#">Categories<span></span></a>
      <ul>
        <li><a href="#">Add categories</a></li>
        <li><a href="#">View categories</a></li>
        
      </ul>
    </li>
    <li><a href="#">Packages<span></span></a>
      <ul>
        <li><a href="#">Create package</a></li>
        <li><a href="#">View packages</a></li>
        
      </ul>
    </li>



    <li><a href="#">Logout</a></li>
  </ul>
</div>
<form action="add_loc.php" method="POST">
<div class="pad2">
		
	<center><h1 style="color: navy">Add Location</h1></center>
<center>

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
    
?>  
<label><b>State id:</b></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<select name="modelnm">
<option>----Select state id-----</option>

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



<?php
/*include("config.php");

        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'db_tourism';
        
        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

$tquery=mysqli_query($conn,"select MAX('loc_id') FROM tbl_location");
$tresult=mysqli_query($conn,$tquery) or die("Error:".mysqli_error($conn));
/*if (!$tresult) {
  printf("Error:%s\n",mysqli_error($conn));
  exit();
  # code...
}
while ($row=mysqli_fetch_array($tresult)) {
$idcount=$row['MAX(loc_id)'] +1;
}*/

?>

<label for="loc_id"><b>Enter Location id:</b></label>&nbsp&nbsp&nbsp
<input type="text" id="loc_id" name="loc_id" placeholder="Enter Location id " value=""><br>

<label for="loc_name"><b>Enter Location name:</b></label>
&nbsp&nbsp&nbsp<input type="text" id="loc_name" name="loc_name" placeholder="Enter Location name "><br>






<label for="submit"></label>
<input type="submit" id="submit" name="btn_submit1" placeholder="Save" value="Save">



<label for="reset"></label>
<input type="reset" id="reset" name="btn_cancel" placeholder="reset" value="Reset"><br> 



</div>
<div class="pad1">

</div>
</form>
</body>
</html>