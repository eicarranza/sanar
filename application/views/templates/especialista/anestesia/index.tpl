{extends file='layout.tpl'}
{block name="title"}My Page Title{/block}
{block name="styles" append}
   <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="{$url}assets/css/pages/profile.css" rel="stylesheet" type="text/css" />
    <link href="{$url}assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
    <link rel="stylesheet" type="text/css" href="{$url}assets/plugins/bootstrap-fileupload/bootstrap-fileupload.css" />
    <link rel="stylesheet" type="text/css" href="{$url}assets/plugins/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="{$url}assets/plugins/select2/select2_metro.css" />
    <link rel="stylesheet" type="text/css" href="{$url}assets/plugins/clockface/css/clockface.css" />
    <link rel="stylesheet" type="text/css" href="{$url}assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
    <link rel="stylesheet" type="text/css" href="{$url}assets/plugins/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="{$url}assets/plugins/bootstrap-timepicker/compiled/timepicker.css" />
    <link rel="stylesheet" type="text/css" href="{$url}assets/plugins/bootstrap-colorpicker/css/colorpicker.css" />
    <link rel="stylesheet" type="text/css" href="{$url}assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" />
    <link rel="stylesheet" type="text/css" href="{$url}assets/plugins/bootstrap-datetimepicker/css/datetimepicker.css" />
    <link rel="stylesheet" type="text/css" href="{$url}assets/plugins/jquery-multi-select/css/multi-select.css" />
    <link rel="stylesheet" type="text/css" href="{$url}assets/plugins/bootstrap-switch/static/stylesheets/bootstrap-switch-metro.css"/>
    <link rel="stylesheet" type="text/css" href="{$url}assets/plugins/jquery-tags-input/jquery.tagsinput.css" />
    <link rel="stylesheet" type="text/css" href="{$url}assets/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css">
    
   <!-- MODAL -->
     <link rel="stylesheet" type="text/css" href="{$url}assets/plugins/clockface/css/clockface.css" />
   <!-- END MODAL -->
   <!-- AUTOCOMPLETE -->
    <script language="JavaScript" src="{$url}assets/plugins/autocomplete/js/jquery-1.5.1.min.js"></script>
    <script language="JavaScript" src="{$url}assets/plugins/autocomplete/js/jquery-ui-1.8.13.custom.min.js"></script>
    <link type="text/css" href="{$url}assets/plugins/autocomplete/css/ui-lightness/jquery-ui-1.8.13.custom.css" rel="stylesheet" />
   <!-- END AUTOCOMPLETE -->
   <!-- END PAGE LEVEL STYLES -->
{/block}
{block name="body"}{/block}
{block name="page-content"}
     <!-- BEGIN PAGE HEADER-->
     <div class="row">
        <div class="col-md-12">
           <!-- BEGIN PAGE TITLE & BREADCRUMB-->
           <h3 class="page-title">
                Consulta médica: {$consulta.nombre1} {$consulta.apellido1}
                <input type="hidden" id="consulta_id" name="consulta_id" value="{$consulta.id}">
                <input type="hidden" id="paciente_id" name="paciente_id" value="{$paciente.paciente_id}">
                <input type="hidden" id="especialista_id" name="especialista_id" value="{$especialista}">
                <input type="hidden" id="fecha" name="fecha" value="{$fecha}">
           </h3>
           
           <ul class="page-breadcrumb breadcrumb">
                <li class="btn-group">
                    <button type="button" class="btn blue dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
                    <span>Acciones</span> <i class="icon-angle-down"></i>
                    </button>
                    <ul class="dropdown-menu pull-right" role="menu">
                        <li><a href="#" id="btn-imprimir-historia" name="consulta_activa">Imprimir valoración</a></li>
                        <li><a href="#" id="btn-cerrar-consulta" name="consulta_activa">Cerrar consulta</a></li>
                        <li class="divider"></li>
                        <li><a href="{$url}especialista/index">Salir</a></li>
                    </ul>
                </li> 
                <li>
                    <i class="icon-home"></i>
                    <a href="{$url}">Inicio</a> 
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="{$url}especialista/index">Agenda Médica</a>
                    <i class="icon-angle-right"></i>
                </li>
              <li>
                 <a href="#">Consulta</a>
              </li>
           </ul>
           <!-- END PAGE TITLE & BREADCRUMB-->
        </div>
     </div>
     <!-- END PAGE HEADER-->
     
     <!-- BEGIN PAGE CONTENT-->
         <div class="row profile">
            <div class="col-md-12">
               <!--BEGIN TABS-->
               <div class="tabbable tabbable-custom tabbable-full-width">
                  <ul class="nav nav-tabs">
                     <li class="active"><a href="#tab_1_1" data-toggle="tab">Antecedentes</a></li>
                     <li><a href="#tab_1_2" data-toggle="tab">Exámenes</a></li>
                     <li><a href="#tab_1_3" data-toggle="tab">Laboratorios</a></li>
                     <li><a href="#tab_1_4" data-toggle="tab">Plan</a></li>
                  </ul>
                   <div class="tab-content" id="dv-tabConsulta">
                        <div class="tab-pane active" id="tab_1_1">
                        
                        </div>
                     <!--tab_1_2-->
                     <div class="tab-pane" id="tab_1_2">
                        
                     </div>
                     <!--end tab-pane-->
                     <div class="tab-pane" id="tab_1_3">
                        
                     </div>
                     <!--end tab-pane-->
                    <div class="tab-pane" id="tab_1_4">
                        
                     </div>
                     <!--end tab-pane-->
                  </div>
               </div>
               <!--END TABS-->
            </div>
         </div>
         <!-- END PAGE CONTENT-->
{/block}


