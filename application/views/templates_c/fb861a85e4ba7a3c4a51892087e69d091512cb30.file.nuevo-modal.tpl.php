<?php /* Smarty version Smarty-3.1.15, created on 2014-10-01 12:39:23
         compiled from "application\views\templates\paciente\nuevo-modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:914452da0c4cc9ff75-48812345%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb861a85e4ba7a3c4a51892087e69d091512cb30' => 
    array (
      0 => 'application\\views\\templates\\paciente\\nuevo-modal.tpl',
      1 => 1412181537,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '914452da0c4cc9ff75-48812345',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52da0c4d0af705_23626902',
  'variables' => 
  array (
    'errors' => 0,
    'url' => 0,
    'tipo_documento' => 0,
    'gs' => 0,
    'id' => 0,
    'paciente' => 0,
    'identificacion' => 0,
    'horaini' => 0,
    'grupo_sanguineo' => 0,
    'parentesco' => 0,
    'departamento' => 0,
    'municipio' => 0,
    'estado_civil' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52da0c4d0af705_23626902')) {function content_52da0c4d0af705_23626902($_smarty_tpl) {?><div class="row">
    <?php echo $_smarty_tpl->tpl_vars['errors']->value;?>

    <form id="form-nvoPaciente" class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
pacientes/guardarModal" method="post" accept-charset="utf-8">
        <div class="col-md-3">
            <ul class="ver-inline-menu tabbable margin-bottom-10">
               <li class="active">
                  <a data-toggle="tab" href="#tab_1-1"><i class="icon-cog"></i> Personal</a> 
                  <span class="after"></span>                                    
               </li>
               <li ><a data-toggle="tab" href="#tab_2-2"><i class="icon-picture"></i> Familiar</a></li>
               <li ><a data-toggle="tab" href="#tab_3-3"><i class="icon-picture"></i> Ubicación</a></li>
            </ul>
        </div>
        <div class="col-md-9">
            <div class="tab-content">
                <div id="tab_1-1" class="tab-pane active">
                    <div class="form-group">
                        <label  class="col-md-4 control-label">Tipo identificación</label>
                        <div class="col-md-8">
                            <select  class="form-control" name="tipo_documento" >
                                <option value="00">- SELECCIONE -</option>
                                <?php  $_smarty_tpl->tpl_vars['gs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tipo_documento']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gs']->key => $_smarty_tpl->tpl_vars['gs']->value) {
$_smarty_tpl->tpl_vars['gs']->_loop = true;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['gs']->value['id'];?>
" <?php if (($_smarty_tpl->tpl_vars['id']->value>0)) {?><?php if (($_smarty_tpl->tpl_vars['paciente']->value['tipo_documento']==$_smarty_tpl->tpl_vars['gs']->value['id'])) {?>selected<?php }?><?php }?>><?php echo $_smarty_tpl->tpl_vars['gs']->value['descripcion'];?>
</option>
                                <?php } ?>
                            </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-4 control-label">Identificación (*)</label>
                      <div class="col-md-8">
                         <input type="text" class="form-control" id="mdl_identificacion" name="identificacion" placeholder="" maxlength="20" value="<?php echo $_smarty_tpl->tpl_vars['identificacion']->value;?>
" required>
                        <input type="hidden" id="mdl_horaini" name="mdl_horaini" value="<?php echo $_smarty_tpl->tpl_vars['horaini']->value;?>
" required>
                        <input type="hidden" name="paciente_id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" required>
                      </div>
                   </div>
                   <div class="form-group">
                      <label  class="col-md-4 control-label">Primer nombre (*)</label>
                      <div class="col-md-8">
                         <input type="text" class="form-control" name="nombre1" placeholder="" maxlength="45" value="<?php if (($_smarty_tpl->tpl_vars['id']->value>0)) {?><?php echo $_smarty_tpl->tpl_vars['paciente']->value['nombre1'];?>
<?php }?>" required>
                      </div>
                   </div>
                   <div class="form-group">
                      <label  class="col-md-4 control-label">Segundo nombre</label>
                      <div class="col-md-8">
                         <input type="text" class="form-control" name="nombre2" placeholder="" maxlength="45" value="<?php if (($_smarty_tpl->tpl_vars['id']->value>0)) {?><?php echo $_smarty_tpl->tpl_vars['paciente']->value['nombre2'];?>
<?php }?>" >
                      </div>
                   </div>
                   <div class="form-group">
                      <label  class="col-md-4 control-label">Primer apellido (*)</label>
                      <div class="col-md-8">
                         <input type="text" class="form-control" name="apellido1" placeholder="" maxlength="45" value="<?php if (($_smarty_tpl->tpl_vars['id']->value>0)) {?><?php echo $_smarty_tpl->tpl_vars['paciente']->value['apellido1'];?>
<?php }?>" required>
                      </div>
                   </div>
                   <div class="form-group">
                      <label  class="col-md-4 control-label">Segundo apellido</label>
                      <div class="col-md-8">
                         <input type="text" class="form-control" name="apellido2" placeholder="" maxlength="45" value="<?php if (($_smarty_tpl->tpl_vars['id']->value>0)) {?><?php echo $_smarty_tpl->tpl_vars['paciente']->value['apellido2'];?>
<?php }?>" >
                      </div>
                   </div>

                   <div class="form-group">
                      <label  class="col-md-4 control-label">Sexo</label>
                      <div class="col-md-8">
                         <select  class="form-control"  name="sexo" >
                            <option value="F" <?php if (($_smarty_tpl->tpl_vars['id']->value>0)) {?><?php if (($_smarty_tpl->tpl_vars['paciente']->value['sexo']=="F")) {?>selected<?php }?><?php }?>>Femenino</option>
                            <option value="M" <?php if (($_smarty_tpl->tpl_vars['id']->value>0)) {?><?php if (($_smarty_tpl->tpl_vars['paciente']->value['sexo']=="M")) {?>selected<?php }?><?php }?>>Masculino</option>
                         </select>
                      </div>
                   </div>
                   <div class="form-group">
                      <label  class="col-md-4 control-label">Grupo Sanguíneo</label>
                      <div class="col-md-8">
                        <select  class="form-control"  name="grupo_sanguineo" >
                            <?php  $_smarty_tpl->tpl_vars['gs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['grupo_sanguineo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gs']->key => $_smarty_tpl->tpl_vars['gs']->value) {
$_smarty_tpl->tpl_vars['gs']->_loop = true;
?>
                                 <option value="<?php echo $_smarty_tpl->tpl_vars['gs']->value['id'];?>
" <?php if (($_smarty_tpl->tpl_vars['id']->value>0)) {?><?php if (($_smarty_tpl->tpl_vars['paciente']->value['grupo_sanguineo']==$_smarty_tpl->tpl_vars['gs']->value['id'])) {?>selected<?php }?><?php }?>><?php echo $_smarty_tpl->tpl_vars['gs']->value['descripcion'];?>
</option>
                            <?php } ?>
                        </select>
                      </div>
                   </div>
                   <div class="form-group">
                      <label  class="col-md-4 control-label">Fecha nacimiento</label>
                      <div class="col-md-8">
                         <div class="input-group">
                            <div class="input-group date date-picker" data-date-format="yyyy-mm-dd"  data-date-viewmode="years">
                                <input id="dp-fecha-n" type="text" class="form-control" name="fecha_nacimiento" 
                                       value="<?php if (($_smarty_tpl->tpl_vars['id']->value>0)) {?> <?php if (($_smarty_tpl->tpl_vars['paciente']->value['fecha_nacimiento']>0)) {?><?php echo $_smarty_tpl->tpl_vars['paciente']->value['fecha_nacimiento'];?>
<?php }?><?php }?>">
                                <span class="input-group-btn">
                                    <button class="btn default" type="button"><i class="icon-calendar"></i></button>
                                </span>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div id="tab_2-2" class="tab-pane">
                    <div class="form-group">
                        <label  class="col-md-4 control-label"> Tipo ID:</label>
                        <div class="col-md-8">
                           <select id="fam_tipo_documento" class="form-control" name="fam_tipo_documento" >
                            <option value="00">- SELECCIONE -</option>
                            <?php  $_smarty_tpl->tpl_vars['gs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tipo_documento']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gs']->key => $_smarty_tpl->tpl_vars['gs']->value) {
$_smarty_tpl->tpl_vars['gs']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['gs']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['gs']->value['descripcion'];?>
</option>
                            <?php } ?>
                        </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-md-4 control-label"> Documento:</label>
                        <div class="col-md-8">
                            <input type="text" id="fam_identificacion" class="form-control" name="fam_identificacion" maxlength="20" value="" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-md-4 control-label"> Nombre:</label>
                        <div class="col-md-8">
                           <input type="text" id="fam_nombre" class="form-control" name="fam_nombre" maxlength="60" value="" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-md-4 control-label"> Parentesco:</label>
                        <div class="col-md-8">
                            <select  class="form-control" id="fam_parentesco" name="fam_parentesco" >
                            <option value="00">- SELECCIONE -</option>
                            <?php  $_smarty_tpl->tpl_vars['gs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['parentesco']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gs']->key => $_smarty_tpl->tpl_vars['gs']->value) {
$_smarty_tpl->tpl_vars['gs']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['gs']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['gs']->value['descripcion'];?>
</option>
                            <?php } ?>
                        </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-md-4 control-label"> Móvil:</label>
                        <div class="col-md-8">
                            <input type="text" id="fam_movil" class="form-control" maxlength="15" name="fam_movil" value="" >
                        </div>
                    </div>
                </div>
                <div id="tab_3-3" class="tab-pane">
                    <div class="form-group">
                        <label  class="col-md-4 control-label">Departamento</label>
                        <div class="col-md-8">
                           <select  class="form-control"  name="depto_id" id="depto_id">
                              <option depto_id="$gs.dpto_id" value="00">- SELECCIONE -</option>
                               <?php  $_smarty_tpl->tpl_vars['gs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['departamento']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gs']->key => $_smarty_tpl->tpl_vars['gs']->value) {
$_smarty_tpl->tpl_vars['gs']->_loop = true;
?>
                                   <option depto_id="<?php echo $_smarty_tpl->tpl_vars['gs']->value['dpto_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['gs']->value['dpto_id'];?>
" <?php if (($_smarty_tpl->tpl_vars['id']->value>0)) {?><?php if (($_smarty_tpl->tpl_vars['paciente']->value['depto_id']==$_smarty_tpl->tpl_vars['gs']->value['dpto_id'])) {?>selected<?php }?><?php }?>><?php echo $_smarty_tpl->tpl_vars['gs']->value['descripcion'];?>
</option>
                               <?php } ?>
                           </select>
                        </div>
                     </div>
                     <div class="form-group">
                        <label  class="col-md-4 control-label" >Municipio</label>
                        <div class="col-md-8">
                            <div id="dv_mun_id">
                               <select  class="form-control" name="mun_id" id="mun_id">
                                   <option value="000">- SELECCIONE -</option>
                                    <?php  $_smarty_tpl->tpl_vars['gs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['municipio']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gs']->key => $_smarty_tpl->tpl_vars['gs']->value) {
$_smarty_tpl->tpl_vars['gs']->_loop = true;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['gs']->value['mun_id'];?>
" <?php if (($_smarty_tpl->tpl_vars['id']->value>0)) {?><?php if (($_smarty_tpl->tpl_vars['paciente']->value['mun_id']==$_smarty_tpl->tpl_vars['gs']->value['mun_id']&&$_smarty_tpl->tpl_vars['paciente']->value['depto_id']==$_smarty_tpl->tpl_vars['gs']->value['dpto_id'])) {?>selected<?php }?><?php }?>><?php echo $_smarty_tpl->tpl_vars['gs']->value['descripcion'];?>
</option>
                                    <?php } ?>

                              </select>
                           </div>
                        </div>
                     </div>
                       <div class="form-group">
                           <label  class="col-md-4 control-label">Zona</label>
                           <div class="col-md-8">
                              <select  class="form-control"  name="zona" >
                                 <option value="1" <?php if (($_smarty_tpl->tpl_vars['id']->value>0)) {?><?php if (($_smarty_tpl->tpl_vars['paciente']->value['zona']==1)) {?>selected<?php }?><?php }?>>Urbana</option>
                                 <option value="2" <?php if (($_smarty_tpl->tpl_vars['id']->value>0)) {?><?php if (($_smarty_tpl->tpl_vars['paciente']->value['zona']==2)) {?>selected<?php }?><?php }?>>Rural</option>
                              </select>
                           </div>
                       </div>
                     <div class="form-group">
                        <label  class="col-md-4 control-label">Dirección</label>
                        <div class="col-md-8">
                           <input type="text" class="form-control"  placeholder="" maxlength="80"  name="direccion" value="<?php if (($_smarty_tpl->tpl_vars['id']->value>0)) {?><?php echo $_smarty_tpl->tpl_vars['paciente']->value['direccion'];?>
<?php }?>" >
                        </div>
                     </div>
                     <div class="form-group">
                        <label  class="col-md-4 control-label" name="telefono" >Teléfono</label>
                        <div class="col-md-8">
                           <input type="text" class="form-control"  placeholder="" maxlength="15"  name="telefono" value="<?php if (($_smarty_tpl->tpl_vars['id']->value>0)) {?><?php echo $_smarty_tpl->tpl_vars['paciente']->value['telefono'];?>
<?php }?>" >
                        </div>
                     </div>
                     <div class="form-group">
                        <label  class="col-md-4 control-label">Móvil</label>
                        <div class="col-md-8">
                           <input type="text" class="form-control"  placeholder="" maxlength="15" name="movil" value="<?php if (($_smarty_tpl->tpl_vars['id']->value>0)) {?><?php echo $_smarty_tpl->tpl_vars['paciente']->value['movil'];?>
<?php }?>" >
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-md-4 control-label">Correo electrónico</label>
                        <div class="col-md-8">
                            <div class="input-group">
                               <span class="input-group-addon"><i class="icon-envelope"></i></span>
                               <input type="email" class="form-control" placeholder="Correo electrónico" name="email"  maxlength="80" value="<?php if (($_smarty_tpl->tpl_vars['id']->value>0)) {?><?php echo $_smarty_tpl->tpl_vars['paciente']->value['email'];?>
<?php }?>" />
                            </div>
                        </div>
                     </div>
                    <div class="form-group">
                        <label  class="col-md-4 control-label">Estado civil</label>
                        <div class="col-md-8">
                           <select  class="form-control" name="estado_civil" >
                              <option value="00">- SELECCIONE -</option>
                               <?php  $_smarty_tpl->tpl_vars['gs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['estado_civil']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gs']->key => $_smarty_tpl->tpl_vars['gs']->value) {
$_smarty_tpl->tpl_vars['gs']->_loop = true;
?>
                                   <option value="<?php echo $_smarty_tpl->tpl_vars['gs']->value['id'];?>
" <?php if (($_smarty_tpl->tpl_vars['id']->value>0)) {?><?php if (($_smarty_tpl->tpl_vars['paciente']->value['estado_civil']==$_smarty_tpl->tpl_vars['gs']->value['id'])) {?>selected<?php }?><?php }?>><?php echo $_smarty_tpl->tpl_vars['gs']->value['descripcion'];?>
</option>
                               <?php } ?>
                           </select>
                        </div>
                     </div>
                       <div class="form-group">
                        <label  class="col-md-4 control-label">Ocupación</label>
                        <div class="col-md-8">
                           <input type="text" class="form-control"  placeholder="" maxlength="250" name="ocupacion" value="<?php if (($_smarty_tpl->tpl_vars['id']->value>0)) {?><?php echo $_smarty_tpl->tpl_vars['paciente']->value['ocupacion'];?>
<?php }?>" >
                        </div>
                     </div>
                </div>
            </div>
        </div>
    
     </form>
</div>
              

    <script>
    jQuery(document).ready(function() {
//        App.init();
        FormComponents.init();
//        UIExtendedModals.init();
        
        $("#depto_id").change(function () {
		depto_id = $('#depto_id').attr('value');
                
                $.ajax({
                        type: "POST",
                        url: "<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
configuracion/getMunicipio/"+depto_id, 
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
    </script>
<?php }} ?>
