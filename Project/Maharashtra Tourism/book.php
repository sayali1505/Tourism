<?php  session_start();

?>
<!DOCTYPE html>
<html>
<head>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- Bootstrap css library -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bootstrap js library -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    var i=2;
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div>Room :<select name=model[]><option>Adults(12+yrs)</option><option>0</option><option>1</option><option>2</option></select><select name=model1[]><option>Child(upto 11 yrs)</option><option>0</option><option>1</option><option>2</option></select><a href="#" class="remove_field">Remove</a></div>'); //add input box
       i++;
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script>
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

		input#result{
			height: 30px;
		}
		.two{
			float: right;
			margin-right: 30%;
			margin-top: 5%;				
			margin-left: 2%;
		}
		.three{
			float: right;
			margin-right: 30px;
			margin-top: 5%;
			width: 20%;
			height: 240px;
			padding-top: 10px;
			padding-left: 15px;
			background-color: lightgreen;
		
		}

		.three1{
			float: right;
			margin-right: 30px;
			
			width: 20%;
			height: 240px;
			padding-top: 10px;
			padding-left: 15px;
			background-color: lightgreen;
		
		}


		.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}


	.add_field_button {
    
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

	.add_field_button1 {
    
    background-color: red;
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}


.price{

	
	float: right;
	margin-right: 3%;
}

 .btn{

	background-color: lightblue;  
    color: black; 
    padding: 20px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 22px;
    margin: 10px ;
    cursor: pointer;
    margin-top: 4%;
}


/* Overview */
.overview{

    margin-top: 10px;
    margin-top: 18px;
    padding-left: 80px;
    padding-right: 80px;
    font-size: 20px;
    
}

/* Itenarary */
.itenarary{

    margin-top: 18px;
    padding-right: 80px;
    padding-left: 80px;
	background-color: #fff9c6;
  	font-size: 25px;

}

.side{
  border:1px solid black;
  margin: 20px;
}

.name{
  text-align: center;
  font-size: 25px;
  color: red;
}

.fontsize{
  font-size: 25px;
  margin-left: 15%;
  color: brown;
}



	</style>
<!--
	<script type="text/javascript">

		function ShowHideDiv(){

			var chkac= document.getElementById("chkac");
			var chknon= document.getElementById("chknon");
			chknon.style.display= chkac.checked ? "block" : "none";

		} 
</script>  -->
</head>
<?php




        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'db_tourism';
        
        //Create connection and select DB
                
    
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
$id=$_SESSION['package_id'];
        $query = "SELECT package_id,s_id,pac_name,cat_name,days,night,cost,image FROM tbl_create_package where package_id='$id'";  
        	
      		    $result = mysqli_query($db,$query);
      		    if($result->num_rows!=0)
                { 

                    while($row=$result->fetch_array())  
                    {
                        $image=$row['image'];
                        $state_id=$row['s_id'];
                        $pac_name=$row['pac_name'];
                        $cat_name=$row['cat_name'];
                        $days=$row['days'];
                        $night=$row['night'];
                        $cost=$row['cost'];
                        

                        

                    $q="select pac_name,cities from pac_cities where pac_name='$pac_name'";
             		$res=mysqli_query($db,$q) or mysqli_error();
 					$package="";
 					while ($r=$res->fetch_array()) 
 					{
 						$cities=$r['cities'];
 						$pac=$r['pac_name'];

 						if ($pac_name==$pac) {
 							$package =$package." ".$cities;
 							//$array1=array($cities);
 							//print_r($array1);
 						}
          }
            $q1="select cat_name,cat_desc from tbl_categories where cat_id='$cat_name'";
            $res=mysqli_query($db,$q1) or mysqli_error();
          $name="";
          while ($r=$res->fetch_array()) 
          {
            $cat_name=$r['cat_name'];
            $cat_desc=$r['cat_desc'];

            $name =$name." ".$cat_name."<br>".$cat_desc;
          }
 						

?>


<body>

<ul>


  <li class="head"><b><font color="#b30000">M</font><font color="#ffff99">aharashtra</font> <font color="#b30000">T</font><font color="#ffff99">ourism</font></font></b></li>

</ul>





<form action="book.php" method="POST">
	<div class="one">

<img src="chota_break.jpg" style="width: 30%; height: 25%;margin-top: 5%;margin-left: 3%;">

<div class="three"><div class="btn" style="background-color: #ffd633;"><font size="5"> <?= $row['cost']; ?>
	per person </font> </div><br>
	<!--<a href="#" class="button">Book Now</a><br>-->



<div class="container">
  
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Select Room</button>



<form action="book.php" method="POST">
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title" >Select Rooms</h3>


        </div>
        <div class="modal-body">
          <p>
<div class="input_fields_wrap">
   
    <div>Room 1:
      <select name="model[]">
        <option>Adults (12+years)</option>
        <option>0</option>
        <option>1</option>
        <option>2</option>
      </select>
      <select name="model1[]" >
      	<option>Child (upto 11 years)</option>
      	<option>0</option>
      	<option>1</option>
      	<option>2</option>
      </select>
    <!--  <input type="text" name="mytext[]">-->
 <button class="add_field_button">Add Room</button></div>

</div>
</p>
        </div>
        <div class="modal-footer">
        	
        	<input type="submit" value="submit" name="btn"> 
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    	

        </div>
      </div>
      
    </div>
  </div>
  
</div>


</div>
</form>

<div class="two">
	<font size="6" color="darkblue"><?= $row['pac_name']; ?></font><br><br>

	<font size="4"><b>Days :<?= $row['days'] ?></b>&nbsp&nbsp<b>Nights : <?= $row['night'] ?></b></font><br><br>
	<input type="radio" name="browser" id="chkac" onclick="myFunction(this.value)" value="AC Rooms" > AC

	<input type="radio" name="browser" id="chknon" onclick="myFunction(this.value)" value="Non ac rooms" >Non Ac rooms<br>
	<!--
<input type="text" name="" id="result"> 
<textarea id="result" rows="7"></textarea><br>
-->


</div>


</div>
</div>
</form>
<script type="text/javascript">

	function myFunction(browser){
		document.getElementById("result").value= browser;
	}

</script>


       <?php   
       }
  }
 ?>
<!--
<div class="input_fields_wrap">
   
    <div>Room 1:
    	<select name="model">
    		<option>---Select adults---</option>
    		<option>1</option>
    		<option>2</option>
    	</select><input type="text" name="mytext[]">
 <button class="add_field_button">Add Room</button></div>

</div> -->
<?php 

  $dbHost='localhost';
  $dbUser='root';
  $dbPassword='';
  $dbName='db_tourism';

  $conn=mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);
