<table class="table table-striped table-hover">
    <thead>
       <tr>
          <th width="30%">Medicamento</th>
          <th width="30%">Presentación</th>
          <th width="10%">Cantidad</th>
          <th width="25%">Posología</th>
          <th width="5%">Eliminar</th>
       </tr>
    </thead>
    <tbody>
        {foreach $_medicamentos as $i}
             <tr>
                <td>{$i.medicamento}</td>
                <td>{$i.presentacion}</td>
                <td>{$i.cantidad}</td>
                <td>{$i.posologia}</td>
                <td>
                     <a href="#" id="del{$i.medicamento_id}" >
                          <img src="{$url}assets/img/icons/delete_page.png" title="Eliminar"
                               onclick="if(confirm('¿Realmente desea eliminar el medicamento?')){ eliminarMedicamento({$i.medicamento_id}); } "/>
                     </a>
                </td>
             </tr>
         {/foreach}
    </tbody>
</table>