<?php /* Smarty version Smarty-3.1.15, created on 2014-09-30 17:32:51
         compiled from "application\views\templates\especialista\lista_pacientes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23782542b1952a4e278-84348004%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fdab122e21e2fe4b3d322c3e90391c212c75833' => 
    array (
      0 => 'application\\views\\templates\\especialista\\lista_pacientes.tpl',
      1 => 1412112764,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23782542b1952a4e278-84348004',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_542b1952ad2bb1_10748475',
  'variables' => 
  array (
    'pacientes' => 0,
    'i' => 0,
    'pag_links' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542b1952ad2bb1_10748475')) {function content_542b1952ad2bb1_10748475($_smarty_tpl) {?><ul class="nav" id="nav1">
    <table class="table table-striped table-bordered table-hover" id="sample_2">
        <col style="width:15%">
        <col style="width:15%">
        <col style="width:15%">
        <col style="width:15%">
        <col style="width:25%">
        <col style="width:15%">
        <thead>
           <tr>
              <th >Identificacion</th>
              <th >Nombre</th>
              <th >Apellido</th>
              <th >Telefono</th>
              <th >Correo</th>
              <th >Consultas</th>
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
                  <td><a class="btn default btn-xs purple" data-toggle="modal" onclick="pacienteConsultas('<?php echo $_smarty_tpl->tpl_vars['i']->value['paciente_id'];?>
');">
                                          <i class="icon-edit"></i> Consultas</a></td>
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
