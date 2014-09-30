{extends file='layout.tpl'}
{block name="title"}My Page Title{/block}
{block name="styles" append}
   <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="{$url}assets/css/pages/profile.css" rel="stylesheet" type="text/css" />
    <link href="{$url}assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
    <link rel="stylesheet" type="text/css" href="{$url}assets/plugins/bootstrap-fileupload/bootstrap-fileupload.css" />
    <link rel="stylesheet" type="text/css" href="{$url}assets/plugins/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="{$url}assets/plugins/select2/select2_metro.css" />
    <link rel="stylesheet" type="text/css" href="{$url}assets/plugins/clockface/css/clockface.css" />
    <link rel="stylesheet" type="text/css" href="{$url}assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
    <link rel="stylesheet" type="text/css" href="{$url}assets/plugins/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="{$url}assets/plugins/bootstrap-timepicker/compiled/timepicker.css" />
    <link rel="stylesheet" type="text/css" href="{$url}assets/plugins/bootstrap-colorpicker/css/colorpicker.css" />
    <link rel="stylesheet" type="text/css" href="{$url}assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" />
    <link rel="stylesheet" type="text/css" href="{$url}assets/plugins/bootstrap-datetimepicker/css/datetimepicker.css" />
    <link rel="stylesheet" type="text/css" href="{$url}assets/plugins/jquery-multi-select/css/multi-select.css" />
    <link rel="stylesheet" type="text/css" href="{$url}assets/plugins/bootstrap-switch/static/stylesheets/bootstrap-switch-metro.css"/>
    <link rel="stylesheet" type="text/css" href="{$url}assets/plugins/jquery-tags-input/jquery.tagsinput.css" />
    <link rel="stylesheet" type="text/css" href="{$url}assets/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css">
    
   <!-- MODAL -->
     <link rel="stylesheet" type="text/css" href="{$url}assets/plugins/clockface/css/clockface.css" />
   <!-- END MODAL -->
   <!-- AUTOCOMPLETE -->
    <script language="JavaScript" src="{$url}assets/plugins/autocomplete/js/jquery-1.5.1.min.js"></script>
    <script language="JavaScript" src="{$url}assets/plugins/autocomplete/js/jquery-ui-1.8.13.custom.min.js"></script>
    <link type="text/css" href="{$url}assets/plugins/autocomplete/css/ui-lightness/jquery-ui-1.8.13.custom.css" rel="stylesheet" />
   <!-- END AUTOCOMPLETE -->
   <!-- END PAGE LEVEL STYLES -->
{/block}
{block name="body"}{/block}
{block name="page-content"}
     <!-- BEGIN PAGE HEADER-->
     <div class="row">
        <div class="col-md-12">
           <!-- BEGIN PAGE TITLE & BREADCRUMB-->
           <h3 class="page-title">
              Consulta médica: {$consulta.nombre1} {$consulta.apellido1}
           </h3>
           
           <ul class="page-breadcrumb breadcrumb">
                <li class="btn-group">
                    <button type="button" class="btn blue dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
                    <span>Acciones</span> <i class="icon-angle-down"></i>
                    </button>
                    <ul class="dropdown-menu pull-right" role="menu">
                        <li><a href="#" id="btn-imprimir-historia" name="consulta_activa">Imprimir Historia</a></li>
                        <li><a href="#" id="btn-cerrar-consulta" name="consulta_activa">Cerrar consulta</a></li>
                        <li class="divider"></li>
                        <li><a href="{$url}especialista/index">Salir</a></li>
                    </ul>
                </li> 
                <li>
                    <i class="icon-home"></i>
                    <a href="{$url}">Inicio</a> 
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="{$url}especialista/index">Agenda Médica</a>
                    <i class="icon-angle-right"></i>
                </li>
              <li>
                 <a href="#">Consulta</a>
              </li>
           </ul>
           <!-- END PAGE TITLE & BREADCRUMB-->
        </div>
     </div>
     <!-- END PAGE HEADER-->
     
     <!-- BEGIN PAGE CONTENT-->
         <div class="row profile">
            <div class="col-md-12">
               <!--BEGIN TABS-->
               <div class="tabbable tabbable-custom tabbable-full-width">
                  <ul class="nav nav-tabs">
                     <li class="active"><a href="#tab_1_1" data-toggle="tab">Consulta</a></li>
                     <li><a href="#tab_1_3" data-toggle="tab">Antecedentes</a></li>
                     <li><a href="#tab_1_4" data-toggle="tab">Exámenes</a></li>
                     <li><a href="#tab_1_5" data-toggle="tab">Impresión diagnóstica</a></li>
                     <li><a href="#tab_1_6" data-toggle="tab">Tratamiento</a></li>
                  </ul>
                  <div class="tab-content" id="dv-tabConsulta">
                     <div class="tab-pane active" id="tab_1_1">
                        <div class="row profile-account">
                           <div class="col-md-3">
                              <ul class="ver-inline-menu tabbable margin-bottom-10">
                                 <li class="active">
                                    <a data-toggle="tab" href="#tab_2-1">
                                        <i class="icon-cog"></i>Historial de diagnósticos
                                    </a> 
                                    <span class="after"></span>                                    
                                 </li>
                                 <li ><a data-toggle="tab" href="#tab_2-2"><i class="icon-picture"></i> Motivo de Consulta</a></li>
                                 <li ><a data-toggle="tab" href="#tab_2-3"><i class="icon-lock"></i> Enfermedad Actual</a></li>
                                 <li ><a data-toggle="tab" href="#tab_2-4"><i class="icon-lock"></i> Revisión por sistema</a></li>
                              </ul>
                           </div>
                            <div class="col-md-9">
                              <div class="tab-content">
                                <div id="tab_2-1" class="tab-pane active">
                                    <h3 class="form-section">Historial de diagnósticos</h3>
                                    <div class="form-group">
                                        <div class="table-responsive" id="dv-historial-diagnosticos">
                                            <table class="table table-striped table-hover">
                                              <thead>
                                                 <tr>
                                                    <th width="15%">Fecha</th>
                                                    <th width="30%">Diagnóstico CIE10</th>
                                                    <th width="30%">Motivo</th>
                                                    <th width="25%">Tratamiento</th>
                                                 </tr>
                                              </thead>
                                              <tbody>
                                                  {foreach $_historial_diagnostico as $i}
                                                       <tr>
                                                          <td>{$i.fecha}</td>
                                                          <td>{$i.codigo} - {$i.cie_descripcion}</td>
                                                          <td>{$i.motivo}</td>
                                                          <td>{$i.tratamiento}</td>
                                                       </tr>
                                                   {/foreach}
                                              </tbody>
                                            </table>
                                         </div>
                                    </div>
                                </div>
                                <div id="tab_2-2" class="tab-pane">
                                    <form class="form-horizontal">
                                        <div class="form-body">
                                            <h3 class="form-section">Motivo de consulta</h3>
                                            <div class="form-group">
                                                <div class="col-md-2">
                                                    <label class="control-label">
                                                        Finalidad de la consulta:
                                                    </label>
                                                </div>
                                                <div class="col-md-9">
                                                    <select class="form-control" id="finalidad_consulta" name="finalidad_consulta" onchange="setConsulta(this)">
                                                        {foreach $_finalidad_consulta as $ce}
                                                            <option value="{$ce.id}" {if ($consulta.finalidad_consulta==$ce.id)}selected{/if}>{$ce.descripcion}</option>
                                                        {/foreach}
                                                     </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-2">
                                                    <label class="control-label">
                                                        Causa externa:
                                                    </label>
                                                </div>
                                                <div class="col-md-9">
                                                    <select class="form-control" id="causa_externa" name="causa_externa" onchange="setConsulta(this)">
                                                        {foreach $_causa_externa as $ce}
                                                            <option value="{$ce.id}" {if ($consulta.causa_externa==$ce.id)}selected{/if}>{$ce.descripcion}</option>
                                                        {/foreach}
                                                     </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-2">
                                                    <label class="control-label">
                                                        Motivo:
                                                    </label>
                                                </div>
                                                <div class="col-md-9">
                                                    <textarea id="motivo" name="motivo" class="form-control" rows="6" onchange="setConsulta(this)">{$consulta.motivo}</textarea>
                                                    <input type="hidden" id="consulta_id" name="consulta_id" value="{$consulta.id}">
                                                    <input type="hidden" id="paciente_id" name="paciente_id" value="{$paciente.paciente_id}">
                                                    <input type="hidden" id="especialista_id" name="especialista_id" value="{$especialista}">
                                                    <input type="hidden" id="fecha" name="fecha" value="{$fecha}">
                                                </div>
                                            </div>
                                        </div>
                                     </form>
                                </div>
                                <div id="tab_2-3" class="tab-pane">
                                    <h3 class="form-section">Enfermedad actual</h3>
                                    <div class="form-group">
                                        <textarea id="enfermedad_actual" name="enfermedad_actual" class="form-control" rows="6" onchange="setConsulta(this)">{$consulta.enfermedad_actual}</textarea>
                                    </div>
                                    
                                    <h3 class="form-section">Observación</h3>
                                    <div class="form-group">
                                        <textarea id="observacion" name="observacion" class="form-control" rows="6" onchange="setConsulta(this)">{$consulta.observacion}</textarea>
                                    </div>
                                </div>
                                <div id="tab_2-4" class="tab-pane">
                                    <h3 class="form-section">Revisión por sistema</h3>
                                    <form class="horizontal-form">
                                        <div class="form-body">
                                            <div class="form-group">
                                            {foreach $_sistema as $sg}
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">{$sg.descripcion}</label>
                                                        <textarea id="id-{$sg.id}" name="{$sg.id}" class="form-control" rows="2" onchange="setRevisionSistema(this)">{$sg.valoracion}</textarea>
                                                    </div>
                                                </div>
                                            {/foreach}
                                            </div>
                                        </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                           <!--end col-md-9-->                                   
                        </div>
                     </div>
                     <!--tab_1_2-->
                     <div class="tab-pane" id="tab_1_3">
                        <div class="row profile-account">
                           <div class="col-md-3">
                              <ul class="ver-inline-menu tabbable margin-bottom-10">
                                 <li ><a data-toggle="tab" href="#tab_3-1"><i class="icon-picture"></i> A. Patológicos</a></li>
                                 {if $user.especialidad == 1 }
                                    <li ><a data-toggle="tab" href="#tab_3-2"><i class="icon-eye-open"></i> A. Ginecológicos</a></li>
                                    <li ><a data-toggle="tab" href="#tab_3-3"><i class="icon-eye-open"></i> A. Obstétricos</a></li>
                                 {/if}
                              </ul>
                           </div>
                           <div class="col-md-9">
                              <div class="tab-content">
                                 <div id="tab_3-1" class="tab-pane active">
                                    <h3 class="form-section">Antecedentes Patológicos Familiares</h3>
                                        <div class="form-group">
                                            <textarea id="familiar-descripcion" name="descripcion" class="form-control" rows="6" onchange="setAFamiliares(this)">{if !empty($aFamiliares)}{$aFamiliares.descripcion}{/if}</textarea>
                                        </div>
                                        
                                    {if $user.especialidad == 1 }
                                    <h3 class="form-section">Antecedentes Patológicos de la Pareja</h3>
                                    <form class="form-horizontal">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label">
                                                            Enfermedades crónicas:   
                                                        </label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <textarea class="form-control" name="enfermedades_cronicas" rows="2" onchange="setAPareja(this)">{if !empty($aPareja)}{$aPareja.enfermedades_cronicas}{/if}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label">
                                                            Impotencia:   
                                                        </label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <textarea class="form-control" name="impotencia" rows="2" onchange="setAPareja(this)">{if !empty($aPareja)}{$aPareja.impotencia}{/if}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label">
                                                            ETS:   
                                                        </label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <textarea class="form-control" name="ets" rows="2" onchange="setAPareja(this)">{if !empty($aPareja)}{$aPareja.ets}{/if}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    {/if}
                                        <h3 class="form-section">Antecedentes Personales Patológicos</h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Hábitos tóxicos:</label>
                                                    <textarea class="form-control" rows="2" name="habitos_toxicos" onchange="setAPersonales(this)">{if !empty($aPersonales)}{$aPersonales.habitos_toxicos}{/if}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Fisiológicos:</label>
                                                    <textarea class="form-control" rows="2" name="fisiologicos" onchange="setAPersonales(this)">{if !empty($aPersonales)}{$aPersonales.fisiologicos}{/if}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Patológicos:</label>
                                                    <textarea class="form-control" rows="2" name="patologicos" onchange="setAPersonales(this)">{if !empty($aPersonales)}{$aPersonales.patologicos}{/if}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Quirúrgicos:</label>
                                                    <textarea class="form-control" rows="2" name="quirurgicos" onchange="setAPersonales(this)">{if !empty($aPersonales)}{$aPersonales.quirurgicos}{/if}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Traumatológicos:</label>
                                                    <textarea class="form-control" rows="2" name="traumatologicos" onchange="setAPersonales(this)">{if !empty($aPersonales)}{$aPersonales.traumatologicos}{/if}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Alérgicos:</label>
                                                    <textarea class="form-control" rows="2" name="alergicos" onchange="setAPersonales(this)">{if !empty($aPersonales)}{$aPersonales.alergicos}{/if}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                 </div>
                                {if $user.especialidad == 1 }
                                 <div id="tab_3-2" class="tab-pane">
                                    <h3 class="form-section">Antecedentes ginecológicos</h3>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Menarca:</label>
                                            <input type="text" class="form-control" name="menarca" onchange="setAGinecologicos(this)" value="{if !empty($aGinecologicos)}{$aGinecologicos.menarca}{/if}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Ciclos Mestruales:</label>
                                            <input type="text" class="form-control" name="fm" onchange="setAGinecologicos(this)" value="{if !empty($aGinecologicos)}{$aGinecologicos.fm}{/if}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">FUM:</label>
                                            <input type="text" class="form-control" name="fum" onchange="setAGinecologicos(this)" value="{if !empty($aGinecologicos)}{$aGinecologicos.fum}{/if}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">FPP:</label>
                                            <input type="text" class="form-control" name="fpp" onchange="setAGinecologicos(this)" value="{if !empty($aGinecologicos)}{$aGinecologicos.fpp}{/if}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Inicio vida sexual:</label>
                                            <input type="text" class="form-control" name="vida_sexual" onchange="setAGinecologicos(this)" value="{if !empty($aGinecologicos)}{$aGinecologicos.vida_sexual}{/if}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">No. Parejas:</label>
                                            <input type="text" class="form-control" name="numero_parejas" onchange="setAGinecologicos(this)" value="{if !empty($aGinecologicos)}{$aGinecologicos.numero_parejas}{/if}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">ETS:</label>
                                            <input type="text" class="form-control" name="ets" onchange="setAGinecologicos(this)" value="{if !empty($aGinecologicos)}{$aGinecologicos.ets}{/if}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Vaginitis:</label>
                                            <input type="text" class="form-control" name="vaginitis" onchange="setAGinecologicos(this)" value="{if !empty($aGinecologicos)}{$aGinecologicos.vaginitis}{/if}">
                                        </div>
                                    </div>
                                    <div class="col-md-6" hidden>
                                        <div class="form-group">
                                            <label class="control-label">F.U. Citología:</label>
                                            <input type="text" class="form-control" name="fu_citologia" onchange="setAGinecologicos(this)" value="{if !empty($aGinecologicos)}{$aGinecologicos.fu_citologia}{/if}">
                                        </div>
                                    </div>
                                    <div class="col-md-6" hidden>
                                        <div class="form-group">
                                            <label class="control-label">Tipo anticonceptivo:</label>
                                            <input type="text" class="form-control" name="anticoncepcion_tipo" onchange="setAGinecologicos(this)" value="{if !empty($aGinecologicos)}{$aGinecologicos.anticoncepcion_tipo}{/if}">
                                        </div>
                                    </div>
                                    <div class="col-md-6" hidden>
                                        <div class="form-group">
                                            <label class="control-label">Inicio anticoncepción:</label>
                                            <input type="text" class="form-control" name="anticoncepcion_inicio" onchange="setAGinecologicos(this)" value="{if !empty($aGinecologicos)}{$aGinecologicos.anticoncepcion_inicio}{/if}">
                                        </div>
                                    </div>
                                    <div class="col-md-6" hidden>
                                        <div class="form-group">
                                            <label class="control-label">Tiempo anticoncepción:</label>
                                            <input type="text" class="form-control" name="anticoncepcion_tiempo" onchange="setAGinecologicos(this)" value="{if !empty($aGinecologicos)}{$aGinecologicos.anticoncepcion_tiempo}{/if}">
                                        </div>
                                    </div>
                                    <div class="col-md-6" hidden>
                                        <div class="form-group">
                                            <label class="control-label">Suspensión anticoncepción:</label>
                                            <input type="text" class="form-control" name="anticoncepcion_suspension" onchange="setAGinecologicos(this)" value="{if !empty($aGinecologicos)}{$aGinecologicos.anticoncepcion_suspension}{/if}">
                                        </div>
                                    </div>
                                    <div style="clear: both"></div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Anticoncepción:</label>
                                            <!--<input type="text" class="form-control" name="anticoncepcion" onchange="setAGinecologicos(this)" value="{if !empty($aGinecologicos)}{$aGinecologicos.anticoncepcion}{/if}">-->
                                            <textarea class="form-control" name="anticoncepción" rows="3" onchange="setAGinecologicos(this)">{if !empty($aGinecologicos)}{$aGinecologicos.anticoncepcion}{/if}</textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Citologia vaginal:</label>
                                            <textarea class="form-control" name="citologia_vaginal" rows="3" onchange="setAGinecologicos(this)">{if !empty($aGinecologicos)}{$aGinecologicos.citologia_vaginal}{/if}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Vacunacion VPH:</label>
                                            <textarea class="form-control" name="vacunacion_uph" rows="3" onchange="setAGinecologicos(this)">{if !empty($aGinecologicos)}{$aGinecologicos.vacunacion_uph}{/if}</textarea>
                                        </div>
                                    </div>
                                </div>
                                 <div id="tab_3-3" class="tab-pane">
                                    <h3 class="form-section">Antecedentes obstétricos</h3>
                                    <form class="form-horizontal">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label" >G. Deseada:</label>
                                                    <div class="col-md-1">
                                                        <input type="text" class="form-control" name="deseado" onchange="setAObstetricos(this)" value="{if !empty($aObstetricos)}{$aObstetricos.deseado}{/if}">
                                                    </div>
                                                    <label class="col-md-1 control-label">Partos:</label>
                                                    <div class="col-md-1">
                                                        <input type="text" class="form-control" name="partos" onchange="setAObstetricos(this)" value="{if !empty($aObstetricos)}{$aObstetricos.partos}{/if}">
                                                    </div>
                                                    <label class="col-md-1 control-label">Cesárea:</label>
                                                    <div class="col-md-1">
                                                        <input type="text" class="form-control" name="cesarea" onchange="setAObstetricos(this)" value="{if !empty($aObstetricos)}{$aObstetricos.cesarea}{/if}">
                                                    </div>
                                                    <label class="col-md-1 control-label">Abortos:</label>
                                                    <div class="col-md-1">
                                                        <input type="text" class="form-control" name="aborto" onchange="setAObstetricos(this)" value="{if !empty($aObstetricos)}{$aObstetricos.aborto}{/if}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Mortinatos:</label>
                                                    <div class="col-md-1">
                                                        <input type="text" class="form-control" name="mortinato" onchange="setAObstetricos(this)" value="{if !empty($aObstetricos)}{$aObstetricos.mortinato}{/if}">
                                                    </div>
                                                    <label class="col-md-1 control-label">Ectópicos:</label>
                                                    <div class="col-md-1">
                                                        <input type="text" class="form-control" name="ectopico" onchange="setAObstetricos(this)" value="{if !empty($aObstetricos)}{$aObstetricos.ectopico}{/if}">
                                                    </div>
                                                    <label class="col-md-1 control-label">Vivos:</label>
                                                    <div class="col-md-1">
                                                        <input type="text" class="form-control" name="vivo" onchange="setAObstetricos(this)" value="{if !empty($aObstetricos)}{$aObstetricos.vivo}{/if}">
                                                    </div>
                                                    <label class="col-md-2 control-label">Intergenesia:</label>
                                                    <div class="col-md-1">
                                                        <input type="text" class="form-control" name="intergenesia" onchange="setAObstetricos(this)" value="{if !empty($aObstetricos)}{$aObstetricos.intergenesia}{/if}">
                                                    </div>
                                                </div>
                                            </div>
                                                
                                            <div class="row">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Malformaciones:</label>
                                                    <div class="col-md-1">
                                                        <input type="text" class="form-control" name="malformacion" onchange="setAObstetricos(this)" value="{if !empty($aObstetricos)}{$aObstetricos.malformacion}{/if}">
                                                    </div>
                                                    <label class="col-md-2 control-label">Parto prematuro:</label>
                                                    <div class="col-md-1">
                                                        <input type="text" class="form-control" name="prematuro" onchange="setAObstetricos(this)" value="{if !empty($aObstetricos)}{$aObstetricos.prematuro}{/if}">
                                                    </div>
                                                    <label class="col-md-3 control-label">Diabetes Gestacional:</label>
                                                    <div class="col-md-1">
                                                        <input type="text" class="form-control" name="diabetes_gestacional" onchange="setAObstetricos(this)" value="{if !empty($aObstetricos)}{$aObstetricos.diabetes_gestacional}{/if}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Isoinmunización:</label>
                                                    <div class="col-md-1">
                                                        <input type="text" class="form-control" name="isoinmunizacion" onchange="setAObstetricos(this)" value="{if !empty($aObstetricos)}{$aObstetricos.isoinmunizacion}{/if}">
                                                    </div>
                                                    <label class="col-md-1 control-label">HTA:</label>
                                                    <div class="col-md-1">
                                                        <input type="text" class="form-control" name="hta" onchange="setAObstetricos(this)" value="{if !empty($aObstetricos)}{$aObstetricos.hta}{/if}">
                                                    </div>
                                                    <label class="col-md-1 control-label">Infección:</label>
                                                    <div class="col-md-1">
                                                        <input type="text" class="form-control" name="infeccion" onchange="setAObstetricos(this)" value="{if !empty($aObstetricos)}{$aObstetricos.infeccion}{/if}">
                                                    </div>
                                                    <label class="col-md-2 control-label">Otros:</label>
                                                    <div class="col-md-1">
                                                        <input type="text" class="form-control" name="otros" onchange="setAObstetricos(this)" value="{if !empty($aObstetricos)}{$aObstetricos.otros}{/if}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Atención prenatal:</label>
                                                    <div class="col-md-1">
                                                        <input type="text" class="form-control" name="atencion_prenatal" onchange="setAObstetricos(this)" value="{if !empty($aObstetricos)}{$aObstetricos.atencion_prenatal}{/if}">
                                                    </div>
                                                    <label class="col-md-2 control-label">No. consultas:</label>
                                                    <div class="col-md-1">
                                                        <input type="text" class="form-control" name="numero_consultas" onchange="setAObstetricos(this)" value="{if !empty($aObstetricos)}{$aObstetricos.numero_consultas}{/if}">
                                                    </div>
                                                    <label class="col-md-3 control-label">Exámenes complementarios:</label>
                                                    <div class="col-md-1">
                                                        <input type="text" class="form-control" name="examenes_complementarios" onchange="setAObstetricos(this)" value="{if !empty($aObstetricos)}{$aObstetricos.examenes_complementarios}{/if}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Alterados:</label>
                                                    <div class="col-md-1">
                                                        <input type="text" class="form-control" name="alterados" onchange="setAObstetricos(this)" value="{if !empty($aObstetricos)}{$aObstetricos.alterados}{/if}">
                                                    </div>
                                                    <label class="col-md-3 control-label">Medicina gestacional:</label>
                                                    <div class="col-md-1">
                                                        <input type="text" class="form-control" name="medicina_gestacional" onchange="setAObstetricos(this)" value="{if !empty($aObstetricos)}{$aObstetricos.medicina_gestacional}{/if}">
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </form>
                                    
                                    <div class="form-group">
                                        <label  class="">E. Vacunacion:</label>
                                        <div class="checkbox-list">
                                            <label class="checkbox-inline">
                                            <input type="checkbox" id="inlineCheckbox1" value="option1"> T-D
                                            </label>
                                            <label class="checkbox-inline">
                                            <input type="checkbox" id="inlineCheckbox2" value="option2">Influenza
                                            </label>
                                            <label class="checkbox-inline">
                                            <input type="checkbox" id="inlineCheckbox3" value="option3">H. AYB
                                            </label>
                                            <label class="checkbox-inline">
                                            <input type="checkbox" id="inlineCheckbox3" value="option3">F. Amarilla
                                            </label>
                                            <label class="checkbox-inline">
                                            <input type="checkbox" id="inlineCheckbox3" value="option3">Varicela
                                            </label>
                                            <label class="checkbox-inline">
                                            <input type="checkbox" id="inlineCheckbox3" value="option3">Rabia
                                            </label>
                                        </div>
                                    </div>
                                 </div>
                                {/if}
                              </div>
                           </div>
                           <!--end col-md-9-->                                   
                        </div>
                     </div>
                     <!--end tab-pane-->
                     <div class="tab-pane" id="tab_1_4">
                        <div class="row profile-account">
                           <div class="col-md-3">
                              <ul class="ver-inline-menu tabbable margin-bottom-10">
                                 <li class="active">
                                    <a data-toggle="tab" href="#tab_4-1">
                                        <i class="icon-cog"></i>Exámen físico
                                    </a> 
                                    <span class="after"></span>
                                 </li>
                                {if $user.especialidad == 1 }
                                    <li ><a data-toggle="tab" href="#tab_4-2"><i class="icon-picture"></i> Exámen ginecológico</a></li>
                                {/if}
                                 <li ><a data-toggle="tab" href="#tab_4-3"><i class="icon-picture"></i> Ayudas diagnósticas</a></li>
                                 <li ><a data-toggle="tab" href="#tab_4-4"><i class="icon-picture"></i> Interconsulta</a></li>
                              </ul>
                           </div>
                           <div class="col-md-9">
                              <div class="tab-content">
                                <div id="tab_4-1" class="tab-pane active">
                                    <h3 class="form-section">Exámen físico</h3>
                                    <form class="form-horizontal">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label">
                                                            Impresion General:   
                                                        </label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" id="impresion_general" name="impresion_general" class="form-control" onchange="setConsulta(this)" value="{$consulta.impresion_general}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label" >Signos vitales:</label>
                                                    <label class="col-md-1 control-label" >FC:</label>
                                                    <div class="col-md-2">
                                                        <input type="text" class="form-control" name="frecuencia_cardiaca" onchange="setConsulta(this)" value="{$consulta.frecuencia_cardiaca}">
                                                     </div>

                                                    <label class="col-md-1 control-label" >TA:</label>
                                                    <div class="col-md-3">
                                                        <input type="text" class="form-control" name="tension_arterial" onchange="setConsulta(this)" value="{$consulta.tension_arterial}">
                                                     </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label" ></label>
                                                    <label class="col-md-1 control-label" >FR:</label>
                                                    <div class="col-md-2">
                                                        <input type="text" class="form-control" name="frecuencia_respiratoria" onchange="setConsulta(this)" value="{$consulta.frecuencia_respiratoria}">
                                                    </div>
                                                    <label class="col-md-1 control-label" >T:</label>
                                                    <div class="col-md-2">
                                                        <input type="text" class="form-control" name="tanner_genital" onchange="setConsulta(this)" value="{$consulta.tanner_genital}">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label" ></label>
                                                     
                                                    <label class="col-md-1" >Peso(Kg):</label>
                                                    <div class="col-md-2">
                                                        <input type="text" class="form-control" id="peso" name="peso" onchange="setConsulta(this)" value="{$consulta.peso}">
                                                    </div>

                                                    <label class="col-md-2 control-label" >Talla (Cm):</label>
                                                    <div class="col-md-2">
                                                        <input type="text" class="form-control" id="talla" name="talla" onchange="setConsulta(this)" value="{$consulta.talla}">
                                                     </div>

                                                    <label class="col-md-1 control-label" >IMC:</label>
                                                    <div class="col-md-2">
                                                        <input type="text" class="form-control" id="imc" name="imc" onchange="setConsulta(this)" readonly value="{$consulta.imc}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <form class="horizontal-form">
                                        <div class="form-body">
                                            <div class="row">
                                            {foreach $_partes_cuerpo as $sg}
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">{$sg.descripcion}</label>
                                                        <input type="text" id="id-pc-{$sg.id}" name="{$sg.id}" class="form-control" onchange="setRevisionFisica(this)" value="{$sg.valoracion}"/>
                                                    </div>
                                                </div>
                                            {/foreach}
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                {if $user.especialidad == 1 }
                                <div id="tab_4-2" class="tab-pane">
                                    <div class="row">
                                        <div class="form-group">
                                            <h3 class="form-section">Examen Ginecológico</h3>
                                            <textarea name="examen_ginecologico" class="form-control" rows="6" onchange="setConsultaExamen(this)">{if !empty($consulta_examen)}{$consulta_examen.examen_ginecologico}{/if}</textarea>
                                        </div>
                                    </div>
                                </div>
                                {/if}
                                <div id="tab_4-3" class="tab-pane">
                                    
                                            <h3 class="form-section">Ayudas diagnósticas</h3>
                                            <form class="form-horizontal">
                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <div class="col-md-2">
                                                            <label class="control-label">
                                                                Procedimiento:   
                                                            </label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" id="des-cups" class="form-control" />
                                                            <input type="hidden" id="id-cups"/>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-md-2">
                                                            <label class="control-label">
                                                                Observación:
                                                            </label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <textarea id="cups-observacion" name="cups-observacion" class="form-control" rows="2"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-3">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <button id="btn-cups-add" type="button" class="btn green">Agregar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            
                                            <div class="portlet box blue ">
                                                <div class="portlet-title">
                                                   <div class="caption"><i class="icon-comments"></i>Procedimiento</div>
                                                </div>
                                                <div class="portlet-body">
                                                    <div class="table-responsive" id="dv-procedimientos">
                                                      <table class="table table-striped table-hover">
                                                        <thead>
                                                           <tr>
                                                              <th width="10%">Código</th>
                                                              <th width="60%">Procedimiento</th>
                                                              <th width="25%">Descripción</th>
                                                              <th width="5%">Eliminar</th>
                                                           </tr>
                                                        </thead>
                                                        <tbody>
                                                            {foreach $_procedimiento as $i}
                                                                 <tr>
                                                                    <td>{$i.codigo}</td>
                                                                    <td>{$i.cups_descripcion}</td>
                                                                    <td>{$i.cp_observacion}</td>
                                                                    <td>
                                                                         <a href="#" id="del{$i.procedimiento_id}" >
                                                                              <img src="{$url}assets/img/icons/delete_page.png" title="Eliminar"
                                                                                   onclick="if(confirm('¿Realmente desea eliminar el procedimiento?')){ eliminarProcedimiento({$i.consulta_id}, {$i.procedimiento_id}); } "/>
                                                                         </a>
                                                                    </td>
                                                                 </tr>
                                                             {/foreach}
                                                        </tbody>
                                                      </table>
                                                    </div>
                                                    <div class="form-actions right">                           
                                                        <button type="button" class="btn green" onclick="imprimirProcedimientos();">Imprimir</button>
                                                    </div>
                                                </div>
                                            </div>
                                    
                                </div>
                                <div id="tab_4-4" class="tab-pane">
                                    <form class="form-horizontal">
                                        <div class="form-body">
                                            <h3 class="form-section">Interconsulta</h3>
                                            <div class="form-group">
                                                <div class="col-md-2">
                                                    <label class="control-label">
                                                        Especialidad:
                                                    </label>
                                                </div>
                                                <div class="col-md-9">
                                                    <select class="form-control" id="especialidad" name="especialidad">
                                                        {foreach $_especialidades as $ce}
                                                            <option value="{$ce.id}">{$ce.descripcion}</option>
                                                        {/foreach}
                                                     </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-2">
                                                    <label class="control-label">
                                                        Motivo:
                                                    </label>
                                                </div>
                                                <div class="col-md-9">
                                                    <textarea id="inter-motivo" name="inter-motivo" class="form-control" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-3">
                                            </div>
                                            <div class="col-md-8">
                                                <button id="btn-interconsulta-add" type="button" class="btn green">Agregar</button>
                                            </div>
                                        </div>
                                     </form>
                                            
                                            <div class="portlet box blue ">
                                                <div class="portlet-title">
                                                   <div class="caption"><i class="icon-comments"></i>Interconsultas</div>
                                                </div>
                                                <div class="portlet-body">
                                                    <div class="table-responsive" id="dv-interconsultas">
                                                      <table class="table table-striped table-hover">
                                                        <thead>
                                                           <tr>
                                                              <th width="30%">Especialidad</th>
                                                              <th width="60%">Descripción</th>
                                                              <th width="5%">Imprimir</th>
                                                              <th width="5%">Eliminar</th>
                                                           </tr>
                                                        </thead>
                                                        <tbody>
                                                            {foreach $_interconsultas as $i}
                                                                 <tr>
                                                                    <td>{$i.esp_descripcion}</td>
                                                                    <td>{$i.ci_descripcion}</td>
                                                                    <td>
                                                                         <a href="#" id="imp{$i.especialidad_id}" >
                                                                              <img src="{$url}assets/img/icons/printer.png" title="Imprimir"
                                                                                   onclick="imprimirInterconsulta({$i.consulta_id}, {$i.especialidad_id}); "/>
                                                                         </a>
                                                                    </td>
                                                                    <td>
                                                                         <a href="#" id="del{$i.especialidad_id}" >
                                                                              <img src="{$url}assets/img/icons/delete_page.png" title="Eliminar"
                                                                                   onclick="if(confirm('¿Realmente desea eliminar la interconsulta?')){ eliminarInterconsulta({$i.consulta_id}, {$i.especialidad_id}); } "/>
                                                                         </a>
                                                                    </td>
                                                                 </tr>
                                                             {/foreach}
                                                        </tbody>
                                                      </table>
                                                   </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           <!--end col-md-9-->                                   
                        </div>
                     </div>
                     <!--end tab-pane-->
                    <div class="tab-pane" id="tab_1_5">
                        <h3 class="form-section">Impresión diagnóstica</h3>
                        <form class="form-horizontal">
                            <div class="form-body">
                                <div class="form-group">
                                    <div class="col-md-3">
                                        <label class="control-label">
                                            Diagnóstico CIE-10:   
                                        </label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" id="des-cie10" class="form-control" />
                                        <input type="hidden" id="id-cie10"/>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-md-3">
                                        <label class="control-label">
                                            Diagnóstico clínico:   
                                        </label>
                                    </div>
                                    <div class="col-md-8">
                                        <textarea id="impresion-diagnostica" name="impresion-diagnostica" class="form-control" rows="2"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3">
                                        <label class="control-label">
                                            Tipo de diagnóstico:
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="form-control" id="tipo_diagnostico" name="tipo_diagnostico">
                                            {foreach $_tipo_diagnostico as $ce}
                                                <option value="{$ce.id}">{$ce.descripcion}</option>
                                            {/foreach}
                                         </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-3">
                                    </div>
                                    <div class="col-md-8">
                                        <button id="btn-cie10-add" type="button" class="btn green">Agregar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                            
                        <div class="portlet box blue ">
                            <div class="portlet-title">
                               <div class="caption"><i class="icon-comments"></i>Diagnósticos</div>
                            </div>
                            <div class="portlet-body">
                                <div class="table-responsive" id="dv-diagnosticos">
                                  <table class="table table-striped table-hover">
                                    <thead>
                                       <tr>
                                          <th>Código</th>
                                          <th>Diagnóstico</th>
                                          <th>Descripción</th>
                                          <th>Tipo Diagnóstico</th>
                                          <th >Eliminar</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                        {foreach $_diagnostico as $i}
                                             <tr>
                                                <td>{$i.codigo}</td>
                                                <td>{$i.cie_descripcion}</td>
                                                <td>{$i.cd_descripcion}</td>
                                                <td>{$i.tipo_descripcion}</td>
                                                <td>
                                                     <a href="#" id="del{$i.diagnostico_id}" >
                                                          <img src="{$url}assets/img/icons/delete_page.png" title="Eliminar"
                                                               onclick="if(confirm('¿Realmente desea eliminar el diagnóstico?')){ eliminarDiagnostico({$i.consulta_id}, {$i.diagnostico_id}); } "/>
                                                     </a>
                                                </td>
                                             </tr>
                                         {/foreach}
                                    </tbody>
                                  </table>
                               </div>
                            </div>
                        </div>
                     </div>
                     <!--end tab-pane-->
                     <div class="tab-pane" id="tab_1_6">
                            <div class="col-md-3">
                              <ul class="ver-inline-menu tabbable margin-bottom-10">
                                    <li class="active">
                                        <a data-toggle="tab" href="#tab_6-1">
                                            <i class="icon-cog"></i>Medicación
                                        </a> 
                                    <span class="after"></span>
                                    </li>
                                    <li ><a data-toggle="tab" href="#tab_6-2"><i class="icon-picture"></i> Tratamiento</a></li>
                              </ul>
                            </div>
                            <div class="col-md-9">
                                <div class="tab-content">
                                    <div id="tab_6-1" class="tab-pane active">
                                        <form class="form-horizontal">
                                            <div class="form-body">
                                                <h3 class="form-section">Medicación</h3>
                                                <div class="form-group">
                                                    <div class="col-md-2">
                                                        <label class="control-label">
                                                            Medicamento:
                                                        </label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" id="medicacion" name="medicacion" class="form-control"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-2">
                                                        <label class="control-label">
                                                            Presentación:
                                                        </label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" id="presentacion" name="presentacion" class="form-control"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-2">
                                                        <label class="control-label">
                                                            Cantidad:
                                                        </label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" id="cantidad" name="cantidad" class="form-control"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-2">
                                                        <label class="control-label">
                                                            Posología:
                                                        </label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" id="posologia" name="posologia" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                            <div class="form-group">
                                                <div class="col-md-3">
                                                </div>
                                                <div class="col-md-8">
                                                    <button id="btn-medicacion-add" type="button" class="btn green">Agregar</button>
                                                </div>
                                            </div>
                                        </form>
                                            
                                        <div class="portlet box blue ">
                                            <div class="portlet-title">
                                               <div class="caption"><i class="icon-comments"></i>Medicamentos</div>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="table-responsive" id="dv-medicacion">
                                                  <table class="table table-striped table-hover">
                                                    <thead>
                                                       <tr>
                                                          <th width="30%">Medicamento</th>
                                                          <th width="30%">Presentación</th>
                                                          <th width="10%">Cantidad</th>
                                                          <th width="25%">Posología</th>
                                                          <th width="5%">Eliminar</th>
                                                       </tr>
                                                    </thead>
                                                    <tbody>
                                                        {foreach $_medicamentos as $i}
                                                             <tr>
                                                                <td>{$i.medicamento}</td>
                                                                <td>{$i.presentacion}</td>
                                                                <td>{$i.cantidad}</td>
                                                                <td>{$i.posologia}</td>
                                                                <td>
                                                                     <a href="#" id="del{$i.medicamento_id}" >
                                                                          <img src="{$url}assets/img/icons/delete_page.png" title="Eliminar"
                                                                               onclick="if(confirm('¿Realmente desea eliminar el medicamento?')){ eliminarMedicamento({$i.medicamento_id}); } "/>
                                                                     </a>
                                                                </td>
                                                             </tr>
                                                         {/foreach}
                                                    </tbody>
                                                  </table>
                                               </div>
                                                    
                                                <div class="form-actions right">                           
                                                    <button type="button" class="btn green" onclick="imprimirFormula();">Imprimir</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab_6-2" class="tab-pane">
                                        <h3 class="form-section">Tratamiento</h3>
                                        <div class="form-group">
                                            <textarea name="tratamiento" class="form-control" rows="6" onchange="setConsulta(this)">{$consulta.tratamiento}</textarea>
                                        </div>
                                        <div class="form-actions right">                           
                                            <button type="button" class="btn green" onclick="imprimirTratamiento();">Imprimir</button>
                                        </div>
                                        <h3 class="form-section">Recomendaciones</h3>
                                        <div class="form-group">
                                            <textarea name="recomendaciones" class="form-control" rows="6" onchange="setConsulta(this)">{$consulta.recomendaciones}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                     </div>
                     <!--end tab-pane-->
                  </div>
               </div>
               <!--END TABS-->
            </div>
         </div>
         <!-- END PAGE CONTENT-->
{/block}


