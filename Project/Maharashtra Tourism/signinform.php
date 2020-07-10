
<?php
/*
$f_name=$_POST['fname'];
$l_name=$_POST['lname'];
$dob=$_POST['dob'];
$Email=$_POST['Email'];
$no=$_POST['no'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];*/
session_start();

$f_name="";
$l_name="";
$Email="";
$dob="";
$no="";
$errors=array();


  $dbHost='localhost';
  $dbUser='root';
  $dbPassword='';
  $dbName='db_tourism';

  $conn=mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

if (!$conn) 
{
  die("connection failed: ".mysqli_connect_error());
}
//if signup button is clicked
if (isset($_POST['signup'])) {
  $f_name = mysqli_real_escape_string($conn,$_POST['fname']);
  $l_name = mysqli_real_escape_string($conn,$_POST['lname']);
  $dob = mysqli_real_escape_string($conn,$_POST['dob']);
  $Email = mysqli_real_escape_string($conn,$_POST['Email']);
  $no = mysqli_real_escape_string($conn,$_POST['no']);
  $pass = mysqli_real_escape_string($conn,$_POST['pass']);
  $cpass = mysqli_real_escape_string($conn,$_POST['cpass']);

//ensures that fields are filled properly
  if (empty($f_name)) {
    array_push($errors, "First name is required");
  }

 if (empty($l_name)) {
    array_push($errors, "Last name is required");
  }

 if (empty($dob)) {
    array_push($errors, "Birth date is required");
  }

 if (empty($Email)) {
    array_push($errors, "Email is required");
  }

 if (empty($no)) {
    array_push($errors, "Mobile number  is required");
  }

if ($pass!=$cpass) {
  array_push($errors, "The two passwords do not match");
}
 
 //if no error then save
if (count($errors)==0) {
$pass=md5($pass);

  $sql="INSERT INTO register (f_name,l_name,dob,Email,c_number,pass,c_pass) VALUES ('$f_name', '$l_name','$dob','$Email','$no','$pass','$cpass')";
mysqli_query($conn,$sql);




$_SESSION['f_name']=$f_name;
$_SESSION['success']="You are now logged in";
header('location: mah_login.php ');//redirect to homepage

    }
  }

//login
if (isset($_POST['btn'])) 
{
  $Email = mysqli_real_escape_string($conn,$_POST['Email']);
  $pass = mysqli_real_escape_string($conn,$_POST['pass']);
  $package_id=$_POST['package_id'];

 if (empty($Email)) {
    array_push($errors, "Email is required");
  }

 if (empty($pass)) {
    array_push($errors, "Password  is required");
  }

if (count($errors)==0) {
    $pass=md5($pass);
    $query= "SELECT * from register where Email='$Email' AND pass='$pass' AND f_name='$f_name' ";
    $row=mysqli_query($conn,$query);
if (!$row) 
  {
     header("Location: mah_login.php");
     echo '<script>alert("Invalid username or password")</script>';
     echo '<script>window.location=</script>';
  }
  else
  {
    session_start();
    $_SESSION['Email']=$Email;
    $_SESSION['pass']=$pass;
    $_SESSION['package_id']=$package_id;
    header('location:newbook.php');
  } 

/*
    if (mysqli_num_rows($result)==1) {
      
            $_SESSION['f_name']=$f_name;
$_SESSION['success']="You are now logged in";

            $_SESSION['Email']=$Email;
            echo "<script>alert('Registered successfully')</script>";
            
            $_SESSION['success']= "You are now logged in";
            header('location: mah_tourism_homepage.html ');
            
    }
        else{
          array_push($errors, "Invalid  username or password");
          echo "<script>alert('Invalid email and password')</script>";
 //         header('location: mah_login.php');
        }*/  

}}


//logout
if (isset($GET['logout'])) {
  session_destroy();
  unset($_SESSION['f_name']);
  header('location: mah_tourism_homepage.html ');//redirect to homepage

}
?>