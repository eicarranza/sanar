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
   <link href="{$url}assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
   <link href="{$url}assets/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css"/>
   <link href="{$url}assets/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>
   <!-- END MODAL -->
   <!-- END PAGE LEVEL STYLES -->
{/block}
{block name="body"}{/block}
{block name="page-content"}
     <!-- BEGIN PAGE HEADER-->
     <div class="row">
        <div class="col-md-12">
           <!-- BEGIN PAGE TITLE & BREADCRUMB-->
           <h3 class="page-title">
              Libreta citas
           </h3>
           <ul class="page-breadcrumb breadcrumb">
             <li>
                 <i class="icon-home"></i>
                 <a href="{$url}">Inicio</a> 
                 <i class="icon-angle-right"></i>
              </li>
              <li>
                 <a href="{$url}agenda/citas">Agenda</a>
                 <i class="icon-angle-right"></i>
              </li>
              <li><a href="#">Citas</a></li>
           </ul>
           <!-- END PAGE TITLE & BREADCRUMB-->
        </div>
     </div>
     <!-- END PAGE HEADER-->
     <!-- BEGIN PAGE CONTENT-->
     <div class="row profile">
        <div class="col-md-12">
           <div class="portlet box blue calendar">
              <div class="portlet-title">
                 <div class="caption"><i class="icon-reorder"></i>Libreta de citas</div>
                 <div class="actions">
                     <a id="btn-nueva-cita" href="#cita" class="btn green">
                         <i class="icon-pencil"></i> Cita fuera de horario
                     </a>
                 </div>
              </div>
              <div class="portlet-body">
                 <div class="row">
                    <div class="col-md-3 col-sm-12">
                       <!-- BEGIN DRAGGABLE EVENTS PORTLET-->    
                       <h3 class="event-form-title">Especialista: </h3>
                       <div id="external-events">
                          <form class="inline-form">
                             <select  class="form-control" id='especialista' name="especialista" >
                                <option value="0">- SELECCIONE -</option>
                                {foreach $_doctores as $gs}
                                     <option value="{$gs.id}">{$gs.nombres} {$gs.apellidos}</option>
                                {/foreach}
                            </select>
                          </form>
                          <hr />
                          <div class="inline-form">
                                <div id="dp-fecha">
                                </div>
                           </div>
                          <hr/>
                       </div>
                       <!-- END DRAGGABLE EVENTS PORTLET-->            
                    </div>
                    <div id="dv_agenda" class="col-md-9 col-sm-9">
                        <table class="table table-striped table-bordered table-hover" id="sample_2">
                            <thead>
                               <tr>
                                  <th>HORA</th>
                                  <th >IDENTIFICACIÓN</th>
                                  <th >NOMBRE</th>
                                  <th >ACCIONES</th>
                               </tr>
                            </thead>
                        </table>
                    </div>
                 </div>
                 <!-- END CALENDAR PORTLET-->
              </div>
           </div>
        </div>
     </div>
     <!-- END PAGE CONTENT-->
    
     <!-- MODAL PARA NUEVO PACIENTE -->
    <div id="responsive" class="modal fade" tabindex="-1" data-width="760">
        <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
               <h4 class="modal-title">Información basica de paciente</h4>
            </div>
            <div id="dv_paciente" class="modal-body">

            </div>
            <div class="modal-footer">
               <button type="button" data-dismiss="modal" class="btn btn-default">Cerrar</button>
               <button type="button" id="btn-paciente-guardar" data-dismiss="modal" class="btn blue">Guardar cambios</button>
            </div>
        </div>        
    </div>
     <!-- FIN MODAL NUEVO PACIENTE -->
     
     <!-- MODAL PARA FACTURACIÓN -->
     <div id="facturacion" class="modal fade" tabindex="-1" data-width="600">
        <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
               <h4 class="modal-title">Facturación de Consulta</h4>
            </div>
            <div id="dv_facturacion" class="modal-body">

            </div>
            <div class="modal-footer">
               <button type="button" data-dismiss="modal" class="btn btn-default">Cerrar</button>
               <button type="button" id="btn-facturacion-guardar" data-dismiss="modal" class="btn blue">Guardar cambios</button>
            </div>
        </div>
        
    </div>
    <!-- FIN MODAL FACTURACIÓN -->
    
    
     <!-- MODAL PARA CITA FUERA DE HORARIO -->
     <div id="cita" class="modal fade" tabindex="-1">
        <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
           <h4 class="modal-title">Cita fuera de horario</h4>
        </div>
        <div id="dv_citaNueva" class="modal-body">
           <div class="row">
                <form id="form-nuevaCita" class="form-horizontal" action="{$url}agenda/nuevaCita" method="post" accept-charset="utf-8">
                <div class="form-body">
                   <div class="form-group">
                        <label class="col-md-4 control-label">Fecha (*)</label>
                        <div class="col-md-8">
                            <div class="input-group input-medium date date-picker" data-date-format="yyyy-mm-dd"  data-date-viewmode="years">
                                <input id="dp-fecha-cita" type="text" class="form-control" name="fecha_cita" value="{$hoy}">
                                <span class="input-group-btn">
                                    <button class="btn default" type="button"><i class="icon-calendar"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Hora (*)</label>
                        <div class="col-md-8">
                            <div class="input-group input-medium">
                                <input type="text" name="dp-hora-cita" id="clockface_2" value="14:30" class="form-control" readonly=""/>
                                <span class="input-group-btn">
                                    <button class="btn default" type="button" id="clockface_2_toggle"><i class="icon-time"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                   <div class="form-group">
                      <label  class="col-md-4 control-label">Identificación (*)</label>
                      <div class="col-md-6">
                         <input type="text" class="form-control input-medium" id="mdl_citaIdentificacion" name="mdl_citaIdentificacion" maxlength="45" required>
                      </div>
                        <div class="col-md-2">
                            <a id="btn-buscar-id" href="javascript:void(0);" class="btn blue">
                               <i class="icon-search"></i>
                           </a>
                        </div>
                   </div>
                   <div class="form-group">
                      <label  class="col-md-4 control-label">Paciente</label>
                      <div class="col-md-8">
                         <input type="text" class="form-control input-medium" id="mdl_citaPaciente" name="mdl_citaPaciente" maxlength="45">
                         <input type="hidden" id="mdl_citaPacienteHidden" name="mdl_citaPacienteHidden" value="">
                      </div>
                   </div>
                </div>
             </form>
            </div>
        </div>
       <div class="modal-footer">
           <button type="button" data-dismiss="modal" class="btn btn-default">Cerrar</button>
           <button type="button" id="btn-fuera-horario-guardar" data-dismiss="modal" class="btn blue">Guardar cambios</button>
       </div>
    </div>
    <!-- FIN MODAL CITA FUERA HORARIO -->
{/block}


