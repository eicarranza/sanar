<?php /* Smarty version Smarty-3.1.15, created on 2014-05-17 01:34:49
         compiled from "application\views\templates\especialista\interconsulta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28792530c1cb6225111-50315571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d7e5fb1c37bcf077efd5331f30c6e6fefc031d6' => 
    array (
      0 => 'application\\views\\templates\\especialista\\interconsulta.tpl',
      1 => 1400304875,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28792530c1cb6225111-50315571',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_530c1cb62aa7a1_53180517',
  'variables' => 
  array (
    '_interconsultas' => 0,
    'i' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530c1cb62aa7a1_53180517')) {function content_530c1cb62aa7a1_53180517($_smarty_tpl) {?><table class="table table-striped table-hover">
    <thead>
       <tr>
          <th width="30%">Especialidad</th>
          <th width="60%">Descripción</th>
          <th width="5%">Imprimir</th>
          <th width="5%">Eliminar</th>
       </tr>
    </thead>
    <tbody>
        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_interconsultas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
             <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['esp_descripcion'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['ci_descripcion'];?>
</td>
                <td>
                     <a href="#" id="imp<?php echo $_smarty_tpl->tpl_vars['i']->value['especialidad_id'];?>
" >
                          <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/img/icons/printer.png" title="Imprimir"
                               onclick="imprimirInterconsulta(<?php echo $_smarty_tpl->tpl_vars['i']->value['consulta_id'];?>
, <?php echo $_smarty_tpl->tpl_vars['i']->value['especialidad_id'];?>
); "/>
                     </a>
                </td>
                <td>
                     <a href="#" id="del<?php echo $_smarty_tpl->tpl_vars['i']->value['especialidad_id'];?>
" >
                          <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/img/icons/delete_page.png" title="Eliminar"
                               onclick="if(confirm('¿Realmente desea eliminar la interconsulta?')){ eliminarInterconsulta(<?php echo $_smarty_tpl->tpl_vars['i']->value['consulta_id'];?>
, <?php echo $_smarty_tpl->tpl_vars['i']->value['especialidad_id'];?>
); } "/>
                     </a>
                </td>
             </tr>
         <?php } ?>
    </tbody>
</table><?php }} ?>
