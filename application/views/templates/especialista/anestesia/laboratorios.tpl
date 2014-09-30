<h3 class="form-section">Laboratorios</h3>

<form class="form-horizontal">
    <div class="form-body">
        <div class="form-group">
            <label class="col-md-1 control-label" >TP:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" name="tp" onchange="setConsultaLaboratorios(this)" value="{if !empty($consultaLaboratorios)}{$consultaLaboratorios.tp}{/if}">
             </div>

            <label class="col-md-1 control-label" >TPT:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" name="tpt" onchange="setConsultaLaboratorios(this)" value="{if !empty($consultaLaboratorios)}{$consultaLaboratorios.tpt}{/if}">
             </div>

             <label class="col-md-1 control-label" >HB:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" name="hb" onchange="setConsultaLaboratorios(this)" value="{if !empty($consultaLaboratorios)}{$consultaLaboratorios.hb}{/if}">
            </div>

            <label class="col-md-1 control-label" >HTO:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" name="hto" onchange="setConsultaLaboratorios(this)" value="{if !empty($consultaLaboratorios)}{$consultaLaboratorios.hto}{/if}">
            </div>

            <label class="col-md-1 control-label" >PLT:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" id="plt" name="plt" onchange="setConsultaLaboratorios(this)" value="{if !empty($consultaLaboratorios)}{$consultaLaboratorios.plt}{/if}">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-1 control-label" >k.LEU:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" id="k_leu" name="k_leu" onchange="setConsultaLaboratorios(this)" value="{if !empty($consultaLaboratorios)}{$consultaLaboratorios.k_leu}{/if}">
             </div>

            <label class="col-md-2 control-label" >k. CREAT:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" id="k_creat" name="k_creat" onchange="setConsultaLaboratorios(this)" value="{if !empty($consultaLaboratorios)}{$consultaLaboratorios.k_creat}{/if}">
            </div>

            <label class="col-md-1 control-label" >GLI:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" id="gli" name="gli" onchange="setConsultaLaboratorios(this)" value="{if !empty($consultaLaboratorios)}{$consultaLaboratorios.gli}{/if}">
            </div>
            <label class="col-md-1 control-label" >BUN:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" id="bun" name="bun" onchange="setConsultaLaboratorios(this)" value="{if !empty($consultaLaboratorios)}{$consultaLaboratorios.bun}{/if}">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label" >RX. Tórax:</label>
            <div class="col-md-8">
                <textarea class="form-control" name="rx_torax" rows="2" onchange="setConsultaLaboratorios(this)">{if !empty($consultaLaboratorios)}{$consultaLaboratorios.rx_torax}{/if}</textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label" >EKG Trazo:</label>
            <div class="col-md-8">
                <textarea class="form-control" name="ekg_trazo" rows="2" onchange="setConsultaLaboratorios(this)">{if !empty($consultaLaboratorios)}{$consultaLaboratorios.ekg_trazo}{/if}</textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label" >Imágenes:</label>
            <div class="col-md-8">
                <textarea class="form-control" name="imagenes" rows="2" onchange="setConsultaLaboratorios(this)">{if !empty($consultaLaboratorios)}{$consultaLaboratorios.imagenes}{/if}</textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label" >Otro:</label>
            <div class="col-md-8">
                <textarea class="form-control" name="otro" rows="2" onchange="setConsultaLaboratorios(this)">{if !empty($consultaLaboratorios)}{$consultaLaboratorios.otro}{/if}</textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-1 control-label" >ASA:</label>
            <div class="col-md-4">
                <textarea class="form-control" name="asa" rows="2" onchange="setConsultaLaboratorios(this)">{if !empty($consultaLaboratorios)}{$consultaLaboratorios.asa}{/if}</textarea>
            </div>

            <label class="col-md-1 control-label" >POR:</label>
            <div class="col-md-4">
                <textarea class="form-control" name="por" rows="2" onchange="setConsultaLaboratorios(this)">{if !empty($consultaLaboratorios)}{$consultaLaboratorios.por}{/if}</textarea>
            </div>
        </div>
    </div>
</form>
