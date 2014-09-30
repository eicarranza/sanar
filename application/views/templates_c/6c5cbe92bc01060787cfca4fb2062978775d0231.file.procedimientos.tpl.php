<?php /* Smarty version Smarty-3.1.15, created on 2014-02-24 22:01:42
         compiled from "application\views\templates\especialista\procedimientos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15086530c06eb4ac2b3-94498320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c5cbe92bc01060787cfca4fb2062978775d0231' => 
    array (
      0 => 'application\\views\\templates\\especialista\\procedimientos.tpl',
      1 => 1393297297,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15086530c06eb4ac2b3-94498320',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_530c06eb53c7e8_55996782',
  'variables' => 
  array (
    '_procedimiento' => 0,
    'i' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530c06eb53c7e8_55996782')) {function content_530c06eb53c7e8_55996782($_smarty_tpl) {?><table class="table table-striped table-hover">
  <thead>
     <tr>
        <th width="10%">Código</th>
        <th width="60%">Procedimiento</th>
        <th width="25%">Descripción</th>
        <th width="5%">Eliminar</th>
     </tr>
  </thead>
  <tbody>
      <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_procedimiento']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
           <tr>
              <td><?php echo $_smarty_tpl->tpl_vars['i']->value['codigo'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['i']->value['cups_descripcion'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['i']->value['cp_observacion'];?>
</td>
              <td>
                   <a href="#" id="del<?php echo $_smarty_tpl->tpl_vars['i']->value['procedimiento_id'];?>
" >
                        <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/img/icons/delete_page.png" title="Eliminar"
                             onclick="if(confirm('¿Realmente desea eliminar el procedimiento?')){ eliminarProcedimiento(<?php echo $_smarty_tpl->tpl_vars['i']->value['consulta_id'];?>
, <?php echo $_smarty_tpl->tpl_vars['i']->value['procedimiento_id'];?>
); } "/>
                   </a>
              </td>
           </tr>
       <?php } ?>
  </tbody>
</table>
<?php }} ?>
