<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/
/*
$route['default_controller'] = "welcome";
$route['404_override'] = '';
*/

$route['administracion/perfil'] = 'administracion/perfil';
$route['administracion/contrasena'] = 'administracion/contrasena';
$route['agenda/agenda/(:any)'] = 'agenda/agendaEspecialista/$1';    //Agenda del especialista en una fecha
$route['agenda/agendar/(:any)'] = 'agenda/agendarCita/$1';
$route['agenda/cancelar/(:any)'] = 'agenda/agendarCita/$1';
$route['agenda/citas'] = 'agenda/citas';
$route['agenda/consultarPaciente/(:any)'] = 'agenda/consultarPaciente/$1';
$route['agenda/horario'] = 'agenda/horario';
$route['agenda/horarioEspecialista/(:any)'] = 'agenda/horarioEspecialista/$1';
$route['agenda/facturar/(:any)'] = 'agenda/facturar/$1';
$route['agenda/setFacturacion'] = 'agenda/setFacturacion';
$route['agenda/setEstadoCita'] = 'agenda/setEstadoCita';

// CIRUGÍA
$route['agenda/cirugia'] = 'agendamiento/cirugia/citas';
$route['agenda/agendaCirugia/(:any)'] = 'agendamiento/cirugia/agendaEspecialista/$1';    //Agenda del especialista en una fecha
$route['agenda/programarCirugia/(:any)'] = 'agendamiento/cirugia/programarCirugia/$1';
$route['agenda/apoyoCirugia/(:any)'] = 'agendamiento/cirugia/getApoyoCirugia/$1';
$route['agenda/setApoyoCirugia'] = 'agendamiento/cirugia/setApoyoCirugia';
$route['agenda/delApoyoCirugia'] = 'agendamiento/cirugia/delApoyoCirugia';

/* ** ROL ESPECIALISTA ** */
$route['especialista/index'] = 'especialista/agenda/index';
$route['especialista/agendaDia'] = 'especialista/agenda/agendaDia';
//$route['especialista/cie10/(:any)'] = 'especialista/consulta/getCie10/$1';
$route['especialista/paciente/(:any)'] = 'especialista/agenda/paciente/$1';
$route['especialista/consulta'] = 'especialista/consulta/index';
$route['especialista/cirugia'] = 'especialista/cirugia/index';
$route['especialista/setConsulta'] = 'especialista/consulta/setConsulta';
$route['especialista/setConsultaExamen'] = 'especialista/consulta/setConsultaExamen';
$route['especialista/setAFamiliares'] = 'especialista/consulta/setAFamiliares';
$route['especialista/setAGinecologicos'] = 'especialista/consulta/setAGinecologicos';
$route['especialista/setAObstetricos'] = 'especialista/consulta/setAObstetricos';
$route['especialista/setAPareja'] = 'especialista/consulta/setAPareja';
$route['especialista/setAPersonales'] = 'especialista/consulta/setAPersonales';
$route['especialista/setRevisionSistema'] = 'especialista/consulta/setRevisionSistema';
$route['especialista/setRevisionFisica'] = 'especialista/consulta/setRevisionFisica';
$route['especialista/setInterconsulta'] = 'especialista/consulta/setInterconsulta';
$route['especialista/delInterconsulta'] = 'especialista/consulta/delInterconsulta';
$route['especialista/getDiagnostico'] = 'especialista/consulta/getDiagnostico';
$route['especialista/setDiagnostico'] = 'especialista/consulta/setDiagnostico';
$route['especialista/delDiagnostico'] = 'especialista/consulta/delDiagnostico';
$route['especialista/getProcedimiento'] = 'especialista/consulta/getProcedimiento';
$route['especialista/setProcedimiento'] = 'especialista/consulta/setProcedimiento';
$route['especialista/delProcedimiento'] = 'especialista/consulta/delProcedimiento';
$route['especialista/cerrarConsulta'] = 'especialista/consulta/cerrarConsulta';
$route['especialista/pacientes'] = 'especialista/agenda/pacientes';
$route['especialista/pacienteConsultas'] = 'especialista/agenda/pacienteConsultas';
$route['especialista/consulta/(:any)'] = 'especialista/consulta/getConsulta/$1';
$route['especialista/cirugia/(:any)'] = 'especialista/cirugia/getCirugia/$1';
$route['especialista/setMedicacion'] = 'especialista/consulta/setMedicacion';
$route['especialista/delMedicacion'] = 'especialista/consulta/delMedicacion';
$route['especialista/setConsultaAnestesiaExamen'] = 'especialista/consulta/setConsultaAnestesiaExamen';
$route['especialista/setConsultaLaboratorios'] = 'especialista/consulta/setConsultaLaboratorios';
$route['especialista/setAnestesiaPlan'] = 'especialista/consulta/setAnestesiaPlan';
$route['especialista/getAnestesiaExamen'] = 'especialista/consulta/getAnestesiaExamen';
$route['especialista/getAnestesiaLaboratorios'] = 'especialista/consulta/getAnestesiaLaboratorios';
$route['especialista/getAnestesiaPlan'] = 'especialista/consulta/getAnestesiaPlan';
$route['especialista/getAnestesiaAntecedentes'] = 'especialista/consulta/getAnestesiaAntecedentes';

