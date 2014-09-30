<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 01:29:00
         compiled from "application\views\templates\agenda\especialistas-apoyo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32581533e3db2400040-94937717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70bb9de8cfb2d93a232c6c4e7b763d5c75fb3c48' => 
    array (
      0 => 'application\\views\\templates\\agenda\\especialistas-apoyo.tpl',
      1 => 1396589326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32581533e3db2400040-94937717',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e3db248c523_20979184',
  'variables' => 
  array (
    '_especialistas_apoyo' => 0,
    'i' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e3db248c523_20979184')) {function content_533e3db248c523_20979184($_smarty_tpl) {?><table class="table table-striped table-hover">
    <thead>
       <tr>
          <th>Especialista</th>
          <th>Rol</th>
          <th >Eliminar</th>
       </tr>
    </thead>
    <tbody>
        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_especialistas_apoyo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
             <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['nombres'];?>
 <?php echo $_smarty_tpl->tpl_vars['i']->value['apellidos'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['descripcion'];?>
</td>
                <td>
                     <a href="#" id="del_<?php echo $_smarty_tpl->tpl_vars['i']->value['cita_id'];?>
_<?php echo $_smarty_tpl->tpl_vars['i']->value['especialista_id'];?>
" >
                          <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/img/icons/delete_page.png" title="Eliminar"
                               onclick="if(confirm('¿Realmente desea eliminar el registro?')){ eliminarRegistro(<?php echo $_smarty_tpl->tpl_vars['i']->value['cita_id'];?>
, <?php echo $_smarty_tpl->tpl_vars['i']->value['especialista_id'];?>
); } "/>
                     </a>
                </td>
             </tr>
         <?php } ?>
    </tbody>
</table><?php }} ?>
