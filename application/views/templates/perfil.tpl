{extends file='myproject.tpl'}
{block name="title"}My Page Title{/block}
{block name="styles" append}
  <link rel="stylesheet" type="text/css" href="{$url}assets/plugins/bootstrap-fileupload/bootstrap-fileupload.css" />
{/block}
{block name="body"}{/block}
{block name="page-content"}
     <!-- BEGIN PAGE HEADER-->
     <div class="row">
        <div class="col-md-12">
           <!-- BEGIN PAGE TITLE & BREADCRUMB-->
           <h3 class="page-title">
              Perfil de Usuario
           </h3>
           <ul class="page-breadcrumb breadcrumb">
             <li>
                 <i class="icon-home"></i>
                 <a href="{$url}">Inicio</a> 
                 <i class="icon-angle-right"></i>
              </li>
              <li>
                 <a href="#">Usuario</a>
                 <i class="icon-angle-right"></i>
              </li>
              <li><a href="#">Perfil</a></li>
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
                            <a data-toggle="tab" href="#tab_1-1">
                            <i class="icon-cog"></i> 
                            Información personal
                            </a> 
                            <span class="after"></span>                                    
                         </li>
                         <li ><a data-toggle="tab" href="#tab_2-2"><i class="icon-picture"></i> Cambiar imagen</a></li>
                         <li ><a data-toggle="tab" href="#tab_3-3"><i class="icon-lock"></i> Cambiar contraseña</a></li>
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
                                <form class="form-horizontal " action="{$url}administracion/perfil" method="post" accept-charset="utf-8">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label  class="col-md-3 control-label">Tipo identificación</label>
                                            <div class="col-md-9">
                                                <select  class="form-control" name="tipo_documento" >
                                                    <option value="00">- SELECCIONE -</option>
                                                    {foreach $tipo_documento as $gs}
                                                            <option value="{$gs.id}" {if ($usuario.id>0)}{if ($usuario.tipo_documento==$gs.id)}selected{/if}{/if}>{$gs.descripcion}</option>
                                                    {/foreach}
                                                </select>
                                            </div>
                                        </div>
                                       <div class="form-group">
                                          <label class="col-md-3 control-label">Identificación</label>
                                          <div class="col-md-9">
                                              <input type="text" placeholder="" class="form-control" name="identificacion" value="{$usuario.identificacion}" />
                                              <input type="hidden" name="usuario_id" value="{$usuario.id}" required>
                                          </div>
                                       </div>
                                       <div class="form-group">
                                          <label class="col-md-3 control-label">Tarjeta profesional:</label>
                                          <div class="col-md-9">
                                              <input type="text" placeholder="" class="form-control" name="tarjeta_profesional" value="{$usuario.tarjeta_profesional}" />
                                          </div>
                                       </div>
                                       <div class="form-group">
                                          <label class="col-md-3 control-label">Nombres</label> 
                                          <div class="col-md-9">
                                            <input type="text" placeholder="" class="form-control" name="nombres" value="{$usuario.nombres}" />
                                          </div>
                                       </div>
                                       <div class="form-group">
                                          <label class="col-md-3 control-label">Apellidos</label>
                                          <div class="col-md-9">
                                            <input type="text" placeholder="" class="form-control" name="apellidos" value="{$usuario.apellidos}" />
                                          </div>
                                       </div>
                                       <div class="form-group">
                                          <label class="col-md-3 control-label">Dirección</label>
                                          <div class="col-md-9">
                                            <input type="text" placeholder="" class="form-control" name="direccion" value="{$usuario.direccion}" />
                                          </div>
                                       </div>
                                       <div class="form-group">
                                          <label class="col-md-3 control-label">Teléfono</label>
                                          <div class="col-md-9">
                                              <input type="text" placeholder="" class="form-control" name="telefono" value="{$usuario.telefono}" />
                                          </div>
                                       </div>
                                       <div class="form-group">
                                          <label class="col-md-3 control-label">Correo electrónico</label>
                                          <div class="col-md-9">
                                              <div class="input-group">
                                                 <span class="input-group-addon"><i class="icon-envelope"></i></span>
                                                 <input type="text" class="form-control" placeholder="Correo electrónico" name="email" value="{$usuario.email}"  />
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
                         </div>
                         <div id="tab_2-2" class="tab-pane">
                            <!-- BEGIN IMAGEN PERFIL FORM -->   
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
                              <form class="form-horizontal " role="form">
                                    <div class="form-body">
                                    <div class="form-group last">
                                        <label class="control-label col-md-3">Imagen de Perfil</label>
                                          <div class="col-md-9">
                                             <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                   <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                                                </div>
                                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                                <div>
                                                   <span class="btn default btn-file">
                                                   <span class="fileupload-new"><i class="icon-paper-clip"></i> Seleccione imagen</span>
                                                   <span class="fileupload-exists"><i class="icon-undo"></i> Cambiar</span>
                                                   <input type="file" class="default" />
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
                            <!-- END LOGIN FORM -->   
                         </div>
                         <div id="tab_3-3" class="tab-pane">
                            <!-- BEGIN PERSONAL FORM -->   
                            <div class="portlet box blue ">
                              <div class="portlet-title">
                                 <div class="caption">
                                    <i class="icon-reorder"></i> Cambiar contraseña
                                 </div>
                                 <div class="tools">
                                    <a href="" class="reload"></a>
                                 </div>
                              </div>

                              <div class="portlet-body form">
                              <form id="form-pwd" class="form-horizontal" action="{$url}administracion/contrasena" method="post" accept-charset="utf-8">

                                <div class="form-body">
                                   <div class="form-group">
                                      <label class="col-md-3 control-label">Contraseña actual</label>
                                      <div class="col-md-9">
                                            <input type="password" class="form-control" id="contrasena-actual" name="contrasena_actual" required  />
                                            <input type="hidden" name="usuario_id" value="{$usuario.id}" required>
                                      </div>
                                   </div>
                                   <div class="form-group">
                                      <label class="col-md-3 control-label">Nueva contraseña</label>
                                      <div class="col-md-9">
                                            <input type="password" class="form-control" id="contrasena-nueva" name="contrasena_nueva"  required />
                                      </div>
                                   </div>
                                   <div class="form-group">
                                      <label class="col-md-3 control-label">Vuelva a escribir la contraseña nueva</label>
                                      <div class="col-md-9">
                                            <input type="password" class="form-control" id="re-contrasena" name="contrasena_nueva_confirm"  required />
                                      </div>
                                   </div> 
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label"></label>
                                    <div class="col-md-9">
                                        <div id="msg-success" style="display: none" class="alert alert-success"></div>
                                        <div id="msg-danger" style="display: none" class="alert alert-danger"></div>
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

                      </div>
                   </div>
                   <!--end col-md-9-->                                   
                </div>
             </div>

            </div>
           
            <!--END TABS-->
        </div>
     </div>
     <!-- END PAGE CONTENT-->
{/block}
{block name="scripts" append}
	<script type="text/javascript" src="{$url}assets/plugins/bootstrap-fileupload/bootstrap-fileupload.js"></script>
    <script>
      jQuery(document).ready(function() {       
         // initiate layout and plugins
         App.init();
		 
        $( '#form-pwd' ).submit(function() {
            $('#msg-success').hide();
            $('#msg-danger').hide();
            
            if($('#contrasena-actual').value != ""){
                    if($('#contrasena-nueva').value == $('#re-contrasena').value){
                        $.post($('#form-pwd').attr('action'), $('#form-pwd').serialize(), function(json){
                            if(json.st == 1)
                            {   
                                $('#msg-success').show();
                                $('#msg-success').html(json.msg);
                            }
                            if(json.st == 2)
                            {
                                $('#msg-danger').show();
                                 $('#msg-danger').html(json.msg);
                            }
                        }, 'json');
                    }
                    else{
                        alert("Verifique la contraseña nueva");
                    }
            }
            else{
                alert("Digite la contraseña actual.");
            }

            return false;		
        });
      });
    </script>
{/block}