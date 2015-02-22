<?php /* Smarty version Smarty-3.1.15, created on 2014-11-17 22:18:29
         compiled from "application\views\templates\agenda\facturacion-modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2345353042ddb6b6e53-19558928%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f969fe5031d2dd52a657c1c7922b219ac8eda72' => 
    array (
      0 => 'application\\views\\templates\\agenda\\facturacion-modal.tpl',
      1 => 1416280502,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2345353042ddb6b6e53-19558928',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_53042ddb809c88_60922236',
  'variables' => 
  array (
    'errors' => 0,
    'especialista' => 0,
    'paciente' => 0,
    'cita_id' => 0,
    '_administradora' => 0,
    'i' => 0,
    'existe_factura' => 0,
    'facturacion' => 0,
    '_concepto_servicio' => 0,
    '_servicio' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53042ddb809c88_60922236')) {function content_53042ddb809c88_60922236($_smarty_tpl) {?><div id="dv-facturacion" class="row">
    <?php echo $_smarty_tpl->tpl_vars['errors']->value;?>

    <form id="form-Facturacion" class="form-horizontal" action="#" method="post" accept-charset="utf-8">

    <div class="form-body">
       <div class="form-group">
          <label class="col-md-4 control-label">Especialista:</label>
          <div class="col-md-8">
             <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['especialista']->value;?>
</label>
          </div>
       </div>
       <div class="form-group">
          <label class="col-md-4 control-label">Paciente:</label>
          <div class="col-md-8">
              <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['paciente']->value;?>
</label>
             <input type="hidden" id="cita_id" name="cita_id" value="<?php echo $_smarty_tpl->tpl_vars['cita_id']->value;?>
" required>
          </div>
       </div>
        <div class="form-group">
            <label  class="col-md-4 control-label">Administradora:</label>
            <div class="col-md-8">
                <select  class="form-control" name="administradora_id"  id="administradora_id" >
                    <option value="0">- SELECCIONE -</option>
                    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_administradora']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" <?php if (($_smarty_tpl->tpl_vars['existe_factura']->value)) {?><?php if (($_smarty_tpl->tpl_vars['facturacion']->value['administradora_id']==$_smarty_tpl->tpl_vars['i']->value['id'])) {?>selected<?php }?><?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value['descripcion'];?>
</option>
                    <?php } ?>
                </select>
          </div>
        </div>
        <div class="form-group">
            <label  class="col-md-4 control-label">Concepto Servicio:</label>
            <div class="col-md-8">
                <select  class="form-control" name="consulta_tipo"  id="consulta_tipo" >
                    <option value="00">- SELECCIONE -</option>
                    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_concepto_servicio']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" <?php if (($_smarty_tpl->tpl_vars['existe_factura']->value)) {?><?php if (($_smarty_tpl->tpl_vars['facturacion']->value['concepto_servicio_id']==$_smarty_tpl->tpl_vars['i']->value['id'])) {?>selected<?php }?><?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value['descripcion'];?>
</option>
                    <?php } ?>
                </select>
          </div>
        </div>
        <div class="form-group">
            <label  class="col-md-4 control-label">Servicio:</label>
            <div class="col-md-8">
                <div id="dv_servicio_id">
                    <select  class="form-control" name="servicio_id" id="servicio_id">
                        <option value="000">- SELECCIONE -</option>
                         <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_servicio']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                             <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['facturacion']->value['consulta_tipo'];?>
" <?php if (($_smarty_tpl->tpl_vars['existe_factura']->value)) {?><?php if (($_smarty_tpl->tpl_vars['facturacion']->value['consulta_tipo']==$_smarty_tpl->tpl_vars['i']->value['id'])) {?>selected<?php }?><?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value['descripcion'];?>
</option>
                         <?php } ?>

                   </select>
                </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Valor:</label>
          <div class="col-md-8">
             <input type="text" class="form-control" id="valor" name="valor" maxlength="20" required
                    value="<?php if (($_smarty_tpl->tpl_vars['existe_factura']->value)) {?><?php echo $_smarty_tpl->tpl_vars['facturacion']->value['valor'];?>
<?php }?>">
          </div>
       </div>
    </div>
 </form>
</div>

<script>
    
    jQuery(document).ready(function() {
       verificarEdicion();
        
        $( "#form-Facturacion" ).submit(function( event ) {
            event.preventDefault();
        });
        
        $("#consulta_tipo").change(function () {
		var consulta_tipo = $('#consulta_tipo').attr('value');
                $.ajax({
                        type: "POST",
                        url: "<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
configuracion/getServicios/"+consulta_tipo, 
                        data: consulta_tipo,
                        dataType: "text",  
                        cache:false,
                        success: 
                             function(data){
                                $('#dv_servicio_id').empty();
                                $('#dv_servicio_id').html(data);
                             }
                });// you have missed this bracket
                return false;
                
        });
    });
    
    function verificarEdicion(){
        <?php if (($_smarty_tpl->tpl_vars['existe_factura']->value)) {?>
                $("#dv_facturacion *").attr("disabled", "disabled").off('click');
        <?php }?>
    }
    
</script><?php }} ?>
