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
  margin-left: 20px;
  margin-right: 20px;
  padding-top: 30px;
  margin-left: 24%;
  border:1px solid black;
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
<form action="add.php" method="POST">
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
      <th><INPUT type="text" name="txtbox[]"/></th>
      <th> <INPUT type="text" name="txtbox1[]"/></th>
      
    </tr>
  </table>
  
  <input type="button" value="Add Row" onclick="addRow('dataTable')">
 <br><br>



<label for="submit"></label>
<input type="submit" id="submit" name="btn_submit" placeholder="Save" value="Save">



<label for="reset"></label>
<input type="reset" id="reset" name="btn_cancel" placeholder="reset" value="Reset"><br> 



</div>
<div class="pad1">

</div>
</form>
</body>
</html>