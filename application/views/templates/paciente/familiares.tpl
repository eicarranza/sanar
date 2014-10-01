<table class="table table-striped table-hover">
    <thead>
       <tr>
          <th>Parentesco</th>
          <th>Nombre</th>
          <th >Móvil</th>
          <th>Ver</th>
          <th>Eliminar</th>
       </tr>
    </thead>
    <tbody>
    {foreach $_familiar as $i}
        <tr>
           <td>{$i.parentesco_desc}</td>
           <td>{$i.nombre}</td>
           <td>{$i.movil}</td>
           <td >
               <a id="fam_{$i.familiar_id}" data-toggle="modal" href="#responsive">
                   <img src="{$url}assets/img/icons/user_edit.png" onclick="registrarFamiliar({$i.familiar_id}, {$id})"/>
               </a>
           </td>
           <td>
               <a href="#" id="del{$i.familiar_id}" >
                    <img src="{$url}assets/img/icons/delete_page.png" title="Eliminar"
                         onclick="if(confirm('¿Realmente desea eliminar el archivo?')){ eliminarFamiliar({$i.familiar_id}, {$id}); } "/>
               </a>
           </td>
        </tr>
    {/foreach}
    </tbody>
</table>