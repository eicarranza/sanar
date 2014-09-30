<div class="row">
    <form id="form-familiar" class="form-horizontal" action="{$url}pacientes/familiar/{$familiar_id}/{$paciente_id}" method="post" accept-charset="utf-8">
        <div class="form-body">
            <div class="col-md-6">
                <div class="form-group">
                    <label  class="col-md-3 control-label">Tipo ID: </label>
                    <div class="col-md-9">
                        <select id="tipo_documento" class="form-control" name="tipo_documento" >
                            <option value="00">- SELECCIONE -</option>
                            {foreach $tipo_documento as $gs}
                                <option value="{$gs.id}" {if ($familiar_id>0)}{if ($familiar.tipo_documento==$gs.id)}selected{/if}{/if}>{$gs.descripcion}</option>
                            {/foreach}
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-md-3 control-label">Nombre: </label>
                    <div class="col-md-9">
                        <input type="text" id="nombre" class="form-control" name="nombre" maxlength="60" value="{if ($familiar_id>0)}{$familiar.nombre}{/if}" required>
                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-md-3 control-label">Año nac: </label>
                    <div class="col-md-9">
                        <input type="number" id="nacimiento" class="form-control" name="nacimiento" maxlength="60" value="{if ($familiar_id>0)}{$familiar.anho_nacimiento}{/if}" required>
                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-md-3 control-label">Ocupación: </label>
                    <div class="col-md-9">
                        <input type="text" id="ocupacion" class="form-control" name="ocupacion" maxlength="60" value="{if ($familiar_id>0)}{$familiar.ocupacion}{/if}" required>
                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-md-3 control-label">Dirección: </label>
                    <div class="col-md-9">
                          <input type="text" id="direccion" class="form-control" maxlength="80"  name="direccion" value="{if ($familiar_id>0)}{$familiar.direccion}{/if}" >
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label class="col-md-3 control-label">Documento: </label>
                  <div class="col-md-9">
                         <input type="text" id="identificacion" class="form-control" name="identificacion" maxlength="20" value="{if ($familiar_id>0)}{$familiar.identificacion}{/if}" required>
                         <input type="hidden" id="paciente_id" name="paciente_id" value="{$paciente_id}" required>
                         <input type="hidden" id="familiar_id" name="familiar_id" value="{$familiar_id}" required>
                  </div>
                </div>
                <div class="form-group">
                    <label  class="col-md-3 control-label">Parentesco: </label>
                    <div class="col-md-9">
                        <select  class="form-control" id="parentesco" name="parentesco" >
                            <option value="00">- SELECCIONE -</option>
                            {foreach $parentesco as $gs}
                                <option value="{$gs.id}" {if ($familiar_id>0)}{if ($familiar.parentesco==$gs.id)}selected{/if}{/if}>{$gs.descripcion}</option>
                            {/foreach}
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-md-3 control-label">Vive: </label>
                    <div class="col-md-9">
                       <select  class="form-control" id="vive" name="vive" >
                            <option value="S" {if ($familiar_id>0)}{if ($familiar.vive=="S")}selected{/if}{/if}>Si</option>
                            <option value="N" {if ($familiar_id>0)}{if ($familiar.vive=="N")}selected{/if}{/if}>No</option>
                       </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Email: </label>
                    <div class="col-md-9">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="icon-envelope"></i></span>
                        <input type="email" id="email" class="form-control" placeholder="Correo electrónico" name="email"  maxlength="80" value="{if ($familiar_id>0)}{$familiar.email}{/if}" />
                      </div>
                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-md-3 control-label" name="telefono" >Teléfono: </label>
                    <div class="col-md-9">
                        <input type="text" id="telefono" class="form-control" maxlength="15"  name="telefono" value="{if ($familiar_id>0)}{$familiar.telefono}{/if}" >
                    </div>
                  </div>
                <div class="form-group">
                    <label  class="col-md-3 control-label">Móvil: </label>
                    <div class="col-md-9">
                        <input type="text" id="movil" class="form-control" maxlength="15" name="movil" value="{if ($familiar_id>0)}{$familiar.movil}{/if}" >
                    </div>
                </div>

            </div>
        </div>
    </form>
</div>

                    
{block name="scripts" append}
    <script>
    jQuery(document).ready(function() {
        $("#btn-cita-guardar").click(function () {
                $.post($('#form-familiar').attr('action'), $('#form-familiar').serialize(), function(json){
                alert("El registro ha sido guardado.");
            }, 'json');

           return false;
        });
    });
    </script>    
{/block}
    