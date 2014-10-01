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
              Administrar paciente
           </h3>
           <ul class="page-breadcrumb breadcrumb">
             <li>
                 <i class="icon-home"></i>
                 <a href="{$url}">Inicio</a> 
                 <i class="icon-angle-right"></i>
              </li>
              <li>
                 <a href="{$url}pacientes/index">Pacientes</a>
                 <i class="icon-angle-right"></i>
              </li>
              <li><a href="#">Nuevo</a></li>
           </ul>
           <!-- END PAGE TITLE & BREADCRUMB-->
        </div>
     </div>
     <!-- END PAGE HEADER-->
     <!-- BEGIN PAGE CONTENT-->
     <div class="row profile">
        <div class="col-md-12">
           <!--BEGIN TABS-->
            <!--tab_1_2-->
            <div class="tab-pane" id="tab_1_3">
               <div class="row profile-account">
                  <div class="col-md-3">
                     <ul class="ver-inline-menu tabbable margin-bottom-10">
                        <li class="active">
                           <a data-toggle="tab" href="#tab_1-1"><i class="icon-cog"></i> Información personal</a> 
                           <span class="after"></span>                                    
                        </li>
                        <li ><a data-toggle="tab" href="#tab_2-2"><i class="icon-picture"></i> Información familiar</a></li>
                        <li ><a data-toggle="tab" href="#tab_3-3"><i class="icon-lock"></i> Historia clínica digital</a></li>
                     </ul>
                  </div>
                   
                  <div class="col-md-9">
                     <div class="tab-content">
                        <div id="tab_1-1" class="tab-pane active">
                           <!-- BEGIN PERSONAL FORM -->   
                           <div class="portlet box blue ">
                             <div class="portlet-title">
                                <div class="caption">
                                   <i class="icon-reorder"></i> Información Personal
                                </div>
                                <div class="tools">
                                   <a href="" class="reload"></a>
                                </div>
                             </div>
                             <div class="portlet-body form">
                               {$errors}
                               <form class="form-horizontal" action="{$url}pacientes/nuevo" method="post" accept-charset="utf-8">

                               <div class="form-body">
                                   <div class="form-group">
                                       <label  class="col-md-3 control-label">Tipo identificación</label>
                                       <div class="col-md-9">
                                           <select  class="form-control" name="tipo_documento" >
                                               <option value="00">- SELECCIONE -</option>
                                               {foreach $tipo_documento as $gs}
                                                       <option value="{$gs.id}" {if ($id>0)}{if ($paciente.tipo_documento==$gs.id)}selected{/if}{/if}>{$gs.descripcion}</option>
                                               {/foreach}
                                           </select>
                                     </div>
                                   </div>
                                  <div class="form-group">
                                     <label class="col-md-3 control-label">Identificación (*)</label>
                                     <div class="col-md-9">
                                        <input type="text" class="form-control" name="identificacion" placeholder="" maxlength="20" value="{if ($id>0)}{$paciente.identificacion}{/if}" required>
                                        <input type="hidden" name="paciente_id" value="{$id}" required>
                                     </div>
                                  </div>
                                  <div class="form-group">
                                     <label  class="col-md-3 control-label">Primer nombre (*)</label>
                                     <div class="col-md-9">
                                        <input type="text" class="form-control" name="nombre1" placeholder="" maxlength="45" value="{if ($id>0)}{$paciente.nombre1}{/if}" required>
                                     </div>
                                  </div>
                                  <div class="form-group">
                                     <label  class="col-md-3 control-label">Segundo nombre</label>
                                     <div class="col-md-9">
                                        <input type="text" class="form-control" name="nombre2" placeholder="" maxlength="45" value="{if ($id>0)}{$paciente.nombre2}{/if}" >
                                     </div>
                                  </div>
                                  <div class="form-group">
                                     <label  class="col-md-3 control-label">Primer apellido (*)</label>
                                     <div class="col-md-9">
                                        <input type="text" class="form-control" name="apellido1" placeholder="" maxlength="45" value="{if ($id>0)}{$paciente.apellido1}{/if}" required>
                                     </div>
                                  </div>
                                  <div class="form-group">
                                     <label  class="col-md-3 control-label">Segundo apellido</label>
                                     <div class="col-md-9">
                                        <input type="text" class="form-control" name="apellido2" placeholder="" maxlength="45" value="{if ($id>0)}{$paciente.apellido2}{/if}" >
                                     </div>
                                  </div>

                                  <div class="form-group">
                                     <label  class="col-md-3 control-label">Sexo</label>
                                     <div class="col-md-9">
                                        <select  class="form-control"  name="sexo" >
                                           <option value="F" {if ($id>0)}{if ($paciente.sexo=="F")}selected{/if}{/if}>Femenino</option>
                                           <option value="M" {if ($id>0)}{if ($paciente.sexo=="M")}selected{/if}{/if}>Masculino</option>
                                        </select>
                                     </div>
                                  </div>
                                  <div class="form-group">
                                     <label  class="col-md-3 control-label">Grupo Sanguíneo</label>
                                     <div class="col-md-9">
                                       <select  class="form-control"  name="grupo_sanguineo" >
                                           {foreach $grupo_sanguineo as $gs}
                                                <option value="{$gs.id}" {if ($id>0)}{if ($paciente.grupo_sanguineo==$gs.id)}selected{/if}{/if}>{$gs.descripcion}</option>
                                           {/foreach}
                                       </select>
                                     </div>
                                  </div>
                                  <div class="form-group">
                                     <label  class="col-md-3 control-label">Fecha nacimiento</label>
                                     <div class="col-md-9">
                                        <div class="input-group">
                                           <div class="input-group date date-picker" data-date-format="yyyy-mm-dd"  data-date-viewmode="years">
                                               <input id="dp-fecha" type="text" class="form-control" name="fecha_nacimiento" 
                                                      value="{if ($id>0)} {if ($paciente.fecha_nacimiento>0)}{$paciente.fecha_nacimiento}{/if}{/if}">
                                               <span class="input-group-btn">
                                                   <button class="btn default" type="button"><i class="icon-calendar"></i></button>
                                               </span>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="form-group">
                                     <label  class="col-md-3 control-label">Departamento</label>
                                     <div class="col-md-9">
                                        <select  class="form-control"  name="depto_id" id="depto_id">
                                           <option depto_id="$gs.dpto_id" value="00">- SELECCIONE -</option>
                                            {foreach $departamento as $gs}
                                                <option depto_id="{$gs.dpto_id}" value="{$gs.dpto_id}" {if ($id>0)}{if ($paciente.depto_id==$gs.dpto_id)}selected{/if}{/if}>{$gs.descripcion}</option>
                                            {/foreach}
                                        </select>
                                     </div>
                                  </div>
                                  <div class="form-group">
                                     <label  class="col-md-3 control-label" >Municipio</label>
                                     <div class="col-md-9">
                                         <div id="dv_mun_id">
                                            <select  class="form-control" name="mun_id" id="mun_id">
                                                <option value="000">- SELECCIONE -</option>
                                                 {foreach $municipio as $gs}
                                                     <option value="{$gs.mun_id}" {if ($id>0)}{if ($paciente.mun_id==$gs.mun_id && $paciente.depto_id == $gs.dpto_id)}selected{/if}{/if}>{$gs.descripcion}</option>
                                                 {/foreach}

                                           </select>
                                        </div>
                                     </div>
                                  </div>
                                    <div class="form-group">
                                        <label  class="col-md-3 control-label">Zona</label>
                                        <div class="col-md-9">
                                           <select  class="form-control"  name="zona" >
                                              <option value="1" {if ($id>0)}{if ($paciente.zona==1)}selected{/if}{/if}>Urbana</option>
                                              <option value="2" {if ($id>0)}{if ($paciente.zona==2)}selected{/if}{/if}>Rural</option>
                                           </select>
                                        </div>
                                    </div>
                                  <div class="form-group">
                                     <label  class="col-md-3 control-label">Dirección</label>
                                     <div class="col-md-9">
                                        <input type="text" class="form-control"  placeholder="" maxlength="80"  name="direccion" value="{if ($id>0)}{$paciente.direccion}{/if}" >
                                     </div>
                                  </div>
                                  <div class="form-group">
                                     <label  class="col-md-3 control-label" name="telefono" >Teléfono</label>
                                     <div class="col-md-9">
                                        <input type="text" class="form-control"  placeholder="" maxlength="15"  name="telefono" value="{if ($id>0)}{$paciente.telefono}{/if}" >
                                     </div>
                                  </div>
                                  <div class="form-group">
                                     <label  class="col-md-3 control-label">Móvil</label>
                                     <div class="col-md-9">
                                        <input type="text" class="form-control"  placeholder="" maxlength="15" name="movil" value="{if ($id>0)}{$paciente.movil}{/if}" >
                                     </div>
                                  </div>
                                  <div class="form-group">
                                     <label class="col-md-3 control-label">Correo electrónico</label>
                                     <div class="col-md-9">
                                         <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-envelope"></i></span>
                                            <input type="email" class="form-control" placeholder="Correo electrónico" name="email"  maxlength="80" value="{if ($id>0)}{$paciente.email}{/if}" />
                                         </div>
                                     </div>
                                  </div>
                                 <div class="form-group">
                                     <label  class="col-md-3 control-label">Estado civil</label>
                                     <div class="col-md-9">
                                        <select  class="form-control" name="estado_civil" >
                                           <option value="00">- SELECCIONE -</option>
                                            {foreach $estado_civil as $gs}
                                                <option value="{$gs.id}" {if ($id>0)}{if ($paciente.estado_civil==$gs.id)}selected{/if}{/if}>{$gs.descripcion}</option>
                                            {/foreach}
                                        </select>
                                     </div>
                                  </div>
                                    <div class="form-group">
                                     <label  class="col-md-3 control-label">Ocupación</label>
                                     <div class="col-md-9">
                                        <input type="text" class="form-control"  placeholder="" maxlength="250" name="ocupacion" value="{if ($id>0)}{$paciente.ocupacion}{/if}" >
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
                           </div>
                           </div>
                           <!-- END PERSONAL FORM -->   
                        </div>
                        <div id="tab_2-2" class="tab-pane">
                           <!-- BEGIN FAMILY FORM -->   
                           <div class="portlet box blue ">
                             <div class="portlet-title">
                                <div class="caption">
                                   <i class="icon-reorder"></i> Información Familiar
                                </div>
                                <div class="tools">
                                   <a href="" class="reload"></a>
                                </div>
                             </div>
                             <div class="portlet-body">
                                <div class="btn-group">
                                    <a id="btn-familiar" class="btn green" data-toggle="modal" href="#responsive">Agregar <i class="icon-plus"></i></a>
                                </div>    
                                <div id="dv_familiares">
                                   
                                </div>
                            </div>
                            <!-- END FAMILY FORM-->
                        </div>
                        </div>
                        <div id="tab_3-3" class="tab-pane">
                           <!-- BEGIN HISTORIA CLÍNICA DIGITAL FORM -->   
                           <div class="portlet box blue ">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-reorder"></i> Historia Clínica Digital
                                </div>
                           </div>
                           <div class="portlet-body form">
                                <form id="hcdigital" action="{$url}pacientes/hcdigital/{$id}" method="post" accept-charset="utf-8" enctype="multipart/form-data" role="form">
                                   <div class="form-body">
                                        <div class="form-group">
                                           <label class="control-label col-md-3">Historia clínica digital</label>
                                           <div class="col-md-9">
                                              <div class="fileupload fileupload-new" data-provides="fileupload">
                                                 <div class="input-group">
                                                    <span class="input-group-btn">
                                                        <span class="uneditable-input">
                                                            <i class="icon-file fileupload-exists"></i> 
                                                            <span class="fileupload-preview"></span>
                                                        </span>
                                                    </span>
                                                    <span class="btn default btn-file">
                                                        <span class="fileupload-new"><i class="icon-paper-clip"></i> Seleccionar archivo</span>
                                                        <span class="fileupload-exists"><i class="icon-undo"></i> Cambiar</span>
                                                        <input type="file" name="userfile" class="default" />
                                                    </span>
                                                    <a href="#" class="btn red fileupload-exists" data-dismiss="fileupload"><i class="icon-trash"></i> Eliminar</a>
                                                 </div>
                                              </div>
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
                           </div>
                       </div>
                        <!-- BEGIN DOCUMENTS FORM -->   
                        <div class="portlet box blue ">
                             <div class="portlet-title">
                                <div class="caption"><i class="icon-comments"></i>Documentos</div>
                                <div class="tools">
                                   <a href="javascript:;" class="collapse"></a>
                                   <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                   <a href="javascript:;" class="reload"></a>
                                   <a href="javascript:;" class="remove"></a>
                                </div>
                             </div>
                             <div class="portlet-body">
                                <div class="table-responsive">
                                   <table class="table table-striped table-hover">
                                   <thead>
                                      <tr>
                                         <th>#</th>
                                         <th>Archivo</th>
                                         <th>Descripción</th>
                                         <th>Descargar</th>
                                         <th >Eliminar</th>
                                      </tr>
                                   </thead>
                                   <tbody>
                                       {foreach $archivos as $i}
                                            <tr>
                                               <td>1</td>
                                               <td>{$i.archivo}</td>
                                               <td>{$i.descripcion}</td>
                                               <td >
                                                    <a href="{$url}uploads/{$i.archivo}" id="dow{$i.id}" url="{$i.archivo}" >
                                                        <img src="{$url}assets/img/icons/download.png" title="Descargar"/>
                                                    </a>
                                               </td>
                                               <td>
                                                    <a href="#" id="del{$i.id}" >
                                                         <img src="{$url}assets/img/icons/delete_page.png" title="Eliminar"
                                                              onclick="if(confirm('¿Realmente desea eliminar el archivo?')){ eliminar({$i.id}); } "/>
                                                    </a>
                                               </td>
                                            </tr>
                                        {/foreach}
                                   </tbody>
                                   </table>
                                </div>
                             </div>
                        </div>
                       <!-- END HISTORIA CLÍNICA DIGITAL FORM -->   
                  </div>
                  <!--end col-md-9-->                                   
               </div>
            </div>            
            </div>
         </div>
        </div>
     </div>
     <!-- END PAGE CONTENT-->
	 
	 
    <div id="responsive" class="modal fade" tabindex="-1" data-width="760">
        <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
           <h4 class="modal-title">Información familiar</h4>
        </div>
        <div id="dv_familiar" class="modal-body">
           
              
        </div>
       <div class="modal-footer">
           <button type="button" data-dismiss="modal" class="btn btn-default">Cerrar</button>
           <button type="button" id="btn-familiar-guardar" data-dismiss="modal" class="btn blue">Guardar cambios</button>
       </div>
    </div>
{/block}


