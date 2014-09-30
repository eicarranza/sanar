<?php /* Smarty version Smarty-3.1.15, created on 2014-06-14 09:59:17
         compiled from "application\views\templates\especialista\anestesia\examenes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14763539c5535066287-40642001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '282db21c1f9da35e3a4b7f4642681fc6b701390b' => 
    array (
      0 => 'application\\views\\templates\\especialista\\anestesia\\examenes.tpl',
      1 => 1402752968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14763539c5535066287-40642001',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'consulta' => 0,
    'consultaExamen' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_539c5535343a62_58669544',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539c5535343a62_58669544')) {function content_539c5535343a62_58669544($_smarty_tpl) {?><h3 class="form-section">Exámen físico</h3>
<h4 class="form-section">Signos Vitales</h4>
<form class="form-horizontal">
    <div class="form-body">
        <div class="form-group">
            <label class="col-md-2 control-label" >FC:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" name="frecuencia_cardiaca" onchange="setConsulta(this)" value="<?php echo $_smarty_tpl->tpl_vars['consulta']->value['frecuencia_cardiaca'];?>
">
             </div>

            <label class="col-md-2 control-label" >TA:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" name="tension_arterial" onchange="setConsulta(this)" value="<?php echo $_smarty_tpl->tpl_vars['consulta']->value['tension_arterial'];?>
">
             </div>

             <label class="col-md-1 control-label" >FR:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" name="frecuencia_respiratoria" onchange="setConsulta(this)" value="<?php echo $_smarty_tpl->tpl_vars['consulta']->value['frecuencia_respiratoria'];?>
">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label" >Peso (Kg):</label>
            <div class="col-md-1">
                <input type="text" class="form-control" id="peso" name="peso" onchange="setConsulta(this)" value="<?php echo $_smarty_tpl->tpl_vars['consulta']->value['peso'];?>
">
            </div>

            <label class="col-md-2 control-label" >Talla (Cm):</label>
            <div class="col-md-1">
                <input type="text" class="form-control" id="talla" name="talla" onchange="setConsulta(this)" value="<?php echo $_smarty_tpl->tpl_vars['consulta']->value['talla'];?>
">
             </div>

            <label class="col-md-1 control-label" >IMC:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" id="imc" name="imc" onchange="setConsulta(this)" readonly value="<?php echo $_smarty_tpl->tpl_vars['consulta']->value['imc'];?>
">
            </div>
        </div>                                
    </div>
</form>

<h4 class="form-section">General</h4>
<form class="form-horizontal">
    <div class="form-body">
        <div class="form-group">
            <label class="col-md-2 control-label" >Consciente:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" name="consciente" onchange="setConsultaExamen(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['consultaExamen']->value)) {?><?php echo $_smarty_tpl->tpl_vars['consultaExamen']->value['consciente'];?>
<?php }?>">
             </div>

            <label class="col-md-1 control-label" >Alerta:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" name="alerta" onchange="setConsultaExamen(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['consultaExamen']->value)) {?><?php echo $_smarty_tpl->tpl_vars['consultaExamen']->value['alerta'];?>
<?php }?>">
             </div>

             <label class="col-md-2 control-label" >Deamulando:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" name="deambulando" onchange="setConsultaExamen(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['consultaExamen']->value)) {?><?php echo $_smarty_tpl->tpl_vars['consultaExamen']->value['deambulando'];?>
<?php }?>">
            </div>

            <label class="col-md-1 control-label" >Aspecto:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" name="aspecto" onchange="setConsultaExamen(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['consultaExamen']->value)) {?><?php echo $_smarty_tpl->tpl_vars['consultaExamen']->value['aspecto'];?>
<?php }?>">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label" >Disnea SCC:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" id="disnea_scc" name="disnea_scc" onchange="setConsultaExamen(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['consultaExamen']->value)) {?><?php echo $_smarty_tpl->tpl_vars['consultaExamen']->value['disnea_scc'];?>
<?php }?>">
            </div>

            <label class="col-md-3 control-label" >Dolor precordial NYHA:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" id="dolor_precordial" name="dolor_precordial" onchange="setConsultaExamen(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['consultaExamen']->value)) {?><?php echo $_smarty_tpl->tpl_vars['consultaExamen']->value['dolor_precordial'];?>
<?php }?>">
             </div>

            <label class="col-md-1 control-label" >CF:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" id="cf" name="cf" onchange="setConsultaExamen(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['consultaExamen']->value)) {?><?php echo $_smarty_tpl->tpl_vars['consultaExamen']->value['cf'];?>
<?php }?>">
            </div>

            <label class="col-md-1 control-label" >METS:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" id="mets" name="mets" onchange="setConsultaExamen(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['consultaExamen']->value)) {?><?php echo $_smarty_tpl->tpl_vars['consultaExamen']->value['mets'];?>
<?php }?>">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label" >Mallampati:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" id="mallampati" name="mallampati" onchange="setConsultaExamen(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['consultaExamen']->value)) {?><?php echo $_smarty_tpl->tpl_vars['consultaExamen']->value['mallampati'];?>
<?php }?>">
            </div>

            <label class="col-md-1 control-label" >ATM:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" id="atm" name="atm" onchange="setConsultaExamen(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['consultaExamen']->value)) {?><?php echo $_smarty_tpl->tpl_vars['consultaExamen']->value['atm'];?>
<?php }?>">
             </div>

            <label class="col-md-1 control-label" >DTM:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" id="dtm" name="dtm" onchange="setConsultaExamen(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['consultaExamen']->value)) {?><?php echo $_smarty_tpl->tpl_vars['consultaExamen']->value['dtm'];?>
<?php }?>">
            </div>

            <label class="col-md-2 control-label" >Cuello móvil:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" id="cuello_movil" name="cuello_movil" onchange="setConsultaExamen(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['consultaExamen']->value)) {?><?php echo $_smarty_tpl->tpl_vars['consultaExamen']->value['cuello_movil'];?>
<?php }?>">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label" >Simétrico:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" id="simetrico" name="simetrico" onchange="setConsultaExamen(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['consultaExamen']->value)) {?><?php echo $_smarty_tpl->tpl_vars['consultaExamen']->value['simetrico'];?>
<?php }?>">
            </div>

            <label class="col-md-2 control-label" >Vía aérea (Fácil/Difícil):</label>
            <div class="col-md-2">
                <select class="form-control" id="via_aerea" name="via_aerea" onchange="setConsultaExamen(this)">
                    <option value="0" <?php if (!empty($_smarty_tpl->tpl_vars['consultaExamen']->value)) {?><?php if ($_smarty_tpl->tpl_vars['consultaExamen']->value['via_aerea']==0) {?>selected<?php }?><?php }?>>- Seleccione -</option>
                    <option value="1" <?php if (!empty($_smarty_tpl->tpl_vars['consultaExamen']->value)) {?><?php if ($_smarty_tpl->tpl_vars['consultaExamen']->value['via_aerea']==1) {?>selected<?php }?><?php }?>>Fácil</option>
                    <option value="2" <?php if (!empty($_smarty_tpl->tpl_vars['consultaExamen']->value)) {?><?php if ($_smarty_tpl->tpl_vars['consultaExamen']->value['via_aerea']==2) {?>selected<?php }?><?php }?>>Difícil</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label" >Ruidos Cardíacos:</label>
            <div class="col-md-9">
                <textarea class="form-control" name="ruidos_cardiacos" rows="2" onchange="setConsultaExamen(this)"><?php if (!empty($_smarty_tpl->tpl_vars['consultaExamen']->value)) {?><?php echo $_smarty_tpl->tpl_vars['consultaExamen']->value['ruidos_cardiacos'];?>
<?php }?></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label" >Campos pulmonares:</label>
            <div class="col-md-9">
                <textarea class="form-control" name="campos_pulmonares" rows="2" onchange="setConsultaExamen(this)"><?php if (!empty($_smarty_tpl->tpl_vars['consultaExamen']->value)) {?><?php echo $_smarty_tpl->tpl_vars['consultaExamen']->value['campos_pulmonares'];?>
<?php }?></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label" >Abdomen:</label>
            <div class="col-md-9">
                <textarea class="form-control" name="abdomen" rows="2" onchange="setConsultaExamen(this)"><?php if (!empty($_smarty_tpl->tpl_vars['consultaExamen']->value)) {?><?php echo $_smarty_tpl->tpl_vars['consultaExamen']->value['abdomen'];?>
<?php }?></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label" >Extremidades:</label>
            <div class="col-md-9">
                <textarea class="form-control" name="extremidades" rows="2" onchange="setConsultaExamen(this)"><?php if (!empty($_smarty_tpl->tpl_vars['consultaExamen']->value)) {?><?php echo $_smarty_tpl->tpl_vars['consultaExamen']->value['extremidades'];?>
<?php }?></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label" >SNC:</label>
            <div class="col-md-9">
                <textarea class="form-control" name="snc" rows="2" onchange="setConsultaExamen(this)"><?php if (!empty($_smarty_tpl->tpl_vars['consultaExamen']->value)) {?><?php echo $_smarty_tpl->tpl_vars['consultaExamen']->value['snc'];?>
<?php }?></textarea>
            </div>
        </div>
    </div>
</form>
<?php }} ?>
