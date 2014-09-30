<table class="table table-striped table-hover">
  <thead>
     <tr>
        <th width="10%">Código</th>
        <th width="60%">Procedimiento</th>
        <th width="25%">Descripción</th>
        <th width="5%">Eliminar</th>
     </tr>
  </thead>
  <tbody>
      {foreach $_procedimiento as $i}
           <tr>
              <td>{$i.codigo}</td>
              <td>{$i.cups_descripcion}</td>
              <td>{$i.cp_observacion}</td>
              <td>
                   <a href="#" id="del{$i.procedimiento_id}" >
                        <img src="{$url}assets/img/icons/delete_page.png" title="Eliminar"
                             onclick="if(confirm('¿Realmente desea eliminar el procedimiento?')){ eliminarProcedimiento({$i.consulta_id}, {$i.procedimiento_id}); } "/>
                   </a>
              </td>
           </tr>
       {/foreach}
  </tbody>
</table>
