<div class="portlet-title">
    <div class="caption"><i class="icon-comments"></i>Notas</div>
    </div>
    <div class="portlet-body">
        <table class="table table-striped table-hover">
            <thead>
               <tr>
                  <th width="10%">Fecha</th>
                  <th>Notas</th>
               </tr>
            </thead>
            <tbody>
                {foreach $_notas as $i}
                     <tr>
                        <td>{$i.fecha}</td>
                        <td>{$i.notas}</td>
                     </tr>
                 {/foreach}
            </tbody>
        </table>
    </div>
</div>