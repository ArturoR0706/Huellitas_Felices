
<?php
require('./FPDF/fpdf.php');

class PDF extends FPDF

{
    function ImprovedTable($header, $data)
    {
        // Anchuras de las columnas
        $w = array(40, 35, 45, 40);
        // Cabeceras

        for($i=0;$i<count($header);$i++)

            $this->Cell($w[$i],7,$header[$i],1,0,'C');
        
            $this->Ln();
            $this->Cell($w[$i],7,'No.'[$i],1,0,'C');
            $this->Cell($w[$i],7,'Nombre'[$i],1,0,'C');
            $this->Cell($w[$i],7,'Servicio'[$i],1,0,'C');
            $this->Cell($w[$i],7,'Cantidad'[$i],1,0,'C');
            $this->Cell($w[$i],7,'Subtotal'[$i],1,0,'C');
            $this->Cell($w[$i],7,'Recamara'[$i],1,0,'C');
            $this->Cell($w[$i],7,'Costo'[$i],1,0,'C');
            $this->Cell($w[$i],7,'Total'[$i],1,0,'C');
            // Datos
        
            foreach($data as $row)
        
            {
            $this->Cell($w[0],6,$row[0],'LR');
            $this->Cell($w[1],6,$row[1],'LR');
            $this->Cell($w[2],6,number_format($row[2]),'LR',0,'R');
            $this->Cell($w[3],6,number_format($row[3]),'LR',0,'R');
            $this->Ln();
        }
        // Línea de cierre
        $this->Cell(array_sum($w),0,'','T');
    }




// Cabecera de página


function Header()
{
    // Logo
    // $this->Image('logo.jpg',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',12);
    // Movernos a la derecha
    $this->Cell(15);
    // Título
    $this->Cell(150,10,'Factura Hotel "Huellitas Felices" ',0,0,'C');
    // Salto de línea
    $this->Ln(30);
    
    

}





// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página').$this->PageNo().'/{nb}',0,0,'C');
}
}

require 'cn.php';

//$codigo= $_POST['codigo'];
//$consulta = "select * from factura where id_perro='$id'";
//$resultado = $mysqli->query($consulta);
$id = $_POST['id_perro'];
$consulta = "select * from factura where id_perro='$id'";
$resultado = $mysqli->query($consulta);


$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',9);

while($row =$resultado->fetch_assoc()){

    //$pdf->Cell(10,10,$row['id_perro'],1,10,'C',0);
    $pdf->Cell(20,10,$row['nombre'],1,0,'C',0);
    $pdf->Cell(30,10,$row['nombre_servicio'],1,0,'C',0);
    $pdf->Cell(20,10,$row['cantidad'],1,0,'C',0);
    $pdf->Cell(30,10,$row['subtotal'],1,0,'C',0);
    $pdf->Cell(40,10,$row['n_recamara'],1,0,'C',0);
    $pdf->Cell(20,10,$row['costo'],1,0,'C',0);
    $pdf->Cell(20,10,$row['total'],1,0,'C',0);
    
   
}

//$pdf->Cell(40,10,utf8_decode('Firma del propietario'));
$pdf->Output();
?>

