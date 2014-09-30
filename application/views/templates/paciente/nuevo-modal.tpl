<div class="row">
    {$errors}
    <form id="form-nvoPaciente" class="form-horizontal" action="{$url}pacientes/nuevo" method="post" accept-charset="utf-8">
        <div class="col-md-3">
            <ul class="ver-inline-menu tabbable margin-bottom-10">
               <li class="active">
                  <a data-toggle="tab" href="#tab_1-1"><i class="icon-cog"></i> Personal</a> 
                  <span class="after"></span>                                    
               </li>
               <li ><a data-toggle="tab" href="#tab_2-2"><i class="icon-picture"></i> Ubicación</a></li>
            </ul>
        </div>
        <div class="col-md-9">
            <div class="tab-content">
                <div id="tab_1-1" class="tab-pane active">
                    <div class="form-group">
                        <label  class="col-md-4 control-label">Tipo identificación</label>
                        <div class="col-md-8">
                            <select  class="form-control" name="tipo_documento" >
                                <option value="00">- SELECCIONE -</option>
                                {foreach $tipo_documento as $gs}
                                        <option value="{$gs.id}" {if ($id>0)}{if ($paciente.tipo_documento==$gs.id)}selected{/if}{/if}>{$gs.descripcion}</option>
                                {/foreach}
                            </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-4 control-label">Identificación (*)</label>
                      <div class="col-md-8">
                         <input type="text" class="form-control" id="mdl_identificacion" name="identificacion" placeholder="" maxlength="20" value="{$identificacion}" required>
                        <input type="hidden" id="mdl_horaini" name="mdl_horaini" value="{$horaini}" required>
                        <input type="hidden" name="paciente_id" value="{$id}" required>
                      </div>
                   </div>
                   <div class="form-group">
                      <label  class="col-md-4 control-label">Primer nombre (*)</label>
                      <div class="col-md-8">
                         <input type="text" class="form-control" name="nombre1" placeholder="" maxlength="45" value="{if ($id>0)}{$paciente.nombre1}{/if}" required>
                      </div>
                   </div>
                   <div class="form-group">
                      <label  class="col-md-4 control-label">Segundo nombre</label>
                      <div class="col-md-8">
                         <input type="text" class="form-control" name="nombre2" placeholder="" maxlength="45" value="{if ($id>0)}{$paciente.nombre2}{/if}" >
                      </div>
                   </div>
                   <div class="form-group">
                      <label  class="col-md-4 control-label">Primer apellido (*)</label>
                      <div class="col-md-8">
                         <input type="text" class="form-control" name="apellido1" placeholder="" maxlength="45" value="{if ($id>0)}{$paciente.apellido1}{/if}" required>
                      </div>
                   </div>
                   <div class="form-group">
                      <label  class="col-md-4 control-label">Segundo apellido</label>
                      <div class="col-md-8">
                         <input type="text" class="form-control" name="apellido2" placeholder="" maxlength="45" value="{if ($id>0)}{$paciente.apellido2}{/if}" >
                      </div>
                   </div>

                   <div class="form-group">
                      <label  class="col-md-4 control-label">Sexo</label>
                      <div class="col-md-8">
                         <select  class="form-control"  name="sexo" >
                            <option value="F" {if ($id>0)}{if ($paciente.sexo=="F")}selected{/if}{/if}>Femenino</option>
                            <option value="M" {if ($id>0)}{if ($paciente.sexo=="M")}selected{/if}{/if}>Masculino</option>
                         </select>
                      </div>
                   </div>
                   <div class="form-group">
                      <label  class="col-md-4 control-label">Grupo Sanguíneo</label>
                      <div class="col-md-8">
                        <select  class="form-control"  name="grupo_sanguineo" >
                            {foreach $grupo_sanguineo as $gs}
                                 <option value="{$gs.id}" {if ($id>0)}{if ($paciente.grupo_sanguineo==$gs.id)}selected{/if}{/if}>{$gs.descripcion}</option>
                            {/foreach}
                        </select>
                      </div>
                   </div>
                   <div class="form-group">
                      <label  class="col-md-4 control-label">Fecha nacimiento</label>
                      <div class="col-md-8">
                         <div class="input-group">
                            <div class="input-group date date-picker" data-date-format="yyyy-mm-dd"  data-date-viewmode="years">
                                <input id="dp-fecha-n" type="text" class="form-control" name="fecha_nacimiento" 
                                       value="{if ($id>0)} {if ($paciente.fecha_nacimiento>0)}{$paciente.fecha_nacimiento}{/if}{/if}">
                                <span class="input-group-btn">
                                    <button class="btn default" type="button"><i class="icon-calendar"></i></button>
                                </span>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div id="tab_2-2" class="tab-pane">
                    <div class="form-group">
                        <label  class="col-md-4 control-label">Departamento</label>
                        <div class="col-md-8">
                           <select  class="form-control"  name="depto_id" id="depto_id">
                              <option depto_id="$gs.dpto_id" value="00">- SELECCIONE -</option>
                               {foreach $departamento as $gs}
                                   <option depto_id="{$gs.dpto_id}" value="{$gs.dpto_id}" {if ($id>0)}{if ($paciente.depto_id==$gs.dpto_id)}selected{/if}{/if}>{$gs.descripcion}</option>
                               {/foreach}
                           </select>
                        </div>
                     </div>
                     <div class="form-group">
                        <label  class="col-md-4 control-label" >Municipio</label>
                        <div class="col-md-8">
                            <div id="dv_mun_id">
                               <select  class="form-control" name="mun_id" id="mun_id">
                                   <option value="000">- SELECCIONE -</option>
                                    {foreach $municipio as $gs}
                                        <option value="{$gs.mun_id}" {if ($id>0)}{if ($paciente.mun_id==$gs.mun_id && $paciente.depto_id == $gs.dpto_id)}selected{/if}{/if}>{$gs.descripcion}</option>
                                    {/foreach}

                              </select>
                           </div>
                        </div>
                     </div>
                       <div class="form-group">
                           <label  class="col-md-4 control-label">Zona</label>
                           <div class="col-md-8">
                              <select  class="form-control"  name="zona" >
                                 <option value="1" {if ($id>0)}{if ($paciente.zona==1)}selected{/if}{/if}>Urbana</option>
                                 <option value="2" {if ($id>0)}{if ($paciente.zona==2)}selected{/if}{/if}>Rural</option>
                              </select>
                           </div>
                       </div>
                     <div class="form-group">
                        <label  class="col-md-4 control-label">Dirección</label>
                        <div class="col-md-8">
                           <input type="text" class="form-control"  placeholder="" maxlength="80"  name="direccion" value="{if ($id>0)}{$paciente.direccion}{/if}" >
                        </div>
                     </div>
                     <div class="form-group">
                        <label  class="col-md-4 control-label" name="telefono" >Teléfono</label>
                        <div class="col-md-8">
                           <input type="text" class="form-control"  placeholder="" maxlength="15"  name="telefono" value="{if ($id>0)}{$paciente.telefono}{/if}" >
                        </div>
                     </div>
                     <div class="form-group">
                        <label  class="col-md-4 control-label">Móvil</label>
                        <div class="col-md-8">
                           <input type="text" class="form-control"  placeholder="" maxlength="15" name="movil" value="{if ($id>0)}{$paciente.movil}{/if}" >
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-md-4 control-label">Correo electrónico</label>
                        <div class="col-md-8">
                            <div class="input-group">
                               <span class="input-group-addon"><i class="icon-envelope"></i></span>
                               <input type="email" class="form-control" placeholder="Correo electrónico" name="email"  maxlength="80" value="{if ($id>0)}{$paciente.email}{/if}" />
                            </div>
                        </div>
                     </div>
                    <div class="form-group">
                        <label  class="col-md-4 control-label">Estado civil</label>
                        <div class="col-md-8">
                           <select  class="form-control" name="estado_civil" >
                              <option value="00">- SELECCIONE -</option>
                               {foreach $estado_civil as $gs}
                                   <option value="{$gs.id}" {if ($id>0)}{if ($paciente.estado_civil==$gs.id)}selected{/if}{/if}>{$gs.descripcion}</option>
                               {/foreach}
                           </select>
                        </div>
                     </div>
                       <div class="form-group">
                        <label  class="col-md-4 control-label">Ocupación</label>
                        <div class="col-md-8">
                           <input type="text" class="form-control"  placeholder="" maxlength="250" name="ocupacion" value="{if ($id>0)}{$paciente.ocupacion}{/if}" >
                        </div>
                     </div>
                </div>
            </div>
        </div>
    
     </form>
</div>
              
{block name="scripts" append}
    <script>
    jQuery(document).ready(function() {
//        App.init();
        FormComponents.init();
//        UIExtendedModals.init();
        
        $("#depto_id").change(function () {
		depto_id = $('#depto_id').attr('value');
                
                $.ajax({
                        type: "POST",
                        url: "{$url}configuracion/getMunicipio/"+depto_id, 
                        data: depto_id,
                        dataType: "text",  
                        cache:false,
                        success: 
                             function(data){
                                $('#dv_mun_id').empty();
                                $('#dv_mun_id').html(data);
                             }
                         });// you have missed this bracket
                        return false;
                });
      });
    </script>
{/block}