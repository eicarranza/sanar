<?php /* Smarty version Smarty-3.1.15, created on 2014-06-14 10:33:22
         compiled from "application\views\templates\especialista\anestesia\plan.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11816539c553503f509-75835539%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a762025e267c1621ddd94a5280dec408715e05a' => 
    array (
      0 => 'application\\views\\templates\\especialista\\anestesia\\plan.tpl',
      1 => 1402756401,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11816539c553503f509-75835539',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_539c55352e7605_02365287',
  'variables' => 
  array (
    'anestesiaPlan' => 0,
    '_anestesia_tipo' => 0,
    'at' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539c55352e7605_02365287')) {function content_539c55352e7605_02365287($_smarty_tpl) {?><h3 class="form-section">Plan</h3>
<form class="form-horizontal">
    <div class="form-body">
        <div class="form-group">
            <label class="col-md-2 control-label" >Programar cirugía:</label>
            <div class="col-md-2">
                <select class="form-control" id="programar_cirugia" name="programar_cirugia" onchange="setAnestesiaPlan(this)">
                    <option value="0" <?php if (!empty($_smarty_tpl->tpl_vars['anestesiaPlan']->value)) {?><?php if ($_smarty_tpl->tpl_vars['anestesiaPlan']->value['programar_cirugia']==0) {?>selected<?php }?><?php }?>>- Seleccione -</option>
                    <option value="1" <?php if (!empty($_smarty_tpl->tpl_vars['anestesiaPlan']->value)) {?><?php if ($_smarty_tpl->tpl_vars['anestesiaPlan']->value['programar_cirugia']==1) {?>selected<?php }?><?php }?>>Si</option>
                    <option value="2" <?php if (!empty($_smarty_tpl->tpl_vars['anestesiaPlan']->value)) {?><?php if ($_smarty_tpl->tpl_vars['anestesiaPlan']->value['programar_cirugia']==2) {?>selected<?php }?><?php }?>>No</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" >Ayuno:</label>
            <div class="col-md-3">
                <input type="text" class="form-control" name="ayuno" onchange="setAnestesiaPlan(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['anestesiaPlan']->value)) {?><?php echo $_smarty_tpl->tpl_vars['anestesiaPlan']->value['ayuno'];?>
<?php }?>">
             </div>

             <label class="col-md-1 control-label" >Horas:</label>
            <div class="col-md-3">
                <input type="text" class="form-control" name="horas" onchange="setAnestesiaPlan(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['anestesiaPlan']->value)) {?><?php echo $_smarty_tpl->tpl_vars['anestesiaPlan']->value['horas'];?>
<?php }?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" >Tipo Anestesia:</label>
            <div class="col-md-3">
                <select class="form-control" id="anestesia_tipo" name="anestesia_tipo" onchange="setAnestesiaPlan(this)">
                    <?php  $_smarty_tpl->tpl_vars['at'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['at']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_anestesia_tipo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['at']->key => $_smarty_tpl->tpl_vars['at']->value) {
$_smarty_tpl->tpl_vars['at']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['at']->value['id'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['anestesiaPlan']->value)) {?><?php if (($_smarty_tpl->tpl_vars['anestesiaPlan']->value['anestesia_tipo']==$_smarty_tpl->tpl_vars['at']->value['id'])) {?>selected<?php }?><?php }?>><?php echo $_smarty_tpl->tpl_vars['at']->value['descripcion'];?>
</option>
                    <?php } ?>
                </select>
            </div>
                
            <label class="col-md-2 control-label" >Observación:</label>
            <div class="col-md-3">
                <input type="text" class="form-control" name="observacion" onchange="setAnestesiaPlan(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['anestesiaPlan']->value)) {?><?php echo $_smarty_tpl->tpl_vars['anestesiaPlan']->value['observacion'];?>
<?php }?>">
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-md-2 control-label" >POP con hospitalización:</label>
            <div class="col-md-2">
                <select class="form-control" id="pop_hospitalizacion" name="pop_hospitalizacion" onchange="setAnestesiaPlan(this)">
                    <option value="0" <?php if (!empty($_smarty_tpl->tpl_vars['anestesiaPlan']->value)) {?><?php if ($_smarty_tpl->tpl_vars['anestesiaPlan']->value['pop_hospitalizacion']==0) {?>selected<?php }?><?php }?>>- Seleccione -</option>
                    <option value="1" <?php if (!empty($_smarty_tpl->tpl_vars['anestesiaPlan']->value)) {?><?php if ($_smarty_tpl->tpl_vars['anestesiaPlan']->value['pop_hospitalizacion']==1) {?>selected<?php }?><?php }?>>Si</option>
                    <option value="2" <?php if (!empty($_smarty_tpl->tpl_vars['anestesiaPlan']->value)) {?><?php if ($_smarty_tpl->tpl_vars['anestesiaPlan']->value['pop_hospitalizacion']==2) {?>selected<?php }?><?php }?>>No</option>
                </select>
            </div>

            <label class="col-md-1 control-label" >Reservar:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" id="reservar" name="reservar" onchange="setAnestesiaPlan(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['anestesiaPlan']->value)) {?><?php echo $_smarty_tpl->tpl_vars['anestesiaPlan']->value['reservar'];?>
<?php }?>">
            </div>
            <label class="col-md-2 control-label" >UDS GRE:</label>
            <div class="col-md-2">
                <input type="text" class="form-control" id="uds_gre" name="uds_gre" onchange="setAnestesiaPlan(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['anestesiaPlan']->value)) {?><?php echo $_smarty_tpl->tpl_vars['anestesiaPlan']->value['uds_gre'];?>
<?php }?>">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label" >Suspender medicamentos:</label>
            <div class="col-md-8">
                <textarea class="form-control" name="suspender_medicamentos" rows="2" onchange="setAnestesiaPlan(this)"><?php if (!empty($_smarty_tpl->tpl_vars['anestesiaPlan']->value)) {?><?php echo $_smarty_tpl->tpl_vars['anestesiaPlan']->value['suspender_medicamentos'];?>
<?php }?></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label" >Interconsulta con:</label>
            <div class="col-md-8">
                <textarea class="form-control" name="interconsulta_con" rows="2" onchange="setAnestesiaPlan(this)"><?php if (!empty($_smarty_tpl->tpl_vars['anestesiaPlan']->value)) {?><?php echo $_smarty_tpl->tpl_vars['anestesiaPlan']->value['interconsulta_con'];?>
<?php }?></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label" >SS Paraclínicos:</label>
            <div class="col-md-8">
                <textarea class="form-control" name="paraclinicos" rows="2" onchange="setAnestesiaPlan(this)"><?php if (!empty($_smarty_tpl->tpl_vars['anestesiaPlan']->value)) {?><?php echo $_smarty_tpl->tpl_vars['anestesiaPlan']->value['paraclinicos'];?>
<?php }?></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label" >Control Resultados:</label>
            <div class="col-md-2">
                <select class="form-control" id="control_resultados" name="control_resultados" onchange="setAnestesiaPlan(this)">
                    <option value="0" <?php if (!empty($_smarty_tpl->tpl_vars['anestesiaPlan']->value)) {?><?php if ($_smarty_tpl->tpl_vars['anestesiaPlan']->value['control_resultados']==0) {?>selected<?php }?><?php }?>>- Seleccione -</option>
                    <option value="1" <?php if (!empty($_smarty_tpl->tpl_vars['anestesiaPlan']->value)) {?><?php if ($_smarty_tpl->tpl_vars['anestesiaPlan']->value['control_resultados']==1) {?>selected<?php }?><?php }?>>Si</option>
                    <option value="2" <?php if (!empty($_smarty_tpl->tpl_vars['anestesiaPlan']->value)) {?><?php if ($_smarty_tpl->tpl_vars['anestesiaPlan']->value['control_resultados']==2) {?>selected<?php }?><?php }?>>No</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label" >Observaciones:</label>
            <div class="col-md-8">
                <textarea class="form-control" name="observaciones" rows="2" onchange="setAnestesiaPlan(this)"><?php if (!empty($_smarty_tpl->tpl_vars['anestesiaPlan']->value)) {?><?php echo $_smarty_tpl->tpl_vars['anestesiaPlan']->value['observaciones'];?>
<?php }?></textarea>
            </div>
        </div>
    </div>
</form>
<?php }} ?>
