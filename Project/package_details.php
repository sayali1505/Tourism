<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">
  
/* Navigation Bar */

 ul {
    list-style-type: none;
    margin: 0;
    padding: 0px;
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




/* slider */

* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
  margin-top: 30px;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}


/* Title */
.title{

    margin-top: 100px;
    margin-left: 180px;
    
    }

/* Overview */
.overview{

    margin-top: 10px;
    margin-top: 18px;
    padding-left: 80px;
    padding-right: 80px;
}

/* Itenarary */
.itenarary{

    margin-top: 18px;
    padding-right: 80px;
    padding-left: 80px;

}

/* Itenarary details */
button.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

button.accordion.active, button.accordion:hover {
    background-color: #ccc;
}

button.accordion:after {
    content: '\002B';
    color: #777;
    font-weight: bold;
    float: right;
    margin-left: 5px;
}

button.accordion.active:after {
    content: "\2212";
}

.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}


/* Booking  */

.book{

    margin-top: 5px;
    margin-bottom: 5px;

}

button.booking{
    
    color: darkorange;
    cursor: pointer;
    padding: 10px;
    margin:center;
    margin-left: 45%;
    border: 4px;
    outline- color: black;
    font-size: 30px;
    transition: 0.4s;
    background-color: aquamarine;
    margin-bottom: 5%;
    padding-bottom: 5%;
}

button:hover {
    background-color: #3e8e41;
}



</style>


</head>
<body>
<ul>
  <li><a href="#"><font  color="red">Get a quote</font></a></li>
  <li><a href="#">Blogs</a></li>
  
  <li class="dropdown">
    <a href="#" class="dropbtn">Destinations </a>
    <div class="dropdown-content">
      <a href="#">Mumbai</a>
      <a href="#">Mahabaleshwar</a>
      <a href="#">Pune</a>
      <a href="#">Aurangabad</a>
    </div>
  </li>

  <li class="dropdown">
    <a href="#" class="dropbtn">Packages </a>
    <div class="dropdown-content">
        <a href="#"><font size="5"><b>By Themes</b></font></a>  
      <a href="#">Beach Holidays</a>
      <a href="#">Adventure Tours</a>
      <a href="#">Family Packages</a>
      <a href="#">Golden triangle tour</a>
      <a href="#">Chota break</a>


    </div>
  </li>

  <li><a href="#">Home</a></li>

</ul>


<marquee direction="left"><font size="5" color="blue"><a href="Travel_Talk1.html">Get a free quote</a></font></marquee>


<div class="title">
<font size="5" color="darkpink"><b>Destination:</b></font><font size="5" color="green"> Malvan - Tarkarli - Sindhudurg </font><br>
<font size="5" color="darkpink"><b>Duration:</b></font><font size="5" color="green"> 1 - 3 Days </font>
</div>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="Imgs/ajanta_caves.jpg" style="width:100%" height="400px">
  <div class="text"><h2>Taj Hotel</h2></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="kolhapur.jpg" style="width:100%" height="400px">
  <div class="text"><h2>Kolhapur</h2></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="murud_janjira_fort.jpg" style="width:100%" height="400px">
  <div class="text"><h2>Murud janjira fort</h2></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

<div class="overview">

<font size="6" color="red">Overview:</font>
<p><i>
    Malvan (also written as Malwan) About this sound pronunciation (help·info) is a town and taluka in Sindhudurg District, the southernmost district of Maharashtra State, India, well known for the historically important Sindhudurg Fort. Malvan taluka consists of villages such as Aangnechi Wadi (Village : Masure ), Achra, Khalchi Devli, Jamdul, Juva, Pankhol, Talasheel and Sarjekot. The main occupation here is fishing with the staple diet of the local people fish curry and rice. The town produces Alphonso mangoes and is also known for sweets such as Malvani Khaja made from gram-besan flour and coated jaggery as well as Malvani Ladoos. Malvani Dashavtar, a drama-play based on mythological stories, is an important cultural element of the area.

Several apocryphal and some more credible stories related to the name Malvan exist. Salt producers use term Mahalavan to describe a region rich in salt, a compound word from "Maha" meaning great, and "lavan" meaning plantation (or salt). Another possibility is a phonetic derivative of the compound of "Mad" and "Ban", Malvani for coconut trees and garden respectively, relating to the large number of coconut trees in the region.
</i>
</p>

</div>

<div class="itenarary">
    
<font size="6" color="red">Itenarary:</font>
<button class="accordion">Day 1</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="accordion">Day 2</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>


<button class="accordion">Day 3</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>



<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  }
}
</script>
    

<font size="6" color="red">Price:</font>
<p><i>Price per person </i></p>

<div class="book">
<center>
<a href="new_login.html"><button class="booking" style="width:15%; ">Book Now</button></a><br>
</center>
</div>

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



</body>
</html>