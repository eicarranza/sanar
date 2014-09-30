<table class="table table-striped table-hover">
    <thead>
       <tr>
          <th>Especialista</th>
          <th>Rol</th>
          <th >Eliminar</th>
       </tr>
    </thead>
    <tbody>
        {foreach $_especialistas_apoyo as $i}
             <tr>
                <td>{$i.nombres} {$i.apellidos}</td>
                <td>{$i.descripcion}</td>
                <td>
                     <a href="#" id="del_{$i.cita_id}_{$i.especialista_id}" >
                          <img src="{$url}assets/img/icons/delete_page.png" title="Eliminar"
                               onclick="if(confirm('¿Realmente desea eliminar el registro?')){ eliminarRegistro({$i.cita_id}, {$i.especialista_id}); } "/>
                     </a>
                </td>
             </tr>
         {/foreach}
    </tbody>
</table>