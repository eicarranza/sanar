<?php /* Smarty version Smarty-3.1.15, created on 2014-04-04 02:25:10
         compiled from "application\views\templates\agenda\especialistas-modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30960533e3c3246bc90-40787578%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fb4b9b1258de2732397ae4d1f39340d6bd5c29d' => 
    array (
      0 => 'application\\views\\templates\\agenda\\especialistas-modal.tpl',
      1 => 1396592629,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30960533e3c3246bc90-40787578',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e3c3254e5d6_90354635',
  'variables' => 
  array (
    'cita_id' => 0,
    '_especialistas' => 0,
    'gs' => 0,
    '_especialistas_apoyo' => 0,
    'i' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e3c3254e5d6_90354635')) {function content_533e3c3254e5d6_90354635($_smarty_tpl) {?><div id="dv-facturacion" class="row">
    <form id="form-Especialistas" class="form-horizontal" action="#" method="post" accept-charset="utf-8">

    <div class="form-body">
        
       <div class="form-group">
          <label class="col-md-5 control-label">Especialista:</label>
          <input type="hidden" id="cita_id" name="cita_id" value="<?php echo $_smarty_tpl->tpl_vars['cita_id']->value;?>
" required>
          <div class="col-md-6">
             <select  class="form-control" id='especialista_id' name="especialista" >
               <option value="0">- SELECCIONE -</option>
               <?php  $_smarty_tpl->tpl_vars['gs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_especialistas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gs']->key => $_smarty_tpl->tpl_vars['gs']->value) {
$_smarty_tpl->tpl_vars['gs']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['gs']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['gs']->value['nombres'];?>
 <?php echo $_smarty_tpl->tpl_vars['gs']->value['apellidos'];?>
</option>
               <?php } ?>
           </select>
          </div>
       </div>
       <div class="form-group">
          <div class="col-md-5"></div>
          <div class="col-md-6">
              <button id="btn-especialista-add" type="button" class="btn green">Agregar</button>
          </div>
       </div>
        <div class="form-group">
            <div class="table-responsive" id="dv-personalApoyo">
                <table class="table table-striped table-hover">
                  <thead>
                     <tr>
                        <th>Especialista</th>
                        <th>Rol</th>
                        <th >Eliminar</th>
                     </tr>
                  </thead>
                  <tbody>
                      <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_especialistas_apoyo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                           <tr>
                              <td><?php echo $_smarty_tpl->tpl_vars['i']->value['nombres'];?>
 <?php echo $_smarty_tpl->tpl_vars['i']->value['apellidos'];?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['i']->value['descripcion'];?>
</td>
                              <td>
                                   <a href="#" id="del_<?php echo $_smarty_tpl->tpl_vars['i']->value['cita_id'];?>
_<?php echo $_smarty_tpl->tpl_vars['i']->value['especialista_id'];?>
" >
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/img/icons/delete_page.png" title="Eliminar"
                                             onclick="if(confirm('¿Realmente desea eliminar el registro?')){ eliminarRegistro(<?php echo $_smarty_tpl->tpl_vars['i']->value['cita_id'];?>
, <?php echo $_smarty_tpl->tpl_vars['i']->value['especialista_id'];?>
); } "/>
                                   </a>
                              </td>
                           </tr>
                       <?php } ?>
                  </tbody>
                </table>
             </div>
        </div>
       
    </div>
 </form>
</div>

<script>
    
    jQuery(document).ready(function() {
        $( "#form-Especialista" ).submit(function( event ) {
            event.preventDefault();
        });
        
        
        $('#btn-especialista-add').click(function () {
                
                var especialista_id = $('#especialista_id').attr('value');
                var cita_id = $('#cita_id').attr('value');
                
                if(cita_id != ''){
                    var postData = {
                                    'especialista_id': especialista_id, 
                                    'cita_id' : cita_id
                                 };

                    $.post('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
agenda/setApoyoCirugia', postData, function(data){
                            $('#dv-personalApoyo').empty();
                            $('#dv-personalApoyo').html(data);
                    });
                }
                else{
                    alert("Aún no ha sido programada la cirugía.");
                }
        });
    });
    
    
    function eliminarRegistro(cita_id, especialista_id){
        var postData = {
                        'cita_id': cita_id, 
                        'especialista_id' : especialista_id
                     };

        $.post('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
agenda/delApoyoCirugia', postData, function(data){
                $('#dv-personalApoyo').empty();
                $('#dv-personalApoyo').html(data);
        });
    }
    
</script><?php }} ?>
