<?php

tcpdf();
global $_logo, $_titulo, $_titulo2, $_subtitulo, $_codigo, $_cliente, $_fecha;
$_logo = $logo;
$_titulo = $titulo;
$_titulo2 = $titulo2;
$_subtitulo = $subtitulo;
$_codigo = $codigo;
$_cliente = $cliente;
$_fecha = $fecha;
$i = 0;


class MYPDF extends TCPDF {
        // Page footer
        public function Footer() {
            // Position at 15 mm from bottom
            $this->SetY(-10);
            // Set font
            $this->SetFont('helvetica', 'I', 8);
            $fechaHora = "	Fecha y hora de impresión ".date("d/m/Y")." - ".date("H:i:s");
            $pagina = "	www.kamelottech.com";
            // Page number
            if (empty($this->pagegroups)) {
                    $pagenumtxt = ' Página '.$this->getAliasNumPage().' de '.$this->getAliasNbPages();
            } else {
                    $pagenumtxt = ' Página '.$this->getPageNumGroupAlias().' de '.$this->getPageGroupAlias();
            }
            
            $this->Cell(67, 0, $fechaHora, 'T', $ln=0, 'C', 0, '', 0, false, 'T', 'C');
            $this->Cell(67, 0, $pagenumtxt, 'T', $ln=0, 'C', 0, '', 0, false, 'T', 'C');
            $this->Cell(50, 0, $pagina, 'T', $ln=0, 'C', 0, '', 0, false, 'T', 'C');
        }

        public function Header() {
            global $_logo, $_titulo, $_titulo2, $_subtitulo, $_codigo, $_cliente, $_fecha;
            
            $this->SetFont('helvetica', 'B', 11);
            //<img src=\"".$logo."\"/>
            $tblReporte = "<table class=\"stlTabla\" cellpadding=\"2\"  border=\"1\" align=\"center\">
                            <tr>"
                                . "<th rowspan=\"3\"><img src=\"".$_logo."\"/></th>"
                                . "<th colspan=\"2\">$_cliente</th>"
                                . "<th>$_codigo</th>
                            </tr>
                            <tr>"
                                . "<th colspan=\"2\">$_subtitulo</th>"
                                . "<th>Vigencia</th>
                            </tr>
                            <tr>"
                                . "<th colspan=\"2\">$_titulo2</th>"
                                . "<th>$_fecha</th>
                            </tr>
                        </table>";
            $this->writeHTML($tblReporte, true, false, false, false, '');
        }
}

//$pdf = new MYPDF("PORTRAIT", PDF_UNIT, 'LETTER', true, 'UTF-8', false);
$pdf=new MYPDF('L', 'mm','A5');

//$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, 'FOLIO', true, 'UTF-8', false); //LETTER   LEGAL
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Kamelot');
$pdf->SetTitle($titulo);
$pdf->SetSubject('Historia Clinica');
$pdf->SetKeywords('KAMELOT', $cliente);
set_time_limit(0);
// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$pdf->startPageGroup();

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

$pdf->SetFooterMargin(1);
//set margins
$pdf->setPrintHeader(true);
$pdf->SetMargins(20, 30, 20);
$pdf->SetHeaderMargin(7);
// remove default header

//set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

//set some language-dependent strings
//$pdf->setLanguageArray($l);

set_time_limit(0);

$pdf->SetFont('helvetica', 'B', 11);

$apertura_hc = true;
// HISTORIA CLINICA GENERAL


    $pdf->SetFont('helvetica', 'B', 11);
    
    // INICIO IDENTIFICACIÓN PACIENTE
    $pdf->AddPage();

    $pdf->Cell(62, 8, 'NÚMERO DE HISTORIA CÍNICA:', 0, 0, 'L');
    $pdf->Cell(30, 8, $paciente['historia'], 0, 0, 'C');
    $pdf->Cell(55, 8,"Fecha: ".date('d/m/Y'),0,1, 'R');

    $pdf->SetFont('helvetica', '', 11);
    $pdf->Cell(30, 6, 'Paciente: ', 0, 0, '');
    $pdf->Cell(55, 6, $paciente['nombre1'].' '.$paciente['nombre2'].' '.$paciente['apellido1'].' '.$paciente['apellido2'], 'B', 0, '');
    
    $pdf->Ln(8);
    $pdf->Cell(30, 6, 'Identificación: ', 0, 0, '');
    $pdf->Cell(25, 6, $paciente['identificacion'], 'B', 0, '');
    
    $pdf->Cell(70, 6, 'Edad: ', 0, 0, 'R');
    if(count($edad) > 0){
        $pdf->Cell(25, 6,  $edad, 1, 0, '');
    }
    else{
        $pdf->Cell(15, 6,  '', 1, 0, '');
    }
    
    $pdf->Ln();
    $pdf->Ln();
    
    //$pdf->SetFont('helvetica', 'B', 11);

    $id = 0;
    foreach ($interconsulta as $row){
        $id++;
        $pdf->SetFont('times','B',12);
        $pdf->MultiCell(160,5,$id.". ".$row['esp_descripcion'], 0, 'L');
        $pdf->SetFont('times');
        $pdf->Cell(5);
        $pdf->MultiCell(160,6,utf8_decode($row['ci_descripcion']), 0, 'L');
        $pdf->ln();
        
    }

    $pdf->Ln(10);
    $pdf->Cell(30, 6, 'Ordenado por: ', 0, 0, 'L');
    $pdf->Cell(55, 6, $especialista['nombres'].' '.$especialista['apellidos'], '', 0, '');

    $pdf->Output($titulo, 'I');