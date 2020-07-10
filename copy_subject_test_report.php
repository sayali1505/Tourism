<?php
//PDF USING MULTIPLE PAGES
//CREATED BY: Carlos Vasquez S.
//E-MAIL: cvasquez@cvs.cl
//CVS TECNOLOGIA E INNOVACION
//SANTIAGO, CHILE

require('fpdf.php');
require 'connect.php';
mysql_select_db('mcq_db');

$test_date=$_POST['test_date'];
$subject=$_POST['subject'];
$s="'s";
//Connect to your database
//include("config.php");
//$query="SELECT name from student_master where student_id=1201";
//$result1=mysql_query($query);
//$result2=mysql_fetch_assoc($result1,MYSQL_ASSOC);
//$st_name=$result2['name'];

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
$pdf->Image('logo.jpg',10,20,25);
$pdf->SetFillColor(230,230,230);
$pdf->SetFont('Times','B',10);
$pdf->SetX(80);
$pdf->Cell(0,15,'Swami Vivekanand Shikshan Sanstha'.$s,0,1,'L',false);
$pdf->SetFont('Times','B',20);
$pdf->SetX(20);
$pdf->Cell(0,15,'Vivekanand Jr.College/New Model,Kolhapur.',0,1,'C',false);
$pdf->SetX(25);
$pdf->SetY(40);
$pdf->Cell(0,5, 'JEE EXAM',0,1,'C',false);
$pdf->SetY(50);
$pdf->Cell(0,5, $subject.'Test Report',0,1,'C',false);
$pdf->SetFont('Times','B',12);
$pdf->Cell(0,15,'Date:'.date('d-m-Y', strtotime($test_date)),0,0,'L',false);
$pdf->SetX(30);
//$pdf->SetY(90);
//$pdf->Cell(0,16,$test_date,0,0,'L',false);
$pdf->SetX(145);
$pdf->Cell(0,16,'Out Of:120',0,0,'L',false);//$pdf->Ln();

$pdf->SetY($y_axis_initial);
//$pdf->SetY(90);
$pdf->Cell(25,6,'Student Id',1,0,'C',1);
		$pdf->Cell(75,6,'Name',1,0,'L',1);
		$pdf->Cell(25,6,'Test Marks',1,0,'C',1);
		$pdf->Cell(45,6,'Percentage',1,0,'C',1);

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
$result=mysql_query("select test_master.test_id,t_date,student_master.student_id,name,total_score,marks,(total_score/marks)*100 as percent from test_master,student_test_ans_details,student_master where test_master.test_id=student_test_ans_details.test_id and student_master.student_id=student_test_ans_details.student_id and test_master.t_date='$test_date' and test_master.test_name='$subject'");

//initialize counter
$i = 0;

//Set maximum rows per page
$max = 30;

//Set Row Height


while($row = mysql_fetch_array($result))
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

	$student_id = $row['student_id'];
	$name = $row['name'];
	$total_score = $row['total_score'];
	$percent = $row['percent'];
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
	$pdf->Cell(25,6,$student_id,1,0,'C',1);
	//$pdf->SetX(20);
	$pdf->Cell(75,6,$name,1,0,'L',1);
	//$pdf->SetY(32);
	//$pdf->SetX(38);
	$pdf->Cell(25,6,$total_score,1,0,'C',1);
	//$pdf->SetY(50);
	$pdf->Cell(45,6,round($percent,2),1,0,'C',1);
	//$pdf->Cell(25,6,$mobile_no,1,0,'L',1);
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
