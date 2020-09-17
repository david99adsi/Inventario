<?php
//Incluímos a la clase PDF_MC_Table
require RUTA_APP.'/fpdf/PDF_MC_Table.php' ;
//Instanciamos la clase para generar el documento pdf
$pdf=new PDF_MC_Table();
$pdf->AliasNbPages();
//Agregamos la primera página al documento pdf
$pdf->AddPage();

//Seteamos el inicio del margen superior en 25 pixeles
$y_axis_initial = 25;

//Seteamos el tipo de letra y creamos el título de la página. No es un encabezado no se repetirá
$pdf->SetFont('Courier', 'B', 9);
$pdf->Cell(40, 6, '', 0, 0, 'C');
$pdf->Cell(100, 5, 'LISTADO GENERAL DE REGISTRO DE CONTROL', 1, 0, 'C');
$pdf->Ln(10);

//Creamos las celdas para los títulos de cada columna y le asignamos un fondo gris y el tipo de letra
$pdf->SetFillColor(232, 232, 232);
$pdf->SetFont('Courier', 'B', 9);
$pdf->Cell(58, 5, 'IDENTIFICACION', 1, 0, 'C', 1);
$pdf->Cell(50, 5, utf8_decode('FECHA'), 1, 0, 'C', 1);
$pdf->Cell(50, 5, utf8_decode('HORA ENTRADA'), 1, 0, 'C', 1);
$pdf->Cell(50, 5, utf8_decode('HORA SALIDA'), 1, 0, 'C');


$pdf->Ln(10);

$pdf->SetWidths(array(58,50,50,25));

foreach ($datos as $index => $valor) {
    $identificacion = $valor ->identificacion;
    $fecha_i = $valor ->fecha_i;
    $hora_e = $valor ->hora_e;
    $hora_s = $valor ->hora_s;
    $pdf->SetFont('Courier', '', 8);
    $pdf->Row(array($identificacion,$fecha_i,$hora_e,$hora_s));
}


//Mostramos el documento pdf
$pdf->Output();
