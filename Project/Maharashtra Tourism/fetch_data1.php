<?php
if(isset($_POST['get_option']))
{
 $host = 'localhost';
 $user = 'root';
 $pass = '';
 $con = mysqli_connect($host, $user, $pass);
 mysqli_select_db($con, 'db_tourism');

 $state = $_POST['get_option'];

 $find=mysqli_query($con, "select loc_spot_name from tbl_loc_spots where loc_spot_location_id=(select loc_id from tbl_location where loc_name='{$state}')");
 
 $options = '<option selected>Select location spot</option>';
 while($row=mysqli_fetch_array($find))
 {
   $options .= "<option>".$row['loc_spot_name']."</option>";
 }

 echo $options;
 exit;
}
?>
