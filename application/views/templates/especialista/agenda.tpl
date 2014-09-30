<table class="table table-striped table-hover" id="sample_2">
    <thead>
       <tr>
            <th width="10%">Hora</th>
            <th width="80%">Paciente</th>
            <th width="10%">Estado</th>
       </tr>
    </thead>
    <tbody>
    {foreach $agenda as $i}
        <tr id="row_{$i.hora}" class="odd gradeX" onclick="consulta('{$i.id}', '{$i.paciente_id}')">
            <td>{$i.hora}</td>
            <td>
                <div id="dv_cita_{$i.id}">
                    <label>{$i.nombre1} {$i.nombre2} {$i.apellido1} {$i.apellido2}</label>
                    <input type="hidden" id="pacienteid_{$i.id}" name="pacienteid_{$i.id}" value="{$i.paciente_id}">
                </div>
            </td>
            <td>
                <div id="dv_acciones_{$i.id}">
                    {if ($i.estado_cita_id == 0)}
                        <img src="{$url}assets/img/icons/states/absent_user.png" title="Ausente"/>
                    {elseif ($i.estado_cita_id == 1)}
                        <img src="{$url}assets/img/icons/states/present_user.png" title="Activo"/>
                    {elseif ($i.estado_cita_id == 2)}
                        <img src="{$url}assets/img/icons/states/finish_user.png" title="Finalizada"/>
                    {/if}
                </div>
            </td>
       </tr>
    {/foreach}
    </tbody>
</table>
