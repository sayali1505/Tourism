<?php
require('mysql_table.php');
require('config.php');
class PDF extends PDF_MySQL_Table
{
function Header()
{
	//Title
	$this->SetFont('Arial','',18);
	$this->Cell(0,6,'First Report',0,1,'C');
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
$pdf->Table('select * from tbl_states order by state_name',$prop,$conn);
$pdf->AddPage();
//Second table: specify 3 columns
$pdf->AddCol('state_id',20,'ID','C');
$pdf->AddCol('state_name',40,'Name');

$pdf->Table('select state_id,state_name from tbl_states limit 0,10',$prop,$conn);
$pdf->Output();
?>
