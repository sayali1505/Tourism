<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">
  
/* Navigation Bar */

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


/*bottom navigation bar*/

.navbar {
  overflow: hidden;
  background-color: #333;
  position:;
  bottom: 0;
  width: 100%;
  background-color: mediumseagreen;
}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background: gray;
  color: black;
}

.navbar a.active {
  background-color: #4CAF50;
  color: white;
}


/* footer */

.footer {

   position: relative;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: gray;
   color: white;
   text-align: center;

}


.fa {
  
  padding: 10px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin-bottom: 5px;
  margin-top: 5px;
  margin-right: 20px;
  float: right;

}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}


/* Left side image */
.left{

  float: left;
  margin-top: 30px;

}

/* Right side text */

.right{

  float: right;
  margin-top: 30px;

}

/* Title */
.title{

    margin-top: 7%;
    margin-right: 16%;

    }

.img{

  width: 100%;
  margin-top: 70px;
  margin-left: 8%;


}
.img:hover{
  opacity: 0.6;
}



/* Buttons  */

button.booking{
    
    color: darkorange;
    cursor: pointer;
    padding: 10px;
    margin:center;
    border: 4px;
    outline- color: black;
    font-size: 30px;
    transition: 0.4s;
    background-color: aquamarine;
    margin-left: 20px;
    margin-top: 20px;
    margin-bottom: 10px;
    padding-bottom: 15px;
    width: 15%;
    border-radius: 10%;

}

button:hover {
    background-color: #3e8e41;
}


button.booking1{
    
    color: darkorange;
    cursor: pointer;
    padding: 10px;
    margin:center;
    border: 4px;
    outline- color: black;
    font-size: 30px;
    transition: 0.4s;
    background-color: aquamarine;
    margin-left: 20px;
    margin-top: 20px;
    margin-bottom: 10px;
    padding-bottom: 15px;
    width: 15%;
    border-radius: 10%;

}

button:hover{
    background-color: #3e8e41;

}

button.top{
    
    color: black;
   /* cursor: pointer; */
    padding: 10px;
    margin:center;
    border: 4px;
    outline- color: black;
    font-size: 30px;
    transition: 0.4s;
    background-color: gray;
    margin-left: 20px;
    margin-top: 20px;
    margin-bottom: 10px;
    padding-bottom: 15px;
    width: 15%;
    border-radius: 10%;
  

}

button:hover {
    background-color: #3e8e41;
}



.tbar{

  margin-top: 5%;
  margin-left: 5%;
  margin-right: 5%;
  background-color: #004d4d;
  border-radius: 5%;

}

.section {
  margin: 50px 0;

}


</style>


</head>
<body>
<ul>

  <li><a href="Travel_Talk1.html"><font  color="red" size="4">Get a quote</font></a></li>
  <li><a href="blog.html"><font size="4">Blogs</font></a></li>
  
  <li class="dropdown">
    
    <a href="#" class="dropbtn"><font size="4">Destinations</font> </a>
    <div class="dropdown-content">
      
      <a href="#"><font size="4">Mumbai</font></a>
      <a href="#"><font size="4">Mahabaleshwar</font></a>
      <a href="#"><font size="4">Pune</font></a>
      <a href="#"><font size="4">Kolhapur</font></a>
    
    </div>
    
  </li>

  <li class="dropdown">
    <a href="#" class="dropbtn"><font size="4">Packages</font> </a>
    <div class="dropdown-content">
      <a href="#"><font size="4"><b>By Themes</b></font></a>  
      <a href="mah_packages.html"><font size="4">Beach Holidays</font></a>
      <a href="#"><font size="4">Adventure Tours</font></a>
      <a href="#"><font size="4">Family Packages</font></a>
      <a href="#"><font size="4">Golden triangle tour</font></a>
      <a href="#"><font size="4">Chota break</font></a>
     

    </div></li>
    
    
  <li><a href="mah_tourism_homepage.html"><font size="4">Home</font></a></li>

  <li class="head"><b><font color="#b30000">M</font><font color="#ffff99">aharashtra</font> <font color="#b30000">T</font><font color="#ffff99">ourism</font></font></b></li>

