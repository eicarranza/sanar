<?php /* Smarty version Smarty-3.1.15, created on 2014-02-20 21:44:46
         compiled from "application\views\templates\especialista\agenda.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1010852f64a027cea01-27302171%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '070f505a74f7daa2db0e334f54c30383378f4f2e' => 
    array (
      0 => 'application\\views\\templates\\especialista\\agenda.tpl',
      1 => 1392950685,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1010852f64a027cea01-27302171',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52f64a028b8155_39543648',
  'variables' => 
  array (
    'agenda' => 0,
    'i' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f64a028b8155_39543648')) {function content_52f64a028b8155_39543648($_smarty_tpl) {?><table class="table table-striped table-hover" id="sample_2">
    <thead>
       <tr>
            <th width="10%">Hora</th>
            <th width="80%">Paciente</th>
            <th width="10%">Estado</th>
       </tr>
    </thead>
    <tbody>
    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['agenda']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
        <tr id="row_<?php echo $_smarty_tpl->tpl_vars['i']->value['hora'];?>
" class="odd gradeX" onclick="consulta('<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['i']->value['paciente_id'];?>
')">
            <td><?php echo $_smarty_tpl->tpl_vars['i']->value['hora'];?>
</td>
            <td>
                <div id="dv_cita_<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
">
                    <label><?php echo $_smarty_tpl->tpl_vars['i']->value['nombre1'];?>
 <?php echo $_smarty_tpl->tpl_vars['i']->value['nombre2'];?>
 <?php echo $_smarty_tpl->tpl_vars['i']->value['apellido1'];?>
 <?php echo $_smarty_tpl->tpl_vars['i']->value['apellido2'];?>
</label>
                    <input type="hidden" id="pacienteid_<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" name="pacienteid_<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['paciente_id'];?>
">
                </div>
            </td>
            <td>
                <div id="dv_acciones_<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
">
                    <?php if (($_smarty_tpl->tpl_vars['i']->value['estado_cita_id']==0)) {?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/img/icons/states/absent_user.png" title="Ausente"/>
                    <?php } elseif (($_smarty_tpl->tpl_vars['i']->value['estado_cita_id']==1)) {?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/img/icons/states/present_user.png" title="Activo"/>
                    <?php } elseif (($_smarty_tpl->tpl_vars['i']->value['estado_cita_id']==2)) {?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/img/icons/states/finish_user.png" title="Finalizada"/>
                    <?php }?>
                </div>
            </td>
       </tr>
    <?php } ?>
    </tbody>
</table>
<?php }} ?>