{block name="scripts" append}
    <!-- MODAL -->
    <script src="{$url}assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript" ></script>
    <script src="{$url}assets/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript" ></script>
    <script src="{$url}assets/scripts/ui-extended-modals.js"></script> 
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
         UIExtendedModals.init();
         
         //$("#dv_familiares").load("{$url}/pacientes/familiares/{$id}");
         consultarFamiliar();
         
        $('#dp-fecha').datepicker({
            language: "es",
        });
        
        $("#btn-familiar").click(function () {
            registrarFamiliar(0, {$id});
            
        });
        
        $("#btn-familiar-guardar").click(function () {
            $.post($('#form-familiar').attr('action'), $('#form-familiar').serialize(), function(json){
                alert("El registro ha sido guardado.");
            }, 'json');
            
            $("#responsive").modal('hide');
            consultarFamiliar();
            return false;
        });
        
         $("#depto_id").change(function () {
		depto_id = $('#depto_id').attr('value');
                
                $.ajax({
                        type: "POST",
                        url: "{$url}configuracion/getMunicipio/"+depto_id, 
                        data: depto_id,
                        dataType: "text",  
                        cache:false,
                        success: 
                             function(data){
                                $('#dv_mun_id').empty();
                                $('#dv_mun_id').html(data);
                             }
                         });// you have missed this bracket
                        return false;
                });
      });
    
    function registrarFamiliar(familiar_id, paciente_id){
        
        $.ajax({
                type: "POST",
                url: "{$url}pacientes/familiar/"+familiar_id+"/"+paciente_id, 
                data: familiar_id,
                dataType: "text",  
                cache:false,
                success: 
                     function(data){
                        $('#dv_familiar').empty();
                        $('#dv_familiar').html(data);
                        //alert(data);
                     }
        });// you have missed this bracket
       return false;
    }
    
    function consultarFamiliar(){
         $("#dv_familiares").load("{$url}/pacientes/familiares/"+{$id});
    }
    
    function eliminar(id){
        window.location.href = '{$url}pacientes/hcdigitalEliminar/'+id+'/'+{$id};
        return false;
    }
    
    function eliminarFamiliar(id){
        window.location.href = '{$url}pacientes/familiaresEliminar/'+id+'/'+{$id};
        return false;
    }
    </script>
{/block}
