<?php
require('./html2fpdf-3.0.2b/html2fpdf.php');
$pdf=new HTML2FPDF();
$pdf->AddPage();
$fp = fopen("invoice.php","r");
$strContent = fread($fp, filesize("invoice.php"));
fclose($fp);
$pdf->WriteHTML($strContent);
$pdf->Output("invoice.pdf");
echo "PDF file is generated successfully!";
?>