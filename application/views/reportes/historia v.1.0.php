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
            global $_logo, $_titulo, $_subtitulo, $_codigo, $_cliente, $_fecha;
            
            $this->SetFont('helvetica', 'B', 11);
            
            $tblReporte = "<table class=\"stlTabla\" cellpadding=\"2\"  border=\"1\" align=\"center\">
                            <tr>"
                                . "<th rowspan=\"3\"></th>"
                                . "<th colspan=\"2\">$_cliente</th>"
                                . "<th>$_codigo</th>
                            </tr>
                            <tr>"
                                . "<th colspan=\"2\">$_subtitulo</th>"
                                . "<th>Vigencia</th>
                            </tr>
                            <tr>"
                                . "<th colspan=\"2\">$_titulo</th>"
                                . "<th>$_fecha</th>
                            </tr>
                        </table>";
            $this->writeHTML($tblReporte, true, false, false, false, '');
            //$this->Image("logo.jpg",170,6,30);
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
$pdf->setPrintHeader(false);
$pdf->SetMargins(20, 10, 20);
$pdf->SetHeaderMargin(0);
// remove default header

//set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

//set some language-dependent strings
//$pdf->setLanguageArray($l);

set_time_limit(0);

$pdf->AddPage();

$pdf->SetFont('helvetica', 'B', 11);
          
// HOJA DE ATENCION INICIAL
$tblReporte = "<table class=\"stlTabla\" cellpadding=\"2\"  border=\"1\" align=\"center\">
                <tr>"
                    . "<th rowspan=\"3\"><img src=\"".$logo."\"/></th>"
                    . "<th colspan=\"2\">$_cliente</th>"
                    . "<th>$_codigo</th>
                </tr>
                <tr>"
                    . "<th colspan=\"2\">$_subtitulo</th>"
                    . "<th>Vigencia</th>
                </tr>
                <tr>"
                    . "<th colspan=\"2\">$_titulo</th>"
                    . "<th>$_fecha</th>
                </tr>
            </table>";
$pdf->writeHTML($tblReporte, true, false, false, false, '');


$pdf->SetFillColor(216, 216, 216);
$pdf->Cell(120, 6, '1. IDENTIFICACIÓN DEL USUARIO', 1, 1, '', 1);
$pdf->Ln(4);

//$pdf->writeHTML($h=0, $txt, $link='', $fill=0, $align='L', $ln=true, $stretch=0, $firstline=false, $firstblock=false, $maxh=0);
//$pdf->Image($logo,23,15,40);

$tblReporte = "<table class=\"stlTabla\" cellpadding=\"2\"  border=\"1\" align=\"center\">
                <tr>"
                    . "<th colspan=\"2\" bgcolor=\"#d8d8d8\">NÚMERO DE HISTORIA CLÍNICA:</th>"
                    . "<th colspan=\"3\">".$paciente['historia']."</th>
                </tr>
            </table>";
$pdf->writeHTML($tblReporte, true, false, false, false, '');


$pdf->SetFont('helvetica', '', 10);
$pdf->Cell(25, 6, 'FECHA', 0, 0, '');
$pdf->Cell(15, 6, 'DÍA: ', 0, 0, 'R');
$pdf->Cell(15, 6, substr($consulta[0]['fecha'], 0, 4), 1, 0, 'C');
$pdf->Cell(15, 6, 'MES: ', 0, 0, 'R');
$pdf->Cell(15, 6, substr($consulta[0]['fecha'], 5, 2), 1, 0, 'C');
$pdf->Cell(15, 6, 'AÑO: ', 0, 0, 'R');
$pdf->Cell(15, 6, substr($consulta[0]['fecha'], 8, 2), 1, 0, 'C');
$pdf->Cell(30, 6, 'HORA: :', 0, 0, 'R');
$pdf->Cell(25, 6, $consulta[0]['hora'], 'B', 0, '');

$pdf->Ln(8);
$pdf->Cell(30, 6, 'NOMBRES: ', 0, 0, '');
$pdf->Cell(55, 6, $paciente['nombre1'].' '.$paciente['nombre2'], 'B', 0, '');
$pdf->Cell(30, 6, 'APELLIDOS: ', 0, 0, 'R');
$pdf->Cell(55, 6, $paciente['apellido1'].' '.$paciente['apellido2'], 'B', 0, '');

$pdf->Ln(8);
$pdf->Cell(50, 6, 'FECHA DE NACIMIENTO: ', 0, 0, '');
$pdf->Cell(15, 6, substr($paciente['fecha_nacimiento'], 0, 4), 1, 0, 'C');
$pdf->Cell(15, 6, substr($paciente['fecha_nacimiento'], 5, 2), 1, 0, 'C');
$pdf->Cell(15, 6, substr($paciente['fecha_nacimiento'], 8, 2), 1, 0, 'C');
$pdf->Cell(40, 6, 'EDAD: ', 0, 0, 'R');
if(count($edad) > 0){    
    $pdf->Cell(15, 6,  $edad[$i], 1, 0, '');
    //$pdf->Cell(15, 6,  '', 1, 0, '');
}
else{
    $pdf->Cell(15, 6,  '', 1, 0, '');
}

$pdf->Ln(8);
$pdf->Cell(30, 6, 'OCUPACIÓN: ', 0, 0, '');
$pdf->Cell(55, 6, $paciente['ocupacion'].' ', 'B', 0, '');
$pdf->Cell(36, 6, 'ESTADO CIVIL: ', 0, 0, 'R');
$pdf->Cell(49, 6, $paciente['ec_estado'].' ', 'B', 0, '');

