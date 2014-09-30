<?php /* Smarty version Smarty-3.1.15, created on 2014-05-10 01:06:58
         compiled from "application\views\templates\agenda\agenda.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2511652d9cb67d52d03-06241628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35b11dca30881ecee85247fa2f03801c2ef4da22' => 
    array (
      0 => 'application\\views\\templates\\agenda\\agenda.tpl',
      1 => 1399675213,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2511652d9cb67d52d03-06241628',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52d9cb68051f35_66804912',
  'variables' => 
  array (
    'url' => 0,
    'agenda' => 0,
    'i' => 0,
    'disabled' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d9cb68051f35_66804912')) {function content_52d9cb68051f35_66804912($_smarty_tpl) {?>
<script>
    
    $("input").keypress(function(e) {
        if(e.which == 13){
            var paciente = $( this ).val();
            var fecha = $( this ).attr('fechahora');
            var horaini = $( this ).attr('horaini');

            mostrarPaciente(paciente, fecha, horaini);
        }
    });
  
  function mostrarPaciente(paciente, fecha, horaini){
    consultarPaciente(paciente, horaini, function(url){
        acciones = "<img src=\"<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/img/icons/calendar_add.png\" title=\"Agendar\" onclick=\"agendar('"+fecha+"','"+horaini+"'); \"/>";
        acciones += "<img src=\"<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/img/icons/delete_page.png\" title=\"Eliminar\" onclick=\"if(confirm('¿Realmente desea cancelar la cita?')){ cancelarCita('"+fecha+"','"+horaini+"'); } \"/>";
        acciones += "<img src=\"<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/img/icons/calculator.png\" title=\"Facturar cita\" onclick=\"\"/>";

        dv_cita = "<label>" + url[0] + "</label>";
        dv_cita += "<input type=\"hidden\" id=\"pacienteid_" + horaini + "\" name=\"pacienteid_" + horaini + "\" value=\"" + url[1] + "\">";

        $('#dv_cita_'+horaini).empty();
        $('#dv_cita_'+horaini).html(dv_cita);
        $('#dv_acciones_'+horaini).empty();
        $('#dv_acciones_'+horaini).html(acciones);             
    });
  }
  
  function agendar(fecha, horaini){
    var especialista = $('#especialista').attr('value');
    var paciente = $('#pacienteid_'+horaini).attr('value');
    
    agendarPaciente(especialista, paciente, fecha, function(url){
        alert("La cita ha sido agendada.");
        consultar();
    });
    
  }
  
  function cancelarCita(fecha, horaini){
    var especialista = $('#especialista').attr('value');
    
    $.ajax({
        type: "POST",
        url: "<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
agenda/cancelar/"+especialista+"/"+0+"/"+fecha,
        data: especialista,
        dataType: "text",  
        cache:false,
        success: 
             function(data){
                if(data!=0){
                    if(data=="false"){
                        alert("No ha sido posible borrar la cita");
                    }
                    
                    consultar();
                }
             }
    });
  }
  
  
  function setEstadoCita(campo, cita_id){
    var cita_id = cita_id;
    var estado = campo.value;
    
    var postData = {
                    'cita_id': cita_id, 
                    'estado' : estado
                 };

    $.post('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
agenda/setEstadoCita', postData, function(data){
        
    });
  }
</script>


<table class="table table-striped table-bordered table-hover" id="sample_2">
    <thead>
       <tr>
            <th>HORA</th>
            <th >IDENTIFICACIÓN</th>
            <th >NOMBRE</th>
            <th >ACCIONES</th>
       </tr>
    </thead>
    <tbody>
        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['agenda']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
            <tr class="odd gradeX">
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['hora'];?>
</td>
                <td>
                    <input id="identificacion_<?php echo $_smarty_tpl->tpl_vars['i']->value['hora_ini'];?>
" type='text' class="form-control input-small" value='<?php echo $_smarty_tpl->tpl_vars['i']->value['identificacion'];?>
' horaini="<?php echo $_smarty_tpl->tpl_vars['i']->value['hora_ini'];?>
"
                           fechahora="<?php echo $_smarty_tpl->tpl_vars['i']->value['fechahora'];?>
" <?php if (($_smarty_tpl->tpl_vars['disabled']->value)) {?> disabled <?php }?> <?php if (($_smarty_tpl->tpl_vars['i']->value['paciente_id']!=0)) {?> readonly <?php }?> onchange="reservarCita(this)">
                </td>
                <td>
                    <div id="dv_cita_<?php echo $_smarty_tpl->tpl_vars['i']->value['hora_ini'];?>
" >
                        <label><?php echo $_smarty_tpl->tpl_vars['i']->value['nombre1'];?>
 <?php echo $_smarty_tpl->tpl_vars['i']->value['nombre2'];?>
 <?php echo $_smarty_tpl->tpl_vars['i']->value['apellido1'];?>
 <?php echo $_smarty_tpl->tpl_vars['i']->value['apellido2'];?>
</label>
                        <input type="hidden" id="pacienteid_<?php echo $_smarty_tpl->tpl_vars['i']->value['hora_ini'];?>
" name="pacienteid_<?php echo $_smarty_tpl->tpl_vars['i']->value['hora_ini'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['paciente_id'];?>
">
                    </div>
                </td>
                <td>
                    <div id="dv_acciones_<?php echo $_smarty_tpl->tpl_vars['i']->value['hora_ini'];?>
">
                        <?php if (($_smarty_tpl->tpl_vars['i']->value['paciente_id']!=0)) {?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/img/icons/delete_page.png" title="Eliminar" 
                                 onclick="if(confirm('¿Realmente desea cancelar la cita?')){ cancelarCita('<?php echo $_smarty_tpl->tpl_vars['i']->value['fechahora'];?>
', '<?php echo $_smarty_tpl->tpl_vars['i']->value['hora_ini'];?>
'); } "/>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/img/icons/calculator.png" title="Facturar cita." onclick="facturar('<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
');"/>
                            <?php if (($_smarty_tpl->tpl_vars['i']->value['cita_tipo_id']==2)) {?>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/img/icons/doctor.png" title="Vincular personal salud." onclick="vincularPersonal('<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
');"/>
                            <?php }?>
                                <select id="estado_cita_<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" cita='<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
' onchange="setEstadoCita(this, <?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
)">
                                    <option value='0' <?php if (($_smarty_tpl->tpl_vars['i']->value['estado_cita_id']==0)) {?> selected <?php }?>>Ausente</option>
                                    <option value='1' <?php if (($_smarty_tpl->tpl_vars['i']->value['estado_cita_id']==1)) {?> selected <?php }?>>Activo</option>
                                    <option value='2' <?php if (($_smarty_tpl->tpl_vars['i']->value['estado_cita_id']==2)) {?> selected <?php }?>>Finalizado</option>
                                </select>
                        <?php }?>
                    </div>
                </td>
           </tr>
        <?php } ?>
    </tbody>
</table>
<?php }} ?>
