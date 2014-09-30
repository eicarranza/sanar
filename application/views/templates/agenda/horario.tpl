{extends file='layout.tpl'}
{block name="title"}My Page Title{/block}
{block name="styles" append}
   <!-- BEGIN PAGE LEVEL STYLES -->
  
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
   <!-- END PAGE LEVEL STYLES -->
{/block}
{block name="body"}{/block}
{block name="page-content"}
     <!-- BEGIN PAGE HEADER-->
     <div class="row">
        <div class="col-md-12">
           <!-- BEGIN PAGE TITLE & BREADCRUMB-->
           <h3 class="page-title">
              Crear horario
           </h3>
           <ul class="page-breadcrumb breadcrumb">
             <li>
                 <i class="icon-home"></i>
                 <a href="{$url}">Inicio</a> 
                 <i class="icon-angle-right"></i>
              </li>
              <li>
                 <a href="{$url}agenda/horario">Agenda</a>
                 <i class="icon-angle-right"></i>
              </li>
              <li><a href="#">Horario</a></li>
           </ul>
           <!-- END PAGE TITLE & BREADCRUMB-->
        </div>
     </div>
     <!-- END PAGE HEADER-->
     <!-- BEGIN PAGE CONTENT-->
     <div class="row">
        <div class="col-md-12">
            <!-- BEGIN PORTLET-->   
            <div class="portlet box blue">
               <div class="portlet-title">
                  <div class="caption"><i class="icon-reorder"></i>Crear Horario</div>
               </div>
               <div class="portlet-body form">
                  <!-- BEGIN FORM-->
                  <form action="{$url}agenda/horario" class="form-horizontal form-bordered" method="post" accept-charset="utf-8">
                     <div class="form-body">
                         {$errors}
                        <div class="form-group">
                           <label class="control-label col-md-3">Especialista: </label>
                           <div class="col-md-4">
                                <select  class="form-control" id='especialista' name="especialista" >
                                    <option value="0">- SELECCIONE -</option>
                                    {foreach $_doctores as $gs}
                                         <option value="{$gs.id}">{$gs.nombres} {$gs.apellidos}</option>
                                    {/foreach}
                                </select>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="control-label col-md-3">Desde: </label>
                           <div class="col-md-4">
                              <div class="input-group input-large date-picker input-daterange" data-date-format="yyyy-mm-dd">
                                 <input id="agenda_desde" type="text" class="form-control" readonly name="agenda_desde">
                                 <span class="input-group-addon">Hasta: </span>
                                 <input id="agenda_hasta" type="text" class="form-control" readonly name="agenda_hasta">
                              </div>
                              <!-- /input-group -->
                              <span class="help-block">Seleccione el rango de fecha.</span>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="control-label col-md-3">Hora inicial: </label>
                           <div class="col-md-4">
                                <div class="input-group input-large input-daterange">
                                    <input type="text" name="hora_inicio" value="08:00 AM" readonly data-format="hh:mm A" class="form-control clockface_1" />
                                    <span class="input-group-addon">Hora final: </span>
                                    <input type="text" name="hora_fin" value="06:00 PM" readonly data-format="hh:mm A" class="form-control clockface_1" />
                                </div>
                              <!-- /input-group -->
                              <span class="help-block">Seleccione el horario de disponibilidad.</span>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="control-label col-md-3">Inicio descanso: </label>
                           <div class="col-md-4">
                              <div class="input-group input-large input-daterange">
                                 <input type="text" name="descanso_ini" value="12:30 PM" readonly data-format="hh:mm A" class="form-control clockface_1" />
                                 <span class="input-group-addon">Hora final: </span>
                                 <input type="text" name="descanso_fin" value="02:30 PM" readonly data-format="hh:mm A" class="form-control clockface_1" />
                               </div>
                              <!-- /input-group -->
                              <span class="help-block">Seleccione el horario de descanso.</span>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="control-label col-md-3">Duración de cita: </label>
                           <div class="col-md-4">
                              <input type="number" id="duracion" class="form-control input-xsmall" name="duracion" maxlength="2" min="0" max="60" value='20' required>
                           </div>
                        </div>
                     </div>
                        <div class="form-actions fluid">
                          <div class="col-md-offset-3 col-md-9">
                             <button type="submit" class="btn green">Guardar</button>
                             <button type="button" class="btn default">Cancelar</button>                              
                          </div>
                       </div>
                  </form>
                  <!-- END FORM-->  
               </div>
            </div>
            <!-- END PORTLET FORMULARIO-->
            <!-- BEGIN HORARIOS -->   
            <div class="portlet box blue ">
                 <div class="portlet-title">
                    <div class="caption"><i class="icon-comments"></i>Horarios</div>
                 </div>
                <div id="dv-horario" class="portlet-body">
                    
                 </div>
            </div>
            <!-- END TABLE HORARIOS -->
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
    <!-- END PAGE LEVEL SCRIPTS -->
    <script>
        jQuery(document).ready(function() {       
            // initiate layout and plugins
            App.init();
            FormComponents.init();

           $('#agenda_desde').datepicker({
               language: "es",
           });

           $('#agenda_hasta').datepicker({
               language: "es",
           });

           $("#especialista").change(function () {
               consultar();
           });

        });
    
        function consultar(){
            var especialista_id = $('#especialista').attr('value');
            
            $.ajax({
                    type: "POST",
                    url: "{$url}agenda/horarioEspecialista/"+especialista_id,
                    data: especialista_id,
                    dataType: "text",  
                    cache:false,
                    success: 
                         function(data){
                            $('#dv-horario').empty();
                            $('#dv-horario').html(data);
                         }
            });
           return false;
           
        }
    </script>
{/block}
