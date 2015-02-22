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
   <!-- END PAGE LEVEL STYLES -->
{/block}
{block name="body"}{/block}
{block name="page-content"}
     <!-- BEGIN PAGE HEADER-->
     <div class="row">
        <div class="col-md-12">
           <!-- BEGIN PAGE TITLE & BREADCRUMB-->
           <h3 class="page-title">
              Administrar usuario
           </h3>
           <ul class="page-breadcrumb breadcrumb">
             <li>
                 <i class="icon-home"></i>
                 <a href="{$url}">Inicio</a> 
                 <i class="icon-angle-right"></i>
              </li>
              <li>
                 <a href="{$url}administrador/index">Usuarios</a>
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
                        <li ><a data-toggle="tab" href="#tab_3-3"><i class="icon-lock"></i> Perfiles de usuario</a></li>
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
                                <form id="form-user" class="form-horizontal" action="{$url}administrador/nuevo" method="post" accept-charset="utf-8">

                               <div class="form-body">
                                   <div class="form-group">
                                       <label  class="col-md-3 control-label">Tipo identificación</label>
                                       <div class="col-md-9">
                                           <select  class="form-control" name="tipo_documento" >
                                               <option value="00">- SELECCIONE -</option>
                                               {foreach $tipo_documento as $gs}
                                                       <option value="{$gs.id}" {if ($id>0)}{if ($usuario.tipo_documento==$gs.id)}selected{/if}{/if}>{$gs.descripcion}</option>
                                               {/foreach}
                                           </select>
                                     </div>
                                   </div>
                                    <div class="form-group">
                                       <label class="col-md-3 control-label">Identificación</label>
                                       <div class="col-md-9">
                                          <input type="text" class="form-control" name="identificacion" maxlength="20" value="{if ($id>0)}{$usuario.identificacion}{/if}" required>
                                          <input type="hidden" id="usuario_id" name="usuario_id" value="{$id}">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Tarjeta profesional</label>
                                        <div class="col-md-9">
                                           <input type="text" class="form-control" name="tarjeta_profesional" maxlength="20" value="{if ($id>0)}{$usuario.tarjeta_profesional}{/if}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       <label  class="col-md-3 control-label">Nombres</label>
                                       <div class="col-md-9">
                                          <input type="text" class="form-control" name="nombres" maxlength="45" value="{if ($id>0)}{$usuario.nombres}{/if}" required>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label  class="col-md-3 control-label">Apellidos</label>
                                       <div class="col-md-9">
                                          <input type="text" class="form-control" name="apellidos" maxlength="45" value="{if ($id>0)}{$usuario.apellidos}{/if}" required>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label  class="col-md-3 control-label">Especialidad</label>
                                       <div class="col-md-9">
                                           <select  class="form-control" name="especialidad" >
                                               <option value="00">- SELECCIONE -</option>
                                               {foreach $especialidades as $gs}
                                                       <option value="{$gs.id}" {if ($id>0)}{if ($usuario.especialidad==$gs.id)}selected{/if}{/if}>{$gs.descripcion}</option>
                                               {/foreach}
                                           </select>
                                     </div>
                                   </div>
                                    <div class="form-group">
                                       <label  class="col-md-3 control-label">Sexo</label>
                                       <div class="col-md-9">
                                          <select  class="form-control"  name="sexo" >
                                             <option value="F" {if ($id>0)}{if ($usuario.sexo=="F")}selected{/if}{/if}>Femenino</option>
                                             <option value="M" {if ($id>0)}{if ($usuario.sexo=="M")}selected{/if}{/if}>Masculino</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label  class="col-md-3 control-label">Dirección</label>
                                       <div class="col-md-9">
                                          <input type="text" class="form-control" maxlength="80"  name="direccion" value="{if ($id>0)}{$usuario.direccion}{/if}" >
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label  class="col-md-3 control-label" name="telefono" >Teléfono</label>
                                       <div class="col-md-9">
                                          <input type="text" class="form-control" maxlength="15"  name="telefono" value="{if ($id>0)}{$usuario.telefono}{/if}" >
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label class="col-md-3 control-label">Correo electrónico</label>
                                       <div class="col-md-9">
                                           <div class="input-group">
                                              <span class="input-group-addon"><i class="icon-envelope"></i></span>
                                              <input type="email" class="form-control" placeholder="Correo electrónico" name="email"  maxlength="80" value="{if ($id>0)}{$usuario.email}{/if}" />
                                           </div>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label  class="col-md-3 control-label">Nombre de usuario</label>
                                       <div class="col-md-9">
                                           <input type="text" class="form-control" maxlength="80"  name="usuario" value="{if ($id>0)}{$usuario.usuario}{/if}" {if ($id>0)} disabled="true" {/if} >
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label  class="col-md-3 control-label">Contraseña</label>
                                       <div class="col-md-9">
                                          <input type="password" class="form-control" maxlength="80"  name="contrasena" value="" >
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label  class="col-md-3 control-label">Confirme Contraseña</label>
                                       <div class="col-md-9">
                                          <input type="password" class="form-control" maxlength="80"  name="re-contrasena" value="" >
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
                        

                        <div id="tab_3-3" class="tab-pane">
                        <!-- BEGIN ROLES USUARIO FORM --> 
                        <div class="portlet box blue ">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-reorder"></i> Perfiles de usuario
                                </div>
                                <div class="tools">
                                    <a href="" class="reload"></a>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                {$errors}
                                <form class="form-horizontal" action="{$url}administrador/perfilUsuario" method="post" accept-charset="utf-8">
                                    <div class="form-body">
                                        <div class="table-responsive">
                                            <input type="hidden" name="usuario_id" value="{$id}">
                                           <table class="table table-striped table-bordered table-hover" id="sample_2">
                                                <thead>
                                                   <tr>
                                                      <!--<th style="width1:8px;"><input type="checkbox" class="group-checkable" data-set="#sample_2 .checkboxes" /></th>-->
                                                      <th >Estado</th>
                                                      <th >Perfil</th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                    {foreach $_roles as $i}
                                                        <tr class="odd gradeX">
                                                            <td><input type="checkbox" class="checkboxes" name="chk_{$i.id}" id="chk_{$i.id}" 
                                                                {foreach $usuario_roles as $j}
                                                                     {if $i.id == $j.rol_id} checked {/if}
                                                                {/foreach}
                                                                />
                                                            </td>
                                                          <td>{$i.nombre}</td>
                                                       </tr>
                                                    {/foreach}
                                                </tbody>
                                             </table>
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
                           <!-- END ROLES USUARIO FORM -->   
                      </div>
                    </div>
                  <!--end col-md-9-->                                   
               </div>
            </div>
                 
        </div>
     </div>
        </div>
     </div>
     <!-- END PAGE CONTENT-->
{/block}

