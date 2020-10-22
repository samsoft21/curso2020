<?php
session_start();

require('fpdf.php');
include '../bdd/conexion.php';

date_default_timezone_set('America/Guayaquil');

class PDF extends FPDF {

//Cabecera de página

    function Header() {
        // $this->Image('../../assets/img/new_logo.png', 1	, 0, 20);

        $this->SetFont('Arial', 'B', 17);
        $this->SetTextColor(47, 47, 47);
        $this->Text(80, 15, 'INVENTARIOS');

        $this->Ln(20);
        $this->Line(0, 25, 295, 25);

        $this->Text(70, 40, 'Listado de Productos');

        $this->SetFont('Arial', '', 10);
        $this->SetTextColor(47, 47, 47);
    }

//Body
    function TablaColores($header) {

// Colores, ancho de línea y fuente en negrita

        $this->SetFillColor(192, 192, 192);

        $this->SetTextColor(255);

        $this->SetLineWidth(.3);

        $this->SetFont('Arial', 'B');

        // Cabecera
        $w = array(25, 100,30);


        for ($i = 0; $i < count($header); $i++)
            $this->Cell($w[$i], 7, $header[$i], 1, 0, 'C', true);

        $this->Ln();

        $this->SetTextColor(0);

        $this->SetFont('Times');
    }
//Pie de página

    function Footer() {
        //Posición: a 1,5 cm del final
        $this->SetY(-15);

        //Arial italic 8
        $this->SetFont('Arial', 'I', 8);

        //Número de página
        $this->Cell(0, 10, 'Página ' . $this->PageNo() . '/Inventario', 0, 0, 'C');
    }

}

$pdf = new PDF();
$pdf->AddPage();

$pdf -> SetY(50);
$header = array('CODIGO', 'PRODUCTO','CANTIDAD');

$pdf -> SetX(40);
$pdf->TablaColores($header);

$codi=$_GET['id'];
$sql = $pdo->query("SELECT * FROM tbl_inventario WHERE idx_inventario='$codi'");

while ($row = $sql->fetch()) {
    $pdf -> SetX(40);
    $pdf->SetFont('Arial', '',10);
    $pdf->SetTextColor(000);
    $pdf->Cell(25, 6.5, $row["idx_inventario"], 1, 0, 'L', false);
    $pdf->Cell(100, 6.5, strtolower($row['nom_producto']), 1, 0, 'L', false);
    $pdf->Cell(30, 6.5, $row['can_producto'], 1, 0, 'L', false);

    $pdf->Ln();  
}


$pdf->Output();
?>