<?php /* Smarty version Smarty-3.1.15, created on 2014-09-30 22:26:58
         compiled from "application\views\templates\paciente\familiares.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24351542b396ae7f0a9-74108078%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '924219ce0ae1a461962616e86f60c1928ff69d8e' => 
    array (
      0 => 'application\\views\\templates\\paciente\\familiares.tpl',
      1 => 1412130411,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24351542b396ae7f0a9-74108078',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_542b396af0b295_73700035',
  'variables' => 
  array (
    '_familiar' => 0,
    'i' => 0,
    'url' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542b396af0b295_73700035')) {function content_542b396af0b295_73700035($_smarty_tpl) {?><table class="table table-striped table-hover">
    <thead>
       <tr>
          <th>Parentesco</th>
          <th>Nombre</th>
          <th >Móvil</th>
          <th>Ver</th>
          <th>Eliminar</th>
       </tr>
    </thead>
    <tbody>
    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_familiar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
        <tr>
           <td><?php echo $_smarty_tpl->tpl_vars['i']->value['parentesco_desc'];?>
</td>
           <td><?php echo $_smarty_tpl->tpl_vars['i']->value['nombre'];?>
</td>
           <td><?php echo $_smarty_tpl->tpl_vars['i']->value['movil'];?>
</td>
           <td >
               <a id="fam_<?php echo $_smarty_tpl->tpl_vars['i']->value['familiar_id'];?>
" data-toggle="modal" href="#responsive">
                   <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/img/icons/user_edit.png" onclick="registrarFamiliar(<?php echo $_smarty_tpl->tpl_vars['i']->value['familiar_id'];?>
, <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
)"/>
               </a>
           </td>
           <td>
               <a href="#" id="del<?php echo $_smarty_tpl->tpl_vars['i']->value['familiar_id'];?>
" >
                    <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/img/icons/delete_page.png" title="Eliminar"
                         onclick="if(confirm('¿Realmente desea eliminar el archivo?')){ eliminarFamiliar(<?php echo $_smarty_tpl->tpl_vars['i']->value['familiar_id'];?>
, <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
); } "/>
               </a>
           </td>
        </tr>
    <?php } ?>
    </tbody>
</table><?php }} ?>