/*
print '<pre>';
print_r($_REQUEST['model']);
print_r($_REQUEST['model1']);
print '</pre>';*/
if(isset($_POST['btn']))
{
 $model = $_POST['model'];
    $model1 = $_POST['model1'];
  //  print_r($model);
    //print_r($model1);
//echo count($model);

$email= $_SESSION['Email'];
//echo $email;
    //if(!empty($model)){
        for($i = 0; $i < count($model); $i++){
            
                //database insert query goes here
				            
	//			echo $model[$i];
//				echo $model1[$i];

				mysqli_query($conn,"insert into tbl_num (adults,child,Email) values ($model[$i],$model1[$i],'$email')");	
 	
          
$count=count($model);        


// include('config.php');
 echo "<br>";
$email= $_SESSION['Email'];
$query= "SELECT * from tbl_num where Email='$email'";
$query1="select * from pac_cost where p_id=40";

$result=mysqli_query($conn,$query);
$result2=mysqli_query($conn,$query1);

$sum=0;
$sum2=0;
while ($row=mysqli_fetch_assoc($result)) {

	$value=$row['adults'];
	$value1=$row['child'];

	$sum += $value;
	$sum2 += $value1;
	while ($row1=mysqli_fetch_assoc($result2)) {
	
	$Other=$row1['Other'];
	$AC=$row1['AC'];
	$Non_AC=$row1['Non_AC'];
//	echo "$Other ,$AC, $Non_AC";

		//ac

}
}
}

		//ac
	$pac_price=($sum+$sum2)*$Other;

	$AC_price=$count*$AC;

	$total=$pac_price+$AC_price;

echo "<div class=three1>";
echo "<div class=price>";

echo "<font size=5 color=blue>Estimated Price: $total</font><br>";


/*	
	echo "$total"; */
echo "<font size=4>Adults :  $sum <br> 
Children :  $sum2 </font><br>";
$count=0;
echo "<form action=book1.php method=POST>";
echo '<input type=hidden name=adults value='.$sum.'><input type=hidden name=child value='.$sum2.'><input type=hidden name=total value='.$total.'><input type=submit name=btn_submit value=Proceed></form>';
echo "</div>";
echo "</div>";

}




        $query = "SELECT s_id,pac_name,cat_name,days,night,cost,image FROM tbl_create_package where pac_name='Hilly Places'";  
        	
      		    $result = mysqli_query($db,$query);
      		    if($result->num_rows!=0)
                { 

                    while($row=$result->fetch_array())  
                    {
                        $image=$row['image'];
                        $state_id=$row['s_id'];
                        $pac_name=$row['pac_name'];
                        $cat_name=$row['cat_name'];
                        $days=$row['days'];
                        $night=$row['night'];
                        $cost=$row['cost'];
                        

                        

                    $q="select pac_name,cities from pac_cities where pac_name='$pac_name'";
             		$res=mysqli_query($db,$q) or mysqli_error();
 					$package="";
 					while ($r=$res->fetch_array()) 
 					{
 						$cities=$r['cities'];
 						$pac=$r['pac_name'];

 						if ($pac_name==$pac) {
 							$package =$package." ".$cities;
 							//$array1=array($cities);
 							//print_r($array1);
 						}
          }
            $q1="select cat_name,cat_desc from tbl_categories where cat_id='$cat_name'";
            $res=mysqli_query($db,$q1) or mysqli_error();
          $name="";
          while ($r=$res->fetch_array()) 
          {
            $cat_name=$r['cat_name'];
            $cat_desc=$r['cat_desc'];

            $name =$name." ".$cat_name."<br>".$cat_desc;
          }
echo '<div class=fontsize><b>Destinations:</b>'.$package .'<br></div>
<div class=overview><font size=6><b>Overview:<br></b></font>'. $name .'</div>';
 		}}

