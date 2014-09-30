<h3 class="form-section">Plan</h3>
<form class="form-horizontal">
    <div class="form-body">
        <div class="form-group">
            <label class="col-md-2 control-label" >Programar cirugía:</label>
            <div class="col-md-2">
                <select class="form-control" id="programar_cirugia" name="programar_cirugia" onchange="setAnestesiaPlan(this)">
                    <option value="0" {if !empty($anestesiaPlan)}{if $anestesiaPlan.programar_cirugia==0}selected{/if}{/if}>- Seleccione -</option>
                    <option value="1" {if !empty($anestesiaPlan)}{if $anestesiaPlan.programar_cirugia==1}selected{/if}{/if}>Si</option>
                    <option value="2" {if !empty($anestesiaPlan)}{if $anestesiaPlan.programar_cirugia==2}selected{/if}{/if}>No</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" >Ayuno:</label>
            <div class="col-md-3">
                <input type="text" class="form-control" name="ayuno" onchange="setAnestesiaPlan(this)" value="{if !empty($anestesiaPlan)}{$anestesiaPlan.ayuno}{/if}">
             </div>

             <label class="col-md-1 control-label" >Horas:</label>
            <div class="col-md-3">
                <input type="text" class="form-control" name="horas" onchange="setAnestesiaPlan(this)" value="{if !empty($anestesiaPlan)}{$anestesiaPlan.horas}{/if}">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" >Tipo Anestesia:</label>
            <div class="col-md-3">
                <select class="form-control" id="anestesia_tipo" name="anestesia_tipo" onchange="setAnestesiaPlan(this)">
                    {foreach $_anestesia_tipo as $at}
                        <option value="{$at.id}" {if !empty($anestesiaPlan)}{if ($anestesiaPlan.anestesia_tipo==$at.id)}selected{/if}{/if}>{$at.descripcion}</option>
                    {/foreach}
                </select>
            </div>
                
            <label class="col-md-2 control-label" >Observación:</label>
            <div class="col-md-3">
                <input type="text" class="form-control" name="observacion" onchange="setAnestesiaPlan(this)" value="{if !empty($anestesiaPlan)}{$anestesiaPlan.observacion}{/if}">
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-md-2 control-label" >POP con hospitalización:</label>
            <div class="col-md-2">
                <select class="form-control" id="pop_hospitalizacion" name="pop_hospitalizacion" onchange="setAnestesiaPlan(this)">
                    <option value="0" {if !empty($anestesiaPlan)}{if $anestesiaPlan.pop_hospitalizacion==0}selected{/if}{/if}>- Seleccione -</option>
                    <option value="1" {if !empty($anestesiaPlan)}{if $anestesiaPlan.pop_hospitalizacion==1}selected{/if}{/if}>Si</option>
                    <option value="2" {if !empty($anestesiaPlan)}{if $anestesiaPlan.pop_hospitalizacion==2}selected{/if}{/if}>No</option>
                </select>
            </div>

            <label class="col-md-1 control-label" >Reservar:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" id="reservar" name="reservar" onchange="setAnestesiaPlan(this)" value="{if !empty($anestesiaPlan)}{$anestesiaPlan.reservar}{/if}">
            </div>
            <label class="col-md-2 control-label" >UDS GRE:</label>
            <div class="col-md-2">
                <input type="text" class="form-control" id="uds_gre" name="uds_gre" onchange="setAnestesiaPlan(this)" value="{if !empty($anestesiaPlan)}{$anestesiaPlan.uds_gre}{/if}">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label" >Suspender medicamentos:</label>
            <div class="col-md-8">
                <textarea class="form-control" name="suspender_medicamentos" rows="2" onchange="setAnestesiaPlan(this)">{if !empty($anestesiaPlan)}{$anestesiaPlan.suspender_medicamentos}{/if}</textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label" >Interconsulta con:</label>
            <div class="col-md-8">
                <textarea class="form-control" name="interconsulta_con" rows="2" onchange="setAnestesiaPlan(this)">{if !empty($anestesiaPlan)}{$anestesiaPlan.interconsulta_con}{/if}</textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label" >SS Paraclínicos:</label>
            <div class="col-md-8">
                <textarea class="form-control" name="paraclinicos" rows="2" onchange="setAnestesiaPlan(this)">{if !empty($anestesiaPlan)}{$anestesiaPlan.paraclinicos}{/if}</textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label" >Control Resultados:</label>
            <div class="col-md-2">
                <select class="form-control" id="control_resultados" name="control_resultados" onchange="setAnestesiaPlan(this)">
                    <option value="0" {if !empty($anestesiaPlan)}{if $anestesiaPlan.control_resultados==0}selected{/if}{/if}>- Seleccione -</option>
                    <option value="1" {if !empty($anestesiaPlan)}{if $anestesiaPlan.control_resultados==1}selected{/if}{/if}>Si</option>
                    <option value="2" {if !empty($anestesiaPlan)}{if $anestesiaPlan.control_resultados==2}selected{/if}{/if}>No</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label" >Observaciones:</label>
            <div class="col-md-8">
                <textarea class="form-control" name="observaciones" rows="2" onchange="setAnestesiaPlan(this)">{if !empty($anestesiaPlan)}{$anestesiaPlan.observaciones}{/if}</textarea>
            </div>
        </div>
    </div>
</form>
