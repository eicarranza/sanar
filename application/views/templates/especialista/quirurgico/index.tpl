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
              Procedimiento Quirúrgico: {$consulta.nombre1} {$consulta.apellido1}
           </h3>
           
           <ul class="page-breadcrumb breadcrumb">
                <li class="btn-group">
                    <button type="button" class="btn blue dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
                    <span>Acciones</span> <i class="icon-angle-down"></i>
                    </button>
                    <ul class="dropdown-menu pull-right" role="menu">
                        <li><a href="#" id="btn-imprimir-historia" name="consulta_activa">Imprimir informe</a></li>
                        <li><a href="#" id="btn-imprimir-evolucion" name="consulta_activa">Imprimir evolución</a></li>
                        <li><a href="#" id="btn-imprimir-notas" name="consulta_activa">Imprimir notas</a></li>
                        <li><a href="#" id="btn-cerrar-consulta" name="consulta_activa">Cerrar informe</a></li>
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
                 <a href="#">Procedimiento</a>
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
                     <li class="active"><a href="#tab_1_1" data-toggle="tab">Informe Quirúrgico</a></li>
                     <li><a href="#tab_1_2" data-toggle="tab">Evolución</a></li>
                     <li><a href="#tab_1_3" data-toggle="tab">Anestesia</a></li>
                     <li><a href="#tab_1_4" data-toggle="tab">Enfermería</a></li>
                  </ul>
                  <div class="tab-content" id="dv-tabConsulta">
                     <div class="tab-pane active" id="tab_1_1">
                        <div class="row profile-account">
                           <div class="col-md-3">
                              <ul class="ver-inline-menu tabbable margin-bottom-10">
                                 <li class="active">
                                    <a data-toggle="tab" href="#tab_2-1">
                                        <i class="icon-cog"></i>Información General
                                    </a> 
                                    <span class="after"></span>                                    
                                 </li>
                                 <li ><a data-toggle="tab" href="#tab_2-2"><i class="icon-picture"></i> Información del Procedimiento</a></li>
                                 <li ><a data-toggle="tab" href="#tab_2-3"><i class="icon-lock"></i> Diagnósticos</a></li>
                                 <li ><a data-toggle="tab" href="#tab_2-4"><i class="icon-lock"></i> Descripción del Procedimiento</a></li>
                                 <li ><a data-toggle="tab" href="#tab_2-5"><i class="icon-lock"></i> Documentos</a></li>
                              </ul>
                           </div>
                            <div class="col-md-9">
                              <div class="tab-content">
                                <div id="tab_2-1" class="tab-pane active">
                                    <h3 class="form-section">Información general</h3>
                                    <form class="form-horizontal">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Hora inicial: </label>
                                                    <div class="col-md-9">
                                                         <div class="input-group input-large input-daterange">
                                                             <input type="text" name="inicio_procedimiento" id="inicio_procedimiento" value="{if !empty($cirugia)}{$cirugia.inicio}{else}08:00{/if}" readonly class="form-control clockface_1" onchange="setCirugiaTime(this)" />
                                                             <span class="input-group-addon">Hora final: </span>
                                                             <input type="text" name="fin_procedimiento" id="fin_procedimiento" value="{if !empty($cirugia)}{$cirugia.fin}{else}10:00{/if}" readonly class="form-control clockface_1" onchange="setCirugiaTime(this)" />
                                                             <span class="input-group-btn">
                                                                <img src="{$url}assets/img/icons/save.png" title="Guardar" onclick="setCirugiaTime()"/>
                                                             </span>
                                                         </div>
                                                       <!-- /input-group -->
                                                       <span class="help-block">Seleccione el horario de procedimiento.</span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" >Tiempo operatorio:</label>
                                                    <div class="col-md-2">
                                                        <input type="number" class="form-control" name="tiempo_operatorio" min="1" onchange="setCirugia(this)" value="{if !empty($cirugia)}{$cirugia.tiempo_operatorio}{/if}">
                                                    </div>
                                                    <label class="col-md-1 control-label" >Min.</label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" >Sangrado:</label>
                                                    <div class="col-md-2">
                                                        <input type="text" class="form-control" name="sangrado" onchange="setCirugia(this)" value="{if !empty($cirugia)}{$cirugia.sangrado}{/if}">
                                                    </div>
                                                    <label class="col-md-1 control-label" >cc</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-3">
                                                    <label class="control-label" >Complicaciones:</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <textarea class="form-control" name="complicaciones" onchange="setCirugia(this)">{if !empty($cirugia)}{$cirugia.complicaciones}{/if}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-3">
                                                <label class="control-label" >Tejidos enviados a patología:</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <textarea class="form-control" name="tejidos_patologia" onchange="setCirugia(this)">{if !empty($cirugia)}{$cirugia.tejidos_patologia}{/if}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-3">
                                                    <label class="control-label">Prótesis o Bioimplantes:</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <textarea class="form-control" name="protesis" onchange="setCirugia(this)">{if !empty($cirugia)}{$cirugia.protesis}{/if}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div id="tab_2-2" class="tab-pane">
                                    <form class="form-horizontal">
                                        <div class="form-body">
                                            <h3 class="form-section">Información del Procedimiento</h3>
                                            
                                            <div class="form-group">
                                                <div class="col-md-2">
                                                    <label class="control-label">
                                                        Intervención:
                                                    </label>
                                                </div>
                                                <div class="col-md-10">
                                                    <textarea id="motivo" name="intervencion" class="form-control" rows="6" onchange="setCirugia(this)">{if !empty($cirugia)}{$cirugia.intervencion}{/if}</textarea>
                                                    <input type="hidden" id="consulta_id" name="consulta_id" value="{$consulta.id}">
                                                    <input type="hidden" id="paciente_id" name="paciente_id" value="{$paciente.paciente_id}">
                                                    <input type="hidden" id="especialista_id" name="especialista_id" value="{$especialista}">
                                                    <input type="hidden" id="fecha" name="fecha" value="{$fecha}">
                                                    <input type="hidden" id="_fecha" name="_fecha" value="{$consulta.fecha}">
                                                </div>
                                            </div>
                                                
                                            <div class="form-group">
                                                <div class="col-md-2">
                                                    <label class="control-label">
                                                        Procedimiento:   
                                                    </label>
                                                </div>
                                                <div class="col-md-10">
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
                                                <div class="col-md-10">
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
                                     </form>
                                </div>
                                <div id="tab_2-3" class="tab-pane">
                                    <h3 class="form-section">Diagnóstico Preoperatorio</h3>
                                        <form class="form-horizontal">
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label">
                                                            Diagnóstico CIE-10:   
                                                        </label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" id="pre-des-cie10" class="form-control" />
                                                        <input type="hidden" id="pre-id-cie10"/>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label">
                                                            Diagnóstico clínico:   
                                                        </label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <textarea id="pre-impresion-diagnostica" name="pre-impresion-diagnostica" class="form-control" rows="2"></textarea>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label">
                                                            Tipo de diagnóstico:
                                                        </label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select class="form-control" id="pre-tipo_diagnostico" name="pre-tipo_diagnostico">
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
                                                        <button id="btn-pre-cie10-add" type="button" class="btn green">Agregar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                        <div class="portlet box blue ">
                                            <div class="portlet-title">
                                               <div class="caption"><i class="icon-comments"></i>Diagnósticos</div>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="table-responsive" id="dv-PreDiagnosticos">
                                                  <table class="table table-striped table-hover">
                                                    <thead>
                                                       <tr>
                                                          <th>Código</th>
                                                          <th>Diagnóstico</th>
                                                          <th>Descripción</th>
                                                          <th>Tipo diagnóstico</th>
                                                          <th >Eliminar</th>
                                                       </tr>
                                                    </thead>
                                                    <tbody>
                                                        {foreach $_diagnostico_pre as $i}
                                                             <tr>
                                                                <td>{$i.codigo}</td>
                                                                <td>{$i.cie_descripcion}</td>
                                                                <td>{$i.cd_descripcion}</td>
                                                                <td>{$i.tipo_descripcion}</td>
                                                                <td>
                                                                     <a href="#" id="del{$i.diagnostico_id}" >
                                                                          <img src="{$url}assets/img/icons/delete_page.png" title="Eliminar"
                                                                               onclick="if(confirm('¿Realmente desea eliminar el diagnóstico?')){ eliminarDiagnostico({$i.consulta_id}, {$i.diagnostico_id}, {$i.diagnostico_tipo_id}); } "/>
                                                                     </a>
                                                                </td>
                                                             </tr>
                                                         {/foreach}
                                                    </tbody>
                                                  </table>
                                               </div>
                                            </div>
                                        </div>
                                                    
                                    <h3 class="form-section">Diagnóstico Postoperatorio</h3>
                                        <form class="form-horizontal">
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label">
                                                            Diagnóstico CIE-10:   
                                                        </label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" id="pos-des-cie10" class="form-control" />
                                                        <input type="hidden" id="pos-id-cie10"/>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label">
                                                            Diagnóstico clínico:   
                                                        </label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <textarea id="pos-impresion-diagnostica" name="pos-impresion-diagnostica" class="form-control" rows="2"></textarea>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label">
                                                            Tipo de diagnóstico:
                                                        </label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select class="form-control" id="pos-tipo_diagnostico" name="pos-tipo_diagnostico">
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
                                                        <button id="btn-pos-cie10-add" type="button" class="btn green">Agregar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                        <div class="portlet box blue ">
                                            <div class="portlet-title">
                                               <div class="caption"><i class="icon-comments"></i>Diagnósticos</div>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="table-responsive" id="dv-PosDiagnosticos">
                                                  <table class="table table-striped table-hover">
                                                    <thead>
                                                       <tr>
                                                          <th>Código</th>
                                                          <th>Diagnóstico</th>
                                                          <th>Descripción</th>
                                                          <th>Tipo diagnóstico</th>
                                                          <th >Eliminar</th>
                                                       </tr>
                                                    </thead>
                                                    <tbody>
                                                        {foreach $_diagnostico_pos as $i}
                                                             <tr>
                                                                <td>{$i.codigo}</td>
                                                                <td>{$i.cie_descripcion}</td>
                                                                <td>{$i.cd_descripcion}</td>
                                                                <td>{$i.tipo_descripcion}</td>
                                                                <td>
                                                                     <a href="#" id="del{$i.diagnostico_id}" >
                                                                          <img src="{$url}assets/img/icons/delete_page.png" title="Eliminar"
                                                                               onclick="if(confirm('¿Realmente desea eliminar el diagnóstico?')){ eliminarDiagnostico({$i.consulta_id}, {$i.diagnostico_id}, {$i.diagnostico_tipo_id}); } "/>
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
                                <div id="tab_2-4" class="tab-pane">
                                    <h3 class="form-section">Descripción del Procedimiento</h3>
                                    
                                    <div class="form-group">
                                        <textarea id="procedimiento_descripcion" name="procedimiento_descripcion" class="form-control" rows="3" onchange="setCirugia(this)">{if !empty($cirugia)}{$cirugia.procedimiento_descripcion}{/if}</textarea>
                                    </div>
                                    
                                    <h3 class="form-section">Hallazgos</h3>
                                    <div class="form-group">
                                        <textarea id="hallazgos" name="hallazgos" class="form-control" rows="3" onchange="setCirugia(this)">{if !empty($cirugia)}{$cirugia.hallazgos}{/if}</textarea>
                                    </div>
                                </div>
                                <div id="tab_2-5" class="tab-pane">
                                        <h3 class="form-section">Documentos</h3>
                                            <form class="form-horizontal" 
                                                  action="{$url}especialista/setDocumentacion/{$consulta.id}" 
                                                   method="post" accept-charset="utf-8" enctype="multipart/form-data" role="form">
                                                <div class="form-body">
                                                   <div class="form-group">
                                                       <div class="col-md-3">
                                                           <label class="control-label">
                                                               Tipo documento:   
                                                           </label>
                                                       </div>
                                                       <div class="col-md-9">
                                                           <div class="input-group">
                                                              <select  class="form-control" name="tipo_documentacion">
                                                                   {foreach $documentos_cirujano as $gs}
                                                                        <option value="{$gs.id}">{$gs.descripcion}</option>
                                                                   {/foreach}
                                                               </select>
                                                           </div>
                                                        </div>
                                                   </div>
                                                   <div class="form-group">
                                                       <div class="col-md-3">
                                                           <label class="control-label">
                                                               Documento: 
                                                           </label>
                                                       </div>
                                                       <div class="col-md-9">
                                                          <div class="fileupload fileupload-new" data-provides="fileupload">
                                                             <div class="input-group">
                                                                <span class="input-group-btn">
                                                                    <span class="uneditable-input">
                                                                        <i class="icon-file fileupload-exists"></i> 
                                                                        <span class="fileupload-preview"></span>
                                                                    </span>
                                                                </span>
                                                                <span class="btn default btn-file">
                                                                    <span class="fileupload-new"><i class="icon-paper-clip"></i> Seleccionar archivo</span>
                                                                    <span class="fileupload-exists"><i class="icon-undo"></i> Cambiar</span>
                                                                    <input type="file" name="userfile" class="default" />
                                                                </span>
                                                                <a href="#" class="btn red fileupload-exists" data-dismiss="fileupload"><i class="icon-trash"></i> Eliminar</a>
                                                             </div>
                                                          </div>
                                                       </div>
                                                   </div>
                                                   <div class="form-group">
                                                       <div class="col-md-2">
                                                       </div>
                                                       <div class="col-md-10">
                                                           <button type="submit" class="btn green">Guardar</button>
                                                       </div>
                                                   </div>
                                               </div>
                                           </form>

                                            <div class="portlet box blue ">
                                                <div class="portlet-title">
                                                   <div class="caption"><i class="icon-comments"></i>Documentos</div>
                                                </div>
                                                <div class="portlet-body">
                                                   <div class="table-responsive">
                                                      <table class="table table-striped table-hover">
                                                      <thead>
                                                         <tr>
                                                            <th>Archivo</th>
                                                            <th>Descripción</th>
                                                            <th >Eliminar</th>
                                                         </tr>
                                                      </thead>
                                                      <tbody>
                                                          {foreach $archivos_cirugia as $i}
                                                               <tr>
                                                                  <td>{$i.documento_url}</td>
                                                                  <td>{$i.descripcion}</td>
                                                                  <td>
                                                                       <a href="#" id="del{$i.tipo_id}" >
                                                                            <img src="{$url}assets/img/icons/delete_page.png" title="Eliminar"
                                                                                 onclick="if(confirm('¿Realmente desea eliminar el archivo?')){ eliminar({$i.consulta_id}, {$i.tipo_id}); } "/>
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
                        </div>
                     </div>
                     <!--end tab-pane-->
                     
                     <!--Begin tab-pane-->
                     <div class="tab-pane" id="tab_1_2">
                         <h3 class="form-section">Hoja de Evolución</h3>
                         <form class="form-horizontal">
                            <div class="form-body">
                                <div class="form-group">
                                    <div class="col-md-1">
                                        <label class="control-label">
                                            Fecha:   
                                        </label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                           <div class="input-group date date-picker" data-date-format="yyyy-mm-dd"  data-date-viewmode="years">
                                               <input id="ev-fecha" type="text" class="form-control" name="ev-fecha" >
                                               <span class="input-group-btn">
                                                   <button class="btn default" type="button"><i class="icon-calendar"></i></button>
                                               </span>
                                           </div>
                                        </div>
                                     </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-1">
                                        <label class="control-label">
                                            Hora:   
                                        </label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="input-group input-medium">
                                            <input type="text" name="ev-hora" id="clockface_2" value="14:30" class="form-control" readonly=""/>
                                            <span class="input-group-btn">
                                                <button class="btn default" type="button" id="clockface_2_toggle"><i class="icon-time"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-1">
                                        <label class="control-label">
                                            Evolución:   
                                        </label>
                                    </div>
                                    <div class="col-md-11">
                                        <textarea id="evolucion" name="evolucion" class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3">
                                    </div>
                                    <div class="col-md-8">
                                        <button id="btn-evolucion-add" type="button" class="btn green">Agregar</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <div class="portlet box blue ">
                            <div class="portlet-title">
                               <div class="caption"><i class="icon-comments"></i>Evolución</div>
                            </div>
                            <div class="portlet-body">
                                <div class="table-responsive" id="dv-Evolucion">
                                  <table class="table table-striped table-hover">
                                    <thead>
                                       <tr>
                                          <th width="10%">Fecha</th>
                                          <th width="20%">Especialista</th>
                                          <th>Detalle</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                        {foreach $_evolucion as $i}
                                             <tr>
                                                <td>{$i.fecha}</td>
                                                <td>{$i.especialista}</td>
                                                <td>{$i.detalle}</td>
                                             </tr>
                                         {/foreach}
                                    </tbody>
                                  </table>
                               </div>
                            </div>
                        </div>
                     </div>
                     <!--end tab-pane-->
                     
                     <!--Begin tab-pane-->
                     <div class="tab-pane" id="tab_1_3">
                         <div class="row profile-account">
                           <div class="col-md-3">
                              <ul class="ver-inline-menu tabbable margin-bottom-10">
                                 <li class="active">
                                    <a data-toggle="tab" href="#tab_3-1">
                                        <i class="icon-cog"></i>Documentos
                                    </a> 
                                    <span class="after"></span>                                    
                                 </li>
                                 <li ><a data-toggle="tab" href="#tab_3-2"><i class="icon-picture"></i> Antecedentes</a></li>
                                    <li ><a data-toggle="tab" href="#tab_3-3"><i class="icon-picture"></i> Exámenes</a></li>
                                 <li ><a data-toggle="tab" href="#tab_3-4"><i class="icon-picture"></i> Laboratorios</a></li>
                                 <li ><a data-toggle="tab" href="#tab_3-5"><i class="icon-picture"></i> Plan</a></li>
                              </ul>
                           </div>
                            <div class="col-md-9">
                                <div class="tab-content">
                                    <div id="tab_3-1" class="tab-pane active">
                                        <h3 class="form-section">Documentos</h3>
                                        <form class="form-horizontal" id="frm-documentacion" 
                                                action="{$url}especialista/setDocumentacion/{$consulta.id}" 
                                                 method="post" accept-charset="utf-8" enctype="multipart/form-data" role="form">
                                              <div class="form-body">
                                                 <div class="form-group">
                                                     <div class="col-md-2">
                                                         <label class="control-label">
                                                             Tipo documento:   
                                                         </label>
                                                     </div>
                                                     <div class="col-md-10">
                                                         <div class="input-group">
                                                            <select  class="form-control" name="tipo_documentacion" id="tipo_documentacion">
                                                                 {foreach $documentos_anestesia as $gs}
                                                                      <option value="{$gs.id}">{$gs.descripcion}</option>
                                                                 {/foreach}
                                                             </select>
                                                         </div>
                                                      </div>
                                                 </div>
                                                 <div class="form-group">
                                                     <div class="col-md-2">
                                                         <label class="control-label">
                                                             Documento: 
                                                         </label>
                                                     </div>
                                                     <div class="col-md-10">
                                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                                           <div class="input-group">
                                                              <span class="input-group-btn">
                                                                  <span class="uneditable-input">
                                                                      <i class="icon-file fileupload-exists"></i> 
                                                                      <span class="fileupload-preview"></span>
                                                                  </span>
                                                              </span>
                                                              <span class="btn default btn-file">
                                                                  <span class="fileupload-new"><i class="icon-paper-clip"></i> Seleccionar archivo</span>
                                                                  <span class="fileupload-exists"><i class="icon-undo"></i> Cambiar</span>
                                                                  <input type="file" name="userfile" class="default" />
                                                              </span>
                                                              <a href="#" class="btn red fileupload-exists" data-dismiss="fileupload"><i class="icon-trash"></i> Eliminar</a>
                                                           </div>
                                                        </div>
                                                     </div>
                                                 </div>
                                                 <div class="form-group">
                                                     <div class="col-md-2">
                                                     </div>
                                                     <div class="col-md-10">
                                                         <button type="submit" id="btn-documentos-add" class="btn green">Guardar</button>
                                                     </div>
                                                 </div>
                                             </div>
                                         </form>

                                          <div class="portlet box blue ">
                                              <div class="portlet-title">
                                                 <div class="caption"><i class="icon-comments"></i>Documentos</div>
                                              </div>
                                              <div class="portlet-body">
                                                 <div class="table-responsive">
                                                    <table class="table table-striped table-hover">
                                                    <thead>
                                                       <tr>
                                                          <th>Archivo</th>
                                                          <th>Descripción</th>
                                                          <th >Eliminar</th>
                                                       </tr>
                                                    </thead>
                                                    <tbody>
                                                        {foreach $archivos_anestesia as $i}
                                                             <tr>
                                                                <td>{$i.documento_url}</td>
                                                                <td>{$i.descripcion}</td>
                                                                <td>
                                                                     <a href="#" id="del{$i.tipo_id}" >
                                                                          <img src="{$url}assets/img/icons/delete_page.png" title="Eliminar"
                                                                               onclick="if(confirm('¿Realmente desea eliminar el archivo?')){ eliminar({$i.consulta_id}, {$i.tipo_id}); } "/>
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
                                    <div id="tab_3-2" class="tab-pane">
                                        <h3 class="form-section">Antecedentes</h3>
                                    </div>
                                    <div id="tab_3-3" class="tab-pane">
                                        <h3 class="form-section">Exámenes</h3>
                                    </div>
                                    <div id="tab_3-4" class="tab-pane">
                                        <h3 class="form-section">Laboratorios</h3>
                                    </div>
                                    <div id="tab_3-5" class="tab-pane">
                                        <h3 class="form-section">Plan</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                         
                     </div>
                     <!--end tab-pane-->
                     
                     <!--Begin tab-pane-->
                     <div class="tab-pane" id="tab_1_4">
                         <div class="row profile-account">
                           <div class="col-md-3">
                              <ul class="ver-inline-menu tabbable margin-bottom-10">
                                 <li class="active">
                                    <a data-toggle="tab" href="#tab_4-1">
                                        <i class="icon-cog"></i>Notas de enfermería
                                    </a> 
                                    <span class="after"></span>                                    
                                 </li>
                                 <li ><a data-toggle="tab" href="#tab_4-2"><i class="icon-picture"></i> Documentos</a></li>
                              </ul>
                           </div>
                            <div class="col-md-9">
                                <div class="tab-content">
                                    <div id="tab_4-1" class="tab-pane active">
                                        <h3 class="form-section">Notas de enfermería</h3>
                                            <form class="form-horizontal">
                                               <div class="form-body">
                                                   <div class="form-group">
                                                       <div class="col-md-1">
                                                           <label class="control-label">
                                                               Fecha:   
                                                           </label>
                                                       </div>
                                                       <div class="col-md-9">
                                                           <div class="input-group">
                                                              <div class="input-group date date-picker" data-date-format="yyyy-mm-dd"  data-date-viewmode="years">
                                                                  <input id="fecha_nota" type="text" class="form-control" name="fecha_nota" >
                                                                  <span class="input-group-btn">
                                                                      <button class="btn default" type="button"><i class="icon-calendar"></i></button>
                                                                  </span>
                                                              </div>
                                                           </div>
                                                        </div>
                                                   </div>
                                                   <div class="form-group">
                                                       <div class="col-md-1">
                                                           <label class="control-label">
                                                               Hora:   
                                                           </label>
                                                       </div>
                                                       <div class="col-md-8">
                                                           <div class="input-group input-medium">
                                                               <input type="text" name="hora_nota" id="hora_nota" value="14:30" class="form-control clockface_1 clockface-open" readonly=""/>
                                                               <span class="input-group-btn">
                                                                   <button class="btn default" type="button" id="clockface_2_toggle"><i class="icon-time"></i></button>
                                                               </span>
                                                           </div>
                                                       </div>
                                                   </div>
                                                   <div class="form-group">
                                                       <div class="col-md-1">
                                                           <label class="control-label">
                                                               Nota:   
                                                           </label>
                                                       </div>
                                                       <div class="col-md-11">
                                                           <textarea id="notas" name="notas" class="form-control" rows="3"></textarea>
                                                       </div>
                                                   </div>
                                                   <div class="form-group">
                                                       <div class="col-md-3">
                                                       </div>
                                                       <div class="col-md-8">
                                                           <button id="btn-enfermeria-add" type="button" class="btn green">Agregar</button>
                                                       </div>
                                                   </div>
                                               </div>
                                           </form>

                                           <div class="portlet box blue ">
                                               <div class="portlet-title">
                                                  <div class="caption"><i class="icon-comments"></i>Notas</div>
                                               </div>
                                               <div class="portlet-body">
                                                   <div class="table-responsive" id="dv-Notas">
                                                     <table class="table table-striped table-hover">
                                                       <thead>
                                                          <tr>
                                                             <th width="15%">Fecha</th>
                                                             <th width="25%">Responsable</th>
                                                             <th>Notas</th>
                                                          </tr>
                                                       </thead>
                                                       <tbody>
                                                           {foreach $_notas as $i}
                                                                <tr>
                                                                   <td>{$i.fecha}</td>
                                                                   <td>{$i.enfermera}</td>
                                                                   <td>{$i.notas}</td>
                                                                </tr>
                                                            {/foreach}
                                                       </tbody>
                                                     </table>
                                                  </div>
                                               </div>
                                           </div>
                                    </div>
                                    <div id="tab_4-2" class="tab-pane">
                                        <h3 class="form-section">Documentos</h3>
                                            <form class="form-horizontal" 
                                                  action="{$url}especialista/setDocumentacion/{$consulta.id}" 
                                                   method="post" accept-charset="utf-8" enctype="multipart/form-data" role="form">
                                                <div class="form-body">
                                                   <div class="form-group">
                                                       <div class="col-md-3">
                                                           <label class="control-label">
                                                               Tipo documento:   
                                                           </label>
                                                       </div>
                                                       <div class="col-md-9">
                                                           <div class="input-group">
                                                              <select  class="form-control" name="tipo_documentacion">
                                                                   {foreach $documentos_enfermeria as $gs}
                                                                        <option value="{$gs.id}">{$gs.descripcion}</option>
                                                                   {/foreach}
                                                               </select>
                                                           </div>
                                                        </div>
                                                   </div>
                                                   <div class="form-group">
                                                       <div class="col-md-3">
                                                           <label class="control-label">
                                                               Documento: 
                                                           </label>
                                                       </div>
                                                       <div class="col-md-9">
                                                          <div class="fileupload fileupload-new" data-provides="fileupload">
                                                             <div class="input-group">
                                                                <span class="input-group-btn">
                                                                    <span class="uneditable-input">
                                                                        <i class="icon-file fileupload-exists"></i> 
                                                                        <span class="fileupload-preview"></span>
                                                                    </span>
                                                                </span>
                                                                <span class="btn default btn-file">
                                                                    <span class="fileupload-new"><i class="icon-paper-clip"></i> Seleccionar archivo</span>
                                                                    <span class="fileupload-exists"><i class="icon-undo"></i> Cambiar</span>
                                                                    <input type="file" name="userfile" class="default" />
                                                                </span>
                                                                <a href="#" class="btn red fileupload-exists" data-dismiss="fileupload"><i class="icon-trash"></i> Eliminar</a>
                                                             </div>
                                                          </div>
                                                       </div>
                                                   </div>
                                                   <div class="form-group">
                                                       <div class="col-md-2">
                                                       </div>
                                                       <div class="col-md-10">
                                                           <button type="submit" class="btn green">Guardar</button>
                                                       </div>
                                                   </div>
                                               </div>
                                           </form>

                                            <div class="portlet box blue ">
                                                <div class="portlet-title">
                                                   <div class="caption"><i class="icon-comments"></i>Documentos</div>
                                                </div>
                                                <div class="portlet-body">
                                                   <div class="table-responsive">
                                                      <table class="table table-striped table-hover">
                                                      <thead>
                                                         <tr>
                                                            <th>Archivo</th>
                                                            <th>Descripción</th>
                                                            <th >Eliminar</th>
                                                         </tr>
                                                      </thead>
                                                      <tbody>
                                                          {foreach $archivos_enfermeria as $i}
                                                               <tr>
                                                                  <td>{$i.documento_url}</td>
                                                                  <td>{$i.descripcion}</td>
                                                                  <td>
                                                                       <a href="#" id="del{$i.tipo_id}" >
                                                                            <img src="{$url}assets/img/icons/delete_page.png" title="Eliminar"
                                                                                 onclick="if(confirm('¿Realmente desea eliminar el archivo?')){ eliminar({$i.consulta_id}, {$i.tipo_id}); } "/>
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
            getAnestesia();
            verificarEdicion();
            calcularIMC();
            
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
            
            $('#btn-imprimir-historia').click(function () {
                imprimirHistoria(this);
            });
            
            $('#btn-imprimir-evolucion').click(function () {
                imprimirEvolucion(this);
            });
            
            $('#btn-imprimir-notas').click(function () {
                imprimirNotas(this);
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

                    $.post('{$url}especialista/cirugia/setProcedimiento', postData, function(data){
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
            
            $( "#pre-des-cie10" ).autocomplete({
                    source: function(request, response) {
                                $.ajax({
                                    url: "{$url}especialista/getDiagnostico",
                                    data: { term: $("#pre-des-cie10").val()},
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
                        $("#pre-des-cie10").val(ui.item.codigo + " - " + ui.item.descripcion);
                        $("#pre-id-cie10").val(ui.item.id);
                        return false;
                    }
            });
            
            $('#btn-cerrar-consulta').click(function () {
                setCerrarCirugia(this);
            });
            
            $('#btn-pre-cie10-add').click(function () {
                
                var consulta_id = $('#consulta_id').attr('value');
                var cie_id = $('#pre-id-cie10').attr('value');
                var descripcion = $('#pre-impresion-diagnostica').attr('value');
                var tipo_diagnostico = $('#pre-tipo_diagnostico').attr('value');
                
                if(cie_id != ''){
                    var postData = {
                                    'consulta_id': consulta_id, 
                                    'diagnostico_id' : cie_id,
                                    'descripcion' : descripcion,
                                    'tipo_diagnostico' : tipo_diagnostico
                                 };

                    $.post('{$url}especialista/setDiagnosticoPre', postData, function(data){
                            $('#dv-PreDiagnosticos').empty();
                            $('#dv-PreDiagnosticos').html(data);
                            $('#pre-des-cie10').attr('value', '');
                            $('#pre-id-cie10').attr('value', '');
                            $('#pre-impresion-diagnostica').attr('value', '');

                    });
                }
                else{
                    alert("Ingrese un diagnóstico válido.");
                }
            });
            
            /* POSTDIAGNÓSTICO */
        
            $( "#pos-des-cie10" ).autocomplete({
                    source: function(request, response) {
                                $.ajax({
                                    url: "{$url}especialista/getDiagnostico",
                                    data: { term: $("#pos-des-cie10").val()},
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
                        $("#pos-des-cie10").val(ui.item.codigo + " - " + ui.item.descripcion);
                        $("#pos-id-cie10").val(ui.item.id);
                        return false;
                    }
            });

            $('#btn-pos-cie10-add').click(function () {
                var consulta_id = $('#consulta_id').attr('value');
                var cie_id = $('#pos-id-cie10').attr('value');
                var descripcion = $('#pos-impresion-diagnostica').attr('value');
                var tipo_diagnostico = $('#pos-tipo_diagnostico').attr('value');
                
                if(cie_id != ''){
                    var postData = {
                                    'consulta_id': consulta_id, 
                                    'diagnostico_id' : cie_id,
                                    'descripcion' : descripcion,
                                    'tipo_diagnostico' : tipo_diagnostico
                                 };

                    $.post('{$url}especialista/setDiagnosticoPos', postData, function(data){
                            $('#dv-PosDiagnosticos').empty();
                            $('#dv-PosDiagnosticos').html(data);
                            $('#pos-des-cie10').attr('value', '');
                            $('#pos-id-cie10').attr('value', '');
                            $('#pos-impresion-diagnostica').attr('value', '');

                    });
                }
                else{
                    alert("Ingrese un diagnóstico válido.");
                }
            });
            
            $('#btn-evolucion-add').click(function () {
                var consulta_id = $('#consulta_id').attr('value');
                var especialista_id = $('#especialista_id').attr('value');
                var fecha = $('#ev-fecha').attr('value');
                var hora = $('#clockface_2').attr('value');
                var evolucion = $('#evolucion').attr('value');
                var fecha_hora = fecha + " " + hora + ":00";
                
                if(evolucion != ''){
                    var postData = {
                                    'consulta_id': consulta_id, 
                                    'fecha_hora' : fecha_hora,
                                    'evolucion' : evolucion,
                                    'especialista_id' : especialista_id
                                 };

                    $.post('{$url}especialista/setEvolucion', postData, function(data){
                            $('#dv-Evolucion').empty();
                            $('#dv-Evolucion').html(data);
                            $('#dv-hora').attr('value', '');
                            $('#evolucion').attr('value', '');

                    });
                }
                else{
                    alert("Ingrese una evolución.");
                }
            });
            
            $('#btn-enfermeria-add').click(function () {
                var consulta_id = $('#consulta_id').attr('value');
                var fecha = $('#fecha_nota').attr('value');
                var hora = $('#hora_nota').attr('value');
                var notas = $('#notas').attr('value');
                var especialista_id = $('#especialista_id').attr('value');        
                var fecha_hora = fecha + " " + hora + ":00";
                
                if(notas != ''){
                    var postData = {
                                    'consulta_id': consulta_id, 
                                    'fecha_hora' : fecha_hora,
                                    'nota' : notas,
                                    'especialista_id' : especialista_id
                                 };

                    $.post('{$url}especialista/setNotasEnfermeria', postData, function(data){
                            $('#dv-Notas').empty();
                            $('#dv-Notas').html(data);
                            $('#hora_nota').attr('value', '');
                            $('#notas').attr('value', '');

                    });
                }
                else{
                    alert("Ingrese una nota de enfermería.");
                }
            });
        });
        
        function getAnestesia(){
            var consulta_id = $('#consulta_id').attr('value');
            var especialista_id = $('#especialista_id').attr('value');
            var paciente_id = $('#paciente_id').attr('value');
            
            var postData = {
                            'cita_id': consulta_id, 
                            'especialista_id' : especialista_id,
                            'paciente_id' : paciente_id,
                         };
             
            $.post('{$url}especialista/getAnestesiaAntecedentes', postData, function(data){
                     $('#tab_3-2').empty();
                     $('#tab_3-2').html(data);
                     $("#tab_3_2 *").attr("disabled", "disabled").off('click');
             });
             
             $.post('{$url}especialista/getAnestesiaExamen', postData, function(data){
                     $('#tab_3-3').empty();
                     $('#tab_3-3').html(data);
                     $("#tab_3_3 *").attr("disabled", "disabled").off('click');
             });
             
             $.post('{$url}especialista/getAnestesiaLaboratorios', postData, function(data){
                     $('#tab_3-4').empty();
                     $('#tab_3-4').html(data);
                     $("#tab_3_4 *").attr("disabled", "disabled").off('click');
             });
             
             $.post('{$url}especialista/getAnestesiaPlan', postData, function(data){
                     $('#tab_3-5').empty();
                     $('#tab_3-5').html(data);
                     $("#tab_3_5 *").attr("disabled", "disabled").off('click');
             });
         }
         
        function verificarEdicion(){
            {if ($consulta_activa==0)}
                    $("#dv-tabConsulta *").attr("disabled", "disabled").off('click');
            {/if}
                
            {if $user.especialidad == 21 }
                $("#tab_1_1 *").attr("disabled", "disabled").off('click');
                $("#tab_1_2 *").attr("disabled", "disabled").off('click');
                $("#tab_1_4 *").attr("disabled", "disabled").off('click');
            {/if}
                
            {if $user.especialidad == 23 }
                $("#tab_1_1 *").attr("disabled", "disabled").off('click');
                $("#tab_1_2 *").attr("disabled", "disabled").off('click');
                $("#tab_1_3 *").attr("disabled", "disabled").off('click');
            {elseif $user.especialidad != 21}
                $("#tab_1_3 *").attr("disabled", "disabled").off('click');
                $("#tab_1_4 *").attr("disabled", "disabled").off('click');
            {/if}
        }
        
        function eliminarDiagnostico(consulta_id, diagnostico_id, diagnostico_tipo_id){
            var postData = {
                            'consulta_id': consulta_id, 
                            'diagnostico_id' : diagnostico_id, 
                            'diagnostico_tipo_id' : diagnostico_tipo_id
                         };
            
            if(diagnostico_tipo_id == 2){
                $.post('{$url}especialista/delDiagnosticoPos', postData, function(data){
                        $('#dv-PosDiagnosticos').empty();
                        $('#dv-PosDiagnosticos').html(data);
                });
            }
            else{
                $.post('{$url}especialista/delDiagnosticoPre', postData, function(data){
                        $('#dv-PreDiagnosticos').empty();
                        $('#dv-PreDiagnosticos').html(data);
                });
            }
        }
        
        function eliminarProcedimiento(consulta_id, procedimiento_id){
            var postData = {
                            'consulta_id': consulta_id, 
                            'procedimiento_id' : procedimiento_id
                         };

            $.post('{$url}especialista/cirugia/delProcedimiento', postData, function(data){
                    $('#dv-procedimientos').empty();
                    $('#dv-procedimientos').html(data);
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
        
        function setCirugia(campo){
            postData = getData(campo);
            $.post('{$url}especialista/setCirugia', postData, function(data){
            });
        }
        
        function setConsulta(campo){
            postData = getData(campo);
            $.post('{$url}especialista/setConsulta', postData, function(data){
            });
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
        
        function setIMC(){
            var consulta_id = $('#consulta_id').attr('value');
            
            var postData = {
                            'consulta_id': consulta_id, 
                            'campo' : 'imc',
                            'valor' : $('#imc').attr('value')
                         };
                         
            $.post('{$url}especialista/setConsulta', postData, function(data){ });
        }
        
        function setAPersonales(campo){
            postData = getData(campo);
            $.post('{$url}especialista/setAPersonales', postData, function(data){});
        }
        
        function setConsultaExamen(campo){
            postData = getData(campo);
            $.post('{$url}especialista/setConsultaAnestesiaExamen', postData, function(data){});
        }
        
        function setConsultaLaboratorios(campo){
            postData = getData(campo);
            $.post('{$url}especialista/setConsultaLaboratorios', postData, function(data){});
        }
        
        function setAnestesiaPlan(campo){
            postData = getData(campo);
            $.post('{$url}especialista/setAnestesiaPlan', postData, function(data){});
        }
        
        function setCirugiaTime(){
            var consulta_id = $('#consulta_id').attr('value');
            var fecha = $('#_fecha').attr('value');
            var hora_ini = $('#inicio_procedimiento').attr('value');
            var hora_fin = $('#fin_procedimiento').attr('value');
            var inicio_procedimiento = fecha + " " + hora_ini + ":00";
            var fin_procedimiento = fecha + " " + hora_fin + ":00";
            
            var postData = {
                            'consulta_id': consulta_id, 
                            'fecha' : fecha,
                            'inicio' : inicio_procedimiento,
                            'fin' : fin_procedimiento
                         };
            
            
            $.post('{$url}especialista/setCirugiaTime', postData, function(data){
                
            });
        }
        
        function setCerrarCirugia(campo){
             postData = getData(campo);
            $.post('{$url}especialista/cerrarConsulta', postData, function(data){
                window.location.href = '{$url}especialista/index';
            });
        }
        
        function imprimirHistoria(campo){
            postData = getData(campo);
            open('POST', '{$url}reportes/informeQuirurgico', postData, '_blank');
        }
        
        function imprimirEvolucion(campo){
            postData = getData(campo);
            open('POST', '{$url}reportes/imprimirEvolucion', postData, '_blank');
        }
        
        function imprimirNotas(campo){
            postData = getData(campo);
            open('POST', '{$url}reportes/imprimirNotas', postData, '_blank');
        }
    </script>

{/block}