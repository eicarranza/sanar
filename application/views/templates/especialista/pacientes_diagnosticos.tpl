        <table class="table table-striped table-bordered table-hover" id="sample_1">
          <thead>
             <tr>
                <th width="12%">Fecha</th>
                <th width="20%">Motivo Consulta</th>
                <!--<th>Enfermedad Actual</th>-->
                <th>Diagnóstico CIE10</th>
                <th width="10%">Ver</th>
             </tr>
          </thead>
          <tbody>
              {foreach $_historial_diagnostico as $i}
                   <tr>
                        <td>{$i.fecha}</td>
                        <td>{$i.motivo|truncate:50:"...":true}</td>
                        <!--<td><label title="{$i.enfermedad_actual}">{$i.enfermedad_actual|truncate:50:"...":true}</label></td>-->
                        <td><label title="{$i.codigo} - {$i.cie_descripcion}">{$i.cie_descripcion}</label></td>
                        <td>  <a class="btn default btn-xs purple" data-toggle="modal" href="{$url}especialista/consulta/{$i.id}">
                                <i class="icon-edit"></i> Ver</a>
                            </a>
                        </td>
                   </tr>
               {/foreach}
          </tbody>
        </table>
     </div>