//iternary        
         $q2="select day,pac_name,p_desc from iternary where pac_name='$pac_name'";
          $res1=mysqli_query($db,$q2) or mysqli_error();
          $name1=" ";
          $name2=" ";
		
		echo "<div class=itenarary><font size=6><b>Itenarary:</b></font>";
          while ($r1=$res1->fetch_array()) {
            $day=$r1['day'];
            $p_desc=$r1['p_desc'];
            $pac_name=$r1['pac_name'];
           echo " <div class=itenarary><br><font size=6 color=99004d><b>$day</b>:</font></div>
            <div class=itenarary><font size=4> $p_desc</font></div>";
            
            }

    

?>
<?php /* echo "<br>";
$query= "SELECT * from tbl_num where Email='$email'";
$result=mysqli_query($conn,$query);
/*
$array= array();
while ($row=mysqli_fetch_assoc($query) ){
	$array[]=$row;
}
$sum=0;
$sum2=0;
while ($row=mysqli_fetch_assoc($result)) {
	$value=$row['adults'];
	$value1=$row['child'];

	$sum += $value;
	$sum2 += $value1;
}
echo $sum."<br>";
echo $sum2."<br>";

/*
print_r (array_sum($array))."<br>";
print_r (array_sum($model1));
*/
?>





 </body>
</html>
