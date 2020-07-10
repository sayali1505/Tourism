<select name="pid">
<option>----Select Package id-----</option>

<?php

        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'db_tourism';
        
        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

        $sql="SELECT package_id,pac_name FROM tbl_create_package";
            $res=$db->query($sql);

            if ($res->num_rows!=0) 
            {
                while ($r=$res->fetch_assoc()) 
                    {
                        echo "<option value='".$r['package_id']."'>".$r['pac_name']."</option>";
                    }   
            }
        ?>
    </select><br>





<label for="pac_desc"><b>Enter Package description:</b></label>
<textarea name=pac_desc cols=70 rows=10 wrap value=pac_desc></textarea><br>




















<?php

$fname=$_POST['fname'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$arrival=$_POST['arrival'];
$dept=$_POST['dept'];
$adults=$_POST['adults'];
$children=$_POST['children'];


if(isset($_POST['btn_submit']))
{

  $dbHost='localhost';
  $dbUser='root';
  $dbPassword='';
  $dbName='db_tourism';

  $conn=mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

if (!$conn) 
{
  die("connection failed: ".mysqli_connect_error());
}


$check=mysqli_query($conn,"select * from tbl_booknow "); 
$checkrows=mysqli_num_rows($check);

if(!empty($fname && $email))
{

if($checkrows>0)
{
  echo "<div class=ck>Already exists in table<br><br><a href=new_booknow.php><button float=right>Back</button></a></div>";
}
else
{
  $sql="INSERT INTO tbl_booknow (fname,email,contact,arrival,dept,adults,children) VALUES ('$fname', 'email','contact','arrival','dept','adults','children')";

  if (mysqli_query($conn, $sql)) {
  echo "<div class=ck>New record created successfully.<br><br><a href=new_booknow.php><button float=right>Back</button></a></div>";
  }
  else{
    echo "<div class=ck>ERROR: <br><br>".$sql. "<br>".mysqli_error($conn);
    echo "<br><a href=new_booknow.php><button float=right>Back</button></a></div>";
  }
}
}
else{
  echo "<div class=ck>Field should not be empty.<br><br><a href=new_booknow.php><button float=right>Back</button></a></div>";
}
mysqli_close($conn);



//$con= mysql_connect("localhost"," "," ") or die(mysql_error());

//mysql_select_db("db_tourism","$con") or die(mysql_error());

}
?>



src="data:image/jpeg;base64,'.base64_encode($row['image']).'" alt=John style=width:100% ;height:20%





<center><font size="6">Add Locations</font></center>
