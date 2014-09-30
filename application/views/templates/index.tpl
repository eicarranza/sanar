{extends file='myproject.tpl'}
{block name="title"}My Page Title{/block}
{block name="head" append}
  <
{/block}
{block name="body"}{/block}
{block name="page-content"}

         <!-- BEGIN PAGE HEADER-->
         <div class="row">
            <div class="col-md-12">
               <!-- BEGIN PAGE TITLE & BREADCRUMB-->
               <h3 class="page-title">
                  Bienvenidos <small>Al Sistema Integrado de Salud SANAR</small>
               </h3>
               <ul class="page-breadcrumb breadcrumb">
                  <li>
                     <i class="icon-home"></i>
                     <a href="index.html">Inicio</a> 
                     <i class="icon-angle-right"></i>
                  </li>
               </ul>
               <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
         </div>
         <!-- END PAGE HEADER-->
         
         <div class="clearfix"></div>
         
         <div class="clearfix"></div>
         <div class="row ">
            <div class="col-md-6 col-sm-6">
               <div class="portlet box blue">
                  <div class="portlet-title">
                     <div class="caption"><i class="icon-bell"></i>Ítems próximos a vencer</div>
                     <div class="actions">
                        <div class="btn-group">
                           <a class="btn btn-sm default" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                           Filtrar por
                           <i class="icon-angle-down"></i>
                           </a>
                           <div class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
                              <label><input type="checkbox" /> Tipo</label>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="portlet-body">
                     <div class="scroller" style="height: 300px;" data-always-visible="1" data-rail-visible="0">
                        <ul class="feeds">
                           <li>
                              <div class="col1">
                                 <div class="cont">
                                    <div class="cont-col1">
                                       <div class="label label-sm label-info">                        
                                          <i class="icon-check"></i>
                                       </div>
                                    </div>
                                    <div class="cont-col2">
                                       <div class="desc">
                                          No se han encontrado productos en el sistema.
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col2">
                                 <div class="date">
                                    Hoy
                                 </div>
                              </div>
                           </li>
                           
                        </ul>
                     </div>
                     <div class="scroller-footer">
                        <div class="pull-right">
                           <a href="#">Ver todos los registros <i class="m-icon-swapright m-icon-gray"></i></a> &nbsp;
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-6 col-sm-6">
               <div class="portlet box green tasks-widget">
                  <div class="portlet-title">
                     <div class="caption"><i class="icon-check"></i>Tareas</div>
                     <div class="tools">
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="" class="reload"></a>
                     </div>
                     <div class="actions">
                        <div class="btn-group">
                           <a class="btn default btn-xs" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                           Más
                           <i class="icon-angle-down"></i>
                           </a>
                           <ul class="dropdown-menu pull-right">
                              <li class="divider"></li>
                              <li><a href="#">Pendientes <span class="badge badge-success">0</span></a></li>
                              <li><a href="#">Atrasadas <span class="badge badge-success">0</span></a></li>
                              <li><a href="#">Completadas <span class="badge badge-success">0</span></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="portlet-body">
                     <div class="task-content">
                        <div class="scroller" style="height: 305px;" data-always-visible="1" data-rail-visible1="1">
                           <!-- START TASK LIST -->
                           <ul class="task-list">
                              <li>
                                 <div class="task-checkbox">
                                    <input type="checkbox" class="liChild" value=""  />                                       
                                 </div>
                                 <div class="task-title">
                                    <span class="task-title-sp">No se han econtrado tareas en el sitema.</span>
                                    <span class="task-bell"><i class="icon-bell"></i></span>
                                 </div>
                                 <div class="task-config">
                                    <div class="task-config-btn btn-group">
                                       <a class="btn btn-xs default" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                       <i class="icon-cog"></i><i class="icon-angle-down"></i></a>
                                       <ul class="dropdown-menu pull-right">
                                          <li><a href="#"><i class="icon-ok"></i> Completar</a></li>
                                          <li><a href="#"><i class="icon-pencil"></i> Editar</a></li>
                                          <li><a href="#"><i class="icon-trash"></i> Cancelar</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </li>
                             
                           </ul>
                           <!-- END START TASK LIST -->
                        </div>
                     </div>
                     <div class="task-footer">
                        <span class="pull-right">
                        <a href="#">Ver todas las tareas. <i class="m-icon-swapright m-icon-gray"></i></a> &nbsp;
                        </span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
{/block}

{block name="scripts" append}
   <script>
      jQuery(document).ready(function() {    
         App.init(); // initlayout and core plugins
         Index.init();
//         Index.initJQVMAP(); // init index page's custom scripts
         Index.initCalendar(); // init index page's custom scripts
         Index.initCharts(); // init index page's custom scripts
      });
   </script>
{/block}