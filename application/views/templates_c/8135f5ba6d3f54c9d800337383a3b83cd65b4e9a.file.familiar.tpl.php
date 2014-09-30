<?php /* Smarty version Smarty-3.1.15, created on 2014-02-20 00:19:16
         compiled from "application\views\templates\paciente\familiar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1493452ce2c8df03758-60534634%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8135f5ba6d3f54c9d800337383a3b83cd65b4e9a' => 
    array (
      0 => 'application\\views\\templates\\paciente\\familiar.tpl',
      1 => 1390580976,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1493452ce2c8df03758-60534634',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52ce2c8e117ef1_71928569',
  'variables' => 
  array (
    'url' => 0,
    'familiar_id' => 0,
    'paciente_id' => 0,
    'tipo_documento' => 0,
    'gs' => 0,
    'familiar' => 0,
    'parentesco' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ce2c8e117ef1_71928569')) {function content_52ce2c8e117ef1_71928569($_smarty_tpl) {?><div class="row">
    <form id="form-familiar" class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
pacientes/familiar/<?php echo $_smarty_tpl->tpl_vars['familiar_id']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['paciente_id']->value;?>
" method="post" accept-charset="utf-8">
        <div class="form-body">
            <div class="col-md-6">
                <div class="form-group">
                    <label  class="col-md-3 control-label">Tipo ID: </label>
                    <div class="col-md-9">
                        <select id="tipo_documento" class="form-control" name="tipo_documento" >
                            <option value="00">- SELECCIONE -</option>
                            <?php  $_smarty_tpl->tpl_vars['gs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tipo_documento']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gs']->key => $_smarty_tpl->tpl_vars['gs']->value) {
$_smarty_tpl->tpl_vars['gs']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['gs']->value['id'];?>
" <?php if (($_smarty_tpl->tpl_vars['familiar_id']->value>0)) {?><?php if (($_smarty_tpl->tpl_vars['familiar']->value['tipo_documento']==$_smarty_tpl->tpl_vars['gs']->value['id'])) {?>selected<?php }?><?php }?>><?php echo $_smarty_tpl->tpl_vars['gs']->value['descripcion'];?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-md-3 control-label">Nombre: </label>
                    <div class="col-md-9">
                        <input type="text" id="nombre" class="form-control" name="nombre" maxlength="60" value="<?php if (($_smarty_tpl->tpl_vars['familiar_id']->value>0)) {?><?php echo $_smarty_tpl->tpl_vars['familiar']->value['nombre'];?>
<?php }?>" required>
                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-md-3 control-label">Año nac: </label>
                    <div class="col-md-9">
                        <input type="number" id="nacimiento" class="form-control" name="nacimiento" maxlength="60" value="<?php if (($_smarty_tpl->tpl_vars['familiar_id']->value>0)) {?><?php echo $_smarty_tpl->tpl_vars['familiar']->value['anho_nacimiento'];?>
<?php }?>" required>
                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-md-3 control-label">Ocupación: </label>
                    <div class="col-md-9">
                        <input type="text" id="ocupacion" class="form-control" name="ocupacion" maxlength="60" value="<?php if (($_smarty_tpl->tpl_vars['familiar_id']->value>0)) {?><?php echo $_smarty_tpl->tpl_vars['familiar']->value['ocupacion'];?>
<?php }?>" required>
                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-md-3 control-label">Dirección: </label>
                    <div class="col-md-9">
                          <input type="text" id="direccion" class="form-control" maxlength="80"  name="direccion" value="<?php if (($_smarty_tpl->tpl_vars['familiar_id']->value>0)) {?><?php echo $_smarty_tpl->tpl_vars['familiar']->value['direccion'];?>
<?php }?>" >
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label class="col-md-3 control-label">Documento: </label>
                  <div class="col-md-9">
                         <input type="text" id="identificacion" class="form-control" name="identificacion" maxlength="20" value="<?php if (($_smarty_tpl->tpl_vars['familiar_id']->value>0)) {?><?php echo $_smarty_tpl->tpl_vars['familiar']->value['identificacion'];?>
<?php }?>" required>
                         <input type="hidden" id="paciente_id" name="paciente_id" value="<?php echo $_smarty_tpl->tpl_vars['paciente_id']->value;?>
" required>
                         <input type="hidden" id="familiar_id" name="familiar_id" value="<?php echo $_smarty_tpl->tpl_vars['familiar_id']->value;?>
" required>
                  </div>
                </div>
                <div class="form-group">
                    <label  class="col-md-3 control-label">Parentesco: </label>
                    <div class="col-md-9">
                        <select  class="form-control" id="parentesco" name="parentesco" >
                            <option value="00">- SELECCIONE -</option>
                            <?php  $_smarty_tpl->tpl_vars['gs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['parentesco']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gs']->key => $_smarty_tpl->tpl_vars['gs']->value) {
$_smarty_tpl->tpl_vars['gs']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['gs']->value['id'];?>
" <?php if (($_smarty_tpl->tpl_vars['familiar_id']->value>0)) {?><?php if (($_smarty_tpl->tpl_vars['familiar']->value['parentesco']==$_smarty_tpl->tpl_vars['gs']->value['id'])) {?>selected<?php }?><?php }?>><?php echo $_smarty_tpl->tpl_vars['gs']->value['descripcion'];?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-md-3 control-label">Vive: </label>
                    <div class="col-md-9">
                       <select  class="form-control" id="vive" name="vive" >
                            <option value="S" <?php if (($_smarty_tpl->tpl_vars['familiar_id']->value>0)) {?><?php if (($_smarty_tpl->tpl_vars['familiar']->value['vive']=="S")) {?>selected<?php }?><?php }?>>Si</option>
                            <option value="N" <?php if (($_smarty_tpl->tpl_vars['familiar_id']->value>0)) {?><?php if (($_smarty_tpl->tpl_vars['familiar']->value['vive']=="N")) {?>selected<?php }?><?php }?>>No</option>
                       </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Email: </label>
                    <div class="col-md-9">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="icon-envelope"></i></span>
                        <input type="email" id="email" class="form-control" placeholder="Correo electrónico" name="email"  maxlength="80" value="<?php if (($_smarty_tpl->tpl_vars['familiar_id']->value>0)) {?><?php echo $_smarty_tpl->tpl_vars['familiar']->value['email'];?>
<?php }?>" />
                      </div>
                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-md-3 control-label" name="telefono" >Teléfono: </label>
                    <div class="col-md-9">
                        <input type="text" id="telefono" class="form-control" maxlength="15"  name="telefono" value="<?php if (($_smarty_tpl->tpl_vars['familiar_id']->value>0)) {?><?php echo $_smarty_tpl->tpl_vars['familiar']->value['telefono'];?>
<?php }?>" >
                    </div>
                  </div>
                <div class="form-group">
                    <label  class="col-md-3 control-label">Móvil: </label>
                    <div class="col-md-9">
                        <input type="text" id="movil" class="form-control" maxlength="15" name="movil" value="<?php if (($_smarty_tpl->tpl_vars['familiar_id']->value>0)) {?><?php echo $_smarty_tpl->tpl_vars['familiar']->value['movil'];?>
<?php }?>" >
                    </div>
                </div>

            </div>
        </div>
    </form>
</div>

                    

    <script>
    jQuery(document).ready(function() {
        $("#btn-cita-guardar").click(function () {
                $.post($('#form-familiar').attr('action'), $('#form-familiar').serialize(), function(json){
                alert("El registro ha sido guardado.");
            }, 'json');

           return false;
        });
    });
    </script>    

    <?php }} ?>
