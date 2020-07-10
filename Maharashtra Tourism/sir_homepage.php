<?php
    session_start();

    if (!isset($_SESSION['luser'])) {
        echo "Please Login again";
        echo "<a href='sir_login.php'>Click Here to Login</a>";
    }
    else {
        $now = time(); // Checking the time now when home page starts.

        if ($now > $_SESSION['expire']) {
            session_destroy();
            echo "Your session has expired! <a href='sir_login.php'>Login here</a>";
        }
        else { //Starting this else one [else1]
?>
            <!-- From here all HTML coding can be done -->
           <!DOCTYPE html>
<html>

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
    width: 60%;
    background-color: green;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: 1px solid gray;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: gray;
}

div {
    border-radius: 10px;
    background-image: 
    padding: 20px;

}
input[type=cancel] {

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
input[type=cancel]:hover {
    background-color: gray;
}

input[type=bgimg1]

{
    background-image:url("c:/wamp/www/Nisha/signimage.jpeg");
  
}


</style>

<body bgcolor="lightblue">
<font size="4" color="darkblue"><b><p style="text-indent: 60em;"><a href="signform.html"><u>Signin</u></a> &nbsp      <a href="homepage.html"><u> Home</u></a></p></b></font>

<center><h1 style="color: navy">Log-in form</h1></center>
<center><font size="4">
<div class="bgimg1">


<label for="email"><b>Email:</b></label>
<input type="text" id="email" name="email" placeholder="Enter email or contact...."><br>

<label for="pass"><b>Password:</b></label>
<input type="text" id="pass" name="pass" placeholder="Enter 8 digits password"><br>


<label for="submit"></label>
<input type="submit" id="submit" name="btn_submit" placeholder="submit"><br>

<label for="cancel"></label>
<input type="cancel" id="cancel" name="btn_cancel" placeholder="Cancel"><br> 

</font>
</center>
</body>
</div>
</html>


<?php
        }
    }
?>