$route['especialista/setCirugia'] = 'especialista/cirugia/setCirugia';
$route['especialista/cirugia/setProcedimiento'] = 'especialista/cirugia/setProcedimiento';
$route['especialista/cirugia/delProcedimiento'] = 'especialista/cirugia/delProcedimiento';
$route['especialista/setCirugiaTime'] = 'especialista/cirugia/setCirugiaTime';
$route['especialista/setDiagnosticoPre'] = 'especialista/cirugia/setDiagnosticoPre';
$route['especialista/delDiagnosticoPre'] = 'especialista/cirugia/delDiagnosticoPre';
$route['especialista/setDiagnosticoPos'] = 'especialista/cirugia/setDiagnosticoPos';
$route['especialista/delDiagnosticoPos'] = 'especialista/cirugia/delDiagnosticoPos';
$route['especialista/setEvolucion'] = 'especialista/cirugia/setEvolucion';
$route['especialista/setNotasEnfermeria'] = 'especialista/cirugia/setEnfermeria';
$route['especialista/setDocumentacion/(:any)'] = 'especialista/cirugia/setDocumentacion/$1';

$route['pacientes'] = 'pacientes/index';
$route['pacientes/index'] = 'pacientes/index';
$route['pacientes/lista'] = 'pacientes/lista';
$route['pacientes/lista/(:any)'] = 'pacientes/lista/$1';
$route['pacientes/nuevo'] = 'pacientes/nuevo';
$route['pacientes/nuevoModal/(:any)'] = 'pacientes/nuevoModal/$1';
$route['pacientes/do_upload'] = 'pacientes/do_upload';
$route['pacientes/familiar/(:any)'] = 'pacientes/familiar/$1';
//$route['pacientes/familiarGuardar'] = 'pacientes/familiar/$1';
$route['pacientes/hcdigital/(:any)'] = 'pacientes/hcdigital/$1';
$route['pacientes/hcdigitalEliminar/(:any)'] = 'pacientes/hcdigitalEliminar/$1';
$route['pacientes/nuevo/(:any)'] = 'pacientes/nuevo/$1';
$route['pacientes/crear'] = 'pacientes/crear';
$route['pages/login'] = 'pages/login';
$route['pages/logout'] = 'pages/logout';
$route['administrador/index'] = 'administrador/index';
$route['administrador/nuevo'] = 'administrador/nuevo';
$route['administrador/nuevo/(:any)'] = 'administrador/nuevo/$1';
$route['administrador/perfilUsuario'] = 'administrador/perfilUsuario';
$route['administrador/perfiles'] = 'administrador/perfiles';


$route['configuracion/getMunicipio/(:any)'] = 'configuracion/getMunicipio/$1';
$route['configuracion/getServicios/(:any)'] = 'configuracion/getServicios/$1';

/* REPORTES */
$route['reportes/historia'] = 'reportes/historia/paciente';
$route['reportes/interconsulta'] = 'reportes/historia/interconsulta';
$route['reportes/tratamiento'] = 'reportes/historia/tratamiento';
$route['reportes/formula'] = 'reportes/historia/formula';
$route['reportes/procedimientos'] = 'reportes/historia/procedimiento';
$route['reportes/hc'] = 'reportes/pdfs/index';
$route['pdfs/generar'] = 'reportes/pdfs/generar';


$route['(:any)'] = 'pages/index/$1';
$route['default_controller'] = 'pages/index';


/* End of file routes.php */
/* Location: ./application/config/routes.php */