<?php
require('fpdf.php');


if(isset($_GET['x']))
{
	$foodList= array();
	$drinkList = array();
	$foodList = $_GET['x'];
	$drinkList = $_GET['y'];	
	$arrCount =count($foodList);
	$courseArr = array();
	for($i=0;$i<$arrCount;$i++)
	{
		//if no drink and food, pass to next one
		if($foodList[$i]!=null && $foodList[$i]!="" && $drinkList[$i]!= null && $drinkList[$i]!="")
		{
			$courseArr[] = array($foodList[$i],$drinkList[$i]);
		}
	}



	 

	 
  
}


class PDF extends FPDF
{


	function Footer()
	{
		date_default_timezone_set('Australia/Melbourne');
		$footer = date("d-m-y");
		// Position at 1.5 cm from bottom
		$this->SetY(-15);
		// Arial italic 8
		$this->SetFont('Arial','I',8);
		// Text color in gray
		$this->SetTextColor(128);
		// Page number
		$this->Cell(0,10,$footer,0,0,'C');
	}


}
$emptystr = "drag to here...";
$pageheight = $pdf->GetPageHeight;
$middle = pageheight/2;



$arrayLength = count($courseArr);
$arraymiddle = $arrayLength/2 - 1;

//set font
if($arrayLength<=8)
{
	
}
else
{
	
}

$pdf = new PDF('p','mm','A5');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);
//$pdf->Cell(40,10,$foodlist[0],0,1,'C');

//$pdf->Cell(40,10,$count,0,1,'C');
$flagMiddle = false;
for($x= 0;$x<=$arrayLength;$x++)
{
	if($x>$arraymiddle && $flagMiddle==false)
	{
		$flagMiddle = ture;
		$pdf->SetY((110));
	}
	$tempheight = $pdf->GetY;
	$pdf->SetFont('Arial','',12);
	$tempfood = $foodList[$x];
	$tempdrink = $drinkList[$x];
	if($tempfood !=$emptystr)
	{
		$pdf->SetFont('Arial','',12);
		$pdf->Cell(125,6,$tempfood,0,1,'C');

	}
	else
	{
		$pdf->Cell(125,6,"",0,1,'C');
	}
	//$pdf->Cell(125,8,$tempfood,0,1,'C');
	if($tempdrink !=$emptystr)
	{
		$pdf->SetFont('Arial','',10);
		$pdf->Cell(125,6,$tempdrink,0,1,'C');

	}
	else
	{
		$pdf->Cell(125,6,"",0,1,'C');
	}
	$pdf->Cell(125,4,"",0,1,'C');


}
//}


$pdf->Output();
?>