{block name="scripts" append}
    <script type="text/javascript" src="{$url}assets/plugins/bootstrap-fileupload/bootstrap-fileupload.js"></script>
    <script type="text/javascript" src="{$url}assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="{$url}assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>  
    <script type="text/javascript" src="{$url}assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
    <script type="text/javascript" src="{$url}assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript" src="{$url}assets/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js"></script>   
    <script type="text/javascript" src="{$url}assets/plugins/data-tables/jquery.dataTables.js"></script>
    <script type="text/javascript" src="{$url}assets/plugins/data-tables/DT_bootstrap.js"></script>
    <script type="text/javascript" src="{$url}assets/plugins/select2/select2.min.js"></script>
    <script type="text/javascript" src="{$url}assets/plugins/jquery.input-ip-address-control-1.0.min.js"></script>
    <script type="text/javascript" src="{$url}assets/plugins/jquery-multi-select/js/jquery.multi-select.js"></script>
    <script src="{$url}assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript" ></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{$url}assets/scripts/app.js"></script>
    <script src="{$url}assets/scripts/form-components.js"></script>     
    <!-- END PAGE LEVEL SCRIPTS -->
    <script>
      jQuery(document).ready(function() {       
         // initiate layout and plugins
         App.init();
         FormComponents.init();
      });
      
      $( '#form-user' ).submit(function() {
            
                if($('#contrasena').value != ""){
                    if($('#contrasena').value != $('#re-contrasena').value){
                        alert("Las contraseñas no coinciden.");
                        return false;
                    }
                }
                else{
                    alert("Digite la contraseña.");
                    return false;
                }
            
        });
    </script>
{/block}