{block name="scripts" append}
    <script>
    jQuery(document).ready(function() {
        $("#btn-consulta").click(function () {
            {if $cita_tipo_id == 2}
                document.getElementById("frm-paciente").action="{$url}especialista/cirugia";
            {elseif $cita_tipo_id == 21}
                document.getElementById("frm-paciente").action="{$url}especialista/preanestesia";
            {else}
                document.getElementById("frm-paciente").action="{$url}especialista/consulta";
            {/if}
            $( "#frm-paciente" ).submit();
            return false;
        });
    });
    </script>    
{/block}

<div class="row">
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form id="frm-paciente" class="form-horizontal" method="post" action="{$url}especialista/consulta">
           <div class="form-body">
              <h3 class="form-section">{$paciente.nombre1} {$paciente.nombre2} {$paciente.apellido1} {$paciente.apellido2}</h3>
              <input type="hidden" name="cita_id" value="{$cita_id}" required>
              <input type="hidden" name="paciente_id" value="{$paciente.paciente_id}" required>
              <input type="hidden" name="fecha" value="{$fecha}" required>
              <input type="hidden" name="especialista" value="{$especialista}" required>
              <div class="row">
                    <div class="form-group">
                       <label class="control-label col-md-6">Edad: </label>
                       <div class="col-md-6">
                          <p class="form-control-static">{$edad}</p>
                       </div>
                    </div>
                    <div class="form-group">
                       <label class="control-label col-md-6">Fecha nacimiento:</label>
                       <div class="col-md-6">
                          <p class="form-control-static">{$paciente.fecha_nacimiento}</p>
                       </div>
                    </div>
                    <div class="form-group">
                       <label class="control-label col-md-6">Tipo de Consulta:</label>
                       <div class="col-md-6">
                          <p class="form-control-static">{$consulta_tipo}</p>
                       </div>
                    </div>
                    <div class="form-group">
                       <label class="control-label col-md-6">Familiares:</label>
                        <div class="col-md-6">
                            {foreach $familiar as $i}
                                <p class="form-control-static">{$i.nombre}</p>
                            {/foreach}
                        </div>
                    </div>
              </div>
            </div>
            <div class="form-actions right">
                <a id="btn-consulta" class="btn btn-lg green m-icon-big">Iniciar consulta
                    <i class="m-icon-big-swapright m-icon-white"></i>
                </a>
            </div>
        </form>
        <!-- END FORM-->  
     </div>
</div>