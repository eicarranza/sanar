<?php /* Smarty version Smarty-3.1.15, created on 2014-06-14 09:09:40
         compiled from "application\views\templates\agenda\citas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5052d0a86e6edaf7-06481215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f49c800feb821677c39758484cfb7c079663c454' => 
    array (
      0 => 'application\\views\\templates\\agenda\\citas.tpl',
      1 => 1402751262,
      2 => 'file',
    ),
    '69edd536ad22a96e4e860274a997e06eee10299c' => 
    array (
      0 => 'application\\views\\templates\\layout.tpl',
      1 => 1401593640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5052d0a86e6edaf7-06481215',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52d0a86ed329d4_95765253',
  'variables' => 
  array (
    'title' => 0,
    'url' => 0,
    'user' => 0,
    'menu_id' => 0,
    '_rol' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d0a86ed329d4_95765253')) {function content_52d0a86ed329d4_95765253($_smarty_tpl) {?><!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.0
Version: 1.5.2
Author: KeenThemes
Website: http://www.keenthemes.com/
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD --><head>
   <meta charset="utf-8" />
   <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <meta name="MobileOptimized" content="320">
   <!-- BEGIN GLOBAL MANDATORY STYLES -->          
   <link href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
   <!-- END GLOBAL MANDATORY STYLES -->
   <!-- BEGIN PAGE LEVEL PLUGIN STYLES --> 
   <link href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
   <link href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css"/>
   <!-- END PAGE LEVEL PLUGIN STYLES -->
   <!-- BEGIN THEME STYLES --> 
   <link href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/css/style.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/css/plugins.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/css/pages/tasks.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
   <link href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/css/custom.css" rel="stylesheet" type="text/css"/>
   
   
   <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/css/pages/profile.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
   <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/bootstrap-fileupload/bootstrap-fileupload.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/gritter/css/jquery.gritter.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/select2/select2_metro.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/clockface/css/clockface.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/bootstrap-datepicker/css/datepicker.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/bootstrap-timepicker/compiled/timepicker.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/bootstrap-colorpicker/css/colorpicker.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/bootstrap-datetimepicker/css/datetimepicker.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/jquery-multi-select/css/multi-select.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/bootstrap-switch/static/stylesheets/bootstrap-switch-metro.css"/>
   <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/jquery-tags-input/jquery.tagsinput.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css">
   <!-- MODAL -->
   <link href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>
   <!-- END MODAL -->
   <!-- END PAGE LEVEL STYLES -->


   <!-- END THEME STYLES -->
   
<link rel="shortcut icon" href="favicon.ico" />
</head><!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
   <!-- BEGIN HEADER -->   
   <div class="header navbar navbar-inverse navbar-fixed-top">
      <!-- BEGIN TOP NAVIGATION BAR -->
      <div class="header-inner">
         <!-- BEGIN LOGO -->  
         <a class="navbar-brand" href="index.html">
         <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/img/logo.png" alt="logo" class="img-responsive" />
         </a>
         <!-- END LOGO -->
         <!-- BEGIN RESPONSIVE MENU TOGGLER --> 
         <a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
         <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/img/menu-toggler.png" alt="" />
         </a> 
         <!-- END RESPONSIVE MENU TOGGLER -->
         <!-- BEGIN TOP NAVIGATION MENU -->
         <ul class="nav navbar-nav pull-right">
            <!-- BEGIN NOTIFICATION DROPDOWN -->
            <li class="dropdown" id="header_notification_bar">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                  data-close-others="true">
               <i class="icon-warning-sign"></i>
               <span class="badge"></span>
               </a>
               <ul class="dropdown-menu extended notification">
                  <li>
                     <p>Notificaciones</p>
                  </li>
                  <li class="external">   
                     <a href="#">Ver todas las notificaciones<i class="m-icon-swapright"></i></a>
                  </li>
               </ul>
            </li>
            <!-- END NOTIFICATION DROPDOWN -->
            <!-- BEGIN INBOX DROPDOWN -->
            <li class="dropdown" id="header_inbox_bar">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                  data-close-others="true">
               <i class="icon-envelope"></i>
               <span class="badge"></span>
               </a>
               <ul class="dropdown-menu extended inbox">
                  <li>
                     <p>Usted tiene 0 mensajes nuevos</p>
                  </li>
                  <li class="external">   
                     <a href="inbox.html">Ver todos los mensajes <i class="m-icon-swapright"></i></a>
                  </li>
               </ul>
            </li>
            <!-- END INBOX DROPDOWN -->
            <!-- BEGIN TODO DROPDOWN -->
            <li class="dropdown" id="header_task_bar">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
               <i class="icon-tasks"></i>
               <span class="badge"></span>
               </a>
               <ul class="dropdown-menu extended tasks">
                  <li>
                     <p>Usted tiene 0 tareas</p>
                  </li>
                  <li class="external">   
                     <a href="#">Ver todas las tareas<i class="m-icon-swapright"></i></a>
                  </li>
               </ul>
            </li>
            <!-- END TODO DROPDOWN -->
            <!-- BEGIN USER LOGIN DROPDOWN -->
            <li class="dropdown user">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
               <img alt="" src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/img/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
.jpg"/>
               <span class="username"><?php echo $_smarty_tpl->tpl_vars['user']->value['nombres'];?>
</span>
               <i class="icon-angle-down"></i>
               </a>
               <ul class="dropdown-menu">
                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
administracion/perfil"><i class="icon-user"></i> Mi Perfil</a>
                  </li>
                  <li class="divider"></li>
                  <li><a href="javascript:;" id="trigger_fullscreen"><i class="icon-move"></i> Pantalla completa</a>
                  </li>
                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
pages/logout"><i class="icon-key"></i> Cerrar sesión</a>
                  </li>
               </ul>
            </li>
            <!-- END USER LOGIN DROPDOWN -->
         </ul>
         <!-- END TOP NAVIGATION MENU -->
      </div>
      <!-- END TOP NAVIGATION BAR -->
   </div>
   <!-- END HEADER -->
   <div class="clearfix"></div>
   <!-- BEGIN CONTAINER -->
   <div class="page-container">
      <!-- BEGIN SIDEBAR -->
      <div class="page-sidebar navbar-collapse collapse">
         <!-- BEGIN SIDEBAR MENU -->   
         
         <ul class="page-sidebar-menu">
            <li>
               <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
               <div class="sidebar-toggler hidden-phone"></div>
               <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            </li>
                        
            <li>
               <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
               <form class="sidebar-search" action="extra_search.html" method="POST">
                  <div class="form-container">
                     <div class="input-box">
                        <a href="javascript:;" class="remove"></a>
                        <input type="text" placeholder="Buscar..."/>
                        <input type="button" class="submit" value=" "/>
                     </div>
                  </div>
               </form>
               <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>
            <li class="start <?php if ($_smarty_tpl->tpl_vars['menu_id']->value==0) {?> active <?php }?>">
               <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">
               <i class="icon-home"></i> 
               <span class="title">Inicio</span>
               <span class="selected"></span>
               </a>
            </li>
            <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_rol']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['i']->value['rol_id']==1) {?>
                <li class="<?php if ($_smarty_tpl->tpl_vars['menu_id']->value==1) {?> active <?php }?>">
                    <a href="javascript:;">
                    <i class="icon-user"></i> 
                    <span class="title">Pacientes</span>
                    <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                       <li >
                          <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
pacientes/index">
                          Administrar pacientes</a>
                       </li>
                    </ul>
                </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['i']->value['rol_id']==1) {?>
                <li class="<?php if ($_smarty_tpl->tpl_vars['menu_id']->value==2) {?> active <?php }?>">
                    <a href="javascript:;">
                    <i class="icon-table"></i> 
                    <span class="title">Agenda médica</span>
                    <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                       <li >
                          <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
agenda/horario">
                          Crear horario</a>
                       </li>
                       <li >
                          <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
agenda/citas">
                          Libreta de citas</a>
                       </li>
                       <li >
                          <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
agenda/cirugia">
                          Agenda de cirugia</a>
                       </li>
                    </ul>
                </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['i']->value['rol_id']==3) {?>
                <li class="<?php if ($_smarty_tpl->tpl_vars['menu_id']->value==4) {?> active <?php }?>">
                    <a href="javascript:;">
                    <i class="icon-cogs"></i> 
                    <span class="title">Configuración</span>
                    <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                       <li >
                          <a href="form_controls.html">
                          Información institucional</a>
                       </li>
                    </ul>
                </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['i']->value['rol_id']==3) {?>
                <li class="<?php if ($_smarty_tpl->tpl_vars['menu_id']->value==5) {?> active <?php }?>">
                    <a href="javascript:;">
                        <i class="icon-sitemap"></i> 
                        <span class="title">Administrador</span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                       <li >
                          <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
administrador/perfiles">
                          <i class="icon-cogs"></i>
                          Perfiles</a>
                       </li>
                       <li >
                          <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
administrador/index">
                          <i class="icon-user"></i>
                          Usuarios</a>
                       </li>
                    </ul>
                </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['i']->value['rol_id']==3) {?>
                <li class="<?php if ($_smarty_tpl->tpl_vars['menu_id']->value==6) {?> active <?php }?>">
                    <a href="javascript:;">
                    <i class="icon-bar-chart"></i> 
                    <span class="title">Reportes</span>
                    <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                       <li >
                          <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
news/create">
                          Reporte 1</a>
                       </li>
                       <li >
                          <a href="maps_vector.html">
                          Reporte 2</a>
                       </li>
                    </ul>
                </li>
            <?php }?>
            
                <!-- ROL ESPECIALISTA -->
                <?php if ($_smarty_tpl->tpl_vars['i']->value['rol_id']==2||$_smarty_tpl->tpl_vars['i']->value['rol_id']==7) {?>
                    <li class="start <?php if ($_smarty_tpl->tpl_vars['menu_id']->value==7) {?> active <?php }?>">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/index">
                        <i class="icon-home"></i> 
                        <span class="title">Agenda especialista</span>
                        <span class="selected"></span>
                        </a>
                    </li>
                                        
                    <li class="start <?php if ($_smarty_tpl->tpl_vars['menu_id']->value==8) {?> active <?php }?>">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/pacientes">
                        <i class="icon-home"></i> 
                        <span class="title">Consultar Pacientes</span>
                        <span class="selected"></span>
                        </a>
                    </li>
                <?php }?>
            <?php } ?>
            
            
         </ul>
         <!-- END SIDEBAR MENU -->
         
      </div>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->
      <div class="page-content">
         	
     <!-- BEGIN PAGE HEADER-->
     <div class="row">
        <div class="col-md-12">
           <!-- BEGIN PAGE TITLE & BREADCRUMB-->
           <h3 class="page-title">
              Libreta citas
           </h3>
           <ul class="page-breadcrumb breadcrumb">
             <li>
                 <i class="icon-home"></i>
                 <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">Inicio</a> 
                 <i class="icon-angle-right"></i>
              </li>
              <li>
                 <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
agenda/citas">Agenda</a>
                 <i class="icon-angle-right"></i>
              </li>
              <li><a href="#">Citas</a></li>
           </ul>
           <!-- END PAGE TITLE & BREADCRUMB-->
        </div>
     </div>
     <!-- END PAGE HEADER-->
     <!-- BEGIN PAGE CONTENT-->
     <div class="row profile">
        <div class="col-md-12">
           <div class="portlet box blue calendar">
              <div class="portlet-title">
                 <div class="caption"><i class="icon-reorder"></i>Libreta de citas</div>
                 <div class="actions">
                     <a id="btn-nueva-cita" href="#cita" class="btn green">
                         <i class="icon-pencil"></i> Cita fuera de horario
                     </a>
                 </div>
              </div>
              <div class="portlet-body">
                 <div class="row">
                    <div class="col-md-3 col-sm-12">
                       <!-- BEGIN DRAGGABLE EVENTS PORTLET-->    
                       <h3 class="event-form-title">Especialista: </h3>
                       <div id="external-events">
                          <form class="inline-form">
                             <select  class="form-control" id='especialista' name="especialista" >
                                <option value="0">- SELECCIONE -</option>
                                <?php  $_smarty_tpl->tpl_vars['gs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_doctores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gs']->key => $_smarty_tpl->tpl_vars['gs']->value) {
$_smarty_tpl->tpl_vars['gs']->_loop = true;
?>
                                     <option value="<?php echo $_smarty_tpl->tpl_vars['gs']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['gs']->value['nombres'];?>
 <?php echo $_smarty_tpl->tpl_vars['gs']->value['apellidos'];?>
</option>
                                <?php } ?>
                            </select>
                          </form>
                          <hr />
                          <div class="inline-form">
                                <div id="dp-fecha">
                                </div>
                           </div>
                          <hr/>
                       </div>
                       <!-- END DRAGGABLE EVENTS PORTLET-->            
                    </div>
                    <div id="dv_agenda" class="col-md-9 col-sm-9">
                        <table class="table table-striped table-bordered table-hover" id="sample_2">
                            <thead>
                               <tr>
                                  <th>HORA</th>
                                  <th >IDENTIFICACIÓN</th>
                                  <th >NOMBRE</th>
                                  <th >ACCIONES</th>
                               </tr>
                            </thead>
                        </table>
                    </div>
                 </div>
                 <!-- END CALENDAR PORTLET-->
              </div>
           </div>
        </div>
     </div>
     <!-- END PAGE CONTENT-->
    
     <!-- MODAL PARA NUEVO PACIENTE -->
    <div id="responsive" class="modal fade" tabindex="-1" data-width="760">
        <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
               <h4 class="modal-title">Información basica de paciente</h4>
            </div>
            <div id="dv_paciente" class="modal-body">

            </div>
            <div class="modal-footer">
               <button type="button" data-dismiss="modal" class="btn btn-default">Cerrar</button>
               <button type="button" id="btn-paciente-guardar" data-dismiss="modal" class="btn blue">Guardar cambios</button>
            </div>
        </div>        
    </div>
     <!-- FIN MODAL NUEVO PACIENTE -->
     
     <!-- MODAL PARA FACTURACIÓN -->
     <div id="facturacion" class="modal fade" tabindex="-1" data-width="600">
        <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
               <h4 class="modal-title">Facturación de Consulta</h4>
            </div>
            <div id="dv_facturacion" class="modal-body">

            </div>
            <div class="modal-footer">
               <button type="button" data-dismiss="modal" class="btn btn-default">Cerrar</button>
               <button type="button" id="btn-facturacion-guardar" data-dismiss="modal" class="btn blue">Guardar cambios</button>
            </div>
        </div>
        
    </div>
    <!-- FIN MODAL FACTURACIÓN -->
    
    
     <!-- MODAL PARA CITA FUERA DE HORARIO -->
     <div id="cita" class="modal fade" tabindex="-1">
        <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
           <h4 class="modal-title">Cita fuera de horario</h4>
        </div>
        <div id="dv_citaNueva" class="modal-body">
           <div class="row">
                <form id="form-nuevaCita" class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
agenda/nuevaCita" method="post" accept-charset="utf-8">
                <div class="form-body">
                   <div class="form-group">
                        <label class="col-md-4 control-label">Fecha (*)</label>
                        <div class="col-md-8">
                            <div class="input-group input-medium date date-picker" data-date-format="yyyy-mm-dd"  data-date-viewmode="years">
                                <input id="dp-fecha-cita" type="text" class="form-control" name="fecha_cita" value="<?php echo $_smarty_tpl->tpl_vars['hoy']->value;?>
">
                                <span class="input-group-btn">
                                    <button class="btn default" type="button"><i class="icon-calendar"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Hora (*)</label>
                        <div class="col-md-8">
                            <div class="input-group input-medium">
                                <input type="text" name="dp-hora-cita" id="clockface_2" value="14:30" class="form-control" readonly=""/>
                                <span class="input-group-btn">
                                    <button class="btn default" type="button" id="clockface_2_toggle"><i class="icon-time"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                   <div class="form-group">
                      <label  class="col-md-4 control-label">Identificación (*)</label>
                      <div class="col-md-8">
                         <input type="text" class="form-control input-medium" id="mdl_citaIdentificacion" name="mdl_citaIdentificacion" maxlength="45" required>
                      </div>
                   </div>
                   <div class="form-group">
                      <label  class="col-md-4 control-label">Paciente</label>
                      <div class="col-md-8">
                         <input type="text" class="form-control input-medium" id="mdl_citaPaciente" name="mdl_citaPaciente" maxlength="45">
                         <input type="hidden" id="mdl_citaPacienteHidden" name="mdl_citaPacienteHidden" value="">
                      </div>
                   </div>
                </div>
             </form>
            </div>
        </div>
       <div class="modal-footer">
           <button type="button" data-dismiss="modal" class="btn btn-default">Cerrar</button>
           <button type="button" id="btn-fuera-horario-guardar" data-dismiss="modal" class="btn blue">Guardar cambios</button>
       </div>
    </div>
    <!-- FIN MODAL CITA FUERA HORARIO -->

      </div>
      <!-- END PAGE -->
   </div>
   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER -->
   <div class="footer">
      <div class="footer-inner">
         2013 &copy; Kamelot - Soluciones Tecnológicas.
      </div>
      <div class="footer-tools">
         <span class="go-top">
         <i class="icon-angle-up"></i>
         </span>
      </div>
   </div>
   <!-- END FOOTER -->
   <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
   <!-- BEGIN CORE PLUGINS -->   
   <!--[if lt IE 9]>
   <script src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/respond.min.js"></script>
   <script src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/excanvas.min.js"></script> 
   <![endif]-->   
   <script src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
   <script src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>   
   <!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
   <script src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
   <script src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
   <script src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
   <script src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
   <script src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
   <script src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
   <script src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
   <!-- END CORE PLUGINS -->
   <!-- BEGIN PAGE LEVEL PLUGINS -->
   <script src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
   <script src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
   <script src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>     
   <script src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/gritter/js/jquery.gritter.js" type="text/javascript"></script>
   <!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
   <script src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
   <script src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
   <script src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/jquery.sparkline.min.js" type="text/javascript"></script>  
   <!-- END PAGE LEVEL PLUGINS -->
   <!-- BEGIN PAGE LEVEL SCRIPTS -->
   <script src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/scripts/app.js" type="text/javascript"></script>
   <script src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/scripts/index.js" type="text/javascript"></script>
   <script src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/scripts/tasks.js" type="text/javascript"></script>        
   
   
    <!-- CALENDAR -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/scripts/calendar.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>      
   <script src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- END CALENDAR -->
    <!-- MODAL -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript" ></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript" ></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/scripts/ui-extended-modals.js"></script> 
    <!-- END MODAL -->
    <!-- TIME PICKER -->
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/clockface/js/clockface.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/bootstrap-daterangepicker/moment.min.js"></script>
    <!-- END MODAL -->
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/bootstrap-fileupload/bootstrap-fileupload.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.es.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>  
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js"></script>   
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/select2/select2.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/jquery.input-ip-address-control-1.0.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/jquery-multi-select/js/jquery.multi-select.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript" ></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
    <script src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/scripts/app.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/scripts/form-components.js"></script>     
    <!-- END PAGE LEVEL SCRIPTS -->
    <script>
    jQuery(document).ready(function() {
        App.init();
        FormComponents.init();
        UIExtendedModals.init();

        $( "#mdl_citaIdentificacion" )
            .change(function() {
                var paciente = $( '#mdl_citaIdentificacion' ).val();
                
                pacienteFueraHorario(paciente);
        })
        .keyup();
      
        $('#dp-fecha').datepicker({
            language: "es",
        });
        
        $('#btn-nueva-cita').click(function () {
            var especialista = $('#especialista').attr('value');
            if(especialista>0){
                $("#cita").modal('show');
            }
            else{
                alert("Debe seleccionar un especialista.");
            }
        });
        
        $('#dp-fecha').click(function () {
            consultar();
        });
        
        $("#especialista").change(function () {
            consultar();
        });
        
        $("#btn-fuera-horario-guardar").click(function () {
            var especialista = $('#especialista').attr('value');
            var paciente = $('#mdl_citaPacienteHidden').attr('value');
            var fecha = $('#dp-fecha-cita').attr('value') + " " + $('#clockface_2').attr('value') + ":00";
            
        if(paciente != ""){
                agendarPaciente(especialista, paciente, fecha, function(url){
                    //alert("La cita ha sido agendada.");
                    consultar();
                });
            }
        });
        
        $("#btn-paciente-guardar").click(function () {
            var fecha = $('#dp-fecha-cita').val();
            var horaini = $('#mdl_horaini').val();
            var paciente = $('#mdl_identificacion').val();
            var fecha = $('#identificacion_'+horaini).attr('fechahora');
            
            $.post($('#form-nvoPaciente').attr('action'), $('#form-nvoPaciente').serialize(), function(json){
                alert("El registro ha sido guardado.");
            }, 'json');
            
            //alert(horaini);
            if(horaini != "0"){
                alert("El registro ha sido guardado.");
                mostrarPaciente(paciente, fecha, horaini);
            }
            else{
                pacienteFueraHorario(paciente);
            }
            
            $("#responsive").modal('hide');

             return false;
        });
        
        $("#btn-facturacion-guardar").click(function () {
            set_facturacion();
           return false;
        });

    });
    
    function consultar(){
        abc = $('#dp-fecha').data('datepicker').getDate();
        var day = abc.getDate();
        var month = abc.getMonth() + 1;
        var year = abc.getFullYear();
        var especialista =$('#especialista').attr('value');

        consultarAgenda(year, month, day, especialista);
    }
    
    function consultarAgenda(year, month, day, especialista_id){
        //alert(especialista_id);
        $.ajax({
                type: "POST",
                url: "<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
agenda/agenda/"+year+"/"+month+"/"+day+"/"+especialista_id,
                data: especialista_id,
                dataType: "text",  
                cache:false,
                success: 
                     function(data){
                        $('#dv_agenda').empty();
                        $('#dv_agenda').html(data);
                     }
        });
       return false;
    }
    
    function consultarPaciente(paciente, horaini, callback){ 
        $.ajax({
            type: "POST",
            url: "<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
agenda/consultarPaciente/"+paciente,
            data: paciente,
            dataType: "json",  
            cache:false,
            success: 
                 function(data){
                    if(data!=0){
                        callback(data);
                    }
                    else{
                        if(confirm('El paciente no existe. ¿Desea realizar el pre-registro?')){
                            crearPaciente(paciente, horaini);
                        }
                    }
                 }
        });
    }
  
    function crearPaciente(paciente, horaini){
        $.ajax({
                type: "POST",
                url: "<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
pacientes/nuevoModal/"+paciente+"/"+horaini,
                data : {
                        paciente : paciente, 
                        horaini : horaini,
                       },
                dataType: "text",  
                cache:false,
                success: 
                     function(data){
                        $('#dv_paciente').empty();
                        $('#dv_paciente').html(data);
                     }
        });

        $("#responsive").modal('show');

        return false;
    }
    
    function pacienteFueraHorario(paciente){
        consultarPaciente(paciente, "0", function(url){
            //alert(url);
            $('#mdl_citaPaciente').attr('value', url[0]);
            $('#mdl_citaPacienteHidden').attr('value', url[1]);
        });
    }
    
    function agendarPaciente(especialista, paciente, fechahora, callback){
        
        $.ajax({
            type: "POST",
            url: "<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
agenda/agendar/"+especialista+"/"+paciente+"/"+fechahora,
            data: especialista,
            dataType: "text",  
            cache:false,
            success: 
                 function(data){
                    callback(data);
                 }
        });
    }
    
    function facturar(cita_id){
        $.ajax({
                type: "POST",
                url: "<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
agenda/facturar/"+cita_id,
                data: cita_id,
                dataType: "text",  
                cache:false,
                success: 
                     function(data){
                        $('#dv_facturacion').empty();
                        $('#dv_facturacion').html(data);
                     }
        });
        
        $("#facturacion").modal('show');
        
       return false;
    }
    
    function set_facturacion(){
        var cita_id = $('#cita_id').attr('value');
        var servicio_id = $('#servicio_id').attr('value');
        var valor = $('#valor').attr('value');
        var postData = {
                            'cita_id': cita_id, 
                            'servicio_id' : servicio_id,
                            'valor' : valor
                         };
                         
        $.post('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
agenda/setFacturacion', postData, function(data){
            alert("La facturación se ha procesado correctamente.");
        });
        $("#facturacion").modal('hide');
        
       return false;
    }
    </script>


   <!-- END PAGE LEVEL SCRIPTS -->  
   <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html><?php }} ?>
