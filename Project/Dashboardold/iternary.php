<html>
<head>
	<meta charset="utf-8">

	<title>Known Criminals</title>
	<style type="text/css">
		
		body{
	margin: 0;
	padding: 0;
	background: url(i22.jpg); 
	background-size: cover;
	background-repeat: no-repeat;
	font-family: sans-serif;
	height: 1800px;
}

/*header*/
.topnav 
	{
		overflow: hidden;
		background-image: url(i1.jpg);
		width: 100%;
		font-family: sans-serif;			
   }
   .topnav a
   {
		float:right;
		color: white;
		text-align:center;
		padding: 18px 16px;
		text-decoration: none;
		font-size: 17px;

    }
   .topnav a:hover
   {
	 	color:orange; 
		 				
   }
   .topnav a.active
   {
		 	
		color:orange; 

    }
    img
	{
		border-radius: 50%;
		background-color: #fff;
		 
	}
		 
		 /* product list*/
	.img-responsive
	{
		max-width: 100%;
	}

	.top
		{
			position: absolute;
			left: 0;right: 0;
			height: 92px;
		}




/*form*/
.title
{	
	text-align: center;
	padding: 30px 0 20px;
}
.title h1
{	
	margin: 0;
	padding: 0;
	color: #262626;
	text-transform: uppercase;
	font-size: 36px;
}
.container
{

	width: 90%;
	height: 400px;
	background: #fff;
	margin: 0 50px;
	border: 2px solid #fff;
	box-shadow: 0  40px 60px rgba(0,0,0,.5);
	
}
.formBox
{
	
	width: 153%;
	padding: 45px 80px;
	box-sizing: border-box;
	height: auto;
	background: #fff;
}
.formBox p
{
	margin: 0;
	padding: 0;
	font-weight: bold;
	color: #a6af13;
}

.formBox h3
{
	margin: 0;
	padding: 0;
	font-weight: bold;
	color: #0c0c0c;
}
.formBox input,
.formBox select
{
	width: 50%;
	margin-bottom: 20px;
}
.formBox input[type="text"],
.formBox input[type="Password"],
.formBox input[type="tel"],
.formBox input[type="email"],
.formBox input[type="date"],
.formBox input[type="time"],
.formBox select[type="text"]
{
	border: none;
	border-bottom: 2px solid #a6af13;
	outline: none;
	height: 40px;
}
.formBox textarea{
	border: none;
	border-bottom: 2px solid #a6af13;
	outline: none;
	height: 40px;
	width: 375px;
	margin-bottom: 20px;


}
.formBox input[type="text"]:focus,
.formBox textarea:focus,
.formBox input[type="Password"]:focus,
.formBox input[type="tel"]:focus,
.formBox input[type="email"]:focus,
.formBox input[type="date"]:focus,
.formBox input[type="time"]:focus,
.formBox select[type="text"]:focus
{
	border-bottom: 3px solid#262626;
}


table{
	color: #a6af13;
}

.formBox input[type="submit"]
{
	border:none;
	float: center;
	outline: none;
	height: 40px;
	width: 350px;
	color: #fff;
	background: #262626;
	cursor: pointer;
}

.formBox input[type="submit"]:hover
{
	background: #a6af13;
}


.formBox input[type="button"]
{
	border:none;
	float: center;
	outline: none;
	height: 40px;
	width: 350px;
	color: #fff;
	background: #262626;
	cursor: pointer;
}

.formBox input[type="button"]:hover
{
	background: #a6af13;
}
.formBox a
{
	color: #262626;
	font-size: 12px;
	font-weight: bolder;
}

#ps {
	width: 30%;
	margin-bottom: 20px;
}
#psarea{
	width: 30%;
	margin-bottom: 30px;
	margin-left: 350px;
	margin-top: -8px;
}
#p{
	margin-bottom: 10px;
	margin-left: 350px;
	margin-top: -83px;
}

#y{
	width: 30%;
	margin-bottom: 20px;
	margin-left: 700px;
	margin-top: -18px;
}
#sa{
	margin-bottom: 10px;
	margin-left: 700px;
	margin-top: -93px;
}

#date{
	margin-bottom: 15px;
	margin-top: 10px;

}
#fdate {
	width: 30%;
	margin-bottom: 15px;
	margin-top: -10px;
}

#tdate{
	margin-bottom: 20px;
	margin-left: 350px;
	margin-top: -87px;
}

#codate{
	width: 30%;
	margin-bottom: 15px;
	margin-left: 350px;
	margin-top: -95px;
}
#q{
	margin-top: 10px;

}
#ftime {
	width: 30%;
	margin-bottom: 20px;
}

#ttime{
	margin-bottom: 10px;
	margin-left: 350px;
	margin-top: -83px;
}

#cotime{
	width: 30%;
	margin-bottom: 20px;
	margin-left: 350px;
	margin-top: -83px;
}
#c{
	width: 30%;
}


	</style>

	<SCRIPT language="javascript">

		function addRow(tableID) {

			var table = document.getElementById(tableID);

			var rowCount = table.rows.length;
			var row = table.insertRow(rowCount);

			
			var cell1 = row.insertCell(0);
			cell1.innerHTML = rowCount + 1;

			var cell2 = row.insertCell(1);
			
			var element2 = document.createElement("input");
			element2.type = "text";
			element2.name = "txtbox[]";
			cell2.appendChild(element2);

			var cell3 = row.insertCell(2);
			
			var element3 = document.createElement("textarea");
			element3.type = "text";
			element3.name = "txtbox1[]";
			cell3.appendChild(element3);

			

		}

		

	</SCRIPT>
</head>
<body>
<form action="iternary.php" method="POST" accept-charset="utf-8">




	<div class="container">
					<div class="formBox">
										
	
				
							

	
		
	
	<table width="1000px" border="2">

		<tr><td colspan="14" align="center" bgcolor="black"><b>Iternanry</b></td></tr>
							<th bgcolor="black">Sr.No.</th>
							<th bgcolor="black">Day</th>
							<th bgcolor="black">Description</th>
	</table>
		<table id="dataTable" width="1000px" border="2">
		<tr>
			
			<th >1</th>
			<th><INPUT type="text" name="txtbox[]"/></th>
			
			<th height="30px"><textarea name="txtbox1[]" cols=70 rows=10 value=pac_desc></textarea></th>
		</tr>
	</table>
	
	<INPUT type="button" value="Add Row" onclick="addRow('dataTable')">
	<input type="submit" name="btn1" value="Submit Values">

</form>


<?php 


if(isset($_POST['btn1'])){

$con=mysqli_connect("localhost","root","","db_tourism") or die("cannot");

//mysqli_select_db("fir");

$day=$_POST['txtbox'];
$p_desc=$_POST['txtbox1'];
//$pid=$_POST['pid'];

$i=0;

for($i=0;$i<count($day);$i++){
mysqli_query($con,"insert into iternary(day,p_desc) values('$day[$i]','$p_desc[$i]')");	
}

}
?>

		
</div>
</div>

</body>
</html>