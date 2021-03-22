<?php

require('C:\xampp\htdocs\fpdf182\fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Times','B',14);
$pdf->Cell(80,10,"Wilfred Almeida");
$pdf->Output("myfile.pdf",'I');

?>