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

$pdf = new MYPDF("PORTRAIT", PDF_UNIT, 'LETTER', true, 'UTF-8', false);

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


    $pdf->SetFont('helvetica', '', 10);
    
    // INICIO IDENTIFICACIÓN PACIENTE
    $pdf->AddPage();

    $apertura_hc = false;

    $tblReporte = "<table class=\"stlTabla\" cellpadding=\"2\"  border=\"1\">
                    <tr>"
                        . "<th colspan=\"3\">NOMBRE PACIENTE:</th>"
                        . "<th colspan=\"6\">".$paciente['apellido1'].' '.$paciente['apellido2'].' '.$paciente['nombre1'].' '.$paciente['nombre2']."</th>"
                        . "<th colspan=\"1\">HC:</th>"
                        . "<th colspan=\"2\">".$paciente['historia']."</th>
                    </tr>
                    <tr>"
                        . "<th colspan=\"1\">FECHA:</th>"
                        . "<th colspan=\"2\">".$consulta['fecha']."</th>"
                        . "<th colspan=\"1\">HORA:</th>"
                        . "<th colspan=\"2\">".$consulta['hora']."</th>"
                        . "<th colspan=\"2\">CIRUJANO:</th>"
                        . "<th colspan=\"4\">".$especialista['cirujano']['apellidos'].' '.$especialista['cirujano']['nombres']."</th>
                    </tr>
                    <tr>"
                        . "<th colspan=\"2\">ANESTESIA:</th>"
                        . "<th colspan=\"3\">".""."</th>"
                        . "<th colspan=\"3\">ANESTESIÓLOGO:</th>"
                        . "<th colspan=\"4\">".""."</th>
                    </tr>
                    <tr>"
                        . "<th colspan=\"2\">AYUDANTE:</th>"
                        . "<th colspan=\"3\">".""."</th>"
                        . "<th colspan=\"3\">INSTRUMENTADOR:</th>"
                        . "<th colspan=\"4\">".""."</th>
                    </tr>
                </table>";
            
    $pdf->writeHTML($tblReporte, true, false, false, false, '');

    
    
    $pdf->MultiCell(175, 6, "INFORMACIÓN DEL PROCEDIMIENTO", '', 'L', '0', 1, '', '', true);
    if(count($cirugia) > 0){
        $pdf->MultiCell(175, 6, 'Intervención: '.$cirugia['intervencion'], '1', 'L', '0', 1, '', '', true);
                    
        if(count($procedimientos)>0){
            $j = 1;
            foreach ($procedimientos as $procedimiento){
                $pdf->MultiCell(175, 6, "$j. ".$procedimiento['cups_descripcion'].". ".$procedimiento['cp_observacion']."\n", '1', 'L', '0', 1, '', '', true);
                $j++;
            }
        }
    }
    else{
        $pdf->MultiCell(175, 5, "\n", '1', 'L', '0', 1, '', '', true);
    }

    $pdf->Ln(6);
    $pdf->MultiCell(175, 6, "DIAGNÓSTICO PREOPERATORIO", '', 'L', '0', 1, '', '', true);
        
    if(count($diagnostico_pre)>0){
        $j = 1;
        foreach ($diagnostico_pre as $diagnostico){
            $pdf->MultiCell(175, 6, "$j. ".$diagnostico['cie_descripcion'].". ".$diagnostico['cd_descripcion']."\n", '1', 'L', '0', 1, '', '', true);
            $j++;
        }
    }
    else{
        $pdf->MultiCell(175, 5, "1. \n", '1', 'L', '0', 1, '', '', true);
        $pdf->MultiCell(175, 5, "2. \n", '1', 'L', '0', 1, '', '', true);
    }
    
    $pdf->Ln(6);
    $pdf->MultiCell(175, 6, "DIAGNÓSTICO POSTOPERATORIO", '', 'L', '0', 1, '', '', true);
    
    if(count($diagnostico_pos)>0){
        $j = 1;
        foreach ($diagnostico_pos as $diagnostico){
            $pdf->MultiCell(175, 6, "$j. ".$diagnostico['cie_descripcion'].". ".$diagnostico['cd_descripcion']."\n", '1', 'L', '0', 1, '', '', true);
            $j++;
        }
    }
    else{
        $pdf->MultiCell(175, 5, "1. \n", '1', 'L', '0', 1, '', '', true);
        $pdf->MultiCell(175, 5, "2. \n", '1', 'L', '0', 1, '', '', true);
    }

    $pdf->Ln(6);
    $pdf->MultiCell(175, 6, "DESCRIPCIÓN DEL PROCEDIMIENTO", '', 'L', '0', 1, '', '', true);
    
    if(count($cirugia) > 0){
        $pdf->MultiCell(175, 5, $cirugia['procedimiento_descripcion']."\n", '1', 'L', '0', 1, '', '', true);
    }
    else{
        $pdf->MultiCell(175, 5, "\n", '1', 'L', '0', 1, '', '', true);
    }
    
    
    $pdf->Ln(6);
    $pdf->MultiCell(175, 6, "HALLAZGOS:", '', 'L', '0', 1, '', '', true);
    
    if(count($cirugia) > 0){
        $pdf->MultiCell(175, 5, $cirugia['hallazgos']."\n", '1', 'L', '0', 1, '', '', true);
    }
    else{
        $pdf->MultiCell(175, 5, "\n", '1', 'L', '0', 1, '', '', true);
    }
    
    $pdf->Ln(6);
    $pdf->Cell(40, 6, 'TIEMPO OPERATORIO: ', 0, 0, '');
    if(count($cirugia) > 0){
        $pdf->MultiCell(30, 6, $cirugia['tiempo_operatorio'], 'B', 'C', '0', 0, '', '', true);
    }
    else{
        $pdf->MultiCell(30, 6, "\n", 'B', 'C', '0', 0, '', '', true);
    }
    
    $pdf->MultiCell(15, 6, ' min.', '', 'L', '0', 0, '', '', true);
    $pdf->Cell(48, 6, 'SANGRADO: ', 0, 0, 'R');
    if(count($cirugia) > 0){
        $pdf->MultiCell(30, 6, $cirugia['sangrado'], 'B', '', '0', 0, '', '', true);
    }
    else{
        $pdf->MultiCell(30, 6, "\n", 'B', 'C', '0', 0, '', '', true);
    }
    $pdf->MultiCell(15, 6, 'cc', '', '', '0', 0, '', '', true);
    $pdf->Ln(8);

    $pdf->Cell(40, 6, 'COMPLICACIONES: ', 0, 0, '');
    if(count($cirugia) > 0){
        $pdf->MultiCell(130, 6, $cirugia['complicaciones'], 'B', '', '0', 0, '', '', true);
    }
    else{
        $pdf->MultiCell(130, 6, "\n", 'B', 'C', '0', 0, '', '', true);
    }
    $pdf->Ln(8);

    $pdf->Cell(65, 6, 'TEJIDOS ENVIADOS A PATOLOGÍA: ', 0, 0, '');
    if(count($cirugia) > 0){
        $pdf->MultiCell(105, 6, $cirugia['tejidos_patologia'], 'B', '', '0', 0, '', '', true);
    }
    else{
        $pdf->MultiCell(105, 6, "\n", 'B', 'C', '0', 0, '', '', true);
    }
    $pdf->Ln(8);

    $pdf->Cell(55, 6, 'PRÓTESIS O BIOIMPLANTES: ', 0, 0, '');
    if(count($cirugia) > 0){
        $pdf->MultiCell(115, 6, $cirugia['protesis'], 'B', '', '0', 0, '', '', true);
    }
    else{
        $pdf->MultiCell(115, 6, "\n", 'B', 'C', '0', 0, '', '', true);
    }
    
    
    $pdf->Ln(25);
    $pdf->SetFont('helvetica', '', 10);

    $pdf->MultiCell(100, 6, $especialista['cirujano']['nombres']." ".$especialista['cirujano']['apellidos'], 'T', '', '0', 1, '', '', true);
    $pdf->MultiCell(100, 6, "RM: ".$especialista['cirujano']['tarjeta_profesional'], '', '', '0', 1, '', '', true);

    $pdf->Output($titulo, 'I');