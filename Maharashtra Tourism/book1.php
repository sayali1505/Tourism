<?php  session_start();

?>
<!DOCTYPE html>
<html>
<head>
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
.two{
	
	margin-top: 5%;
	margin-left: 10%;
}

input[type=text], input[type=password] 
{
    width: 20%;
    padding: 8px 8px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
#one{
width: 10%;
}
</style>
</head>
<body>


<ul>

  <li class="head"><b><font color="#b30000">M</font><font color="#ffff99">aharashtra</font> <font color="#b30000">T</font><font color="#ffff99">ourism</font></font></b></li>

</ul>

<?php

  $dbHost='localhost';
  $dbUser='root';
  $dbPassword='';
  $dbName='db_tourism';

  $conn=mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

//if (isset($_POST['btn_submit'])) 
//{
	$uemail= $_SESSION['Email'];
$id=$_SESSION['package_id'];
	        $query = "SELECT s_id,pac_name,cat_name,days,night,cost,image FROM tbl_create_package where package_id='$id'";  
        	
      		    $result = mysqli_query($conn,$query)or die(mysql_error());
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


            $q1="select cat_name,cat_desc from tbl_categories where cat_id='$cat_name'";
            $res=mysqli_query($conn,$q1) or mysqli_error();
          $name="";
          while ($r=$res->fetch_array()) 
          {
            $cat_name=$r['cat_name'];
            $cat_desc=$r['cat_desc'];

            $name =$name." ".$cat_name."<br>";
          }
 						



$adult=$_POST['adults'];
$child=$_POST['child'];
$total=$_POST['total'];

?>
<form method="POST" action="addbooking.php">
<div class="two">
	<font size="5" color="darkblue">Package Name : <?= $row['pac_name']; ?>  Category : <?= $name ?> </font><font color="green" size="5"> Grand Total : </font><font size="5" color="red"><?= $total ?></font><br><br>

	<font size="4"><b>Days : <?= $row['days'] ?></b>&nbsp&nbsp<b>Nights : <?= $row['night'] ?></b></font><br><br>
	
	<!--
<input type="text" name="" id="result"> 
<textarea id="result" rows="7"></textarea><br>
--><b>Enter Details :</b><br>
Total Adults : <?=$adult ?> Total children : <?=$child ?>
<?php
for ($i=1; $i <= $adult; $i++) 
{ ?>
	<br>Adult : <?= $i ?><br>
	<input type="text" name="fname" placeholder="Enter First Name">
	<input type="text" name="lname" placeholder="Enter Last Name">
	<input id="one" type=text name="dob" placeholder="dd/mm/yy">
	<input type="text" name="email" placeholder="Email id">
	<input type="text" name="mobno" placeholder="Mobile Number" maxlength="10">
<?php }
?>


<?php
//childrens
for ($i=1; $i <= $child; $i++) 
{ ?>
	<br>Child : <?= $i ?><br>
	<input type="text" name="fname" placeholder="Enter First Name">
	<input type="text" name="lname" placeholder="Enter Last Name">
	<input id="one" type=text name="dob" placeholder="dd/mm/yy">
	
<?php }
?>

<?php 
	} 
	} //}
	echo "<input type=hidden name=total value=$total>";
?>
<input type="hidden" name="adult" value="<?= $adult ?>">
<input type="hidden" name="child" value="<?= $child ?>">
<input type="submit" name="submit" value="Book">
</form>

</div>
</body>
</html>