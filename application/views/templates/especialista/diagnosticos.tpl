<table class="table table-striped table-hover">
  <thead>
     <tr>
        <th>Código</th>
        <th>Diagnóstico</th>
        <th>Descripción</th>
        <th>Tipo diagnóstico</th>
        <th >Eliminar</th>
     </tr>
  </thead>
  <tbody>
      {foreach $_diagnostico as $i}
           <tr>
              <td>{$i.codigo}</td>
              <td>{$i.cie_descripcion}</td>
              <td>{$i.cd_descripcion}</td>
              <td>{$i.tipo_descripcion}</td>
              <td>
                   <a href="#" id="del{$i.diagnostico_id}" >
                        <img src="{$url}assets/img/icons/delete_page.png" title="Eliminar"
                             onclick="if(confirm('¿Realmente desea eliminar el diagnóstico?')){ eliminarDiagnostico({$i.consulta_id}, {$i.diagnostico_id}, {$i.diagnostico_tipo_id}); } "/>
                   </a>
              </td>
           </tr>
       {/foreach}
  </tbody>
</table>
