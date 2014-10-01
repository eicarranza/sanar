<?php /* Smarty version Smarty-3.1.15, created on 2014-10-01 12:29:43
         compiled from "application\views\templates\paciente\familiar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1493452ce2c8df03758-60534634%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8135f5ba6d3f54c9d800337383a3b83cd65b4e9a' => 
    array (
      0 => 'application\\views\\templates\\paciente\\familiar.tpl',
      1 => 1412180950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1493452ce2c8df03758-60534634',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52ce2c8e117ef1_71928569',
  'variables' => 
  array (
    'url' => 0,
    'familiar_id' => 0,
    'paciente_id' => 0,
    'tipo_documento' => 0,
    'gs' => 0,
    'familiar' => 0,
    'parentesco' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ce2c8e117ef1_71928569')) {function content_52ce2c8e117ef1_71928569($_smarty_tpl) {?><div class="row">
    <form id="form-familiar" class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
pacientes/familiar/<?php echo $_smarty_tpl->tpl_vars['familiar_id']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['paciente_id']->value;?>
" method="post" accept-charset="utf-8">
        <div class="form-body">
            <div class="col-md-6">
                <div class="form-group">
                    <label  class="col-md-3 control-label">Tipo ID: </label>
                    <div class="col-md-9">
                        <select id="fam_tipo_documento" class="form-control" name="fam_tipo_documento" >
                            <option value="00">- SELECCIONE -</option>
                            <?php  $_smarty_tpl->tpl_vars['gs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tipo_documento']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gs']->key => $_smarty_tpl->tpl_vars['gs']->value) {
$_smarty_tpl->tpl_vars['gs']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['gs']->value['id'];?>
" <?php if (($_smarty_tpl->tpl_vars['familiar_id']->value>0)) {?><?php if (($_smarty_tpl->tpl_vars['familiar']->value['tipo_documento']==$_smarty_tpl->tpl_vars['gs']->value['id'])) {?>selected<?php }?><?php }?>><?php echo $_smarty_tpl->tpl_vars['gs']->value['descripcion'];?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-md-3 control-label">Nombre: </label>
                    <div class="col-md-9">
                        <input type="text" id="fam_nombre" class="form-control" name="fam_nombre" maxlength="60" value="<?php if (($_smarty_tpl->tpl_vars['familiar_id']->value>0)) {?><?php echo $_smarty_tpl->tpl_vars['familiar']->value['nombre'];?>
<?php }?>" required>
                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-md-3 control-label">Año nac: </label>
                    <div class="col-md-9">
                        <input type="number" id="fam_nacimiento" class="form-control" name="fam_nacimiento" maxlength="60" value="<?php if (($_smarty_tpl->tpl_vars['familiar_id']->value>0)) {?><?php echo $_smarty_tpl->tpl_vars['familiar']->value['anho_nacimiento'];?>
<?php }?>" required>
                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-md-3 control-label">Ocupación: </label>
                    <div class="col-md-9">
                        <input type="text" id="fam_ocupacion" class="form-control" name="fam_ocupacion" maxlength="60" value="<?php if (($_smarty_tpl->tpl_vars['familiar_id']->value>0)) {?><?php echo $_smarty_tpl->tpl_vars['familiar']->value['ocupacion'];?>
<?php }?>" required>
                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-md-3 control-label">Dirección: </label>
                    <div class="col-md-9">
                          <input type="text" id="fam_direccion" class="form-control" maxlength="80"  name="fam_direccion" value="<?php if (($_smarty_tpl->tpl_vars['familiar_id']->value>0)) {?><?php echo $_smarty_tpl->tpl_vars['familiar']->value['direccion'];?>
<?php }?>" >
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label class="col-md-3 control-label">Documento: </label>
                  <div class="col-md-9">
                         <input type="text" id="fam_identificacion" class="form-control" name="fam_identificacion" maxlength="20" value="<?php if (($_smarty_tpl->tpl_vars['familiar_id']->value>0)) {?><?php echo $_smarty_tpl->tpl_vars['familiar']->value['identificacion'];?>
<?php }?>" required>
                         <input type="hidden" id="paciente_id" name="paciente_id" value="<?php echo $_smarty_tpl->tpl_vars['paciente_id']->value;?>
" required>
                         <input type="hidden" id="familiar_id" name="familiar_id" value="<?php echo $_smarty_tpl->tpl_vars['familiar_id']->value;?>
" required>
                  </div>
                </div>
                <div class="form-group">
                    <label  class="col-md-3 control-label">Parentesco: </label>
                    <div class="col-md-9">
                        <select  class="form-control" id="fam_parentesco" name="fam_parentesco" >
                            <option value="00">- SELECCIONE -</option>
                            <?php  $_smarty_tpl->tpl_vars['gs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['parentesco']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gs']->key => $_smarty_tpl->tpl_vars['gs']->value) {
$_smarty_tpl->tpl_vars['gs']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['gs']->value['id'];?>
" <?php if (($_smarty_tpl->tpl_vars['familiar_id']->value>0)) {?><?php if (($_smarty_tpl->tpl_vars['familiar']->value['parentesco']==$_smarty_tpl->tpl_vars['gs']->value['id'])) {?>selected<?php }?><?php }?>><?php echo $_smarty_tpl->tpl_vars['gs']->value['descripcion'];?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-md-3 control-label">Vive: </label>
                    <div class="col-md-9">
                       <select  class="form-control" id="fam_vive" name="fam_vive" >
                            <option value="S" <?php if (($_smarty_tpl->tpl_vars['familiar_id']->value>0)) {?><?php if (($_smarty_tpl->tpl_vars['familiar']->value['vive']=="S")) {?>selected<?php }?><?php }?>>Si</option>
                            <option value="N" <?php if (($_smarty_tpl->tpl_vars['familiar_id']->value>0)) {?><?php if (($_smarty_tpl->tpl_vars['familiar']->value['vive']=="N")) {?>selected<?php }?><?php }?>>No</option>
                       </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Email: </label>
                    <div class="col-md-9">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="icon-envelope"></i></span>
                        <input type="email" id="fam_email" class="form-control" placeholder="Correo electrónico" name="fam_email"  maxlength="80" value="<?php if (($_smarty_tpl->tpl_vars['familiar_id']->value>0)) {?><?php echo $_smarty_tpl->tpl_vars['familiar']->value['email'];?>
<?php }?>" />
                      </div>
                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-md-3 control-label" name="telefono" >Teléfono: </label>
                    <div class="col-md-9">
                        <input type="text" id="fam_telefono" class="form-control" maxlength="15"  name="fam_telefono" value="<?php if (($_smarty_tpl->tpl_vars['familiar_id']->value>0)) {?><?php echo $_smarty_tpl->tpl_vars['familiar']->value['telefono'];?>
<?php }?>" >
                    </div>
                  </div>
                <div class="form-group">
                    <label  class="col-md-3 control-label">Móvil: </label>
                    <div class="col-md-9">
                        <input type="text" id="fam_movil" class="form-control" maxlength="15" name="fam_movil" value="<?php if (($_smarty_tpl->tpl_vars['familiar_id']->value>0)) {?><?php echo $_smarty_tpl->tpl_vars['familiar']->value['movil'];?>
<?php }?>" >
                    </div>
                </div>

            </div>
        </div>
    </form>
</div>    <?php }} ?>
