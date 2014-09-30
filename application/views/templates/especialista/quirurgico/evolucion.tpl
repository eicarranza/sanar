<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th width="10%">Fecha</th>
            <th width="20%">Especialista</th>
            <th>Detalle</th>
        </tr>
    </thead>
    <tbody>
        {foreach $_evolucion as $i}
             <tr>
                <td>{$i.fecha}</td>
                <td>{$i.especialista}</td>
                <td>{$i.detalle}</td>
             </tr>
         {/foreach}
    </tbody>
</table>