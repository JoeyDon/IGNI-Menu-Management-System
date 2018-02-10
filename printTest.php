<?php
require('fpdf.php');
if(isset($_GET['x']))
{

	$foodList = $_GET['x'];
	$drinkList = $_GET['y'];	
	
//foreach ($foodList as $x)
//{
//	echo "<p>".$x."</p>";
//}
	
	
}
class PDF extends FPDF
{
	private $foodList;
	private $drinkList;
	

    public function setFoodvar($foodList) { 
        $this->foodList = $foodList; 
    }
    public function setDrinkvar($drinkList) { 
        $this->drinkList = $drinkList; 
    }
	function Footer()
	{
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

$pdf = new PDF('p','mm','A5');
$pdf->setFoodvar($foodList);
$pdf->setDrinkvar($drinkList);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',10);
$pdf->Cell(125,8,$foodList[0],0,1,'C');
?>