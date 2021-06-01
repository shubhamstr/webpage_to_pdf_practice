<?php


require('fpdf183/fpdf.php');

$pdf = new FPDF();

$pdf -> AddPage();

$pdf -> SetFont('Arial','B','16');

// $pdf -> cell(100,20,'hello',1,0,'C');
$pdf -> cell(100,20,'hello 2',1,1,'C');

$pdf -> output();