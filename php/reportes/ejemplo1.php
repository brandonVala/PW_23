<?php
//biblioteca para generar pdf
require 'fpdf/fpdf.php';
//crear el documento
$pdf = new  FPDF();
//agregar una hoja
$pdf->AddPage();
//colocar fuente
$pdf->SetFont( family: 'Arial', style: 'B',size: 16);
//agregar contenido al documento
$pdf->Cell(w: 40, h: 10, txt:"HOLA MUNDO!");
//mostrar pdf
$pdf->Output();