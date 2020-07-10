<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		
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
    border-radius: 10px;
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
</style>
</head>
<body>
    <center>
<?php

//require_once 'config.php';
include("config.php");

$sql="select state_id,state_name from tbl_states";
$result= mysqli_query($conn,$sql)or die(mysql_error());


if (mysqli_num_rows($result)>0) 
{
    //Output data of each row
    echo "<table align=center style=max-width: 50px border=1  bgcolor= silver cellspacing=5 cellpadding=10>
            <tr>
              <th>State id</th>
             <th>State name</th>
            </tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "     <tr>
                        <td>$row[state_id]</td>
                        <td>$row[state_name]</td>
                    </tr>";
    }
    echo "</table>";
}
else
        echo "No result found";

//mysqli_close($conn);

?>
</center>
<form action="add_state.php" method="POST">

		
	<center><h1 style="color: navy">Add States</h1></center>
<center>

<label for="state_id"><b>Enter state id:</b></label>
<input type="text" id="state_id" name="state_id" placeholder="Enter state id "><br>

<label for="state_name"><b>Enter state name:</b></label>
<input type="text" id="state_name" name="state_name" placeholder="Enter state name "><br>



<label for="submit"></label>
<input type="submit" id="submit" name="btn_submit1" placeholder="Save" value="Save">



<label for="reset"></label>
<input type="reset" id="reset" name="btn_cancel" placeholder="reset" value="Reset"><br> 

</form>


</body>
</html>