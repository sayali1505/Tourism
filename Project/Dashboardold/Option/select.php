<html>
<head>

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
function fetch_select(val)
{
 $.ajax({
 type: 'post',
 url: '../fetch_data.php',
 data: {
  get_option:val
 },
 success: function (response) {
  document.getElementById("new_select").innerHTML=response; 
 }
 });
}

</script>

<script type="text/javascript">
function fetch_select1(val)
{
  console.log('in fetch_select1');
 $.ajax({
 type: 'post',
 url: '../fetch_data1.php',
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
<p id="heading">Dynamic Select Option</p>
<center>
<div id="select_box">
 <select onchange="fetch_select(this.value);">
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
 </select>

 <select id="new_select" onchange="fetch_select1(this.value);">
  
  <?php
  echo "string";
  $host = 'localhost';
  $user = 'root';
  $pass = '';
  mysql_connect($host, $user, $pass);
  mysql_select_db('db_tourism');

  $select=mysql_query("select loc_spot_id from tbl_loc_spots where loc_spot_location_id=1");

  while($row=mysql_fetch_array($select))
  {
       echo "<option>".$row['loc_spot_id']."</option>";
  }
 ?>
 </select>
	  
<select id="new_select1"></select>
</div>     
</center>


<label for="submit"></label>
<input type="submit" id="submit" name="btn_submit" placeholder="Save" value="Save">



</body>
</html>
