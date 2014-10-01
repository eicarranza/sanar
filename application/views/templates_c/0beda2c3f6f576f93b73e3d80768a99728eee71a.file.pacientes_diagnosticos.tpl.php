<?php /* Smarty version Smarty-3.1.15, created on 2014-09-30 18:19:09
         compiled from "application\views\templates\especialista\pacientes_diagnosticos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24914530c26cfc10616-23825914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0beda2c3f6f576f93b73e3d80768a99728eee71a' => 
    array (
      0 => 'application\\views\\templates\\especialista\\pacientes_diagnosticos.tpl',
      1 => 1412115528,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24914530c26cfc10616-23825914',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_530c26cfc97b55_82847495',
  'variables' => 
  array (
    '_historial_diagnostico' => 0,
    'i' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530c26cfc97b55_82847495')) {function content_530c26cfc97b55_82847495($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\sanar\\system\\libs\\Smarty\\libs\\plugins\\modifier.truncate.php';
?>        <table class="table table-striped table-bordered table-hover" id="sample_1">
          <thead>
             <tr>
                <th width="12%">Fecha</th>
                <th width="20%">Motivo Consulta</th>
                <!--<th>Enfermedad Actual</th>-->
                <th>Diagnóstico CIE10</th>
                <th width="10%">Ver</th>
             </tr>
          </thead>
          <tbody>
              <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_historial_diagnostico']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                   <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value['fecha'];?>
</td>
                        <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['i']->value['motivo'],50,"...",true);?>
</td>
                        <!--<td><label title="<?php echo $_smarty_tpl->tpl_vars['i']->value['enfermedad_actual'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['i']->value['enfermedad_actual'],50,"...",true);?>
</label></td>-->
                        <td><label title="<?php echo $_smarty_tpl->tpl_vars['i']->value['codigo'];?>
 - <?php echo $_smarty_tpl->tpl_vars['i']->value['cie_descripcion'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['cie_descripcion'];?>
</label></td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['i']->value['cita_tipo_id']==2) {?>
                                <a class="btn default btn-xs purple" data-toggle="modal" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/cirugia/<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
">
                                    <i class="icon-edit"></i>Procedimiento</a>
                            <?php } else { ?>
                                <a class="btn default btn-xs purple" data-toggle="modal" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/consulta/<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
">
                                    <i class="icon-edit"></i>Consulta</a>
                            <?php }?>
                        </td>
                   </tr>
               <?php } ?>
          </tbody>
        </table>
     </div><?php }} ?>
