<?php /* Smarty version Smarty-3.1.15, created on 2014-01-27 11:47:28
         compiled from "application\views\templates\agenda\agenda-horario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:755752e68da017ead2-53159610%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c4164c99d952e9616315f5a26575a2263a5c166' => 
    array (
      0 => 'application\\views\\templates\\agenda\\agenda-horario.tpl',
      1 => 1390841240,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '755752e68da017ead2-53159610',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'horario' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52e68da024fc90_05058747',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e68da024fc90_05058747')) {function content_52e68da024fc90_05058747($_smarty_tpl) {?>
<script>
    
</script>


<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead>
           <tr>
              <th>Fecha Inicio</th>
              <th>Fecha Fin</th>
              <th>Hora Inicio</th>
              <th>Hora Fin</th>
              <th>Descanso Inicio</th>
              <th>Descanso Fin</th>
              <th>Duración</th>
           </tr>
        </thead>
        <tbody>
            <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['horario']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                 <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value['fecha_inicio'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value['fecha_fin'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value['hora_inicio'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value['hora_fin'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value['descanso_inicio'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value['descanso_fin'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value['duracion'];?>
</td>
                 </tr>
             <?php } ?>
        </tbody>
    </table>
</div><?php }} ?>
