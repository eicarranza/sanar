<h3 class="form-section">Exámen físico</h3>
<h4 class="form-section">Signos Vitales</h4>
<form class="form-horizontal">
    <div class="form-body">
        <div class="form-group">
            <label class="col-md-2 control-label" >FC:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" name="frecuencia_cardiaca" onchange="setConsulta(this)" value="{$consulta.frecuencia_cardiaca}">
             </div>

            <label class="col-md-2 control-label" >TA:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" name="tension_arterial" onchange="setConsulta(this)" value="{$consulta.tension_arterial}">
             </div>

             <label class="col-md-1 control-label" >FR:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" name="frecuencia_respiratoria" onchange="setConsulta(this)" value="{$consulta.frecuencia_respiratoria}">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label" >Peso (Kg):</label>
            <div class="col-md-1">
                <input type="text" class="form-control" id="peso" name="peso" onchange="setConsulta(this)" value="{$consulta.peso}">
            </div>

            <label class="col-md-2 control-label" >Talla (Cm):</label>
            <div class="col-md-1">
                <input type="text" class="form-control" id="talla" name="talla" onchange="setConsulta(this)" value="{$consulta.talla}">
             </div>

            <label class="col-md-1 control-label" >IMC:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" id="imc" name="imc" onchange="setConsulta(this)" readonly value="{$consulta.imc}">
            </div>
        </div>                                
    </div>
</form>

<h4 class="form-section">General</h4>
<form class="form-horizontal">
    <div class="form-body">
        <div class="form-group">
            <label class="col-md-2 control-label" >Consciente:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" name="consciente" onchange="setConsultaExamen(this)" value="{if !empty($consultaExamen)}{$consultaExamen.consciente}{/if}">
             </div>

            <label class="col-md-1 control-label" >Alerta:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" name="alerta" onchange="setConsultaExamen(this)" value="{if !empty($consultaExamen)}{$consultaExamen.alerta}{/if}">
             </div>

             <label class="col-md-2 control-label" >Deamulando:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" name="deambulando" onchange="setConsultaExamen(this)" value="{if !empty($consultaExamen)}{$consultaExamen.deambulando}{/if}">
            </div>

            <label class="col-md-1 control-label" >Aspecto:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" name="aspecto" onchange="setConsultaExamen(this)" value="{if !empty($consultaExamen)}{$consultaExamen.aspecto}{/if}">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label" >Disnea SCC:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" id="disnea_scc" name="disnea_scc" onchange="setConsultaExamen(this)" value="{if !empty($consultaExamen)}{$consultaExamen.disnea_scc}{/if}">
            </div>

            <label class="col-md-3 control-label" >Dolor precordial NYHA:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" id="dolor_precordial" name="dolor_precordial" onchange="setConsultaExamen(this)" value="{if !empty($consultaExamen)}{$consultaExamen.dolor_precordial}{/if}">
             </div>

            <label class="col-md-1 control-label" >CF:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" id="cf" name="cf" onchange="setConsultaExamen(this)" value="{if !empty($consultaExamen)}{$consultaExamen.cf}{/if}">
            </div>

            <label class="col-md-1 control-label" >METS:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" id="mets" name="mets" onchange="setConsultaExamen(this)" value="{if !empty($consultaExamen)}{$consultaExamen.mets}{/if}">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label" >Mallampati:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" id="mallampati" name="mallampati" onchange="setConsultaExamen(this)" value="{if !empty($consultaExamen)}{$consultaExamen.mallampati}{/if}">
            </div>

            <label class="col-md-1 control-label" >ATM:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" id="atm" name="atm" onchange="setConsultaExamen(this)" value="{if !empty($consultaExamen)}{$consultaExamen.atm}{/if}">
             </div>

            <label class="col-md-1 control-label" >DTM:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" id="dtm" name="dtm" onchange="setConsultaExamen(this)" value="{if !empty($consultaExamen)}{$consultaExamen.dtm}{/if}">
            </div>

            <label class="col-md-2 control-label" >Cuello móvil:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" id="cuello_movil" name="cuello_movil" onchange="setConsultaExamen(this)" value="{if !empty($consultaExamen)}{$consultaExamen.cuello_movil}{/if}">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label" >Simétrico:</label>
            <div class="col-md-1">
                <input type="text" class="form-control" id="simetrico" name="simetrico" onchange="setConsultaExamen(this)" value="{if !empty($consultaExamen)}{$consultaExamen.simetrico}{/if}">
            </div>

            <label class="col-md-2 control-label" >Vía aérea (Fácil/Difícil):</label>
            <div class="col-md-2">
                <select class="form-control" id="via_aerea" name="via_aerea" onchange="setConsultaExamen(this)">
                    <option value="0" {if !empty($consultaExamen)}{if $consultaExamen.via_aerea==0}selected{/if}{/if}>- Seleccione -</option>
                    <option value="1" {if !empty($consultaExamen)}{if $consultaExamen.via_aerea==1}selected{/if}{/if}>Fácil</option>
                    <option value="2" {if !empty($consultaExamen)}{if $consultaExamen.via_aerea==2}selected{/if}{/if}>Difícil</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label" >Ruidos Cardíacos:</label>
            <div class="col-md-9">
                <textarea class="form-control" name="ruidos_cardiacos" rows="2" onchange="setConsultaExamen(this)">{if !empty($consultaExamen)}{$consultaExamen.ruidos_cardiacos}{/if}</textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label" >Campos pulmonares:</label>
            <div class="col-md-9">
                <textarea class="form-control" name="campos_pulmonares" rows="2" onchange="setConsultaExamen(this)">{if !empty($consultaExamen)}{$consultaExamen.campos_pulmonares}{/if}</textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label" >Abdomen:</label>
            <div class="col-md-9">
                <textarea class="form-control" name="abdomen" rows="2" onchange="setConsultaExamen(this)">{if !empty($consultaExamen)}{$consultaExamen.abdomen}{/if}</textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label" >Extremidades:</label>
            <div class="col-md-9">
                <textarea class="form-control" name="extremidades" rows="2" onchange="setConsultaExamen(this)">{if !empty($consultaExamen)}{$consultaExamen.extremidades}{/if}</textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label" >SNC:</label>
            <div class="col-md-9">
                <textarea class="form-control" name="snc" rows="2" onchange="setConsultaExamen(this)">{if !empty($consultaExamen)}{$consultaExamen.snc}{/if}</textarea>
            </div>
        </div>
    </div>
</form>