{block name="scripts" append}
    <!-- CALENDAR -->
    <script src="{$url}assets/scripts/calendar.js"></script>
    <script src="{$url}assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
    <script src="{$url}assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>      
   <script src="{$url}assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- END CALENDAR -->
    <!-- MODAL -->
    <script src="{$url}assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript" ></script>
    <script src="{$url}assets/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript" ></script>
    <script src="{$url}assets/scripts/ui-extended-modals.js"></script> 
    <!-- END MODAL -->
    <!-- TIME PICKER -->
    <script type="text/javascript" src="{$url}assets/plugins/clockface/js/clockface.js"></script>
    <script type="text/javascript" src="{$url}assets/plugins/bootstrap-daterangepicker/moment.min.js"></script>
    <!-- PAGE LEVEL PLUGINS -->
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
    <!-- END PAGE LEVEL SCRIPTS -->
    <script>
    jQuery(document).ready(function() {
        App.init();
        FormComponents.init();
        UIExtendedModals.init();

        /*
        $( "#mdl_citaIdentificacion" ).keypress(function( event ) {
          if ( event.which == 13 ) {
            event.preventDefault();
            var paciente = $( '#mdl_citaIdentificacion' ).val();
            //alert("Enter");
            pacienteFueraHorario(paciente);
          }
        });
        */
       
        $('#btn-buscar-id').click(function () {
            var paciente = $( '#mdl_citaIdentificacion' ).val();
            pacienteFueraHorario(paciente);
        });
        
        $('#dp-fecha').datepicker({
            language: "es",
        });
        
        $('#btn-nueva-cita').click(function () {
            var especialista = $('#especialista').attr('value');
            if(especialista>0){
                $("#cita").modal('show');
            }
            else{
                alert("Debe seleccionar un especialista.");
            }
        });
        
        $('#dp-fecha').click(function () {
            consultar();
        });
        
        $("#especialista").change(function () {
            consultar();
        });
        
        $("#btn-fuera-horario-guardar").click(function () {
            var especialista = $('#especialista').attr('value');
            var paciente = $('#mdl_citaPacienteHidden').attr('value');
            var fecha = $('#dp-fecha-cita').attr('value') + " " + $('#clockface_2').attr('value') + ":00";
            
        if(paciente != ""){
                agendarPaciente(especialista, paciente, fecha, function(url){
                    //alert("La cita ha sido agendada.");
                    consultar();
                });
            }
        });
        
        $("#btn-paciente-guardar").click(function () {
            var fecha = $('#dp-fecha-cita').val();
            var horaini = $('#mdl_horaini').val();
            var paciente = $('#mdl_identificacion').val();
            var fecha = $('#identificacion_'+horaini).attr('fechahora');
            
            $.post($('#form-nvoPaciente').attr('action'), $('#form-nvoPaciente').serialize(), function(json){
                alert("El registro ha sido guardado.");
            }, 'json');
            
            //alert(horaini);
            if(horaini != "0"){
                alert("El registro ha sido guardado.");
                mostrarPaciente(paciente, fecha, horaini);
            }
            else{
                //alert("En btn-paciente-guardar");
                pacienteFueraHorario(paciente);
            }
            
            $("#responsive").modal('hide');

             return false;
        });
        
        $("#btn-facturacion-guardar").click(function () {
            set_facturacion();
           return false;
        });

    });
    
    function consultar(){
        abc = $('#dp-fecha').data('datepicker').getDate();
        var day = abc.getDate();
        var month = abc.getMonth() + 1;
        var year = abc.getFullYear();
        var especialista =$('#especialista').attr('value');

        consultarAgenda(year, month, day, especialista);
    }
    
    function consultarAgenda(year, month, day, especialista_id){
        //alert(especialista_id);
        $.ajax({
                type: "POST",
                url: "{$url}agenda/agenda/"+year+"/"+month+"/"+day+"/"+especialista_id,
                data: especialista_id,
                dataType: "text",  
                cache:false,
                success: 
                     function(data){
                        $('#dv_agenda').empty();
                        $('#dv_agenda').html(data);
                     }
        });
       return false;
    }
    
    function consultarPaciente(paciente, horaini, callback){ 
        $.ajax({
            type: "POST",
            url: "{$url}agenda/consultarPaciente/"+paciente,
            data: paciente,
            dataType: "json",  
            cache:false,
            success: 
                 function(data){
                    if(data!=0){
                        callback(data);
                    }
                    else{
                        if(confirm('El paciente no existe. ¿Desea realizar el pre-registro?')){
                            crearPaciente(paciente, horaini);
                        }
                    }
                 }
        });
    }
  
    function crearPaciente(paciente, horaini){
        $.ajax({
                type: "POST",
                url: "{$url}pacientes/nuevoModal/"+paciente+"/"+horaini,
                data : {
                        paciente : paciente, 
                        horaini : horaini,
                       },
                dataType: "text",  
                cache:false,
                success: 
                     function(data){
                        $('#dv_paciente').empty();
                        $('#dv_paciente').html(data);
                     }
        });

        $("#responsive").modal('show');

        return false;
    }
    
    function pacienteFueraHorario(paciente){
        consultarPaciente(paciente, "0", function(url){
            $('#mdl_citaPaciente').attr('value', url[0]);
            $('#mdl_citaPacienteHidden').attr('value', url[1]);
        });
    }
    
    function agendarPaciente(especialista, paciente, fechahora, callback){
        
        $.ajax({
            type: "POST",
            url: "{$url}agenda/agendar/"+especialista+"/"+paciente+"/"+fechahora,
            data: especialista,
            dataType: "text",  
            cache:false,
            success: 
                 function(data){
                    callback(data);
                 }
        });
    }
    
    function facturar(cita_id){
        $.ajax({
                type: "POST",
                url: "{$url}agenda/facturar/"+cita_id,
                data: cita_id,
                dataType: "text",  
                cache:false,
                success: 
                     function(data){
                        $('#dv_facturacion').empty();
                        $('#dv_facturacion').html(data);
                     }
        });
        
        $("#facturacion").modal('show');
        
       return false;
    }
    
    function set_facturacion(){
        var cita_id = $('#cita_id').attr('value');
        var servicio_id = $('#servicio_id').attr('value');
        var valor = $('#valor').attr('value');
        var administradora_id = $('#administradora_id').attr('value');
        var postData = {
                            'cita_id': cita_id, 
                            'servicio_id' : servicio_id,
                            'valor' : valor,
                            'administradora_id' : administradora_id
                         };
                         
        $.post('{$url}agenda/setFacturacion', postData, function(data){
            //alert(data);
            alert("La facturación se ha procesado correctamente.");
        });
        $("#facturacion").modal('hide');
        
       return false;
    }
    </script>
{/block}
