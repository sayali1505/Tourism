<?php
require('mysql_table.php');
require('config.php');

$day=$_POST['day'];
//$eday=$_POST['eday'];
class PDF extends PDF_MySQL_Table
{
function Header()
{
	//Title
	$this->SetFont('Arial','',18);
	$this->Cell(0,6,'Daywise Package Report',0,1,'C');
	$this->Ln(10);
	//Ensure table header is output
	parent::Header();
}
}

//Connect to database
//mysqli_connect('localhost','','');
//mysqli_select_db('db_tourism');
$prop=array('HeaderColor'=>array(255,150,100),
			'color1'=>array(210,245,255),
			'color2'=>array(255,255,210),
			'padding'=>2);

$pdf=new PDF();
$pdf->AddPage();
//First table: put all columns automatically
$pdf->Table("select pac_name,cat_name,days,night,cost from tbl_create_package where days='$day' ",$prop,$conn);
$pdf->AddPage();
//Second table: specify 3 columns
$pdf->AddCol('package_id',30,'Package ID','L');
$pdf->AddCol('pac_name',55,'Package Name','L');

$pdf->AddCol('days',20,'Days');
$pdf->AddCol('night',20,'Night');
$pdf->AddCol('cost',20,'Cost');


$pdf->Table("select package_id,pac_name,cat_name,days,night,cost from tbl_create_package where days='$day' order by package_id limit 0,10",$prop,$conn);
$pdf->Output();
?>
