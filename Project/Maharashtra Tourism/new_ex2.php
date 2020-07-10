<?php
//PDF USING MULTIPLE PAGES
//CREATED BY: Carlos Vasquez S.
//E-MAIL: cvasquez@cvs.cl
//CVS TECNOLOGIA E INNOVACION
//SANTIAGO, CHILE

require('fpdf.php');
require('config.php');
//mysql_select_db('db_tourism');


$days=$_POST['day'];



        $dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'db_tourism';
        
        //Create connection and select DB
                
            
        $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);


//$s="'s";
//Connect to your database
//include("config.php");
//$query="SELECT cat_name from tbl_categories where cat_id='$cat_id'";
//$result1=mysqli_query($conn,$query);
//$result2=mysqli_fetch_assoc($result1);
//$cat_name=$result2['cat_name'];

//$date="2018-02-17";
//Create new pdf file
$pdf=new FPDF();

//Disable automatic page break
$pdf->SetAutoPageBreak(false);

//Add first page
$pdf->AddPage();

//set initial y axis position per page
$y_axis_initial = 70;
$y_axis = 30;
$row_height = 7;
//print column titles
$pdf->Image('logo.jpg',18,7,49);
$pdf->SetFillColor(230,230,230);
$pdf->SetFont('Times','B',20);
$pdf->SetX(80);
$pdf->Cell(0,15,'Maharashtra Tourism',0,1,'L',false);
$pdf->SetFont('Times','B',16);
$pdf->SetX(20);
$pdf->Cell(0,15,'Day wise report',0,1,'C',false);
$pdf->SetFont('Times','B',14);
$pdf->SetX(20);
$pdf->SetY(60);
$pdf->Cell(0,5, 'Days : '.$days,0,1,'L',false);
$pdf->SetY(50);
//$pdf->Cell(0,5, $subject.'Test Report',0,1,'C',false);
$pdf->SetFont('Times','B',12);
$pdf->Cell(0,15,'Date:'.date('d-m-Y'),0,0,'L',false);
$pdf->SetX(30);
//$pdf->SetY(90);
//$pdf->Cell(0,16,$test_date,0,0,'L',false);
$pdf->SetX(145);
//$pdf->Cell(0,16,'Out Of:120',0,0,'L',false);//$pdf->Ln();

$pdf->SetY($y_axis_initial);
//$pdf->SetY(90);
$pdf->Cell(25,6,'package id',1,0,'C',1);
		$pdf->Cell(75,6,'package name',1,0,'L',1);
		$pdf->Cell(25,6,'Days',1,0,'C',1);
		$pdf->Cell(25,6,'Nights',1,0,'C',1);
		$pdf->Cell(35,6,'Price(Per person)',1,0,'L',1);
$pdf->SetY(90);
$pdf->SetFillColor(500,500,500);
//$pdf->Ln();
/*		$pdf->Cell(20,6,'Student Id',1,0,'C',1);
		$pdf->Cell(50,6,'Name',1,0,'C',1);
		$pdf->Cell(15,6,'Test Marks',1,0,'C',1);
		$pdf->Cell(45,6,'Percentage',1,0,'C',1);
		//$pdf->Cell(25,6,'Password',1,0,'C',1);
		//$pdf->Cell(25,6,'Mobile',1,0,'C',1);
		//$pdf->SetY(50);*/
//$pdf->Cell(30,6,'TEST NO:',0,0,'L',1);
//$pdf->SetX(155);
//$pdf->Cell(20,6,'Date:',0,1,'L',1);
//$pdf->SetY(30);
//$pdf->Cell(0,10,'User Name:',0,1,'L',1);
//$pdf->SetY(44);
//$pdf->Cell(45,6,'Name',1,0,'L',1);
/*$pdf->Cell(25,6,'City',1,0,'L',1);
$pdf->Cell(55,6,'Pick Up Point',1,0,'L',1);
$pdf->Cell(34,6,'PickUp Date & Time',1,0,'L',1);
$pdf->Cell(15,6,'Distance',1,0,'L',1);
$pdf->Cell(15,6,'Charges',1,0,'L',1);*/
$y_axis = $y_axis_initial + $row_height;

//Select the Products you want to show in your PDF file
  //include("delete_database.php");  
	//$bill_id =$_REQUEST['Breakdown_Assistance_id'];
$result=mysqli_query($conn,"select package_id,pac_name,cat_name,days,night,cost from tbl_create_package  where days='$days' order by package_id");

//initialize counter
$i = 0;

//Set maximum rows per page
$max = 30;

//Set Row Height


while($row = mysqli_fetch_array($result))
{
	//If the current row is the last one, create new page and print column title
	if ($i == $max)
	{
		$pdf->AddPage();
		$y_axis = 1;
		//print column titles for the current page
        $pdf->SetFont('Times','',50);
		$pdf->SetY($y_axis_initial);
		$pdf->SetX(10);
		
		
		//Go to next row
		$y_axis = $y_axis + $row_height;
		
		//Set $i variable to 0 (first row)
		$i = 0;
	}

	$package_id = $row['package_id'];
	$pac_name = $row['pac_name'];
	$days=$row['days'];
	$night=$row['night'];
	$cost = $row['cost'];
	//$percent = $row['percent'];
	//$mobile_no = $row['mobile_no'];
	//$password = $row['password'];

	/*$branch_nm = $row['branch_nm'];
	$pickup_city = $row['pickup_city'];
	$pickup_point = $row['pickup_point'];
	$Assistance_date = $row['Assistance_date'];
	$pickup_time = $row['pickup_time'];
	$totalDistance = $row['totalDistance'];
	$bill = $row['bill'];*/
	$pdf->SetFont('Times','',10);
	$pdf->SetY($y_axis);
		
	//$pdf->SetY(25);
	$pdf->SetFillColor(500,500,500);
	//$pdf->SetX(38);
	$pdf->Cell(25,6,$package_id,1,0,'C',1);
	//$pdf->SetX(20);
	$pdf->Cell(75,6,$pac_name,1,0,'L',1);
	//$pdf->SetY(32);
	//$pdf->SetX(38);
	
	$pdf->Cell(25,6,$days,1,0,'C',1);
	//$pdf->SetY(50);
	$pdf->Cell(25,6,$night,1,0,'C',1);
	
	$pdf->Cell(35,6,$cost,1,0,'C',1);
	//$pdf->Cell(25,6,$password,1,0,'L',1);
	/*$pdf->Cell(55,6,$pickup_point,1,0,'L',1);
	$pdf->Cell(34,6,$Assistance_date.' '.$pickup_time,1,0,'L',1);
	$pdf->Cell(15,6,$totalDistance.' km',1,0,'L',1);
	$pdf->Cell(15,6,$bill.' /-',1,0,'L',1);*/
	

	//Go to next row
	$y_axis = $y_axis + $row_height;
	$i = $i + 1;
}

//$pdf->Cell(45,6,$email_id,0,0,'L',1);
//mysql_close();

//Send file
$pdf->Output();
?>
