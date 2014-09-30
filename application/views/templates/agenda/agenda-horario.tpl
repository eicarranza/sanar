{block name="scripts" append}
<script>
    
</script>
{/block}

<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead>
           <tr>
              <th>Fecha Inicio</th>
              <th>Fecha Fin</th>
              <th>Hora Inicio</th>
              <th>Hora Fin</th>
              <th>Descanso Inicio</th>
              <th>Descanso Fin</th>
              <th>Duración</th>
           </tr>
        </thead>
        <tbody>
            {foreach $horario as $i}
                 <tr>
                    <td>{$i.fecha_inicio}</td>
                    <td>{$i.fecha_fin}</td>
                    <td>{$i.hora_inicio}</td>
                    <td>{$i.hora_fin}</td>
                    <td>{$i.descanso_inicio}</td>
                    <td>{$i.descanso_fin}</td>
                    <td>{$i.duracion}</td>
                 </tr>
             {/foreach}
        </tbody>
    </table>
</div>