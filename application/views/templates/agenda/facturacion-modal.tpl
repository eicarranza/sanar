<div id="dv-facturacion" class="row">
    {$errors}
    <form id="form-Facturacion" class="form-horizontal" action="#" method="post" accept-charset="utf-8">

    <div class="form-body">
       <div class="form-group">
          <label class="col-md-4 control-label">Especialista:</label>
          <div class="col-md-8">
             <label class="control-label">{$especialista}</label>
          </div>
       </div>
       <div class="form-group">
          <label class="col-md-4 control-label">Paciente:</label>
          <div class="col-md-8">
              <label class="control-label">{$paciente}</label>
             <input type="hidden" id="cita_id" name="cita_id" value="{$cita_id}" required>
          </div>
       </div>
        <div class="form-group">
            <label  class="col-md-4 control-label">Concepto Servicio:</label>
            <div class="col-md-8">
                <select  class="form-control" name="consulta_tipo"  id="consulta_tipo" >
                    <option value="00">- SELECCIONE -</option>
                    {foreach $_concepto_servicio as $i}
                            <option value="{$i.id}" {if ($existe_factura)}{if ($facturacion['concepto_servicio_id']==$i.id)}selected{/if}{/if}>{$i.descripcion}</option>
                    {/foreach}
                </select>
          </div>
        </div>
        <div class="form-group">
            <label  class="col-md-4 control-label">Servicio:</label>
            <div class="col-md-8">
                <div id="dv_servicio_id">
                    <select  class="form-control" name="servicio_id" id="servicio_id">
                        <option value="000">- SELECCIONE -</option>
                         {foreach $_servicio as $i}
                             <option value="{$i.id}" name="{$facturacion['consulta_tipo']}" {if ($existe_factura)}{if ($facturacion['consulta_tipo']==$i.id)}selected{/if}{/if}>{$i.descripcion}</option>
                         {/foreach}

                   </select>
                </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Valor:</label>
          <div class="col-md-8">
             <input type="text" class="form-control" id="valor" name="valor" maxlength="20" required
                    value="{if ($existe_factura)}{$facturacion['valor']}{/if}">
          </div>
       </div>
    </div>
 </form>
</div>

<script>
    
    jQuery(document).ready(function() {
       verificarEdicion();
        
        $( "#form-Facturacion" ).submit(function( event ) {
            event.preventDefault();
        });
        
        $("#consulta_tipo").change(function () {
		var consulta_tipo = $('#consulta_tipo').attr('value');
                $.ajax({
                        type: "POST",
                        url: "{$url}configuracion/getServicios/"+consulta_tipo, 
                        data: consulta_tipo,
                        dataType: "text",  
                        cache:false,
                        success: 
                             function(data){
                                $('#dv_servicio_id').empty();
                                $('#dv_servicio_id').html(data);
                             }
                });// you have missed this bracket
                return false;
                
        });
    });
    
    function verificarEdicion(){
        {if ($existe_factura)}
                $("#dv_facturacion *").attr("disabled", "disabled").off('click');
        {/if}
    }
    
</script>