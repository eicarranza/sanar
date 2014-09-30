<?php /* Smarty version Smarty-3.1.15, created on 2014-06-14 10:01:41
         compiled from "application\views\templates\especialista\anestesia\antecedentes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32235539c5534ec8554-17879102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5522b3c0e182d1a20427b8f942760c8996f7a4a9' => 
    array (
      0 => 'application\\views\\templates\\especialista\\anestesia\\antecedentes.tpl',
      1 => 1402754477,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32235539c5534ec8554-17879102',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_539c55351231b4_50380203',
  'variables' => 
  array (
    'aPersonales' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539c55351231b4_50380203')) {function content_539c55351231b4_50380203($_smarty_tpl) {?><h3 class="form-section">Antecedentes</h3>
<form class="form-horizontal">
    <div class="form-body">
        <div class="form-group">
            <div class="col-md-2">
                <label class="control-label">
                    Patológicos:   
                </label>
            </div>
            <div class="col-md-8">
                <textarea class="form-control" name="patologicos" rows="2" onchange="setAPersonales(this)"><?php if (!empty($_smarty_tpl->tpl_vars['aPersonales']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aPersonales']->value['patologicos'];?>
<?php }?></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-2">
                <label class="control-label">Alérgicos:</label>
            </div>
            <div class="col-md-8">
                <textarea class="form-control" name="alergicos" rows="2" onchange="setAPersonales(this)"><?php if (!empty($_smarty_tpl->tpl_vars['aPersonales']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aPersonales']->value['alergicos'];?>
<?php }?></textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-2">
                <label class="control-label">Tóxicos:</label>
            </div>
            <div class="col-md-8">
                <textarea class="form-control" name="habitos_toxicos" rows="2" onchange="setAPersonales(this)"><?php if (!empty($_smarty_tpl->tpl_vars['aPersonales']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aPersonales']->value['habitos_toxicos'];?>
<?php }?></textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-2">
                <label class="control-label">Transfusiones:</label>
            </div>
            <div class="col-md-8">
                <textarea class="form-control" name="transfusiones" rows="2" onchange="setAPersonales(this)"><?php if (!empty($_smarty_tpl->tpl_vars['aPersonales']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aPersonales']->value['transfusiones'];?>
<?php }?></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-2">
                <label class="control-label">Medicamentos:</label>
            </div>
            <div class="col-md-8">
                <textarea class="form-control" name="medicamentos" rows="2" onchange="setAPersonales(this)"><?php if (!empty($_smarty_tpl->tpl_vars['aPersonales']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aPersonales']->value['medicamentos'];?>
<?php }?></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-2">
                <label class="control-label">Quirúrgicos:</label>
            </div>
            <div class="col-md-8">
                <textarea class="form-control" name="quirurgicos" rows="2" onchange="setAPersonales(this)"><?php if (!empty($_smarty_tpl->tpl_vars['aPersonales']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aPersonales']->value['quirurgicos'];?>
<?php }?></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-2">
                <label class="control-label">Obstétricos:</label>
            </div>
            <div class="col-md-8">
                <textarea class="form-control" name="obstetricos" rows="2" onchange="setAPersonales(this)"><?php if (!empty($_smarty_tpl->tpl_vars['aPersonales']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aPersonales']->value['obstetricos'];?>
<?php }?></textarea>
            </div>
        </div>
    </div>
</form>
<?php }} ?>
