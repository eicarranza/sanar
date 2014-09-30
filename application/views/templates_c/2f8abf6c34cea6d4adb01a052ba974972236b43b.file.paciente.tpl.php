<?php /* Smarty version Smarty-3.1.15, created on 2014-05-31 23:31:34
         compiled from "application\views\templates\especialista\paciente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1946652e09698a2e765-25839632%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f8abf6c34cea6d4adb01a052ba974972236b43b' => 
    array (
      0 => 'application\\views\\templates\\especialista\\paciente.tpl',
      1 => 1401593488,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1946652e09698a2e765-25839632',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52e09698a79952_70276597',
  'variables' => 
  array (
    'cita_tipo_id' => 0,
    'url' => 0,
    'paciente' => 0,
    'cita_id' => 0,
    'fecha' => 0,
    'especialista' => 0,
    'edad' => 0,
    'consulta_tipo' => 0,
    'familiar' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e09698a79952_70276597')) {function content_52e09698a79952_70276597($_smarty_tpl) {?>
    <script>
    jQuery(document).ready(function() {
        $("#btn-consulta").click(function () {
            <?php if ($_smarty_tpl->tpl_vars['cita_tipo_id']->value==2) {?>
                document.getElementById("frm-paciente").action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/cirugia";
            <?php } elseif ($_smarty_tpl->tpl_vars['cita_tipo_id']->value==21) {?>
                document.getElementById("frm-paciente").action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/preanestesia";
            <?php } else { ?>
                document.getElementById("frm-paciente").action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/consulta";
            <?php }?>
            $( "#frm-paciente" ).submit();
            return false;
        });
    });
    </script>    


<div class="row">
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form id="frm-paciente" class="form-horizontal" method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/consulta">
           <div class="form-body">
              <h3 class="form-section"><?php echo $_smarty_tpl->tpl_vars['paciente']->value['nombre1'];?>
 <?php echo $_smarty_tpl->tpl_vars['paciente']->value['nombre2'];?>
 <?php echo $_smarty_tpl->tpl_vars['paciente']->value['apellido1'];?>
 <?php echo $_smarty_tpl->tpl_vars['paciente']->value['apellido2'];?>
</h3>
              <input type="hidden" name="cita_id" value="<?php echo $_smarty_tpl->tpl_vars['cita_id']->value;?>
" required>
              <input type="hidden" name="paciente_id" value="<?php echo $_smarty_tpl->tpl_vars['paciente']->value['paciente_id'];?>
" required>
              <input type="hidden" name="fecha" value="<?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>
" required>
              <input type="hidden" name="especialista" value="<?php echo $_smarty_tpl->tpl_vars['especialista']->value;?>
" required>
              <div class="row">
                    <div class="form-group">
                       <label class="control-label col-md-6">Edad: </label>
                       <div class="col-md-6">
                          <p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['edad']->value;?>
</p>
                       </div>
                    </div>
                    <div class="form-group">
                       <label class="control-label col-md-6">Fecha nacimiento:</label>
                       <div class="col-md-6">
                          <p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['paciente']->value['fecha_nacimiento'];?>
</p>
                       </div>
                    </div>
                    <div class="form-group">
                       <label class="control-label col-md-6">Tipo de Consulta:</label>
                       <div class="col-md-6">
                          <p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['consulta_tipo']->value;?>
</p>
                       </div>
                    </div>
                    <div class="form-group">
                       <label class="control-label col-md-6">Familiares:</label>
                        <div class="col-md-6">
                            <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['familiar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                                <p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['i']->value['nombre'];?>
</p>
                            <?php } ?>
                        </div>
                    </div>
              </div>
            </div>
            <div class="form-actions right">
                <a id="btn-consulta" class="btn btn-lg green m-icon-big">Iniciar consulta
                    <i class="m-icon-big-swapright m-icon-white"></i>
                </a>
            </div>
        </form>
        <!-- END FORM-->  
     </div>
</div><?php }} ?>
