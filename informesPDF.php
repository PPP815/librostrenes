<?php
require('InformesPDF/fpdf.php');
header('Content-type: application/download;filename="doc.pdf"');
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Arial bold 18
    $this->SetFont('Arial','B',18);
    // Movernos a la derecha
    $this->Cell(40);
    // Título
    $this->Cell(80,10,'Libros Ferrocarril',0,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->Cell(-5);
    $this->Cell(165, 10,'Título',1,0,'C',0);
    $this->Cell(25, 10,'Año',1,1,'C',0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}
//Conexión a la base de datos
require "conexion.php";
$consulta=$miconexion->query("SELECT libros.titulo, libros.anno, editorial.nom_editorial
FROM libros INNER JOIN editorial on libros.id_editorial=editorial.id_editorial ORDER By titulo ASC");
$consulta->execute();


$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);



while($row = $consulta->fetch(PDO::FETCH_ASSOC)){
    $pdf->Cell(-5);
    $pdf->Cell(165, 10, $row['titulo'],1,0,'L',0);
    $pdf->Cell(25, 10, $row['anno'],1,1,'C',0);
}

$pdf->Output('doc.pdf','F');
$pdf->Output();
?>