</ul>
<?php

        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'db_tourism';
        
        //Create connection and select DB
                
        $id=$_GET['id'];    
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

        $query = "SELECT s_id,pac_name,cat_name,days,night,cost,image FROM tbl_create_package where package_id=$id";  
          
              $result = mysqli_query($db,$query);
                
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
                        

                        

                    $q="select pac_name,cities from pac_cities where pac_name='$pac_name'";
                $res=mysqli_query($db,$q) or mysqli_error();
          $package="";
          while ($r=$res->fetch_array()) 
          {
            $cities=$r['cities'];
            $pac=$r['pac_name'];

            if ($pac_name==$pac) {
              $package =$package." ".$cities;
              //$array1=array($cities);
              //print_r($array1);
            }
          }
            $q1="select cat_name,cat_desc from tbl_categories where cat_id='$cat_name'";
            $res=mysqli_query($db,$q1) or mysqli_error();
          $name="";
          while ($r=$res->fetch_array()) 
          {
            $cat_name=$r['cat_name'];
            $cat_desc=$r['cat_desc'];

            $name =$name." ".$cat_name."<br>".$cat_desc;
          }
            
          $q2="select day,pac_name,p_desc from iternary where pac_name='$pac_name'";
          $res1=mysqli_query($db,$q2) or mysqli_error();
          $name1=" ";
          $name2=" ";

          while ($r1=$res1->fetch_array()) {
            $day=$r1['day'];
            $p_desc=$r1['p_desc'];
            $pac_name=$r1['pac_name'];

            $name1=$name1." ".$day; echo "<br>";
            $name2=$name2." ".$p_desc;

          }
?>

  <p id="top"><font size="8" color="gray"><center><?php $row['pac_name']?></center></font></p>

<div class="img">
<div class="left">


  <img src=<?php images/$row['image'] ?> style="width:90%" height="250px">

</div>
</div>


<div class="title">
<div class="right">


  <font size="6" color="darkpink"><b>Destination:</b></font><font size="5" color="green"> <?php $package ?></font><br>
<font size="6" color="darkpink"><b>Duration:</b></font><font size="5" color="green">Days :<?php $row['days']?> </font>
<br><br>
</div>
</div>

<button class="booking" name="btn_submit">Book Now</button>
<a href="Travel_talk1.html"><button class="booking" name="btn_submit">Enquire now</button></a>




<div class="tbar">

<a href="#Overview"><button class="booking1" name="btn_submit" style="width: 15%;height: 50px;">Overview</button></a>
<a href="#Itinerary"><button class="booking1" name="btn_submit" style="width: 15%;height: 50px;">Itinerary</button></a>
<a href="#Price"><button class="booking1" name="btn_submit" style="width: 15%;height: 50px;">Price</button></a>
<a href="#Inclusions"><button class="booking1" name="btn_submit" style="width: 15%;height: 50px;">Inclusions</button></a>
<a href="#Exclusions"><button class="booking1" name="btn_submit" style="width: 15%;height: 50px;">Exclusions</button></a>

</div>

<div class="section">
<a name="Overview">
<font size="6" color="darkblue" style="margin-left: 5%;margin-top: 5%;"><b>Overview:</b></font></a>
<p><i>
    Malvan (also written as Malwan) About this sound pronunciation (help·info) is a town and taluka in Sindhudurg District, the southernmost district of Maharashtra State, India, well known for the historically important Sindhudurg Fort. Malvan taluka consists of villages such as Aangnechi Wadi (Village : Masure ), Achra, Khalchi Devli, Jamdul, Juva, Pankhol, Talasheel and Sarjekot. The main occupation here is fishing with the staple diet of the local people fish curry and rice. The town produces Alphonso mangoes and is also known for sweets such as Malvani Khaja made from gram-besan flour and coated jaggery as well as Malvani Ladoos. Malvani Dashavtar, a drama-play based on mythological stories, is an important cultural element of the area.

Several apocryphal and some more credible stories related to the name Malvan exist. Salt producers use term Mahalavan to describe a region rich in salt, a compound word from "Maha" meaning great, and "lavan" meaning plantation (or salt). Another possibility is a phonetic derivative of the compound of "Mad" and "Ban", Malvani for coconut trees and garden respectively, relating to the large number of coconut trees in the region.
</i>
</p>
<br>
</div>


<a name="Itinerary">
<font size="6" color="darkblue" style="margin-left: 5%;"><b>Itinerary:</b></font></a>
<p><i>
    Malvan (also written as Malwan) About this sound pronunciation (help·info) is a town and taluka in Sindhudurg District, the southernmost district of Maharashtra State, India, well known for the historically important Sindhudurg Fort. Malvan taluka consists of villages such as Aangnechi Wadi (Village : Masure ), Achra, Khalchi Devli, Jamdul, Juva, Pankhol, Talasheel and Sarjekot. The main occupation here is fishing with the staple diet of the local people fish curry and rice. The town produces Alphonso mangoes and is also known for sweets such as Malvani Khaja made from gram-besan flour and coated jaggery as well as Malvani Ladoos. Malvani Dashavtar, a drama-play based on mythological stories, is an important cultural element of the area.

