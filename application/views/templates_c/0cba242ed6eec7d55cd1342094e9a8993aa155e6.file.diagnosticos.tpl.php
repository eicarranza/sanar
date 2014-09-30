<?php /* Smarty version Smarty-3.1.15, created on 2014-06-16 01:04:53
         compiled from "application\views\templates\especialista\diagnosticos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1534052f644a867a824-60294560%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cba242ed6eec7d55cd1342094e9a8993aa155e6' => 
    array (
      0 => 'application\\views\\templates\\especialista\\diagnosticos.tpl',
      1 => 1402895079,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1534052f644a867a824-60294560',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52f644a87007f0_84788756',
  'variables' => 
  array (
    '_diagnostico' => 0,
    'i' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f644a87007f0_84788756')) {function content_52f644a87007f0_84788756($_smarty_tpl) {?><table class="table table-striped table-hover">
  <thead>
     <tr>
        <th>Código</th>
        <th>Diagnóstico</th>
        <th>Descripción</th>
        <th>Tipo diagnóstico</th>
        <th >Eliminar</th>
     </tr>
  </thead>
  <tbody>
      <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_diagnostico']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
           <tr>
              <td><?php echo $_smarty_tpl->tpl_vars['i']->value['codigo'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['i']->value['cie_descripcion'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['i']->value['cd_descripcion'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['i']->value['tipo_descripcion'];?>
</td>
              <td>
                   <a href="#" id="del<?php echo $_smarty_tpl->tpl_vars['i']->value['diagnostico_id'];?>
" >
                        <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/img/icons/delete_page.png" title="Eliminar"
                             onclick="if(confirm('¿Realmente desea eliminar el diagnóstico?')){ eliminarDiagnostico(<?php echo $_smarty_tpl->tpl_vars['i']->value['consulta_id'];?>
, <?php echo $_smarty_tpl->tpl_vars['i']->value['diagnostico_id'];?>
, <?php echo $_smarty_tpl->tpl_vars['i']->value['diagnostico_tipo_id'];?>
); } "/>
                   </a>
              </td>
           </tr>
       <?php } ?>
  </tbody>
</table>
<?php }} ?>