$pdf->Ln(8);
$pdf->MultiCell(30, 5, 'DIRECCIÓN: ', 0, 'L', 0, 0, '', '', true);
$pdf->MultiCell(80, 5, $paciente['direccion'], 'B', 'L', 0, 0, '', '', true);
$pdf->MultiCell(30, 5, 'TELÉFONO: ', 0, 'R', 0, 0, '', '', true);
$pdf->MultiCell(30, 5, $paciente['telefono'], 'B', '', 0, 1, '', '', true);

$responsable['nombre'] = "";
$responsable['telefono'] = "";
$responsable['direccion'] = "";

foreach ($familiar as $familia){
    $responsable['nombre'] = $familia['nombre'];
    $responsable['telefono'] = $familia['movil'];
    $responsable['direccion'] = $familia['direccion'];
}

$pdf->Ln(8);
$tblReporte = "<table class=\"stlTabla\" cellpadding=\"2\"  border=\"1\">
            <tr>"
                . "<th>PERSONA RESPONSABLE DEL PACIENTE (NOMBRE Y PARENTESCO) <br/><br/>".$responsable['nombre']."</th>"
                . "<th>TELÉFONO <br/><br/>".$responsable['telefono']."</th>
            </tr>
            <tr>"
                . "<th>RESIDENCIA ACTUAL <br/><br/><br/><br/>".$responsable['direccion']."</th>"
                . "<th></th>
            </tr>
        </table>";
$pdf->writeHTML($tblReporte, true, false, false, false, '');

$pdf->Ln(10);


// HISTORIA CLINICA GENERAL