Several apocryphal and some more credible stories related to the name Malvan exist. Salt producers use term Mahalavan to describe a region rich in salt, a compound word from "Maha" meaning great, and "lavan" meaning plantation (or salt). Another possibility is a phonetic derivative of the compound of "Mad" and "Ban", Malvani for coconut trees and garden respectively, relating to the large number of coconut trees in the region.
</i>
</p>

<br>

<a name="Price">
<font size="6" color="darkblue" style="margin-left: 5%;"><b>Price:</b></font></a>
<p><i>
    Malvan (also written as Malwan) About this sound pronunciation (help·info) is a town and taluka in Sindhudurg District, the southernmost district of Maharashtra State, India, well known for the historically important Sindhudurg Fort. Malvan taluka consists of villages such as Aangnechi Wadi (Village : Masure ), Achra, Khalchi Devli, Jamdul, Juva, Pankhol, Talasheel and Sarjekot. The main occupation here is fishing with the staple diet of the local people fish curry and rice. The town produces Alphonso mangoes and is also known for sweets such as Malvani Khaja made from gram-besan flour and coated jaggery as well as Malvani Ladoos. Malvani Dashavtar, a drama-play based on mythological stories, is an important cultural element of the area.

Several apocryphal and some more credible stories related to the name Malvan exist. Salt producers use term Mahalavan to describe a region rich in salt, a compound word from "Maha" meaning great, and "lavan" meaning plantation (or salt). Another possibility is a phonetic derivative of the compound of "Mad" and "Ban", Malvani for coconut trees and garden respectively, relating to the large number of coconut trees in the region.
</i>
</p>

<br>

<a name="Inclusions">
<font size="6" color="darkblue" style="margin-left: 5%;"><b>Inclusions:</b></font></a>
<p><i>
    Malvan (also written as Malwan) About this sound pronunciation (help·info) is a town and taluka in Sindhudurg District, the southernmost district of Maharashtra State, India, well known for the historically important Sindhudurg Fort. Malvan taluka consists of villages such as Aangnechi Wadi (Village : Masure ), Achra, Khalchi Devli, Jamdul, Juva, Pankhol, Talasheel and Sarjekot. The main occupation here is fishing with the staple diet of the local people fish curry and rice. The town produces Alphonso mangoes and is also known for sweets such as Malvani Khaja made from gram-besan flour and coated jaggery as well as Malvani Ladoos. Malvani Dashavtar, a drama-play based on mythological stories, is an important cultural element of the area.

Several apocryphal and some more credible stories related to the name Malvan exist. Salt producers use term Mahalavan to describe a region rich in salt, a compound word from "Maha" meaning great, and "lavan" meaning plantation (or salt). Another possibility is a phonetic derivative of the compound of "Mad" and "Ban", Malvani for coconut trees and garden respectively, relating to the large number of coconut trees in the region.
</i>
</p>

<br>


<a name="Exclusions">
<font size="6" color="darkblue" style="margin-left: 5%;"><b>Exclusions:</b></font></a>
<p><i>
    Malvan (also written as Malwan) About this sound pronunciation (help·info) is a town and taluka in Sindhudurg District, the southernmost district of Maharashtra State, India, well known for the historically important Sindhudurg Fort. Malvan taluka consists of villages such as Aangnechi Wadi (Village : Masure ), Achra, Khalchi Devli, Jamdul, Juva, Pankhol, Talasheel and Sarjekot. The main occupation here is fishing with the staple diet of the local people fish curry and rice. The town produces Alphonso mangoes and is also known for sweets such as Malvani Khaja made from gram-besan flour and coated jaggery as well as Malvani Ladoos. Malvani Dashavtar, a drama-play based on mythological stories, is an important cultural element of the area.

Several apocryphal and some more credible stories related to the name Malvan exist. Salt producers use term Mahalavan to describe a region rich in salt, a compound word from "Maha" meaning great, and "lavan" meaning plantation (or salt). Another possibility is a phonetic derivative of the compound of "Mad" and "Ban", Malvani for coconut trees and garden respectively, relating to the large number of coconut trees in the region.
</i>
</p>

<br>

<a href="#top"><button class="top" style="width: 5%;float: right;margin-right: 40px;">Top</button></a>

<div class="navbar">
  <a href="#">About us</a>
  <a href="#">Terms & conditions</a>
  <a href="#">Sitemap</a>
  <a href="Travel_Talk1.html">Inquire now</a>
  
</div>

<div class="footer">

<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-youtube"></a>

</div>



<?php }}
?>
</body>
</html>