<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte productos</title>
</head>
<body>
    <?php
        require 'fpdf/fpdf.php';
        include 'datos.php';
        //Crear subclase para modificar el header y footer
        class PDF extends FPDF
        {
            function Header()
            {
                //fondo
                $this->Image('tec.jpg',1,7,208,292);
                $this->SetFont('Arial','B',12);//Arial Bold 12
                $this->Cell(80); //mover el cursor a la derecha
                $this->Cell(50,85,"Listado de Productos",0,0,'C');
                //nueva linea
                $this->Ln(48);
                $altoCelda = 6;
                $this->Cell(20,$altoCelda,'CODIGO',1,0,'C',0);
                $this->Cell(60,$altoCelda,'NOMBRE',1,0,'C',0);
                $this->Cell(40,$altoCelda,'SECCION',1,0,'C',0);
                $this->Cell(20,$altoCelda,'IMPORT',1,0,'C',0);
                $this->Cell(20,$altoCelda,'PRECIO',1,0,'C',0);
                $this->Cell(30,$altoCelda,'PAIS ORG.',1,1,'C',0);

            }
            function Footer()
            {
                //posición de 1.5 del final

                //$this->Ln(-10);
                $this->SetY(-25.5);
                $this->SetTextColor(000);
                $this->SetFont('Arial','B',12);
                $this->Cell(0,10,'Pag. '.$this->PageNo() .'/{nb}',0,0,'R');
            }
        }
        //solucionar Fatal Error:Uncaught: FPDF error
        ob_end_clean();
        $pdf = new PDF();
        $pdf->AliasNbPages();//para colocar numero tot.de paginas
        $pdf->AddPage();
        //$pdf->AliasSetText();
        //recuperar los datos de la BD
        $miconexion = mysqli_connect(HOST,USER,PASSWORD);
        //comprobar que si se conecto....
        mysqli_select_db($miconexion,DB);
        mysqli_set_charset($miconexion,'utf8');
        $query = "select * from productos";
        $result = mysqli_query($miconexion,$query);
        $altoCelda = 4.8;
        while($fila = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            //ancho,alto,texto,borde,salto,alineacion
            $pdf->Cell(20,$altoCelda,$fila["codigoarticulo"],1,0,'C',0);
            $pdf->Cell(60,$altoCelda,mb_convert_encoding($fila["nombrearticulo"],'ISO-8859-1'),1,0,'C',0);
            $pdf->Cell(40,$altoCelda,mb_convert_encoding($fila["sección"],'ISO-8859-1'),1,0,'C',0);
            $pdf->Cell(20,$altoCelda,$fila["importado"]==1 ?'SI' :'NO' ,1,0,'C',0);
            $pdf->Cell(20,$altoCelda,$fila["precio"],1,0,'c',0);
            $pdf->Cell(30,$altoCelda,mb_convert_encoding($fila["paisdeorigen"],'ISO-8859-1'),1,1,'C',0);
        }
        $pdf->Output();
    ?>
</body>
</html>