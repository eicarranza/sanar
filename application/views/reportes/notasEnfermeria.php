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

    $pdf->SetFillColor(216, 216, 216);
    $pdf->Cell(120, 6, '1. IDENTIFICACIÓN DEL USUARIO', 1, 1, '', 1);
    $pdf->Ln(4);

    $tblReporte = " <table cellpadding=\"2\"  border=\"1\" align='center'>
                        <tr>"
                            . "<th colspan=\"4\">".  utf8_decode("NUMERO DE HISTORIA CLINICA:")."</th>"
                            . "<th colspan=\"8\"> ".$paciente['identificacion']."</th>
                        </tr>
                        <tr>"
                            . "<th colspan=\"2\">NOMBRES:</th>"
                            . "<th colspan=\"4\"> ".$paciente['nombre1'].' '.$paciente['nombre2']."</th>"
                            . "<th colspan=\"2\">APELLIDOS:</th>"
                            . "<th colspan=\"4\"> ".$paciente['apellido1'].' '.$paciente['apellido2']."</th>
                        </tr>
                        <tr>"
                            . "<th colspan=\"2\">EDAD:</th>"
                            . "<th colspan=\"4\"> ".$edad."</th>"
                            . "<th colspan=\"2\">SEXO:</th>"
                            . "<th colspan=\"4\"> ".$paciente['sexo']."</th>
                        </tr>
                    </table>";
            
    $pdf->writeHTML($tblReporte, true, false, false, false, '');

    $pdf->SetFillColor(216, 216, 216);
    $pdf->Cell(120, 6, '2. NOTAS', 1, 1, '', 1);
    $pdf->Ln(4);

    $tblReporte = " <table cellpadding=\"2\"  border=\"1\" align='center'>
                        <tr>"
                            . "<th align='center' colspan=\"3\">FECHA</th>"
                            . "<th rowspan=\"2\" colspan=\"7\">DETALLE</th>
                        </tr>
                        <tr>"
                            . "<th colspan=\"1\">DIA</th>"
                            . "<th colspan=\"1\">MES</th>"
                            . "<th colspan=\"1\">"."AÑO"."</th>
                        </tr>";
    
    if(count($notas) > 0){                
            $j = 1;
            foreach ($notas as $nota){
                $tblReporte .= "<tr>"
                                ."<td>".substr($nota['fecha'], 0, 4)."</td>"
                                ."<td>".substr($nota['fecha'], 5, 2)."</td>"
                                ."<td>".substr($nota['fecha'], 8, 2)."</td>"
                                ."<td colspan=\"7\">".$nota['notas']."</td>"
                            . "</tr>";
                $j++;
            }
    }
    
    $tblReporte .= "</table>";
    //echo $tblReporte;
    $pdf->writeHTML($tblReporte, true, false, false, false, '');

    
    $pdf->Output($titulo, 'I');