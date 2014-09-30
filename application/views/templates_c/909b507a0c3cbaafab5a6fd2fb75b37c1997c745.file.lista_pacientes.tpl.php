<?php /* Smarty version Smarty-3.1.15, created on 2014-09-30 13:13:42
         compiled from "application\views\templates\paciente\lista_pacientes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1924542acc1b949579-27626527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '909b507a0c3cbaafab5a6fd2fb75b37c1997c745' => 
    array (
      0 => 'application\\views\\templates\\paciente\\lista_pacientes.tpl',
      1 => 1412097220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1924542acc1b949579-27626527',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_542acc1b9f9aa0_78291501',
  'variables' => 
  array (
    'pacientes' => 0,
    'i' => 0,
    'url' => 0,
    'pag_links' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542acc1b9f9aa0_78291501')) {function content_542acc1b9f9aa0_78291501($_smarty_tpl) {?><ul class="nav" id="nav1">
    <table class="table table-striped table-bordered table-hover" id="sample_2">
        <col style="width:10%">
        <col style="width:15%">
        <col style="width:15%">
        <col style="width:15%">
        <col style="width:25%">
        <col style="width:10%">
        <col style="width:10%">
        <thead>
           <tr>
              <th >Identificacion</th>
              <th >Nombre</th>
              <th >Apellido</th>
              <th >Telefono</th>
              <th >Correo</th>
              <th >Editar</th>
              <th >Eliminar</th>
           </tr>
        </thead>
        <tbody>
            <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pacientes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                <tr class="odd gradeX">
                  <td><?php echo $_smarty_tpl->tpl_vars['i']->value['identificacion'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['i']->value['nombre1'];?>
 <?php echo $_smarty_tpl->tpl_vars['i']->value['nombre2'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['i']->value['apellido1'];?>
 <?php echo $_smarty_tpl->tpl_vars['i']->value['apellido2'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['i']->value['telefono'];?>
</td>
                  <td ><?php echo $_smarty_tpl->tpl_vars['i']->value['email'];?>
</td>
                  <td><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
pacientes/nuevo/<?php echo $_smarty_tpl->tpl_vars['i']->value['paciente_id'];?>
" class="btn default btn-xs purple"><i class="icon-edit"></i> Editar</a></td>
                  <td><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
pacientes/eliminar/<?php echo $_smarty_tpl->tpl_vars['i']->value['paciente_id'];?>
" class="btn default btn-xs black"><i class="icon-trash"></i> Eliminar</a></td>
               </tr>
            <?php } ?>
        </tbody>
     </table>
</ul>
<ul>
<div class="dataTables_paginate paging_bootstrap">
    <ul id="pagination-digg" class="pagination">
      <?php echo $_smarty_tpl->tpl_vars['pag_links']->value;?>
  
    </ul>
</div><?php }} ?>