{block name="scripts" append}
    <!-- MODAL -->
    <script type="text/javascript" src="{$url}assets/plugins/clockface/js/clockface.js"></script>
    <script type="text/javascript" src="{$url}assets/plugins/bootstrap-daterangepicker/moment.min.js"></script>
    <!-- END MODAL -->

    <script type="text/javascript" src="{$url}assets/plugins/bootstrap-fileupload/bootstrap-fileupload.js"></script>
    <script type="text/javascript" src="{$url}assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="{$url}assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.es.js"></script>
    <script type="text/javascript" src="{$url}assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>  
    <script type="text/javascript" src="{$url}assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
    <script type="text/javascript" src="{$url}assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript" src="{$url}assets/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js"></script>   
    <script type="text/javascript" src="{$url}assets/plugins/select2/select2.min.js"></script>
    <script type="text/javascript" src="{$url}assets/plugins/jquery.input-ip-address-control-1.0.min.js"></script>
    <script type="text/javascript" src="{$url}assets/plugins/jquery-multi-select/js/jquery.multi-select.js"></script>
    <script src="{$url}assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript" ></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{$url}assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
    <script src="{$url}assets/scripts/app.js"></script>
    <script src="{$url}assets/scripts/form-components.js"></script>     
    <script src="{$url}assets/scripts/new-window-post.js"></script>     
    <script type="text/javascript" src="{$url}assets/plugins/jquery.ui.autocomplete.html.js"></script>
    
    <!-- END PAGE LEVEL SCRIPTS -->
    <script>
        
        jQuery(document).ready(function() {
            App.init();
            FormComponents.init();
            verificarEdicion();
            calcularIMC();
            setNormal();
            
            $( "#des-cie10" ).autocomplete({
                    source: function(request, response) {
                                $.ajax({
                                    url: "{$url}especialista/getDiagnostico",
                                    data: { term: $("#des-cie10").val()},
                                    dataType: "json",
                                    type: "POST",
                                    success: function(data){
                                        if (data != null) {
                                            response($.map(data, function (item) {
                                                return {
                                                    label: item.codigo + '- ' + item.descripcion,
                                                    descripcion: item.descripcion,
                                                    codigo: item.codigo,
                                                    id: item.id
                                                }
                                            }))
                                        } else $(".ui-autocomplete").css({
                                            "display": "none"
                                        });
                                    }
                                });
                    },
                    messages: {
                        noResults: '',
                        results: function() {}
                    },
                    minLength: 2,
                    select: function (event, ui) {
                        $("#des-cie10").val(ui.item.codigo + " - " + ui.item.descripcion);
                        $("#id-cie10").val(ui.item.id);
                        return false;
                    }
            });
            
            $( "#des-cups" ).autocomplete({
                    source: function(request, response) {
                                $.ajax({
                                    url: "{$url}especialista/getProcedimiento",
                                    data: { term: $("#des-cups").val()},
                                    dataType: "json",
                                    type: "POST",
                                    success: function(data){
                                        if (data != null) {
                                            response($.map(data, function (item) {
                                                return {
                                                    label: item.codigo + '- ' + item.descripcion,
                                                    descripcion: item.descripcion,
                                                    codigo: item.codigo,
                                                    id: item.id
                                                }
                                            }))
                                        } else $(".ui-autocomplete").css({
                                            "display": "none"
                                        });
                                    }
                                });
                    },
                    messages: {
                        noResults: '',
                        results: function() {}
                    },
                    minLength: 2,
                    select: function (event, ui) {
                        $("#des-cups").val(ui.item.codigo + " - " + ui.item.descripcion);
                        $("#id-cups").val(ui.item.id);
                        return false;
                    }
            });
            
            $( "#peso" )
                .change(function() {
                    calcularIMC();
                })
            .keyup();
            
            $( "#talla" )
                .change(function() {
                    calcularIMC();
                })
            .keyup();
            
            $('#btn-revision-sistema').click(function () {
                setNormal();
                
            });
            
            $('#btn-cerrar-consulta').click(function () {
                setCerrarConsulta(this);
            });
            
            $('#btn-imprimir-historia').click(function () {
                imprimirHistoria(this);
            });
            
            $('#btn-interconsulta-add').click(function () {
                
                var consulta_id = $('#consulta_id').attr('value');
                var especialidad_id = $('#especialidad').attr('value');
                var motivo = $('#inter-motivo').attr('value');
                
                if(especialidad_id != '10'){
                    var postData = {
                                    'consulta_id': consulta_id, 
                                    'especialidad_id' : especialidad_id,
                                    'descripcion' : motivo
                                 };

                    $.post('{$url}especialista/setInterconsulta', postData, function(data){
                            $('#dv-interconsultas').empty();
                            $('#dv-interconsultas').html(data);
                            $('#inter-motivo').attr('value', '');
                    });
                }
                else{
                    alert("Ingrese una especialidad.");
                }
            });
            
            $('#btn-cups-add').click(function () {
                
                var consulta_id = $('#consulta_id').attr('value');
                var cups_id = $('#id-cups').attr('value');
                var observacion = $('#cups-observacion').attr('value');
                
                if(cups_id != ''){
                    var postData = {
                                    'consulta_id': consulta_id, 
                                    'procedimiento_id' : cups_id,
                                    'observacion' : observacion
                                 };

                    $.post('{$url}especialista/setProcedimiento', postData, function(data){
                            $('#dv-procedimientos').empty();
                            $('#dv-procedimientos').html(data);
                            //$('#search').attr('value', '');
                            $('#des-cups').attr('value', '');
                            $('#id-cups').attr('value', '');
                            $('#cups-observacion').attr('value', '');

                    });
                }
                else{
                    alert("Ingrese un diagnóstico válido.");
                }
            });
            
            $('#btn-cie10-add').click(function () {
                
                var consulta_id = $('#consulta_id').attr('value');
                var cie_id = $('#id-cie10').attr('value');
                var descripcion = $('#impresion-diagnostica').attr('value');
                var tipo_diagnostico = $('#tipo_diagnostico').attr('value');
                
                if(cie_id != ''){
                    var postData = {
                                    'consulta_id': consulta_id, 
                                    'diagnostico_id' : cie_id,
                                    'descripcion' : descripcion,
                                    'tipo_diagnostico' : tipo_diagnostico
                                 };

                    $.post('{$url}especialista/setDiagnostico', postData, function(data){
                            $('#dv-diagnosticos').empty();
                            $('#dv-diagnosticos').html(data);
                            //$('#search').attr('value', '');
                            $('#des-cie10').attr('value', '');
                            $('#id-cie10').attr('value', '');
                            $('#impresion-diagnostica').attr('value', '');

                    });
                }
                else{
                    alert("Ingrese un diagnóstico válido.");
                }
            });
            
            $('#btn-medicacion-add').click(function () {
                
                var consulta_id = $('#consulta_id').attr('value');
                var medicamento = $('#medicacion').attr('value');        
                var presentacion = $('#presentacion').attr('value');
                var posologia = $('#posologia').attr('value');
                var cantidad = $('#cantidad').attr('value');
                
                if(medicamento != ''){
                    var postData = {
                                    'consulta_id': consulta_id, 
                                    'medicamento': medicamento, 
                                    'presentacion' : presentacion,
                                    'posologia' : posologia,
                                    'cantidad' : cantidad
                                 };

                    $.post('{$url}especialista/setMedicacion', postData, function(data){
                            $('#dv-medicacion').empty();
                            $('#dv-medicacion').html(data);
                            $('#medicacion').attr('value', '');
                            $('#presentacion').attr('value', '');
                            $('#posologia').attr('value', '');
                            $('#cantidad').attr('value', '');

                    });
                }
                else{
                    alert("Ingrese un diagnóstico válido.");
                }
            });
            
        });
        
        function verificarEdicion(){
            {if ($consulta_activa==0)}
                    $("#dv-tabConsulta *").attr("disabled", "disabled").off('click');
            {/if}
        }
        
        function calcularIMC(){
            
            var peso = $('#peso').attr('value');
            var talla = $('#talla').attr('value');
            var imc = 0;
            
            talla = talla / 100;
            if(talla>0){
                imc = peso / (talla * talla);
                imc = Math.round(imc * 100) / 100;
            }
            
            $('#imc').attr('value', imc);
            setIMC();
        }
        
        function imprimirInterconsulta(consulta_id, especialidad_id){
            var paciente_id = $('#paciente_id').attr('value');
            var especialista_id = $('#especialista_id').attr('value');
            
            var postData = {
                            'consulta_id': consulta_id, 
                            'especialidad_id' : especialidad_id,
                            'especialista_id' : especialista_id,
                            'paciente_id' : paciente_id
                         };    
        
            open('POST', '{$url}reportes/interconsulta', postData, '_blank');
        }
         
        function imprimirTratamiento(){
            var paciente_id = $('#paciente_id').attr('value');
            var consulta_id = $('#consulta_id').attr('value');
            
            var postData = {
                            'consulta_id': consulta_id, 
                            'paciente_id' : paciente_id
                         };    
        
            open('POST', '{$url}reportes/tratamiento', postData, '_blank');
        }
        
        function imprimirFormula(){
            var paciente_id = $('#paciente_id').attr('value');
            var consulta_id = $('#consulta_id').attr('value');
            var especialista_id = $('#especialista_id').attr('value');
            
            var postData = {
                            'consulta_id': consulta_id, 
                            'especialista_id' : especialista_id,
                            'paciente_id' : paciente_id
                         };    
        
            open('POST', '{$url}reportes/formula', postData, '_blank');
        }
        
        function imprimirProcedimientos(){
            var paciente_id = $('#paciente_id').attr('value');
            var consulta_id = $('#consulta_id').attr('value');
            var especialista_id = $('#especialista_id').attr('value');
            
            var postData = {
                            'consulta_id': consulta_id, 
                            'especialista_id' : especialista_id,
                            'paciente_id' : paciente_id
                         };    
        
            open('POST', '{$url}reportes/procedimientos', postData, '_blank');
        }
        
        function eliminarInterconsulta(consulta_id, especialidad_id){
            var postData = {
                            'consulta_id': consulta_id, 
                            'especialidad_id' : especialidad_id
                         };

            $.post('{$url}especialista/delInterconsulta', postData, function(data){
                    $('#dv-interconsultas').empty();
                    $('#dv-interconsultas').html(data);
            });
        }
        
        function eliminarDiagnostico(consulta_id, diagnostico_id){
            var postData = {
                            'consulta_id': consulta_id, 
                            'diagnostico_id' : diagnostico_id
                         };

            $.post('{$url}especialista/delDiagnostico', postData, function(data){
                    $('#dv-diagnosticos').empty();
                    $('#dv-diagnosticos').html(data);
            });
        }
        
        function eliminarProcedimiento(consulta_id, procedimiento_id){
            var postData = {
                            'consulta_id': consulta_id, 
                            'procedimiento_id' : procedimiento_id
                         };

            $.post('{$url}especialista/delProcedimiento', postData, function(data){
                    $('#dv-procedimientos').empty();
                    $('#dv-procedimientos').html(data);
            });
        }
        
        function eliminarMedicamento(medicamento_id){
            var consulta_id = $('#consulta_id').attr('value');
            var postData = {
                            'consulta_id': consulta_id, 
                            'medicamento_id' : medicamento_id
                         };

            $.post('{$url}especialista/delMedicacion', postData, function(data){
                    //alert(data);
                    $('#dv-medicacion').empty();
                    $('#dv-medicacion').html(data);
            });
        }
        
        function getData(campo){
            var consulta_id = $('#consulta_id').attr('value');
            var especialista_id = $('#especialista_id').attr('value');
            var paciente_id = $('#paciente_id').attr('value');
            var fecha = $('#fecha').attr('value');
            var columna = campo.name;
            var valor = campo.value;
            
            var postData = {
                            'consulta_id': consulta_id, 
                            'especialista_id' : especialista_id,
                            'paciente_id' : paciente_id,
                            'fecha' : fecha,
                            'campo' : columna,
                            'valor' : valor
                         };
                         
            return postData;
        }
        
        function setConsulta(campo){
            postData = getData(campo);
            $.post('{$url}especialista/setConsulta', postData, function(data){
            });
        }
        
        function setInterconsulta(campo){
            postData = getData(campo);
            $.post('{$url}especialista/setInterconsulta', postData, function(data){});
        }
        
        function setCerrarConsulta(campo){
             postData = getData(campo);
            $.post('{$url}especialista/cerrarConsulta', postData, function(data){
                window.location.href = '{$url}especialista/index';
            });
        }
        
        function imprimirHistoria(campo){
            postData = getData(campo);
            open('POST', '{$url}reportes/historia', postData, '_blank');
        }
        
        function setAFamiliares(campo){
            postData = getData(campo);
            $.post('{$url}especialista/setAFamiliares', postData, function(data){
            });
        }
        function setAGinecologicos(campo){
            postData = getData(campo);
            $.post('{$url}especialista/setAGinecologicos', postData, function(data){});
        }
        function setAObstetricos(campo){
            postData = getData(campo);
            $.post('{$url}especialista/setAObstetricos', postData, function(data){});
        }
        function setAPareja(campo){
            postData = getData(campo);
            $.post('{$url}especialista/setAPareja', postData, function(data){});
        }
        function setAPersonales(campo){
            postData = getData(campo);
            $.post('{$url}especialista/setAPersonales', postData, function(data){});
        }
        function setConsultaExamen(campo){
            postData = getData(campo);
            $.post('{$url}especialista/setConsultaExamen', postData, function(data){});
        }
        function setRevisionSistema(campo){
            var consulta_id = $('#consulta_id').attr('value');
            var sistema_id = campo.name;
            var valor = campo.value;
            
            var postData = {
                            'consulta_id': consulta_id, 
                            'sistema_id' : sistema_id,
                            'valor' : valor
                         };
                         
            $.post('{$url}especialista/setRevisionSistema', postData, function(data){});
        }
        function setRevisionFisica(campo){
            var consulta_id = $('#consulta_id').attr('value');
            var parte_cuerpo_id = campo.name;
            var valor = campo.value;
            
            var postData = {
                            'consulta_id': consulta_id, 
                            'parte_cuerpo_id' : parte_cuerpo_id,
                            'valor' : valor
                         };
                         
            $.post('{$url}especialista/setRevisionFisica', postData, function(data){});
        }
        
        function setIMC(){
            var consulta_id = $('#consulta_id').attr('value');
            
            var postData = {
                            'consulta_id': consulta_id, 
                            'campo' : 'imc',
                            'valor' : $('#imc').attr('value')
                         };
                         
            $.post('{$url}especialista/setConsulta', postData, function(data){ });
        }
        
        function setNormal(){
            {foreach $_sistema as $sg}
                {if $sg.valoracion == null }
                    $('#id-{$sg.id}').attr('value', 'Normal');
                    var x=document.getElementById("id-{$sg.id}");
                    setRevisionSistema(x);
                {/if}
            {/foreach}
                
            {foreach $_partes_cuerpo as $pc}
                {if $pc.valoracion == null }
                    $('#id-pc-{$pc.id}').attr('value', 'Normal');
                    var x=document.getElementById("id-pc-{$pc.id}");
                    setRevisionFisica(x);
                {/if}
            {/foreach}
        }
    </script>

{/block}