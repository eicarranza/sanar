{block name="scripts" append}
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
        acciones = "<img src=\"{$url}assets/img/icons/calendar_add.png\" title=\"Agendar\" onclick=\"agendar('"+fecha+"','"+horaini+"'); \"/>";
        acciones += "<img src=\"{$url}assets/img/icons/delete_page.png\" title=\"Eliminar\" onclick=\"if(confirm('¿Realmente desea cancelar la cita?')){ cancelarCita('"+fecha+"','"+horaini+"'); } \"/>";
        acciones += "<img src=\"{$url}assets/img/icons/calculator.png\" title=\"Facturar cita\" onclick=\"\"/>";

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
        url: "{$url}agenda/cancelar/"+especialista+"/"+0+"/"+fecha,
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

    $.post('{$url}agenda/setEstadoCita', postData, function(data){
        
    });
  }
</script>
{/block}

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
        {foreach $agenda as $i}
            <tr class="odd gradeX">
                <td>{$i.hora}</td>
                <td>
                    <input id="identificacion_{$i.hora_ini}" type='text' class="form-control input-small" value='{$i.identificacion}' horaini="{$i.hora_ini}"
                           fechahora="{$i.fechahora}" {if ($disabled)} disabled {/if} {if ($i.paciente_id != 0)} readonly {/if} onchange="reservarCita(this)">
                </td>
                <td>
                    <div id="dv_cita_{$i.hora_ini}" >
                        <label>{$i.nombre1} {$i.nombre2} {$i.apellido1} {$i.apellido2}</label>
                        <input type="hidden" id="pacienteid_{$i.hora_ini}" name="pacienteid_{$i.hora_ini}" value="{$i.paciente_id}">
                    </div>
                </td>
                <td>
                    <div id="dv_acciones_{$i.hora_ini}">
                        {if ($i.paciente_id != 0)}
                            <img src="{$url}assets/img/icons/delete_page.png" title="Eliminar" 
                                 onclick="if(confirm('¿Realmente desea cancelar la cita?')){ cancelarCita('{$i.fechahora}', '{$i.hora_ini}'); } "/>
                            <img src="{$url}assets/img/icons/calculator.png" title="Facturar cita." onclick="facturar('{$i.id}');"/>
                            {if ($i.cita_tipo_id == 2)}
                                <img src="{$url}assets/img/icons/doctor.png" title="Vincular personal salud." onclick="vincularPersonal('{$i.id}');"/>
                            {/if}
                                <select id="estado_cita_{$i.id}" cita='{$i.id}' onchange="setEstadoCita(this, {$i.id})">
                                    <option value='0' {if ($i.estado_cita_id == 0)} selected {/if}>Ausente</option>
                                    <option value='1' {if ($i.estado_cita_id == 1)} selected {/if}>Activo</option>
                                    <option value='2' {if ($i.estado_cita_id == 2)} selected {/if}>Finalizado</option>
                                </select>
                        {/if}
                    </div>
                </td>
           </tr>
        {/foreach}
    </tbody>
</table>
