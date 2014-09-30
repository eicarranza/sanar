<h3 class="form-section">Antecedentes</h3>
<form class="form-horizontal">
    <div class="form-body">
        <div class="form-group">
            <div class="col-md-2">
                <label class="control-label">
                    Patológicos:   
                </label>
            </div>
            <div class="col-md-8">
                <textarea class="form-control" name="patologicos" rows="2" onchange="setAPersonales(this)">{if !empty($aPersonales)}{$aPersonales.patologicos}{/if}</textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-2">
                <label class="control-label">Alérgicos:</label>
            </div>
            <div class="col-md-8">
                <textarea class="form-control" name="alergicos" rows="2" onchange="setAPersonales(this)">{if !empty($aPersonales)}{$aPersonales.alergicos}{/if}</textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-2">
                <label class="control-label">Tóxicos:</label>
            </div>
            <div class="col-md-8">
                <textarea class="form-control" name="habitos_toxicos" rows="2" onchange="setAPersonales(this)">{if !empty($aPersonales)}{$aPersonales.habitos_toxicos}{/if}</textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-2">
                <label class="control-label">Transfusiones:</label>
            </div>
            <div class="col-md-8">
                <textarea class="form-control" name="transfusiones" rows="2" onchange="setAPersonales(this)">{if !empty($aPersonales)}{$aPersonales.transfusiones}{/if}</textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-2">
                <label class="control-label">Medicamentos:</label>
            </div>
            <div class="col-md-8">
                <textarea class="form-control" name="medicamentos" rows="2" onchange="setAPersonales(this)">{if !empty($aPersonales)}{$aPersonales.medicamentos}{/if}</textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-2">
                <label class="control-label">Quirúrgicos:</label>
            </div>
            <div class="col-md-8">
                <textarea class="form-control" name="quirurgicos" rows="2" onchange="setAPersonales(this)">{if !empty($aPersonales)}{$aPersonales.quirurgicos}{/if}</textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-2">
                <label class="control-label">Obstétricos:</label>
            </div>
            <div class="col-md-8">
                <textarea class="form-control" name="obstetricos" rows="2" onchange="setAPersonales(this)">{if !empty($aPersonales)}{$aPersonales.obstetricos}{/if}</textarea>
            </div>
        </div>
    </div>
</form>
