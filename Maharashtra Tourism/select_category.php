<!DOCTYPE html>
<html>
<head>
    <title></title>

<style type="text/css">
*{
    margin: 0px;
}
  *{
  margin: 0px;
}

/* Maharashtra Tourism */ 
.name{
  background-image: url("trees.jpg");
  /*width: 100%;
  /*background-color:#77b300; 
  height: 300px;
  font-family: ;*/
  background-size: 100%;
  background-repeat: no-repeat;
  background-position: center;
  padding-left: 25px;
  padding-right: 25px;
  padding-bottom: 20px;
  padding-top: 20px;

}

/* Admin panel */
.title{

  width: 100%;
  background-color: #85adad;
  height: 40%;
  padding-top: 10px;
  padding-bottom: 10px;
/*  background-image: url(sunset.jpg); */
}

.container {
    position: relative;
    /*text-align: center;*/
    color: white;
    margin-left: 5%;
    margin-top: 10%;
}
/*
.centered {
    position: absolute;
   /* top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  margin-left: 5%;
    margin-top: 5%;   

}*/

/* Megamenu */

.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial;

}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 25px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: gray;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    width: 100%;
    left: 0;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content .header {
    background:#80aaff;
    padding: 16px;
    color: white;

}

.dropdown:hover .dropdown-content {
    display: block;
}

/* Create three equal columns that floats next to each other */
.column {
    float: left;
    width: 31.80%;
    padding: 10px;
    background-color:#ffffcc;
    height: 200px;
    
}

.column a {
    float: none;
    color: black;
    padding: 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.column a:hover {
    background-color: #ddd;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
    .column {
        width: 100%;
        height: auto;
    }
}

.container {
    position: relative;
    /*text-align: center;*/
    
    margin-left: 5%;
    margin-top: 2%;
}

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
    width: 25%;
    background-color: darkgreen;
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

input[type=reset] {

    width: 25%;
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
        table{
    width: 85%;

}
table,th,td {
    border:1px solid black;
  border-collapse: collapse;
}
th,td{
    padding: 15px;
    text-align: justify-all;
}
table#t01 th{
    background-color: green;
    color: white;
}


.pad{
    padding-top: 30px;
    
    width: 80%;
    height: 500px;

}

.pad1{
    margin-top: 10px;
    float: right;
    width:40%;
    text-align: center;

}
.border{

    box-shadow: 0 40px 60px rgba(0,0,0,0.9);
    margin-left: 100px;
    margin-right: 350px;
    padding-left: 90px;
    padding-top: 25px;
    padding-bottom: 30px;

}
</style>
</head>
<body>



<div class="name">
    <center><font size="16" color="white">M</font><font size="10" color="white">AHARASHTRA</font>&nbsp&nbsp <font size="16" color="white">T</font><font size="10" color="white">OURISM </font></center>

</div>

<div class="title">
    <font size="9" color="#334d4d"><center><b>ADMIN PANEL</b></center></font>

</div>

<div class="navbar">
  <div class="dropdown">
    <button class="dropbtn">Admin 
      <i class="fa fa-caret-down"></i>

    </button>
    <div class="dropdown-content">
      <div class="header">
        <h2>Admin can add ,edit or delete data here.</h2>
      </div>   
      <div class="row">
        <div class="column">
          <h1>Add</h1>
          <a href="states.php">States</a>
          <a href="locations.php">Locations</a>
          <a href="#">Categories</a>
        </div>
        <div class="column">
          <h1>Create</h1>
          <a href="#">Packages</a>
          <a href="#">Itinerary</a>
        </div>
        <div class="column">
          <h1>View</h1>
          <a href="#">State details </a>
          <a href="#">Location details</a>
          <a href="#">Package details</a>
        </div>
      </div>
    </div>
  </div> 
   <font style="float: right; margin-right:  10px;"><a href="new_adminpanel.html">Home</a></font>
</div>




<form method="POST" action="add_cat.php">
<div class="pad">
<div class="border">
<center><font size="6" color="blue">Add Categories</font></center>




<label for="cat_name"><font color="black" size="4"><b>Enter Categories name:</b></font></label><br>
<input type="text" id="cat_name" name="cat_name" placeholder="Enter Categories " value=""><br>

<label for="cat_desc"><font color="black" size="4"><b>Enter categories Description:</b></font></label><br>
<textarea name=cat_desc cols=60 rows=8 wrap value=cat_desc></textarea><br>


<label for="submit"></label>
<input type="submit" id="submit" name="btn_submit1" placeholder="Save" value="ADD">



<label for="reset"></label>
<input type="reset" id="reset" name="btn_cancel" placeholder="reset" value="Reset"><br> 
</div>

</div>

</form>
</body>
</html>