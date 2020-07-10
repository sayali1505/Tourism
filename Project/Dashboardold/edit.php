<!DOCTYPE html>
<html>
<head>
	<title></title>
		<style type="text/css">
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
    margin-left: 45%;
}
	</style>

</head>
<body>
<div class="pad1">
<?php
//require_once 'config.php';
include("config.php");

if (isset($_GET['edit'])) {
	$state_id=$_GET['edit'];
	$res=mysqli_query("select * from tbl_states where state_id=$state_id");
	$row=mysqli_fetch_array($res);
}

$sql="select state_id,state_name from tbl_states";
$result= mysqli_query($conn,$sql)or die(mysql_error());


if (mysqli_num_rows($result)>0) 
{
    //Output data of each row
    echo "<table id=t01 align=center>
            <tr>
              <th>State id</th>
             <th>State name</th>
            </tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "     <tr>
                        <td>$row[state_id]</td>
                        <td><input type=text name=new value=echo($state_name[1];)></td>

                    </tr>";
    }
    echo "</table>";
}
else
        echo "No result found";

//mysqli_close($conn);


?>
<input type="submit" name="" value="update" />
</div>
</form>
</body>
</html>