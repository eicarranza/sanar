<?php /* Smarty version Smarty-3.1.15, created on 2014-06-14 09:59:16
         compiled from "application\views\templates\especialista\anestesia\laboratorios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1327539c5534ec44c2-88983174%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bf680b048e070c63c13025d58e1c71fe97ac068' => 
    array (
      0 => 'application\\views\\templates\\especialista\\anestesia\\laboratorios.tpl',
      1 => 1402752911,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1327539c5534ec44c2-88983174',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'consultaLaboratorios' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_539c55351680a6_17797125',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539c55351680a6_17797125')) {function content_539c55351680a6_17797125($_smarty_tpl) {?><h3 class="form-section">Laboratorios</h3>

<form class="form-horizontal">
    <div class="form-body">
        <div class="form-group">
            <label class="col-md-1 control-label" >TP:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" name="tp" onchange="setConsultaLaboratorios(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['consultaLaboratorios']->value)) {?><?php echo $_smarty_tpl->tpl_vars['consultaLaboratorios']->value['tp'];?>
<?php }?>">
             </div>

            <label class="col-md-1 control-label" >TPT:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" name="tpt" onchange="setConsultaLaboratorios(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['consultaLaboratorios']->value)) {?><?php echo $_smarty_tpl->tpl_vars['consultaLaboratorios']->value['tpt'];?>
<?php }?>">
             </div>

             <label class="col-md-1 control-label" >HB:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" name="hb" onchange="setConsultaLaboratorios(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['consultaLaboratorios']->value)) {?><?php echo $_smarty_tpl->tpl_vars['consultaLaboratorios']->value['hb'];?>
<?php }?>">
            </div>

            <label class="col-md-1 control-label" >HTO:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" name="hto" onchange="setConsultaLaboratorios(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['consultaLaboratorios']->value)) {?><?php echo $_smarty_tpl->tpl_vars['consultaLaboratorios']->value['hto'];?>
<?php }?>">
            </div>

            <label class="col-md-1 control-label" >PLT:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" id="plt" name="plt" onchange="setConsultaLaboratorios(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['consultaLaboratorios']->value)) {?><?php echo $_smarty_tpl->tpl_vars['consultaLaboratorios']->value['plt'];?>
<?php }?>">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-1 control-label" >k.LEU:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" id="k_leu" name="k_leu" onchange="setConsultaLaboratorios(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['consultaLaboratorios']->value)) {?><?php echo $_smarty_tpl->tpl_vars['consultaLaboratorios']->value['k_leu'];?>
<?php }?>">
             </div>

            <label class="col-md-2 control-label" >k. CREAT:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" id="k_creat" name="k_creat" onchange="setConsultaLaboratorios(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['consultaLaboratorios']->value)) {?><?php echo $_smarty_tpl->tpl_vars['consultaLaboratorios']->value['k_creat'];?>
<?php }?>">
            </div>

            <label class="col-md-1 control-label" >GLI:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" id="gli" name="gli" onchange="setConsultaLaboratorios(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['consultaLaboratorios']->value)) {?><?php echo $_smarty_tpl->tpl_vars['consultaLaboratorios']->value['gli'];?>
<?php }?>">
            </div>
            <label class="col-md-1 control-label" >BUN:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" id="bun" name="bun" onchange="setConsultaLaboratorios(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['consultaLaboratorios']->value)) {?><?php echo $_smarty_tpl->tpl_vars['consultaLaboratorios']->value['bun'];?>
<?php }?>">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label" >RX. Tórax:</label>
            <div class="col-md-8">
                <textarea class="form-control" name="rx_torax" rows="2" onchange="setConsultaLaboratorios(this)"><?php if (!empty($_smarty_tpl->tpl_vars['consultaLaboratorios']->value)) {?><?php echo $_smarty_tpl->tpl_vars['consultaLaboratorios']->value['rx_torax'];?>
<?php }?></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label" >EKG Trazo:</label>
            <div class="col-md-8">
                <textarea class="form-control" name="ekg_trazo" rows="2" onchange="setConsultaLaboratorios(this)"><?php if (!empty($_smarty_tpl->tpl_vars['consultaLaboratorios']->value)) {?><?php echo $_smarty_tpl->tpl_vars['consultaLaboratorios']->value['ekg_trazo'];?>
<?php }?></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label" >Imágenes:</label>
            <div class="col-md-8">
                <textarea class="form-control" name="imagenes" rows="2" onchange="setConsultaLaboratorios(this)"><?php if (!empty($_smarty_tpl->tpl_vars['consultaLaboratorios']->value)) {?><?php echo $_smarty_tpl->tpl_vars['consultaLaboratorios']->value['imagenes'];?>
<?php }?></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label" >Otro:</label>
            <div class="col-md-8">
                <textarea class="form-control" name="otro" rows="2" onchange="setConsultaLaboratorios(this)"><?php if (!empty($_smarty_tpl->tpl_vars['consultaLaboratorios']->value)) {?><?php echo $_smarty_tpl->tpl_vars['consultaLaboratorios']->value['otro'];?>
<?php }?></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-1 control-label" >ASA:</label>
            <div class="col-md-4">
                <textarea class="form-control" name="asa" rows="2" onchange="setConsultaLaboratorios(this)"><?php if (!empty($_smarty_tpl->tpl_vars['consultaLaboratorios']->value)) {?><?php echo $_smarty_tpl->tpl_vars['consultaLaboratorios']->value['asa'];?>
<?php }?></textarea>
            </div>

            <label class="col-md-1 control-label" >POR:</label>
            <div class="col-md-4">
                <textarea class="form-control" name="por" rows="2" onchange="setConsultaLaboratorios(this)"><?php if (!empty($_smarty_tpl->tpl_vars['consultaLaboratorios']->value)) {?><?php echo $_smarty_tpl->tpl_vars['consultaLaboratorios']->value['por'];?>
<?php }?></textarea>
            </div>
        </div>
    </div>
</form>
<?php }} ?>
