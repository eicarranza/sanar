<div class="row">
    <form id="form-familiar" class="form-horizontal" action="{$url}pacientes/familiar/{$familiar_id}/{$paciente_id}" method="post" accept-charset="utf-8">
        <div class="form-body">
            <div class="col-md-6">
                <div class="form-group">
                    <label  class="col-md-3 control-label">Tipo ID: </label>
                    <div class="col-md-9">
                        <select id="fam_tipo_documento" class="form-control" name="fam_tipo_documento" >
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
                        <input type="text" id="fam_nombre" class="form-control" name="fam_nombre" maxlength="60" value="{if ($familiar_id>0)}{$familiar.nombre}{/if}" required>
                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-md-3 control-label">Año nac: </label>
                    <div class="col-md-9">
                        <input type="number" id="fam_nacimiento" class="form-control" name="fam_nacimiento" maxlength="60" value="{if ($familiar_id>0)}{$familiar.anho_nacimiento}{/if}" required>
                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-md-3 control-label">Ocupación: </label>
                    <div class="col-md-9">
                        <input type="text" id="fam_ocupacion" class="form-control" name="fam_ocupacion" maxlength="60" value="{if ($familiar_id>0)}{$familiar.ocupacion}{/if}" required>
                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-md-3 control-label">Dirección: </label>
                    <div class="col-md-9">
                          <input type="text" id="fam_direccion" class="form-control" maxlength="80"  name="fam_direccion" value="{if ($familiar_id>0)}{$familiar.direccion}{/if}" >
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label class="col-md-3 control-label">Documento: </label>
                  <div class="col-md-9">
                         <input type="text" id="fam_identificacion" class="form-control" name="fam_identificacion" maxlength="20" value="{if ($familiar_id>0)}{$familiar.identificacion}{/if}" required>
                         <input type="hidden" id="paciente_id" name="paciente_id" value="{$paciente_id}" required>
                         <input type="hidden" id="familiar_id" name="familiar_id" value="{$familiar_id}" required>
                  </div>
                </div>
                <div class="form-group">
                    <label  class="col-md-3 control-label">Parentesco: </label>
                    <div class="col-md-9">
                        <select  class="form-control" id="fam_parentesco" name="fam_parentesco" >
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
                       <select  class="form-control" id="fam_vive" name="fam_vive" >
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
                        <input type="email" id="fam_email" class="form-control" placeholder="Correo electrónico" name="fam_email"  maxlength="80" value="{if ($familiar_id>0)}{$familiar.email}{/if}" />
                      </div>
                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-md-3 control-label" name="telefono" >Teléfono: </label>
                    <div class="col-md-9">
                        <input type="text" id="fam_telefono" class="form-control" maxlength="15"  name="fam_telefono" value="{if ($familiar_id>0)}{$familiar.telefono}{/if}" >
                    </div>
                  </div>
                <div class="form-group">
                    <label  class="col-md-3 control-label">Móvil: </label>
                    <div class="col-md-9">
                        <input type="text" id="fam_movil" class="form-control" maxlength="15" name="fam_movil" value="{if ($familiar_id>0)}{$familiar.movil}{/if}" >
                    </div>
                </div>

            </div>
        </div>
    </form>
</div>    