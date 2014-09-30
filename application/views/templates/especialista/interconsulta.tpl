<table class="table table-striped table-hover">
    <thead>
       <tr>
          <th width="30%">Especialidad</th>
          <th width="60%">Descripción</th>
          <th width="5%">Imprimir</th>
          <th width="5%">Eliminar</th>
       </tr>
    </thead>
    <tbody>
        {foreach $_interconsultas as $i}
             <tr>
                <td>{$i.esp_descripcion}</td>
                <td>{$i.ci_descripcion}</td>
                <td>
                     <a href="#" id="imp{$i.especialidad_id}" >
                          <img src="{$url}assets/img/icons/printer.png" title="Imprimir"
                               onclick="imprimirInterconsulta({$i.consulta_id}, {$i.especialidad_id}); "/>
                     </a>
                </td>
                <td>
                     <a href="#" id="del{$i.especialidad_id}" >
                          <img src="{$url}assets/img/icons/delete_page.png" title="Eliminar"
                               onclick="if(confirm('¿Realmente desea eliminar la interconsulta?')){ eliminarInterconsulta({$i.consulta_id}, {$i.especialidad_id}); } "/>
                     </a>
                </td>
             </tr>
         {/foreach}
    </tbody>
</table>