foreach ($consulta as $row){
    
    $pdf->AddPage();
    $pdf->SetFont('helvetica', 'B', 11);
    
    $tblReporte = "<table class=\"stlTabla\" cellpadding=\"2\"  border=\"1\" align=\"center\">
                <tr>"
                    . "<th rowspan=\"3\"><img src=\"".$logo."\"/></th>"
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
    $pdf->writeHTML($tblReporte, true, false, false, false, '');

    $pdf->SetFillColor(216, 216, 216);
    $pdf->Cell(120, 6, '1. IDENTIFICACIÓN DEL USUARIO', 1, 1, '', 1);
    $pdf->Ln(4);

    //$pdf->writeHTML($h=0, $txt, $link='', $fill=0, $align='L', $ln=true, $stretch=0, $firstline=false, $firstblock=false, $maxh=0);

    $tblReporte = "<table class=\"stlTabla\" cellpadding=\"2\"  border=\"1\" align=\"center\">
                    <tr>"
                        . "<th colspan=\"2\" bgcolor=\"#d8d8d8\">NÚMERO DE HISTORIA CLÍNICA:</th>"
                        . "<th colspan=\"3\">".$paciente['historia']."</th>
                    </tr>
                </table>";
    $pdf->writeHTML($tblReporte, true, false, false, false, '');

    $pdf->SetFont('helvetica', '', 10);
    $pdf->Cell(25, 6, 'FECHA', 0, 0, '');
    $pdf->Cell(15, 6, 'DÍA: ', 0, 0, 'R');
    $pdf->Cell(15, 6, substr($row['fecha'], 0, 4), 1, 0, 'C');
    $pdf->Cell(15, 6, 'MES: ', 0, 0, 'R');
    $pdf->Cell(15, 6, substr($row['fecha'], 5, 2), 1, 0, 'C');
    $pdf->Cell(15, 6, 'AÑO: ', 0, 0, 'R');
    $pdf->Cell(15, 6, substr($row['fecha'], 8, 2), 1, 0, 'C');
    $pdf->Cell(30, 6, 'HORA: :', 0, 0, 'R');
    $pdf->Cell(25, 6, $row['hora'], 'B', 0, '');

    $pdf->Ln(8);
    $pdf->Cell(30, 6, 'NOMBRES: ', 0, 0, '');
    $pdf->Cell(55, 6, $paciente['nombre1'].' '.$paciente['nombre2'], 'B', 0, '');
    $pdf->Cell(30, 6, 'APELLIDOS: ', 0, 0, 'R');
    $pdf->Cell(55, 6, $paciente['apellido1'].' '.$paciente['apellido2'], 'B', 0, '');

    $pdf->Ln(8);
    $pdf->Cell(50, 6, 'FECHA DE NACIMIENTO: ', 0, 0, '');
    $pdf->Cell(15, 6, substr($paciente['fecha_nacimiento'], 0, 4), 1, 0, 'C');
    $pdf->Cell(15, 6, substr($paciente['fecha_nacimiento'], 5, 2), 1, 0, 'C');
    $pdf->Cell(15, 6, substr($paciente['fecha_nacimiento'], 8, 2), 1, 0, 'C');
    $pdf->Cell(40, 6, 'EDAD: ', 0, 0, 'R');
    if(count($edad) > 0)
        $pdf->Cell(15, 6,  $edad[$i], 1, 0, '');
        //$pdf->Cell(15, 6,  '', 1, 0, '');
    else
        $pdf->Cell(15, 6,  '', 1, 0, '');
    
    $pdf->Ln(8);
    $pdf->Cell(30, 6, 'OCUPACIÓN: ', 0, 0, '');
    $pdf->Cell(55, 6, ' ', 'B', 0, '');
    $pdf->Cell(36, 6, 'ESTADO CIVIL: ', 0, 0, 'R');
    $pdf->Cell(49, 6, $paciente['ec_estado'].' ', 'B', 0, '');

    $pdf->Ln(8);
    $pdf->MultiCell(30, 5, 'DIRECCIÓN: ', 0, 'L', 0, 0, '', '', true);
    $pdf->MultiCell(80, 5, $paciente['direccion'], 'B', 'L', 0, 0, '', '', true);
    $pdf->MultiCell(30, 5, 'TELÉFONO: ', 0, 'R', 0, 0, '', '', true);
    $pdf->MultiCell(30, 5, $paciente['telefono'], 'B', '', 0, 1, '', '', true);

    $pdf->Ln(10);
    
    $pdf->SetFont('helvetica', 'B', 11);
    //$pdf->Ln(5);
    $pdf->SetFillColor(216, 216, 216);
    $pdf->Cell(120, 6, '2. MOTIVO DE LA CONSULTA', 1, 1, '', 1);
    $pdf->Ln(4);
    $pdf->SetFont('helvetica', '', 11);
    $pdf->MultiCell(170, 6, $row['motivo'], 'B', '', 0, 1, '', '', true);
    
    $pdf->SetFont('helvetica', 'B', 11);
    $pdf->Ln(10);
    $pdf->SetFillColor(216, 216, 216);
    $pdf->Cell(120, 6, '3. ENFERMEDAD ACTUAL', 1, 1, '', 1);
    $pdf->Ln(4);
    $pdf->SetFont('helvetica', '', 11);
    $pdf->MultiCell(170, 6, $row['enfermedad_actual'], 'B', '', 0, 1, '', '', true);

    $pdf->SetFont('helvetica', 'B', 11);
    $pdf->Ln(10);
    $pdf->SetFillColor(216, 216, 216);
    $pdf->Cell(120, 6, '5. ANTECEDENTES PATOLÓGICOS FAMILIARES', 1, 1, '', 1);
    $pdf->Ln(4);
    $pdf->SetFont('helvetica', '', 11);
    if(count($aFamiliares[$i]) > 0){
        $pdf->MultiCell(170, 6, $aFamiliares[$i]['descripcion'], 'B', '', 0, 1, '', '', true);
    }
    else{
        $pdf->Cell(170, 6, '', 'B', 0, '');
    }
    
    $pdf->SetFont('helvetica', 'B', 11);
    $pdf->Ln(10);
    $pdf->SetFillColor(216, 216, 216);
    $pdf->Cell(120, 6, '5. ANTECEDENTES PATOLÓGICOS DE LA PAREJA', 1, 1, '', 1);
    $pdf->Ln(4);
    $pdf->SetFont('helvetica', '', 11);
    if(count($aPareja[$i]) > 0){
        $pdf->Cell(60, 6, 'ENFERMEDADES CRÓNICAS: ', 0, 0, '');
        $pdf->MultiCell(110, 6, $aPareja[$i]['enfermedades_cronicas'], 'B', '', 0, 1, '', '', true);
        
        $pdf->Cell(30, 6, 'IMPOTENCIA: ', 0, 0, 'L');
        $pdf->MultiCell(140, 6, $aPareja[$i]['impotencia'], 'B', '', 0, 1, '', '', true);
        
        $pdf->Cell(30, 6, 'ETS: ', 0, 0, 'L');
        $pdf->MultiCell(140, 6, $aPareja[$i]['ets'], 'B', '', 0, 1, '', '', true);
    }
    else{
        $pdf->Cell(60, 6, 'ENFERMEDADES CRÓNICAS: ', 0, 0, 'L');
        $pdf->Cell(110, 6, '', 'B', 0, '');
        $pdf->Ln(8);
        $pdf->Cell(30, 6, 'IMPOTENCIA: ', 0, 0, 'L');
        $pdf->Cell(140, 6, '', 'B', 0, '');
        $pdf->Ln(8);
        $pdf->Cell(30, 6, 'ETS: ', 0, 0, 'L');
        $pdf->Cell(140, 6, '', 'B', 0, '');
    }
    
    $pdf->SetFont('helvetica', 'B', 11);
    $pdf->Ln(10);
    $pdf->SetFillColor(216, 216, 216);
    $pdf->Cell(120, 6, '5. ANTECEDENTES PERSONALES PATOLÓGICOS', 1, 1, '', 1);
    $pdf->Ln(4);
    $pdf->SetFont('helvetica', '', 10);
    if(count($aPersonales[$i]) > 0){
        $pdf->MultiCell(40, 5, 'HÁBITOS TÓXICOS: ', 0, 'L', 0, 0, '', '', true);
        $pdf->MultiCell(45, 5, $aPersonales[$i]['habitos_toxicos'], 'B', '', 0, 0, '', '', true);
        
        $pdf->Cell(10, 6, '', '', 0, '');
        $pdf->MultiCell(30, 5, 'FISIOLÓGICOS: ', 0, 'L', 0, 0, '', '', true);
        $pdf->MultiCell(45, 6, $aPersonales[$i]['fisiologicos'], 'B', '', 0, 0, '', '', true);
        
        $pdf->Ln(8);
        $pdf->Cell(40, 6, 'PATOLÓGICOS: ', 0, 0, 'L');
        $pdf->MultiCell(45, 6, $aPersonales[$i]['patologicos'], 'B', '', 0, 0, '', '', true);
        $pdf->Cell(10, 6, '', '', 0, '');
        $pdf->Cell(30, 6, 'QUIRÚRGICOS: ', 0, 0, 'L');
        $pdf->MultiCell(45, 6, $aPersonales[$i]['quirurgicos'], 'B', '', 0, 1, '', '', true);
        
        
        $pdf->Ln(8);
        $pdf->Cell(40, 6, 'TRAUMATOLÓGICOS: ', 0, 0, 'L');
        $pdf->MultiCell(45, 6, $aPersonales[$i]['traumatologicos'], 'B', '', 0, 0, '', '', true);
        $pdf->Cell(10, 6, '', '', 0, '');
        $pdf->Cell(30, 6, 'ALÉRGICOS: ', 0, 0, 'L');
        $pdf->MultiCell(45, 6, $aPersonales[$i]['alergicos'], 'B', '', 0, 0, '', '', true);
    }
    else{
        $pdf->Cell(40, 6, 'HÁBITOS TÓXICOS: ', 0, 0, '');
        $pdf->Cell(45, 6, '', 'B', 0, '');
        $pdf->Cell(10, 6, '', '', 0, '');
        $pdf->Cell(30, 6, 'FISIOLÓGICOS: ', 0, 0, 'L');
        $pdf->Cell(45, 6, '', 'B', 0, '');
        
        $pdf->Ln(8);
        $pdf->Cell(40, 6, 'PATOLÓGICOS: ', 0, 0, 'L');
        $pdf->Cell(45, 6, '', 'B', 0, '');
        $pdf->Cell(10, 6, '', '', 0, '');
        $pdf->Cell(30, 6, 'QUIRÚRGICOS: ', 0, 0, 'L');
        $pdf->Cell(45, 6, '', 'B', 0, '');
        
        
        $pdf->Ln(8);
        $pdf->Cell(40, 6, 'TRAUMATOLÓGICOS: ', 0, 0, 'L');
        $pdf->Cell(45, 6, '', 'B', 0, '');
        $pdf->Cell(10, 6, '', '', 0, '');
        $pdf->Cell(30, 6, 'ALÉRGICOS: ', 0, 0, 'L');
        $pdf->Cell(45, 6, '', 'B', 0, '');
    }
    
    
    
    $pdf->SetFont('helvetica', 'B', 11);
    $pdf->Ln(15);
    $pdf->SetFillColor(216, 216, 216);
    $pdf->Cell(120, 6, '5.1 GINECOLÓGICOS', 1, 1, '', 1);
    $pdf->Ln(4);
    $pdf->SetFont('helvetica', '', 10);
    if(count($aGinecologicos[$i]) > 0){
        $pdf->Cell(20, 6, 'MENARCA: ', 0, 0, '');
        $pdf->MultiCell(10, 6, $aGinecologicos[$i]['menarca'], 'B', 'C', '0', 0, '', '', true);
        $pdf->Cell(15, 6, 'FM: ', 0, 0, 'R');
        $pdf->MultiCell(45, 6, $aGinecologicos[$i]['fm'], 'B', '', '0', 0, '', '', true);
        $pdf->Cell(15, 6, 'FUM: ', 0, 0, 'R');
        $pdf->MultiCell(25, 6, $aGinecologicos[$i]['fum'], 'B', 'C', '0', 0, '', '', true);
        $pdf->Cell(15, 6, 'FPP: ', 0, 0, 'R');
        $pdf->MultiCell(25, 6, $aGinecologicos[$i]['fpp'], 'B', 'C', '0', 0, '', '', true);
        
        $pdf->Ln(8);
        $pdf->Cell(40, 6, 'INICIO VIDA SEXUAL: ', '', 0, '');
        $pdf->MultiCell(20, 6, $aGinecologicos[$i]['vida_sexual'], 'B', 'C', '0', 0, '', '', true);
        $pdf->Cell(30, 6, 'N° PAREJAS: ', '', 0, 'R');
        $pdf->MultiCell(10, 6, $aGinecologicos[$i]['numero_parejas'], 'B', '', '0', 0, '', '', true);
        $pdf->Cell(15, 6, 'ETS: ', '', 0, 'R');
        $pdf->MultiCell(15, 6, $aGinecologicos[$i]['ets'], 'B', 'C', '0', 0, '', '', true);
        $pdf->Cell(25, 6, 'VAGINITIS: ', '', 0, 'R');
        $pdf->MultiCell(15, 6, $aGinecologicos[$i]['vaginitis'], 'B', 'C', '0', 0, '', '', true);
        
        $pdf->Ln(8);
        $pdf->Cell(30, 6, 'F.U. CITOLOGÍA: ', 0, 0, '');
        $pdf->MultiCell(35, 6, $aGinecologicos[$i]['fu_citologia'], 'B', 'C', '0', 0, '', '', true);
        $pdf->Cell(40, 6, 'ANTICONCEPCIÓN: ', 0, 0, 'R');
        $pdf->Cell(15, 6, 'TIPO: ', 0, 0, 'R');
        $pdf->MultiCell(15, 6, $aGinecologicos[$i]['anticoncepcion_tipo'], 'B', 'C', '0', 0, '', '', true);
        $pdf->Cell(20, 6, 'INICIO: ', 0, 0, 'R');
        $pdf->MultiCell(15, 6, $aGinecologicos[$i]['anticoncepcion_inicio'], 'B', 'C', '0', 0, '', '', true);
        $pdf->Ln(8);
        $pdf->Cell(20, 6, 'TIEMPO: ', '', 0, '');
        $pdf->MultiCell(30, 6, $aGinecologicos[$i]['anticoncepcion_tiempo'], 'B', 'C', '0', 0, '', '', true);
        $pdf->Cell(40, 6, 'SUSPENCIÓN: ', '', 0, 'R');
        $pdf->MultiCell(40, 6, $aGinecologicos[$i]['anticoncepcion_suspension'], 'B', 'C', '0', 0, '', '', true);
    }
    else{
        $pdf->Cell(20, 6, 'MENARCA: ', '', 0, '');
        $pdf->Cell(10, 6, '', 'B', 0, '');
        $pdf->Cell(15, 6, 'FM: ', '', 0, 'R');
        $pdf->Cell(45, 6, '', 'B', 0, '');
        $pdf->Cell(15, 6, 'FUM: ', '', 0, 'R');
        $pdf->Cell(25, 6, '', 'B', 0, '');
        $pdf->Cell(15, 6, 'FPP: ', '', 0, 'R');
        $pdf->Cell(25, 6, '', 'B', 0, '');
        
        $pdf->Ln(8);
        $pdf->Cell(40, 6, 'INICIO VIDA SEXUAL: ', '', 0, '');
        $pdf->Cell(20, 6, '', 'B', 0, '');
        $pdf->Cell(30, 6, 'N° PAREJAS: ', '', 0, 'R');
        $pdf->Cell(10, 6, '', 'B', 0, '');
        $pdf->Cell(15, 6, 'ETS: ', '', 0, 'R');
        $pdf->Cell(15, 6, '', 'B', 0, '');
        $pdf->Cell(25, 6, 'VAGINITIS: ', '', 0, 'R');
        $pdf->Cell(15, 6, '', 'B', 0, '');
        
        $pdf->Ln(8);
        $pdf->Cell(30, 6, 'F.U. CITOLOGÍA: ', '', 0, '');
        $pdf->Cell(20, 6, '', 'B', 0, '');
        $pdf->Cell(40, 6, 'ANTICONCEPCIÓN: ', '', 0, 'R');
        $pdf->Cell(15, 6, 'TIPO: ', '', 0, '');
        $pdf->Cell(15, 6, '', 'B', 0, '');
        $pdf->Cell(20, 6, 'INICIO: ', '', 0, 'R');
        $pdf->Cell(30, 6, '', 'B', 0, '');
        $pdf->Ln(8);
        $pdf->Cell(20, 6, 'TIEMPO: ', '', 0, '');
        $pdf->Cell(30, 6, '', 'B', 0, '');
        $pdf->Cell(40, 6, 'SUSPENCIÓN: ', '', 0, 'R');
        $pdf->Cell(40, 6, '', 'B', 0, '');
    }
    
    
    $pdf->SetFont('helvetica', 'B', 11);
    $pdf->Ln(15);
    $pdf->SetFillColor(216, 216, 216);
    $pdf->Cell(120, 6, '5.2 OBSTETRICOS', 1, 1, '', 1);
    $pdf->Ln(4);
    $pdf->SetFont('helvetica', '', 10);
    if(count($aObstetricos[$i]) > 0){
        $pdf->Cell(25, 6, 'G: DESEADO: ', 0, 0, '');
        $pdf->MultiCell(5, 6, $aObstetricos[$i]['deseado'], 'B', 'C', '0', 0, '', '', true);
        $pdf->Cell(10, 6, 'P: ', 0, 0, 'R');
        $pdf->MultiCell(15, 6, $aObstetricos[$i]['partos'], 'B', '', '0', 0, '', '', true);
        $pdf->Cell(20, 6, 'CESAREA: ', 0, 0, 'R');
        $pdf->MultiCell(5, 6, $aObstetricos[$i]['cesarea'], 'B', 'C', '0', 0, '', '', true);
        $pdf->Cell(10, 6, 'A: ', 0, 0, 'R');
        $pdf->MultiCell(5, 6, $aObstetricos[$i]['aborto'], 'B', 'C', '0', 0, '', '', true);
        $pdf->Cell(10, 6, 'E: ', 0, 0, 'R');
        $pdf->MultiCell(5, 6, $aObstetricos[$i]['ectopico'], 'B', 'C', '0', 0, '', '', true);
        $pdf->Cell(15, 6, 'VIVO: ', 0, 0, 'R');
        $pdf->MultiCell(15, 6, $aObstetricos[$i]['vivo'], 'B', 'C', '0', 0, '', '', true);
        $pdf->Cell(35, 6, 'INTERGENESIA: ', 0, 0, 'R');
        $pdf->MultiCell(10, 6, $aObstetricos[$i]['intergenesia'], 'B', 'C', '0', 0, '', '', true);
        
        $pdf->Ln(8);
        $pdf->Cell(40, 6, 'MALFORMACIONES: ', '', 0, '');
        $pdf->MultiCell(10, 6, $aObstetricos[$i]['malformacion'], 'B', 'C', '0', 0, '', '', true);
        $pdf->Cell(40, 6, 'PARTO PREMATURO: ', '', 0, 'R');
        $pdf->MultiCell(10, 6, $aObstetricos[$i]['prematuro'], 'B', '', '0', 0, '', '', true);
        $pdf->Cell(15, 6, 'DG: ', '', 0, 'R');
        $pdf->MultiCell(15, 6, $aObstetricos[$i]['diabetes_gestacional'], 'B', 'C', '0', 0, '', '', true);
        $pdf->Cell(15, 6, 'HTA: ', '', 0, 'R');
        $pdf->MultiCell(15, 6, $aObstetricos[$i]['hta'], 'B', 'C', '0', 0, '', '', true);
        $pdf->Ln(8);
        $pdf->Cell(30, 6, 'INFECCIÓN: ', '', 0, 'R');
        $pdf->MultiCell(15, 6, $aObstetricos[$i]['infeccion'], 'B', 'C', '0', 0, '', '', true);
        $pdf->Cell(40, 6, 'ISOINMUNIZACIÓN: ', '', 0, 'R');
        $pdf->MultiCell(15, 6, $aObstetricos[$i]['isoinmunizacion'], 'B', 'C', '0', 0, '', '', true);
        
        $pdf->Ln(8);
        $pdf->Cell(30, 6, 'OTROS: ', 0, 0, '');
        $pdf->MultiCell(145, 6, $aObstetricos[$i]['otros'], 'B', 'C', '0', 0, '', '', true);
        
        $pdf->Ln(8);
        $pdf->Cell(40, 6, 'ATENCIÓN PRENATAL: ', '', 0, '');
        $pdf->MultiCell(10, 6, $aObstetricos[$i]['atencion_prenatal'], 'B', 'C', '0', 0, '', '', true);
        $pdf->Cell(40, 6, 'N° DE CONSULTAS: ', '', 0, 'R');
        $pdf->MultiCell(10, 6, $aObstetricos[$i]['numero_consultas'], 'B', 'C', '0', 0, '', '', true);
        $pdf->Cell(70, 6, 'EXÁMENENES COMPLEMENTARIOS: ', '', 0, 'R');
        $pdf->MultiCell(5, 6, $aObstetricos[$i]['examenes_complementarios'], 'B', 'C', '0', 0, '', '', true);
        
        $pdf->Ln(8);
        $pdf->Cell(30, 6, '* ALTERADOS: ', '', 0, '');
        $pdf->MultiCell(145, 6, $aObstetricos[$i]['alterados'], 'B', 'C', '0', 0, '', '', true);
        $pdf->Ln(8);
        $pdf->Cell(50, 6, 'MEDICINA GESTACIONAL: ', '', 0, 'R');
        $pdf->MultiCell(125, 6, $aObstetricos[$i]['medicina_gestacional'], 'B', 'C', '0', 0, '', '', true);
        
        $pdf->Ln(8);
        $pdf->Cell(30, 6, 'E. VACUNACIÓN: ', '', 0, '');
        $pdf->Cell(15, 6, 'T-D: ', '', 0, 'R');
        $pdf->MultiCell(10, 6, $aObstetricos[$i]['vacunacion_td'], 'B', 'C', '0', 0, '', '', true);
        $pdf->Cell(30, 6, 'INFLUENZA: ', '', 0, 'R');
        $pdf->MultiCell(10, 6, $aObstetricos[$i]['vacunacion_influenza'], 'B', 'C', '0', 0, '', '', true);
        $pdf->Cell(25, 6, 'H.AYB: ', '', 0, 'R');
        $pdf->MultiCell(20, 6, $aObstetricos[$i]['vacunacion_hayb'], 'B', 'C', '0', 0, '', '', true);
        $pdf->Cell(30, 6, 'F. AMARILLA: ', '', 0, 'R');
        $pdf->MultiCell(10, 6, $aObstetricos[$i]['vacunacion_famarilla'], 'B', 'C', '0', 0, '', '', true);
        $pdf->Ln(8);
        $pdf->Cell(55, 6, 'VARICELA: ', '', 0, 'R');
        $pdf->MultiCell(10, 6, $aObstetricos[$i]['vacunacion_varicela'], 'B', 'C', '0', 0, '', '', true);
        $pdf->Cell(20, 6, 'RABIA: ', '', 0, 'R');
        $pdf->MultiCell(10, 6, $aObstetricos[$i]['vacunacion_rabia'], 'B', 'C', '0', 0, '', '', true);
        
    }
    else{
        $pdf->Cell(25, 6, 'G: DESEADO: ', 0, 0, '');
        $pdf->MultiCell(5, 6, '', 'B', 'C', '0', 0, '', '', true);
        $pdf->Cell(10, 6, 'P: ', 0, 0, 'R');
        $pdf->MultiCell(5, 6, '', 'B', '', '0', 0, '', '', true);
        $pdf->Cell(20, 6, 'CESAREA: ', 0, 0, 'R');
        $pdf->MultiCell(5, 6, '', 'B', 'C', '0', 0, '', '', true);
        $pdf->Cell(10, 6, 'A: ', 0, 0, 'R');
        $pdf->MultiCell(5, 6, '', 'B', 'C', '0', 0, '', '', true);
        $pdf->Cell(10, 6, 'E: ', 0, 0, 'R');
        $pdf->MultiCell(5, 6, '', 'B', 'C', '0', 0, '', '', true);
        $pdf->Cell(15, 6, 'VIVO: ', 0, 0, 'R');
        $pdf->MultiCell(15, 6, '', 'B', 'C', '0', 0, '', '', true);
        $pdf->Cell(35, 6, 'INTERGENESIA: ', 0, 0, 'R');
        $pdf->MultiCell(10, 6, '', 'B', 'C', '0', 0, '', '', true);
        
        $pdf->Ln(8);
        $pdf->Cell(40, 6, 'MALFORMACIONES: ', '', 0, '');
        $pdf->MultiCell(10, 6, '', 'B', '', '0', 0, '', '', true);
        $pdf->Cell(40, 6, 'PARTO PREMATURO: ', '', 0, 'R');
        $pdf->MultiCell(10, 6, '', 'B', '', '0', 0, '', '', true);
        $pdf->Cell(15, 6, 'DG: ', '', 0, 'R');
        $pdf->MultiCell(15, 6, '', 'B', 'C', '0', 0, '', '', true);
        $pdf->Cell(15, 6, 'HTA: ', '', 0, 'R');
        $pdf->MultiCell(15, 6, '', 'B', 'C', '0', 0, '', '', true);
        $pdf->Ln(8);
        $pdf->Cell(30, 6, 'INFECCIÓN: ', '', 0, '');
        $pdf->MultiCell(15, 6, '', 'B', 'C', '0', 0, '', '', true);
        $pdf->Cell(40, 6, 'ISOINMUNIZACIÓN: ', '', 0, 'R');
        $pdf->MultiCell(15, 6, '', 'B', 'C', '0', 0, '', '', true);
        
        $pdf->Ln(8);
        $pdf->Cell(30, 6, 'OTROS: ', 0, 0, '');
        $pdf->MultiCell(145, 6, '', 'B', 'C', '0', 0, '', '', true);
        
        $pdf->Ln(8);
        $pdf->Cell(40, 6, 'ATENCIÓN PRENATAL: ', '', 0, '');
        $pdf->MultiCell(10, 6, '', 'B', 'C', '0', 0, '', '', true);
        $pdf->Cell(40, 6, 'N° DE CONSULTAS: ', '', 0, 'R');
        $pdf->MultiCell(10, 6, '', 'B', 'C', '0', 0, '', '', true);
        $pdf->Cell(70, 6, 'EXÁMENENES COMPLEMENTARIOS: ', '', 0, 'R');
        $pdf->MultiCell(5, 6, '', 'B', 'C', '0', 0, '', '', true);
        
        $pdf->Ln(8);
        $pdf->Cell(30, 6, '* ALTERADOS: ', '', 0, '');
        $pdf->MultiCell(145, 6, '', 'B', 'C', '0', 0, '', '', true);
        $pdf->Ln(8);
        $pdf->Cell(50, 6, 'MEDICINA GESTACIONAL: ', '', 0, '');
        $pdf->MultiCell(125, 6, '', 'B', 'C', '0', 0, '', '', true);
        
        $pdf->Ln(8);
        $pdf->Cell(30, 6, 'E. VACUNACIÓN: ', '', 0, '');
        $pdf->Cell(15, 6, 'T-D: ', '', 0, 'R');
        $pdf->MultiCell(10, 6, '', 'B', 'C', '0', 0, '', '', true);
        $pdf->Cell(30, 6, 'INFLUENZA: ', '', 0, 'R');
        $pdf->MultiCell(10, 6, '', 'B', 'C', '0', 0, '', '', true);
        $pdf->Cell(20, 6, 'H.AYB: ', '', 0, 'R');
        $pdf->MultiCell(10, 6, '', 'B', 'C', '0', 0, '', '', true);
        $pdf->Cell(30, 6, 'F. AMARILLA: ', '', 0, 'R');
        $pdf->MultiCell(10, 6, '', 'B', 'C', '0', 0, '', '', true);
        $pdf->Ln(8);
        $pdf->Cell(55, 6, 'VARICELA: ', '', 0, 'R');
        $pdf->MultiCell(10, 6, '', 'B', 'C', '0', 0, '', '', true);
        $pdf->Cell(20, 6, 'RABIA: ', '', 0, 'R');
        $pdf->MultiCell(10, 6, '', 'B', 'C', '0', 0, '', '', true);
        
    }
    
    
    $pdf->SetFont('helvetica', 'B', 11);
    $pdf->Ln(15);
    $pdf->SetFillColor(216, 216, 216);
    $pdf->Cell(120, 6, '6. EXÁMEN FÍSICO', 1, 1, '', 1);
    $pdf->Ln(4);
    $pdf->SetFont('helvetica', '', 10);
    
    $imc = 0;
    $talla = $row['talla'];
    $peso = $row['peso'];
    if($talla > 0){
        $imc = round($peso / ($talla * $talla), 2);
    }
    
    $pdf->Cell(40, 6, 'IMPRESIÓN GENERAL: ', 0, 0, '');
    $pdf->MultiCell(135, 6, $row['impresion_general'], 'B', '', '0', 0, '', '', true);
    $pdf->Ln(8);
    $pdf->Cell(35, 6, 'SIGNOS VITALES: ', 0, 0, '');
    $pdf->Cell(10, 6, 'FC: ', 0, 0, '');
    $pdf->MultiCell(20, 6, $row['frecuencia_cardiaca'], 'B', 'C', '0', 0, '', '', true);
    $pdf->Cell(10, 6, 'TA: ', 0, 0, 'R');
    $pdf->MultiCell(20, 6, $row['tension_arterial'], 'B', 'C', '0', 0, '', '', true);
    $pdf->Cell(10, 6, 'FR: ', 0, 0, 'R');
    $pdf->MultiCell(20, 6, $row['frecuencia_respiratoria'], 'B', 'C', '0', 0, '', '', true);
    $pdf->Cell(15, 6, 'T: ', 0, 0, 'R');
    $pdf->MultiCell(15, 6, $row['tension_arterial'], 'B', 'C', '0', 0, '', '', true);
    $pdf->Ln(8);
    $pdf->Cell(35, 6, '', 0, 0, '');
    $pdf->Cell(15, 6, 'PESO: ', 0, 0, '');
    $pdf->MultiCell(25, 6, $row['peso']." kg", 'B', 'C', '0', 0, '', '', true);
    $pdf->Cell(20, 6, 'TALLA: ', 0, 0, 'R');
    $pdf->MultiCell(25, 6, $row['talla']." m", 'B', 'C', '0', 0, '', '', true);
    $pdf->Cell(20, 6, 'IMC: ', 0, 0, 'R');
    $pdf->MultiCell(25, 6, $imc, 'B', 'C', '0', 0, '', '', true);
    $pdf->Ln(15);
    
    $j = 0;
    foreach ($partes_cuerpo[$i] as $cuerpo){
        $pdf->Cell(40, 6, strtoupper($cuerpo['descripcion']).": ", '', 0, '');
        $pdf->MultiCell(40, 6, $cuerpo['valoracion'], 'B', 'L', '0', 0, '', '', true);
        $pdf->Cell(10, 6, '', 0, 0, 'R');
        if($j%2 != 0){
            $pdf->Ln(8);
        }
        $j++;
    }
    
    $pdf->SetFont('helvetica', 'B', 11);
    $pdf->Ln(15);
    $pdf->SetFillColor(216, 216, 216);
    $pdf->Cell(120, 6, '7. GINECOLÓGICO', 1, 1, '', 1);
    $pdf->Ln(4);
    $pdf->SetFont('helvetica', '', 10);
    
    if(count($aGinecologicos[$i]) > 0){
        $pdf->MultiCell(175, 6, $aGinecologicos[$i]['examen_ginecologico'], 'B', '', '0', 0, '', '', true);
    }
    else{
        $pdf->MultiCell(175, 6, '', 'B', 'C', '0', 0, '', '', true);
    }
    
    
    $pdf->SetFont('helvetica', 'B', 11);
    $pdf->Ln(15);
    $pdf->SetFillColor(216, 216, 216);
    $pdf->Cell(120, 6, '8. IMPRESIÓN DIAGNÓSTICA', 1, 1, '', 1);
    $pdf->Ln(4);
    $pdf->SetFont('helvetica', '', 10);
    
    $j = 0;
    
    if(count($diagnosticos)>0){
        foreach ($diagnosticos[$i] as $diagnostico){
            $j++;
            $pdf->Cell(40, 6, "$j. ", '', 0, '');
            //echo "Diagnostico $i: ".$diagnosticos[$i];
            $pdf->MultiCell(175, 6, "$j. ".$diagnostico['cie_descripcion'].". ".$diagnostico['cd_descripcion'], 'B', 'L', '0', 0, '', '', true);
        }
    }
    
    else{
        $pdf->MultiCell(175, 6, "1. ", 'B', 'L', '0', 0, '', '', true);
        $pdf->Ln(8);
        $pdf->MultiCell(175, 6, "2. ", 'B', 'L', '0', 0, '', '', true);
        $pdf->Ln(8);
        $pdf->MultiCell(175, 6, "3. ", 'B', 'L', '0', 0, '', '', true);
        $pdf->Ln(8);
        $pdf->MultiCell(175, 6, "4. ", 'B', 'L', '0', 0, '', '', true);
    }
    
    //echo "Diagnostico $i: ".count($diagnosticos[$i]);
    
    $pdf->SetFont('helvetica', 'B', 11);
    $pdf->Ln(15);
    $pdf->SetFillColor(216, 216, 216);
    $pdf->Cell(120, 6, '9. TRATAMIENTO', 1, 1, '', 1);
    $pdf->Ln(4);
    $pdf->SetFont('helvetica', '', 10);
    
    $pdf->MultiCell(175, 6, $row['tratamiento'], 'B', '', '0', 0, '', '', true);
    
    
    
    $pdf->SetFont('helvetica', 'B', 11);
    $pdf->Ln(15);
    $pdf->SetFillColor(216, 216, 216);
    $pdf->Cell(120, 6, '10. RECOMENDACIONES', 1, 1, '', 1);
    $pdf->Ln(4);
    $pdf->SetFont('helvetica', '', 10);
    
    $pdf->MultiCell(175, 6, $row['recomendaciones'], 'B', '', '0', 0, '', '', true);
    
    
    $pdf->Ln(40);
    $pdf->SetFont('helvetica', '', 10);
    
    $pdf->MultiCell(100, 6, $especialista[$i]['nombres']." ".$especialista[$i]['apellidos'], 'T', '', '0', 0, '', '', true);
    $pdf->Ln(8);
    $pdf->MultiCell(100, 6, "RM: ".$especialista[$i]['tarjeta_profesional'], '', '', '0', 0, '', '', true);
   
    $i++;
}

$pdf->Output($titulo, 'I');