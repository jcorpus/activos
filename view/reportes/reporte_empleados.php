<?php
require('fpdf2/fpdf.php');
require('../../core/models/model_conexion.php');

class PDF extends FPDF{

   function Header(){
      //uso $this porque hago referencia a una funcion que estoy heredando
      $this->Image('fpdf2/usp.png',10,8,20,20);//x,y,ancho,alto
      $this->SetFont('Arial','B',16); ////el B es en negrita
      //$this->setFillColor(64,224,208);
      $this->SetTextColor(66,73,61);
      $this->Cell(0,35,'Empleados Registrados',0,1,'C');///el cero indica que la celda ocupa el ancho de la pagina
      ////el true, en el Cell indica que el fondo se dibuja, si se omite es false
      ///datos de la empresa
      $this->SetXY(10, 25);
      $this->SetFont('Arial','',10);
      $this->Cell(5,20,'ACTIVOS USP');
      $this->SetXY(10, 25);
      $this->Cell(15,29,'R.U.C: 000000001');
      $this->SetXY(10, 25);
      $this->Ln();
   }

    // utilizamos la funcion Footer() y la personalizamos para que muestre el pie de página
    function Footer(){
        // Seteamos la posicion de la proxima celda en forma fija a 1,5 cm del final de la pagina
        $this->SetY(-15);
        // Seteamos el tipo de letra Arial italica 10
        $this->SetFont('Arial','I',10);
        // Número de página
        $this->Cell(0,10,utf8_decode('Página ').$this->PageNo(),0,0,'C');
    }



 } /////fin del fpdf
    $pdf = new PDF('L','mm','A4'); ///tamaaño del reporte
    $pdf->AddPage();


////*************************DATOS**********************************/


    $db = new Conexion;
    //$this->set_charset("utf8");
    //echo "conexion valio ".$db->host_info;
    $sql = $db->query("SELECT e.id_emp,e.cedula,p.nombres,p.ape_pat,p.fec_nac,p.dni,p.direccion,p.email, e.estado FROM empleado e INNER JOIN persona p ON e.id_per = p.id_per");

//$pdf->Cell(ancho, alto, contenido, borde , alineación); //Alineación L Izquierda, C Centrado, R Derecha
        $pdf->SetXY(10,50);///posicion del titulo
        $pdf->SetFont('Arial','B',11);
        $pdf->SetFillColor(60,168,245);//Fondo azul de celda
        $pdf->Cell(10,6,'ID',1,0,'C',1);
        $pdf->Cell(25,6,'cedula',1,0,'C',1);
        $pdf->Cell(26,6,'nombre',1,0,'C',1);//el ultimo parametro se rellena la celda
        $pdf->Cell(30,6,'apellido',1,0,'C',1);
        $pdf->Cell(25,6,'nacimiento',1,0,'C',1);
        $pdf->Cell(20,6,'dni',1,0,'C',1);//el ultimo parametro se rellena la celda
        $pdf->Cell(70,6,'direccion',1,0,'C',1);
        $pdf->Cell(50,6,'email.',1,0,'C',1);
        $pdf->Cell(15,6,'Estado',1, 1,'C',1);

    while ($row = $db->recorrer($sql)) {
        # code...

        $pdf->SetFont('Arial','',10);
        $pdf->SetX(10);////posicion de los datos
        //$pdf->Cell(10,6,  utf8_decode($row["nombres"]),1,0,'C'); //por siaca las tildes
        $pdf->Cell(10,6,$row["id_emp"],1,0,'C');
        $pdf->Cell(25,6,$row["cedula"],1,0,'C');
        $pdf->Cell(26,6,$row["nombres"],1,0,'C');
        $pdf->Cell(30,6,$row["ape_pat"],1,0,'C');
        $pdf->Cell(25,6,$row["fec_nac"],1,0,'C');
        $pdf->Cell(20,6,$row["dni"],1,0,'C');
        $pdf->Cell(70,6,$row["direccion"],1,0,'C');
        $pdf->Cell(50,6,$row["email"],1,0,'C');
        $pdf->Cell(15,6,$row["estado"],1,1,'C');
    }
    //liberando memoria
  $db->liberar($sql);
  $db->close();

$pdf->Output(); //Salida al navegador



?>