{block name="scripts" append}
    <!-- MODAL -->
    <script type="text/javascript" src="{$url}assets/plugins/clockface/js/clockface.js"></script>
    <script type="text/javascript" src="{$url}assets/plugins/bootstrap-daterangepicker/moment.min.js"></script>
    <!-- END MODAL -->

    <script type="text/javascript" src="{$url}assets/plugins/bootstrap-fileupload/bootstrap-fileupload.js"></script>
    <script type="text/javascript" src="{$url}assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="{$url}assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.es.js"></script>
    <script type="text/javascript" src="{$url}assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>  
    <script type="text/javascript" src="{$url}assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
    <script type="text/javascript" src="{$url}assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript" src="{$url}assets/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js"></script>   
    <script type="text/javascript" src="{$url}assets/plugins/select2/select2.min.js"></script>
    <script type="text/javascript" src="{$url}assets/plugins/jquery.input-ip-address-control-1.0.min.js"></script>
    <script type="text/javascript" src="{$url}assets/plugins/jquery-multi-select/js/jquery.multi-select.js"></script>
    <script src="{$url}assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript" ></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{$url}assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
    <script src="{$url}assets/scripts/app.js"></script>
    <script src="{$url}assets/scripts/form-components.js"></script>     
    <script src="{$url}assets/scripts/new-window-post.js"></script>     
    <script type="text/javascript" src="{$url}assets/plugins/jquery.ui.autocomplete.html.js"></script>
    
    <!-- END PAGE LEVEL SCRIPTS -->
    <script>
        
        jQuery(document).ready(function() {
            App.init();
            FormComponents.init();
            verificarEdicion();
            calcularIMC();
            getAnestesia();
            
            $( "#peso" )
                .change(function() {
                    calcularIMC();
                })
            .keyup();
            
            $( "#talla" )
                .change(function() {
                    calcularIMC();
                })
            .keyup();
            
            $('#btn-cerrar-consulta').click(function () {
                setCerrarConsulta(this);
            });
            
            $('#btn-imprimir-historia').click(function () {
                imprimirHistoria(this);
            });
            
        });
        
         function getAnestesia(){
            var consulta_id = $('#consulta_id').attr('value');
            var especialista_id = $('#especialista_id').attr('value');
            var paciente_id = $('#paciente_id').attr('value');
            
            var postData = {
                            'cita_id': consulta_id, 
                            'especialista_id' : especialista_id,
                            'paciente_id' : paciente_id,
                         };
             
            $.post('{$url}especialista/getAnestesiaAntecedentes', postData, function(data){
                     $('#tab_1_1').empty();
                     $('#tab_1_1').html(data);
             });
             
             $.post('{$url}especialista/getAnestesiaExamen', postData, function(data){
                     $('#tab_1_2').empty();
                     $('#tab_1_2').html(data);
             });
             
             $.post('{$url}especialista/getAnestesiaLaboratorios', postData, function(data){
                     $('#tab_1_3').empty();
                     $('#tab_1_3').html(data);
             });
             
             $.post('{$url}especialista/getAnestesiaPlan', postData, function(data){
                     $('#tab_1_4').empty();
                     $('#tab_1_4').html(data);
             });
         }
         
        function verificarEdicion(){
            {if ($consulta_activa==0)}
                    $("#dv-tabConsulta *").attr("disabled", "disabled").off('click');
            {/if}
        }
        
        function calcularIMC(){
            
            var peso = $('#peso').attr('value');
            var talla = $('#talla').attr('value');
            var imc = 0;
            
            talla = talla / 100;
            if(talla>0){
                imc = peso / (talla * talla);
                imc = Math.round(imc * 100) / 100;
            }
            
            $('#imc').attr('value', imc);
            setIMC();
        }
        
        function getData(campo){
            var consulta_id = $('#consulta_id').attr('value');
            var especialista_id = $('#especialista_id').attr('value');
            var paciente_id = $('#paciente_id').attr('value');
            var fecha = $('#fecha').attr('value');
            var columna = campo.name;
            var valor = campo.value;
            
            var postData = {
                            'consulta_id': consulta_id, 
                            'especialista_id' : especialista_id,
                            'paciente_id' : paciente_id,
                            'fecha' : fecha,
                            'campo' : columna,
                            'valor' : valor
                         };
                         
            return postData;
        }
        
        function setConsulta(campo){
            postData = getData(campo);
            $.post('{$url}especialista/setConsulta', postData, function(data){
            });
        }
        
        function setCerrarConsulta(campo){
             postData = getData(campo);
            $.post('{$url}especialista/cerrarConsulta', postData, function(data){
                window.location.href = '{$url}especialista/index';
            });
        }
        
        function imprimirHistoria(campo){
            postData = getData(campo);
            open('POST', '{$url}reportes/historia', postData, '_blank');
        }
        
        function setAPersonales(campo){
            postData = getData(campo);
            $.post('{$url}especialista/setAPersonales', postData, function(data){});
        }
        
        function setConsultaExamen(campo){
            postData = getData(campo);
            $.post('{$url}especialista/setConsultaAnestesiaExamen', postData, function(data){});
        }
        
        function setConsultaLaboratorios(campo){
            postData = getData(campo);
            $.post('{$url}especialista/setConsultaLaboratorios', postData, function(data){});
        }
        
        function setAnestesiaPlan(campo){
            postData = getData(campo);
            $.post('{$url}especialista/setAnestesiaPlan', postData, function(data){});
        }
        
        function setIMC(){
            var consulta_id = $('#consulta_id').attr('value');
            
            var postData = {
                            'consulta_id': consulta_id, 
                            'campo' : 'imc',
                            'valor' : $('#imc').attr('value')
                         };
                         
            $.post('{$url}especialista/setConsulta', postData, function(data){ });
        }
        
    </script>

{/block}