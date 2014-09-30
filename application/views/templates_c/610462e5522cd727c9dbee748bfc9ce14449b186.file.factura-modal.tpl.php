<?php /* Smarty version Smarty-3.1.15, created on 2014-02-18 22:49:52
         compiled from "application\views\templates\agenda\factura-modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31176530429e088a305-79226058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '610462e5522cd727c9dbee748bfc9ce14449b186' => 
    array (
      0 => 'application\\views\\templates\\agenda\\factura-modal.tpl',
      1 => 1391270552,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31176530429e088a305-79226058',
  'function' => 
  array (
  ),
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
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_530429e099c6d2_60007030',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530429e099c6d2_60007030')) {function content_530429e099c6d2_60007030($_smarty_tpl) {?><div class="row">
    <?php echo $_smarty_tpl->tpl_vars['errors']->value;?>

    <form id="form-nvoPaciente" class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
pacientes/nuevo" method="post" accept-charset="utf-8">

    <div class="form-body">
        <div class="form-group">
            <label  class="col-md-3 control-label">Tipo identificación (*)</label>
            <div class="col-md-9">
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
          <label class="col-md-3 control-label">Identificación (*)</label>
          <div class="col-md-9">
             <input type="text" class="form-control" id="mdl_identificacion" name="identificacion" placeholder="" maxlength="20" value="<?php echo $_smarty_tpl->tpl_vars['identificacion']->value;?>
" required>
             <input type="hidden" id="mdl_horaini" name="mdl_horaini" value="<?php echo $_smarty_tpl->tpl_vars['horaini']->value;?>
" required>
             <input type="hidden" name="paciente_id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" required>
          </div>
       </div>
       <div class="form-group">
          <label  class="col-md-3 control-label">Primer nombre (*)</label>
          <div class="col-md-9">
             <input type="text" class="form-control" name="nombre1" placeholder="" maxlength="45" value="<?php if (($_smarty_tpl->tpl_vars['id']->value>0)) {?><?php echo $_smarty_tpl->tpl_vars['paciente']->value['nombre1'];?>
<?php }?>" required>
          </div>
       </div>
       <div class="form-group">
          <label  class="col-md-3 control-label">Segundo nombre</label>
          <div class="col-md-9">
             <input type="text" class="form-control" name="nombre2" placeholder="" maxlength="45" value="<?php if (($_smarty_tpl->tpl_vars['id']->value>0)) {?><?php echo $_smarty_tpl->tpl_vars['paciente']->value['nombre2'];?>
<?php }?>" >
          </div>
       </div>
       <div class="form-group">
          <label  class="col-md-3 control-label">Primer apellido (*)</label>
          <div class="col-md-9">
             <input type="text" class="form-control" name="apellido1" placeholder="" maxlength="45" value="<?php if (($_smarty_tpl->tpl_vars['id']->value>0)) {?><?php echo $_smarty_tpl->tpl_vars['paciente']->value['apellido1'];?>
<?php }?>" required>
          </div>
       </div>
       <div class="form-group">
          <label  class="col-md-3 control-label">Segundo apellido</label>
          <div class="col-md-9">
             <input type="text" class="form-control" name="apellido2" placeholder="" maxlength="45" value="<?php if (($_smarty_tpl->tpl_vars['id']->value>0)) {?><?php echo $_smarty_tpl->tpl_vars['paciente']->value['apellido2'];?>
<?php }?>" >
          </div>
       </div>
       <div class="form-group">
          <label  class="col-md-3 control-label">Sexo</label>
          <div class="col-md-9">
             <select  class="form-control"  name="sexo" >
                <option value="F" <?php if (($_smarty_tpl->tpl_vars['id']->value>0)) {?><?php if (($_smarty_tpl->tpl_vars['paciente']->value['sexo']=="F")) {?>selected<?php }?><?php }?>>Femenino</option>
                <option value="M" <?php if (($_smarty_tpl->tpl_vars['id']->value>0)) {?><?php if (($_smarty_tpl->tpl_vars['paciente']->value['sexo']=="M")) {?>selected<?php }?><?php }?>>Masculino</option>
             </select>
          </div>
       </div>
       <div class="form-group">
          <label  class="col-md-3 control-label">Móvil</label>
          <div class="col-md-9">
             <input type="text" class="form-control"  placeholder="" maxlength="15" name="movil" value="<?php if (($_smarty_tpl->tpl_vars['id']->value>0)) {?><?php echo $_smarty_tpl->tpl_vars['paciente']->value['movil'];?>
<?php }?>" >
          </div>
       </div>
       <div class="form-group">
          <label class="col-md-3 control-label">Correo electrónico</label>
          <div class="col-md-9">
              <div class="input-group">
                 <span class="input-group-addon"><i class="icon-envelope"></i></span>
                 <input type="email" class="form-control" placeholder="Correo electrónico" name="email"  maxlength="80" value="<?php if (($_smarty_tpl->tpl_vars['id']->value>0)) {?><?php echo $_smarty_tpl->tpl_vars['paciente']->value['email'];?>
<?php }?>" />
              </div>
          </div>
       </div>
    </div>
 </form>
</div><?php }} ?>
