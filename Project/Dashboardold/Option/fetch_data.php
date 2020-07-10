<!DOCTYPE html>
<html>
<head>
	<title></title>

<script type="text/javascript">
function fetch_select1(val)
{
 $.ajax({
 type: 'post',
 url: 'fetch_data1.php',
 data: {
  get_option:val
 },
 success: function (response) {
  document.getElementById("new_select1").innerHTML=response; 
 }
 });
}

</script>

</head>
<body>

</body>
</html>

<?php
if(isset($_POST['get_option']))
{
 $host = 'localhost';
 $user = 'root';
 $pass = '';
 mysql_connect($host, $user, $pass);
 mysql_select_db('db_tourism');

 $state = $_POST['get_option'];
 //echo "$state";
 $find=mysql_query("select loc_name from tbl_location where loc_state_id='$state'");

 $options = '<option selected>Select location</option>';
 while($row=mysql_fetch_array($find))
 {
  $options .= "<option>".$row['loc_name']."</option>";
 }

 echo $options;

 exit;
}
?>


