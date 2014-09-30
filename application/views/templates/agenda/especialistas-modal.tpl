<div id="dv-facturacion" class="row">
    <form id="form-Especialistas" class="form-horizontal" action="#" method="post" accept-charset="utf-8">

    <div class="form-body">
        
       <div class="form-group">
          <label class="col-md-5 control-label">Especialista:</label>
          <input type="hidden" id="cita_id" name="cita_id" value="{$cita_id}" required>
          <div class="col-md-6">
             <select  class="form-control" id='especialista_id' name="especialista" >
               <option value="0">- SELECCIONE -</option>
               {foreach $_especialistas as $gs}
                    <option value="{$gs.id}">{$gs.nombres} {$gs.apellidos}</option>
               {/foreach}
           </select>
          </div>
       </div>
       <div class="form-group">
          <div class="col-md-5"></div>
          <div class="col-md-6">
              <button id="btn-especialista-add" type="button" class="btn green">Agregar</button>
          </div>
       </div>
        <div class="form-group">
            <div class="table-responsive" id="dv-personalApoyo">
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
             </div>
        </div>
       
    </div>
 </form>
</div>

<script>
    
    jQuery(document).ready(function() {
        $( "#form-Especialista" ).submit(function( event ) {
            event.preventDefault();
        });
        
        
        $('#btn-especialista-add').click(function () {
                
                var especialista_id = $('#especialista_id').attr('value');
                var cita_id = $('#cita_id').attr('value');
                
                if(cita_id != ''){
                    var postData = {
                                    'especialista_id': especialista_id, 
                                    'cita_id' : cita_id
                                 };

                    $.post('{$url}agenda/setApoyoCirugia', postData, function(data){
                            $('#dv-personalApoyo').empty();
                            $('#dv-personalApoyo').html(data);
                    });
                }
                else{
                    alert("Aún no ha sido programada la cirugía.");
                }
        });
    });
    
    
    function eliminarRegistro(cita_id, especialista_id){
        var postData = {
                        'cita_id': cita_id, 
                        'especialista_id' : especialista_id
                     };

        $.post('{$url}agenda/delApoyoCirugia', postData, function(data){
                $('#dv-personalApoyo').empty();
                $('#dv-personalApoyo').html(data);
        });
    }
    
</script>