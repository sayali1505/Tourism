<?php
//PDF USING MULTIPLE PAGES
//CREATED BY: Carlos Vasquez S.
//E-MAIL: cvasquez@cvs.cl
//CVS TECNOLOGIA E INNOVACION
//SANTIAGO, CHILE

require('fpdf.php');
//Connect to your database
//include("conectmysql.php");
mysql_connect('localhost','','') or die(mysql_error());
mysql_select_db('student');

//Create new pdf file
$pdf=new FPDF();

//Disable automatic page break
$pdf->SetAutoPageBreak(false);

//Add first page
$pdf->AddPage();

//set initial y axis position per page
$y_axis_initial = 25;
//Set Row Height
$row_height = 6;

//print column titles
$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',12);
$pdf->SetY($y_axis_initial,'true');
$pdf->SetX(25);

$pdf->Cell(30,6,'Id',1,0,'L',1);
$pdf->Cell(50,6,'NAME',1,0,'L',1);
$pdf->Cell(30,6,'Dept',1,0,'R',1);

$y_axis = $y_axis_initial + $row_height;

//Select the Products you want to show in your PDF file
$result=mysql_query('select id,name,department from student_detail where id=20 ORDER BY name');

//initialize counter
$i = 0;

//Set maximum rows per page
$max = 25;



while($row = mysql_fetch_array($result))
{
    //If the current row is the last one, create new page and print column title
    if ($i == $max)
    {
        $pdf->AddPage();

        //print column titles for the current page
        $pdf->SetY($y_axis_initial);
        $pdf->SetX(25);
        $pdf->Cell(30,6,'Id',1,0,'L',1,'');
        $pdf->Cell(50,6,'NAME',1,0,'L',1,'');
        $pdf->Cell(30,6,'Deptartment',1,0,'R',1,'');
        
        //Go to next row
        $y_axis = $y_axis_initial + $row_height;
        
        //Set $i variable to 0 (first row)
        $i = 0;
    }

    $code = $row['id'];
    $name = $row['name'];
    $dept = $row['department'];

    $pdf->SetY($y_axis);
    $pdf->SetX(25);
    $pdf->Cell(30,6,$code,1,0,'L',1,'');
    $pdf->Cell(50,6,$name,1,0,'L',1,'');
    $pdf->Cell(30,6,$dept,1,0,'R',1,'');

    //Go to next row
    $y_axis = $y_axis + $row_height;
    $i = $i + 1;
    //echo $row['id'];
}


mysql_close($link);
//Send file*/
$pdf->Output();
//echo "Hello";
?>