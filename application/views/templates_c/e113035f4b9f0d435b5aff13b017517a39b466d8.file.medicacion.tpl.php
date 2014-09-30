<?php /* Smarty version Smarty-3.1.15, created on 2014-05-30 01:28:39
         compiled from "application\views\templates\especialista\medicacion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19860538817070d10b6-18168830%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e113035f4b9f0d435b5aff13b017517a39b466d8' => 
    array (
      0 => 'application\\views\\templates\\especialista\\medicacion.tpl',
      1 => 1401427551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19860538817070d10b6-18168830',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_medicamentos' => 0,
    'i' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53881707169351_81543698',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53881707169351_81543698')) {function content_53881707169351_81543698($_smarty_tpl) {?><table class="table table-striped table-hover">
    <thead>
       <tr>
          <th width="30%">Medicamento</th>
          <th width="30%">Presentación</th>
          <th width="10%">Cantidad</th>
          <th width="25%">Posología</th>
          <th width="5%">Eliminar</th>
       </tr>
    </thead>
    <tbody>
        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_medicamentos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
             <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['medicamento'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['presentacion'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['cantidad'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['posologia'];?>
</td>
                <td>
                     <a href="#" id="del<?php echo $_smarty_tpl->tpl_vars['i']->value['medicamento_id'];?>
" >
                          <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/img/icons/delete_page.png" title="Eliminar"
                               onclick="if(confirm('¿Realmente desea eliminar el medicamento?')){ eliminarMedicamento(<?php echo $_smarty_tpl->tpl_vars['i']->value['medicamento_id'];?>
); } "/>
                     </a>
                </td>
             </tr>
         <?php } ?>
    </tbody>
</table><?php }} ?>
