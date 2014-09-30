<?php /* Smarty version Smarty-3.1.15, created on 2014-06-03 23:26:25
         compiled from "application\views\templates\especialista\quirurgico\enfermeria.tpl" */ ?>
<?php /*%%SmartyHeaderCode:290705371b3c30ce703-84901987%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1f00fb8c1974b93f96afb1869d6f93f0edc5f94' => 
    array (
      0 => 'application\\views\\templates\\especialista\\quirurgico\\enfermeria.tpl',
      1 => 1401852214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '290705371b3c30ce703-84901987',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5371b3c3148162_85764402',
  'variables' => 
  array (
    '_notas' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5371b3c3148162_85764402')) {function content_5371b3c3148162_85764402($_smarty_tpl) {?><div class="portlet-title">
    <div class="caption"><i class="icon-comments"></i>Notas</div>
    </div>
    <div class="portlet-body">
        <table class="table table-striped table-hover">
            <thead>
               <tr>
                  <th width="10%">Fecha</th>
                  <th>Notas</th>
               </tr>
            </thead>
            <tbody>
                <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_notas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                     <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value['fecha'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value['notas'];?>
</td>
                     </tr>
                 <?php } ?>
            </tbody>
        </table>
    </div>
</div><?php }} ?>
