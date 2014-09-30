<?php /* Smarty version Smarty-3.1.15, created on 2014-06-16 01:14:27
         compiled from "application\views\templates\especialista\quirurgico\evolucion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24784536ddbf4596086-94067669%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68eddee366ffaf6d6076455517f93876507998b2' => 
    array (
      0 => 'application\\views\\templates\\especialista\\quirurgico\\evolucion.tpl',
      1 => 1402895654,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24784536ddbf4596086-94067669',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_536ddbf460d703_10832040',
  'variables' => 
  array (
    '_evolucion' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536ddbf460d703_10832040')) {function content_536ddbf460d703_10832040($_smarty_tpl) {?><table class="table table-striped table-hover">
    <thead>
        <tr>
            <th width="10%">Fecha</th>
            <th width="20%">Especialista</th>
            <th>Detalle</th>
        </tr>
    </thead>
    <tbody>
        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_evolucion']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
             <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['fecha'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['especialista'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['detalle'];?>
</td>
             </tr>
         <?php } ?>
    </tbody>
</table><?php }} ?>
