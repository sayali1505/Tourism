<!DOCTYPE html>
<html>
<head>

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
function fetch_select(val)
{
 $.ajax({
 type: 'post',
 url: 'fetch_data.php',
 data: {
  get_option:val
 },
 success: function (response) {
  document.getElementById("new_select").innerHTML=response; 
 }
 });
}

</script>

  <SCRIPT language="javascript">

    function addRow(tableID) {

      var table = document.getElementById(tableID);

      var rowCount = table.rows.length;
      var row = table.insertRow(rowCount);

      
      var cell1 = row.insertCell(0);
      cell1.innerHTML = rowCount + 1;

      var cell2 = row.insertCell(1);
      
      var element2 = document.createElement("input");
      element2.type = "text";
      element2.name = "txtbox[]";
      cell2.appendChild(element2);

      var cell3 = row.insertCell(2);
      
      var element3 = document.createElement("input");
      element3.type = "text";
      element3.name = "txtbox1[]";
      cell3.appendChild(element3);
    }
</SCRIPT>

	<title></title>


  

  <style type="text/css">
   body, html {
    height: 100%;
    margin: 0;
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

.border{

    box-shadow: 0 40px 60px rgba(0,0,0,0.9);
    margin-left: 150px;
    margin-right: 150px;

    padding-left: 40px;
    padding-top: 5px;
    padding-bottom: 30px;

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
input[type=Number],
input[type=button], 
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
          <a href="locations.php">Locations</a>
          <a href="select_category.php">Categories</a>
        </div>
        <div class="column">
          <h1>Create</h1>
          <a href="#">Packages</a>
          <a href="#">Itinerary</a>
        </div>
        <div class="column">
          <h1>View</h1>
          
          <a href="show_loc.php">Location details</a>
          <a href="show_cat.php">Categories</a>
          <a href="#">Package details</a>
        </div>
      </div>
    </div>
  </div> 
</div>


<form action="add.php" method="POST">
  <div class="border">
<div class="pad2">
		
	<center><h1 style="color: navy">Create Package</h1></center>
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



 <?php
//DB details
/*        
        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'db_tourism';
        
        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    */
?>  

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
function fetch_select(val)
{
 $.ajax({
 type: 'post',
 url: 'fetch_data.php',
 data: {
  get_option:val
 },
 success: function (response) {
  document.getElementById("new_select").innerHTML=response; 
 }
 });
}

</script>


<label for="name"><b>Enter Package name:</b></label>
<input type="text" id="name" name="name" placeholder="Package name" value=""><br>


<center>
<div id="select_box">
  <label>Select State id:</label>
 <select onchange="fetch_select(this.value);" name="state">
  <option>Select state</option>
  <?php
  $host = 'localhost';
  $user = 'root';
  $pass = '';
  mysql_connect($host, $user, $pass);
  mysql_select_db('db_tourism');

  $select=mysql_query("select * from tbl_states");
  while($row=mysql_fetch_array($select))
  {
   echo "<option>".$row['state_id']."</option>";
  }
 ?>
 </select><br>
<label>Select Location name:</label>
 <select id="new_select"  name="city[]" multiple="multiple">
 </select>
    
</div>     
</center>



<br>
<?php
     /*   $sql="SELECT loc_id,loc_name FROM tbl_location  ";
            $res=$db->query($sql);

            if ($res->num_rows!=0) 
            {
                while ($r=$res->fetch_assoc()) 
                    {
                       echo "<option value='".$r['loc_id']."'>".$r['loc_name']."</option>";
                       //echo "<input type=checkbox value='".$r['loc_name']."'>";
                    }   
            }
       */ ?>
    </select><br>






<label><b>Categorie name:</b></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<select name="cat">
<option>----Select Categories name-----</option>

<?php
        $sql="SELECT cat_id,cat_name FROM tbl_categories";
            $res=$db->query($sql);

            if ($res->num_rows!=0) 
            {
                while ($r=$res->fetch_assoc()) 
                    {
                        echo "<option value='".$r['cat_id']."'>".$r['cat_name']."</option>";
                    }   
            }
        ?>
    </select><br>

<label for="days"><b>Enter Number of days:</b></label>&nbsp&nbsp&nbsp
<input type="Number" id="days" name="days" placeholder="Number of days" value=""><br>

<label for="nights"><b>Enter Number of Nights:</b></label>&nbsp&nbsp&nbsp
<input type="Number" id="nights" name="nights" placeholder="Number of nights" value=""><br>

<label for="cost"><b>Enter Total Cost per person:</b></label>&nbsp&nbsp&nbsp
<input type="text" id="cost" name="cost" placeholder="Total Price per person" value=""><br>



<label for="image"><b>Select image:</b></label>&nbsp&nbsp&nbsp
<input type="File" id="image" name="image"  value=""><br><br>


<table width="1000px" border="2">

   <tr><th colspan="3">Iternary</th> </tr>
              <th >Sr.No.</th>
              <th >Day</th>
              <th >Description</th>
  </table>
    <table id="dataTable" width="1000px" border="2">
    <tr>
      
      <th >1</th>
      <th><input type="text" name="txtbox[]"></th>
      <th> <textarea name="txtbox1[]" rows="9"></textarea> </th>
      
    </tr>
  </table>
  
  <input type="button" value="Add Row" onclick="addRow('dataTable')">
 <br><br>



<label for="submit"></label>
<input type="submit" id="submit" name="btn_submit" placeholder="Save" value="Save">



<label for="reset"></label>
<input type="reset" id="reset" name="btn_cancel" placeholder="reset" value="Reset"><br> 



</div>
</div>
</form>
</body>
</html>