<?php /* Smarty version Smarty-3.1.15, created on 2014-06-14 09:27:48
         compiled from "application\views\templates\especialista\consulta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:632152e29d23484e61-89448991%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '606dec600cc09c26cd0c1eb0b81ab80803e92793' => 
    array (
      0 => 'application\\views\\templates\\especialista\\consulta.tpl',
      1 => 1402752447,
      2 => 'file',
    ),
    '69edd536ad22a96e4e860274a997e06eee10299c' => 
    array (
      0 => 'application\\views\\templates\\layout.tpl',
      1 => 1401593640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '632152e29d23484e61-89448991',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52e29d23770ab6_53531122',
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
<?php if ($_valid && !is_callable('content_52e29d23770ab6_53531122')) {function content_52e29d23770ab6_53531122($_smarty_tpl) {?><!DOCTYPE html>
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
     <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/clockface/css/clockface.css" />
   <!-- END MODAL -->
   <!-- AUTOCOMPLETE -->
    <script language="JavaScript" src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/autocomplete/js/jquery-1.5.1.min.js"></script>
    <script language="JavaScript" src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/autocomplete/js/jquery-ui-1.8.13.custom.min.js"></script>
    <link type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/autocomplete/css/ui-lightness/jquery-ui-1.8.13.custom.css" rel="stylesheet" />
   <!-- END AUTOCOMPLETE -->
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
              Consulta médica: <?php echo $_smarty_tpl->tpl_vars['consulta']->value['nombre1'];?>
 <?php echo $_smarty_tpl->tpl_vars['consulta']->value['apellido1'];?>

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
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/index">Salir</a></li>
                    </ul>
                </li> 
                <li>
                    <i class="icon-home"></i>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">Inicio</a> 
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/index">Agenda Médica</a>
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
                                                  <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_historial_diagnostico']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                                                       <tr>
                                                          <td><?php echo $_smarty_tpl->tpl_vars['i']->value['fecha'];?>
</td>
                                                          <td><?php echo $_smarty_tpl->tpl_vars['i']->value['codigo'];?>
 - <?php echo $_smarty_tpl->tpl_vars['i']->value['cie_descripcion'];?>
</td>
                                                          <td><?php echo $_smarty_tpl->tpl_vars['i']->value['motivo'];?>
</td>
                                                          <td><?php echo $_smarty_tpl->tpl_vars['i']->value['tratamiento'];?>
</td>
                                                       </tr>
                                                   <?php } ?>
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
                                                        <?php  $_smarty_tpl->tpl_vars['ce'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ce']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_finalidad_consulta']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ce']->key => $_smarty_tpl->tpl_vars['ce']->value) {
$_smarty_tpl->tpl_vars['ce']->_loop = true;
?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['ce']->value['id'];?>
" <?php if (($_smarty_tpl->tpl_vars['consulta']->value['finalidad_consulta']==$_smarty_tpl->tpl_vars['ce']->value['id'])) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['ce']->value['descripcion'];?>
</option>
                                                        <?php } ?>
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
                                                        <?php  $_smarty_tpl->tpl_vars['ce'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ce']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_causa_externa']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ce']->key => $_smarty_tpl->tpl_vars['ce']->value) {
$_smarty_tpl->tpl_vars['ce']->_loop = true;
?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['ce']->value['id'];?>
" <?php if (($_smarty_tpl->tpl_vars['consulta']->value['causa_externa']==$_smarty_tpl->tpl_vars['ce']->value['id'])) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['ce']->value['descripcion'];?>
</option>
                                                        <?php } ?>
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
                                                    <textarea id="motivo" name="motivo" class="form-control" rows="6" onchange="setConsulta(this)"><?php echo $_smarty_tpl->tpl_vars['consulta']->value['motivo'];?>
</textarea>
                                                    <input type="hidden" id="consulta_id" name="consulta_id" value="<?php echo $_smarty_tpl->tpl_vars['consulta']->value['id'];?>
">
                                                    <input type="hidden" id="paciente_id" name="paciente_id" value="<?php echo $_smarty_tpl->tpl_vars['paciente']->value['paciente_id'];?>
">
                                                    <input type="hidden" id="especialista_id" name="especialista_id" value="<?php echo $_smarty_tpl->tpl_vars['especialista']->value;?>
">
                                                    <input type="hidden" id="fecha" name="fecha" value="<?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>
">
                                                </div>
                                            </div>
                                        </div>
                                     </form>
                                </div>
                                <div id="tab_2-3" class="tab-pane">
                                    <h3 class="form-section">Enfermedad actual</h3>
                                    <div class="form-group">
                                        <textarea id="enfermedad_actual" name="enfermedad_actual" class="form-control" rows="6" onchange="setConsulta(this)"><?php echo $_smarty_tpl->tpl_vars['consulta']->value['enfermedad_actual'];?>
</textarea>
                                    </div>
                                    
                                    <h3 class="form-section">Observación</h3>
                                    <div class="form-group">
                                        <textarea id="observacion" name="observacion" class="form-control" rows="6" onchange="setConsulta(this)"><?php echo $_smarty_tpl->tpl_vars['consulta']->value['observacion'];?>
</textarea>
                                    </div>
                                </div>
                                <div id="tab_2-4" class="tab-pane">
                                    <h3 class="form-section">Revisión por sistema</h3>
                                    <form class="horizontal-form">
                                        <div class="form-body">
                                            <div class="form-group">
                                            <?php  $_smarty_tpl->tpl_vars['sg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_sistema']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sg']->key => $_smarty_tpl->tpl_vars['sg']->value) {
$_smarty_tpl->tpl_vars['sg']->_loop = true;
?>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['sg']->value['descripcion'];?>
</label>
                                                        <textarea id="id-<?php echo $_smarty_tpl->tpl_vars['sg']->value['id'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['sg']->value['id'];?>
" class="form-control" rows="2" onchange="setRevisionSistema(this)"><?php echo $_smarty_tpl->tpl_vars['sg']->value['valoracion'];?>
</textarea>
                                                    </div>
                                                </div>
                                            <?php } ?>
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
                                 <?php if ($_smarty_tpl->tpl_vars['user']->value['especialidad']==1) {?>
                                    <li ><a data-toggle="tab" href="#tab_3-2"><i class="icon-eye-open"></i> A. Ginecológicos</a></li>
                                    <li ><a data-toggle="tab" href="#tab_3-3"><i class="icon-eye-open"></i> A. Obstétricos</a></li>
                                 <?php }?>
                              </ul>
                           </div>
                           <div class="col-md-9">
                              <div class="tab-content">
                                 <div id="tab_3-1" class="tab-pane active">
                                    <h3 class="form-section">Antecedentes Patológicos Familiares</h3>
                                        <div class="form-group">
                                            <textarea id="familiar-descripcion" name="descripcion" class="form-control" rows="6" onchange="setAFamiliares(this)"><?php if (!empty($_smarty_tpl->tpl_vars['aFamiliares']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aFamiliares']->value['descripcion'];?>
<?php }?></textarea>
                                        </div>
                                        
                                    <?php if ($_smarty_tpl->tpl_vars['user']->value['especialidad']==1) {?>
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
                                                        <textarea class="form-control" name="enfermedades_cronicas" rows="2" onchange="setAPareja(this)"><?php if (!empty($_smarty_tpl->tpl_vars['aPareja']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aPareja']->value['enfermedades_cronicas'];?>
<?php }?></textarea>
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
                                                        <textarea class="form-control" name="impotencia" rows="2" onchange="setAPareja(this)"><?php if (!empty($_smarty_tpl->tpl_vars['aPareja']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aPareja']->value['impotencia'];?>
<?php }?></textarea>
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
                                                        <textarea class="form-control" name="ets" rows="2" onchange="setAPareja(this)"><?php if (!empty($_smarty_tpl->tpl_vars['aPareja']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aPareja']->value['ets'];?>
<?php }?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <?php }?>
                                        <h3 class="form-section">Antecedentes Personales Patológicos</h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Hábitos tóxicos:</label>
                                                    <textarea class="form-control" rows="2" name="habitos_toxicos" onchange="setAPersonales(this)"><?php if (!empty($_smarty_tpl->tpl_vars['aPersonales']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aPersonales']->value['habitos_toxicos'];?>
<?php }?></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Fisiológicos:</label>
                                                    <textarea class="form-control" rows="2" name="fisiologicos" onchange="setAPersonales(this)"><?php if (!empty($_smarty_tpl->tpl_vars['aPersonales']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aPersonales']->value['fisiologicos'];?>
<?php }?></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Patológicos:</label>
                                                    <textarea class="form-control" rows="2" name="patologicos" onchange="setAPersonales(this)"><?php if (!empty($_smarty_tpl->tpl_vars['aPersonales']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aPersonales']->value['patologicos'];?>
<?php }?></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Quirúrgicos:</label>
                                                    <textarea class="form-control" rows="2" name="quirurgicos" onchange="setAPersonales(this)"><?php if (!empty($_smarty_tpl->tpl_vars['aPersonales']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aPersonales']->value['quirurgicos'];?>
<?php }?></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Traumatológicos:</label>
                                                    <textarea class="form-control" rows="2" name="traumatologicos" onchange="setAPersonales(this)"><?php if (!empty($_smarty_tpl->tpl_vars['aPersonales']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aPersonales']->value['traumatologicos'];?>
<?php }?></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Alérgicos:</label>
                                                    <textarea class="form-control" rows="2" name="alergicos" onchange="setAPersonales(this)"><?php if (!empty($_smarty_tpl->tpl_vars['aPersonales']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aPersonales']->value['alergicos'];?>
<?php }?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                 </div>
                                <?php if ($_smarty_tpl->tpl_vars['user']->value['especialidad']==1) {?>
                                 <div id="tab_3-2" class="tab-pane">
                                    <h3 class="form-section">Antecedentes ginecológicos</h3>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Menarca:</label>
                                            <input type="text" class="form-control" name="menarca" onchange="setAGinecologicos(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['aGinecologicos']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aGinecologicos']->value['menarca'];?>
<?php }?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Ciclos Mestruales:</label>
                                            <input type="text" class="form-control" name="fm" onchange="setAGinecologicos(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['aGinecologicos']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aGinecologicos']->value['fm'];?>
<?php }?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">FUM:</label>
                                            <input type="text" class="form-control" name="fum" onchange="setAGinecologicos(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['aGinecologicos']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aGinecologicos']->value['fum'];?>
<?php }?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">FPP:</label>
                                            <input type="text" class="form-control" name="fpp" onchange="setAGinecologicos(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['aGinecologicos']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aGinecologicos']->value['fpp'];?>
<?php }?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Inicio vida sexual:</label>
                                            <input type="text" class="form-control" name="vida_sexual" onchange="setAGinecologicos(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['aGinecologicos']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aGinecologicos']->value['vida_sexual'];?>
<?php }?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">No. Parejas:</label>
                                            <input type="text" class="form-control" name="numero_parejas" onchange="setAGinecologicos(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['aGinecologicos']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aGinecologicos']->value['numero_parejas'];?>
<?php }?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">ETS:</label>
                                            <input type="text" class="form-control" name="ets" onchange="setAGinecologicos(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['aGinecologicos']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aGinecologicos']->value['ets'];?>
<?php }?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Vaginitis:</label>
                                            <input type="text" class="form-control" name="vaginitis" onchange="setAGinecologicos(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['aGinecologicos']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aGinecologicos']->value['vaginitis'];?>
<?php }?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6" hidden>
                                        <div class="form-group">
                                            <label class="control-label">F.U. Citología:</label>
                                            <input type="text" class="form-control" name="fu_citologia" onchange="setAGinecologicos(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['aGinecologicos']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aGinecologicos']->value['fu_citologia'];?>
<?php }?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6" hidden>
                                        <div class="form-group">
                                            <label class="control-label">Tipo anticonceptivo:</label>
                                            <input type="text" class="form-control" name="anticoncepcion_tipo" onchange="setAGinecologicos(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['aGinecologicos']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aGinecologicos']->value['anticoncepcion_tipo'];?>
<?php }?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6" hidden>
                                        <div class="form-group">
                                            <label class="control-label">Inicio anticoncepción:</label>
                                            <input type="text" class="form-control" name="anticoncepcion_inicio" onchange="setAGinecologicos(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['aGinecologicos']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aGinecologicos']->value['anticoncepcion_inicio'];?>
<?php }?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6" hidden>
                                        <div class="form-group">
                                            <label class="control-label">Tiempo anticoncepción:</label>
                                            <input type="text" class="form-control" name="anticoncepcion_tiempo" onchange="setAGinecologicos(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['aGinecologicos']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aGinecologicos']->value['anticoncepcion_tiempo'];?>
<?php }?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6" hidden>
                                        <div class="form-group">
                                            <label class="control-label">Suspensión anticoncepción:</label>
                                            <input type="text" class="form-control" name="anticoncepcion_suspension" onchange="setAGinecologicos(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['aGinecologicos']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aGinecologicos']->value['anticoncepcion_suspension'];?>
<?php }?>">
                                        </div>
                                    </div>
                                    <div style="clear: both"></div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Anticoncepción:</label>
                                            <!--<input type="text" class="form-control" name="anticoncepcion" onchange="setAGinecologicos(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['aGinecologicos']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aGinecologicos']->value['anticoncepcion'];?>
<?php }?>">-->
                                            <textarea class="form-control" name="anticoncepción" rows="3" onchange="setAGinecologicos(this)"><?php if (!empty($_smarty_tpl->tpl_vars['aGinecologicos']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aGinecologicos']->value['anticoncepcion'];?>
<?php }?></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Citologia vaginal:</label>
                                            <textarea class="form-control" name="citologia_vaginal" rows="3" onchange="setAGinecologicos(this)"><?php if (!empty($_smarty_tpl->tpl_vars['aGinecologicos']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aGinecologicos']->value['citologia_vaginal'];?>
<?php }?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Vacunacion VPH:</label>
                                            <textarea class="form-control" name="vacunacion_uph" rows="3" onchange="setAGinecologicos(this)"><?php if (!empty($_smarty_tpl->tpl_vars['aGinecologicos']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aGinecologicos']->value['vacunacion_uph'];?>
<?php }?></textarea>
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
                                                        <input type="text" class="form-control" name="deseado" onchange="setAObstetricos(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['aObstetricos']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aObstetricos']->value['deseado'];?>
<?php }?>">
                                                    </div>
                                                    <label class="col-md-1 control-label">Partos:</label>
                                                    <div class="col-md-1">
                                                        <input type="text" class="form-control" name="partos" onchange="setAObstetricos(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['aObstetricos']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aObstetricos']->value['partos'];?>
<?php }?>">
                                                    </div>
                                                    <label class="col-md-1 control-label">Cesárea:</label>
                                                    <div class="col-md-1">
                                                        <input type="text" class="form-control" name="cesarea" onchange="setAObstetricos(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['aObstetricos']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aObstetricos']->value['cesarea'];?>
<?php }?>">
                                                    </div>
                                                    <label class="col-md-1 control-label">Abortos:</label>
                                                    <div class="col-md-1">
                                                        <input type="text" class="form-control" name="aborto" onchange="setAObstetricos(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['aObstetricos']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aObstetricos']->value['aborto'];?>
<?php }?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Mortinatos:</label>
                                                    <div class="col-md-1">
                                                        <input type="text" class="form-control" name="mortinato" onchange="setAObstetricos(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['aObstetricos']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aObstetricos']->value['mortinato'];?>
<?php }?>">
                                                    </div>
                                                    <label class="col-md-1 control-label">Ectópicos:</label>
                                                    <div class="col-md-1">
                                                        <input type="text" class="form-control" name="ectopico" onchange="setAObstetricos(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['aObstetricos']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aObstetricos']->value['ectopico'];?>
<?php }?>">
                                                    </div>
                                                    <label class="col-md-1 control-label">Vivos:</label>
                                                    <div class="col-md-1">
                                                        <input type="text" class="form-control" name="vivo" onchange="setAObstetricos(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['aObstetricos']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aObstetricos']->value['vivo'];?>
<?php }?>">
                                                    </div>
                                                    <label class="col-md-2 control-label">Intergenesia:</label>
                                                    <div class="col-md-1">
                                                        <input type="text" class="form-control" name="intergenesia" onchange="setAObstetricos(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['aObstetricos']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aObstetricos']->value['intergenesia'];?>
<?php }?>">
                                                    </div>
                                                </div>
                                            </div>
                                                
                                            <div class="row">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Malformaciones:</label>
                                                    <div class="col-md-1">
                                                        <input type="text" class="form-control" name="malformacion" onchange="setAObstetricos(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['aObstetricos']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aObstetricos']->value['malformacion'];?>
<?php }?>">
                                                    </div>
                                                    <label class="col-md-2 control-label">Parto prematuro:</label>
                                                    <div class="col-md-1">
                                                        <input type="text" class="form-control" name="prematuro" onchange="setAObstetricos(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['aObstetricos']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aObstetricos']->value['prematuro'];?>
<?php }?>">
                                                    </div>
                                                    <label class="col-md-3 control-label">Diabetes Gestacional:</label>
                                                    <div class="col-md-1">
                                                        <input type="text" class="form-control" name="diabetes_gestacional" onchange="setAObstetricos(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['aObstetricos']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aObstetricos']->value['diabetes_gestacional'];?>
<?php }?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Isoinmunización:</label>
                                                    <div class="col-md-1">
                                                        <input type="text" class="form-control" name="isoinmunizacion" onchange="setAObstetricos(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['aObstetricos']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aObstetricos']->value['isoinmunizacion'];?>
<?php }?>">
                                                    </div>
                                                    <label class="col-md-1 control-label">HTA:</label>
                                                    <div class="col-md-1">
                                                        <input type="text" class="form-control" name="hta" onchange="setAObstetricos(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['aObstetricos']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aObstetricos']->value['hta'];?>
<?php }?>">
                                                    </div>
                                                    <label class="col-md-1 control-label">Infección:</label>
                                                    <div class="col-md-1">
                                                        <input type="text" class="form-control" name="infeccion" onchange="setAObstetricos(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['aObstetricos']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aObstetricos']->value['infeccion'];?>
<?php }?>">
                                                    </div>
                                                    <label class="col-md-2 control-label">Otros:</label>
                                                    <div class="col-md-1">
                                                        <input type="text" class="form-control" name="otros" onchange="setAObstetricos(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['aObstetricos']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aObstetricos']->value['otros'];?>
<?php }?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Atención prenatal:</label>
                                                    <div class="col-md-1">
                                                        <input type="text" class="form-control" name="atencion_prenatal" onchange="setAObstetricos(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['aObstetricos']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aObstetricos']->value['atencion_prenatal'];?>
<?php }?>">
                                                    </div>
                                                    <label class="col-md-2 control-label">No. consultas:</label>
                                                    <div class="col-md-1">
                                                        <input type="text" class="form-control" name="numero_consultas" onchange="setAObstetricos(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['aObstetricos']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aObstetricos']->value['numero_consultas'];?>
<?php }?>">
                                                    </div>
                                                    <label class="col-md-3 control-label">Exámenes complementarios:</label>
                                                    <div class="col-md-1">
                                                        <input type="text" class="form-control" name="examenes_complementarios" onchange="setAObstetricos(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['aObstetricos']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aObstetricos']->value['examenes_complementarios'];?>
<?php }?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Alterados:</label>
                                                    <div class="col-md-1">
                                                        <input type="text" class="form-control" name="alterados" onchange="setAObstetricos(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['aObstetricos']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aObstetricos']->value['alterados'];?>
<?php }?>">
                                                    </div>
                                                    <label class="col-md-3 control-label">Medicina gestacional:</label>
                                                    <div class="col-md-1">
                                                        <input type="text" class="form-control" name="medicina_gestacional" onchange="setAObstetricos(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['aObstetricos']->value)) {?><?php echo $_smarty_tpl->tpl_vars['aObstetricos']->value['medicina_gestacional'];?>
<?php }?>">
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
                                <?php }?>
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
                                <?php if ($_smarty_tpl->tpl_vars['user']->value['especialidad']==1) {?>
                                    <li ><a data-toggle="tab" href="#tab_4-2"><i class="icon-picture"></i> Exámen ginecológico</a></li>
                                <?php }?>
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
                                                        <input type="text" id="impresion_general" name="impresion_general" class="form-control" onchange="setConsulta(this)" value="<?php echo $_smarty_tpl->tpl_vars['consulta']->value['impresion_general'];?>
">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label" >Signos vitales:</label>
                                                    <label class="col-md-1 control-label" >FC:</label>
                                                    <div class="col-md-2">
                                                        <input type="text" class="form-control" name="frecuencia_cardiaca" onchange="setConsulta(this)" value="<?php echo $_smarty_tpl->tpl_vars['consulta']->value['frecuencia_cardiaca'];?>
">
                                                     </div>

                                                    <label class="col-md-1 control-label" >TA:</label>
                                                    <div class="col-md-3">
                                                        <input type="text" class="form-control" name="tension_arterial" onchange="setConsulta(this)" value="<?php echo $_smarty_tpl->tpl_vars['consulta']->value['tension_arterial'];?>
">
                                                     </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label" ></label>
                                                    <label class="col-md-1 control-label" >FR:</label>
                                                    <div class="col-md-2">
                                                        <input type="text" class="form-control" name="frecuencia_respiratoria" onchange="setConsulta(this)" value="<?php echo $_smarty_tpl->tpl_vars['consulta']->value['frecuencia_respiratoria'];?>
">
                                                    </div>
                                                    <label class="col-md-1 control-label" >T:</label>
                                                    <div class="col-md-2">
                                                        <input type="text" class="form-control" name="tanner_genital" onchange="setConsulta(this)" value="<?php echo $_smarty_tpl->tpl_vars['consulta']->value['tanner_genital'];?>
">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label" ></label>
                                                     
                                                    <label class="col-md-1" >Peso(Kg):</label>
                                                    <div class="col-md-2">
                                                        <input type="text" class="form-control" id="peso" name="peso" onchange="setConsulta(this)" value="<?php echo $_smarty_tpl->tpl_vars['consulta']->value['peso'];?>
">
                                                    </div>

                                                    <label class="col-md-2 control-label" >Talla (Cm):</label>
                                                    <div class="col-md-2">
                                                        <input type="text" class="form-control" id="talla" name="talla" onchange="setConsulta(this)" value="<?php echo $_smarty_tpl->tpl_vars['consulta']->value['talla'];?>
">
                                                     </div>

                                                    <label class="col-md-1 control-label" >IMC:</label>
                                                    <div class="col-md-2">
                                                        <input type="text" class="form-control" id="imc" name="imc" onchange="setConsulta(this)" readonly value="<?php echo $_smarty_tpl->tpl_vars['consulta']->value['imc'];?>
">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <form class="horizontal-form">
                                        <div class="form-body">
                                            <div class="row">
                                            <?php  $_smarty_tpl->tpl_vars['sg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_partes_cuerpo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sg']->key => $_smarty_tpl->tpl_vars['sg']->value) {
$_smarty_tpl->tpl_vars['sg']->_loop = true;
?>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['sg']->value['descripcion'];?>
</label>
                                                        <input type="text" id="id-pc-<?php echo $_smarty_tpl->tpl_vars['sg']->value['id'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['sg']->value['id'];?>
" class="form-control" onchange="setRevisionFisica(this)" value="<?php echo $_smarty_tpl->tpl_vars['sg']->value['valoracion'];?>
"/>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['user']->value['especialidad']==1) {?>
                                <div id="tab_4-2" class="tab-pane">
                                    <div class="row">
                                        <div class="form-group">
                                            <h3 class="form-section">Examen Ginecológico</h3>
                                            <textarea name="examen_ginecologico" class="form-control" rows="6" onchange="setConsultaExamen(this)"><?php if (!empty($_smarty_tpl->tpl_vars['consulta_examen']->value)) {?><?php echo $_smarty_tpl->tpl_vars['consulta_examen']->value['examen_ginecologico'];?>
<?php }?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <?php }?>
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
                                                            <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_procedimiento']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                                                                 <tr>
                                                                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value['codigo'];?>
</td>
                                                                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value['cups_descripcion'];?>
</td>
                                                                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value['cp_observacion'];?>
</td>
                                                                    <td>
                                                                         <a href="#" id="del<?php echo $_smarty_tpl->tpl_vars['i']->value['procedimiento_id'];?>
" >
                                                                              <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/img/icons/delete_page.png" title="Eliminar"
                                                                                   onclick="if(confirm('¿Realmente desea eliminar el procedimiento?')){ eliminarProcedimiento(<?php echo $_smarty_tpl->tpl_vars['i']->value['consulta_id'];?>
, <?php echo $_smarty_tpl->tpl_vars['i']->value['procedimiento_id'];?>
); } "/>
                                                                         </a>
                                                                    </td>
                                                                 </tr>
                                                             <?php } ?>
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
                                                        <?php  $_smarty_tpl->tpl_vars['ce'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ce']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_especialidades']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ce']->key => $_smarty_tpl->tpl_vars['ce']->value) {
$_smarty_tpl->tpl_vars['ce']->_loop = true;
?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['ce']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ce']->value['descripcion'];?>
</option>
                                                        <?php } ?>
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
                                                            <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_interconsultas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                                                                 <tr>
                                                                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value['esp_descripcion'];?>
</td>
                                                                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value['ci_descripcion'];?>
</td>
                                                                    <td>
                                                                         <a href="#" id="imp<?php echo $_smarty_tpl->tpl_vars['i']->value['especialidad_id'];?>
" >
                                                                              <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/img/icons/printer.png" title="Imprimir"
                                                                                   onclick="imprimirInterconsulta(<?php echo $_smarty_tpl->tpl_vars['i']->value['consulta_id'];?>
, <?php echo $_smarty_tpl->tpl_vars['i']->value['especialidad_id'];?>
); "/>
                                                                         </a>
                                                                    </td>
                                                                    <td>
                                                                         <a href="#" id="del<?php echo $_smarty_tpl->tpl_vars['i']->value['especialidad_id'];?>
" >
                                                                              <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/img/icons/delete_page.png" title="Eliminar"
                                                                                   onclick="if(confirm('¿Realmente desea eliminar la interconsulta?')){ eliminarInterconsulta(<?php echo $_smarty_tpl->tpl_vars['i']->value['consulta_id'];?>
, <?php echo $_smarty_tpl->tpl_vars['i']->value['especialidad_id'];?>
); } "/>
                                                                         </a>
                                                                    </td>
                                                                 </tr>
                                                             <?php } ?>
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
                                            <?php  $_smarty_tpl->tpl_vars['ce'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ce']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_tipo_diagnostico']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ce']->key => $_smarty_tpl->tpl_vars['ce']->value) {
$_smarty_tpl->tpl_vars['ce']->_loop = true;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['ce']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ce']->value['descripcion'];?>
</option>
                                            <?php } ?>
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
                                        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_diagnostico']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                                             <tr>
                                                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['codigo'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['cie_descripcion'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['cd_descripcion'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['tipo_descripcion'];?>
</td>
                                                <td>
                                                     <a href="#" id="del<?php echo $_smarty_tpl->tpl_vars['i']->value['diagnostico_id'];?>
" >
                                                          <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/img/icons/delete_page.png" title="Eliminar"
                                                               onclick="if(confirm('¿Realmente desea eliminar el diagnóstico?')){ eliminarDiagnostico(<?php echo $_smarty_tpl->tpl_vars['i']->value['consulta_id'];?>
, <?php echo $_smarty_tpl->tpl_vars['i']->value['diagnostico_id'];?>
); } "/>
                                                     </a>
                                                </td>
                                             </tr>
                                         <?php } ?>
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
                                                        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_medicamentos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                                                             <tr>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['medicamento'];?>
</td>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['presentacion'];?>
</td>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['cantidad'];?>
</td>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['posologia'];?>
</td>
                                                                <td>
                                                                     <a href="#" id="del<?php echo $_smarty_tpl->tpl_vars['i']->value['medicamento_id'];?>
" >
                                                                          <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/img/icons/delete_page.png" title="Eliminar"
                                                                               onclick="if(confirm('¿Realmente desea eliminar el medicamento?')){ eliminarMedicamento(<?php echo $_smarty_tpl->tpl_vars['i']->value['medicamento_id'];?>
); } "/>
                                                                     </a>
                                                                </td>
                                                             </tr>
                                                         <?php } ?>
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
                                            <textarea name="tratamiento" class="form-control" rows="6" onchange="setConsulta(this)"><?php echo $_smarty_tpl->tpl_vars['consulta']->value['tratamiento'];?>
</textarea>
                                        </div>
                                        <div class="form-actions right">                           
                                            <button type="button" class="btn green" onclick="imprimirTratamiento();">Imprimir</button>
                                        </div>
                                        <h3 class="form-section">Recomendaciones</h3>
                                        <div class="form-group">
                                            <textarea name="recomendaciones" class="form-control" rows="6" onchange="setConsulta(this)"><?php echo $_smarty_tpl->tpl_vars['consulta']->value['recomendaciones'];?>
</textarea>
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
   
   
    <!-- MODAL -->
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
    <script src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/scripts/new-window-post.js"></script>     
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/jquery.ui.autocomplete.html.js"></script>
    
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
                                    url: "<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/getDiagnostico",
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
                                    url: "<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/getProcedimiento",
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

                    $.post('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/setInterconsulta', postData, function(data){
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

                    $.post('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/setProcedimiento', postData, function(data){
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

                    $.post('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/setDiagnostico', postData, function(data){
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

                    $.post('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/setMedicacion', postData, function(data){
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
            <?php if (($_smarty_tpl->tpl_vars['consulta_activa']->value==0)) {?>
                    $("#dv-tabConsulta *").attr("disabled", "disabled").off('click');
            <?php }?>
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
        
            open('POST', '<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
reportes/interconsulta', postData, '_blank');
        }
         
        function imprimirTratamiento(){
            var paciente_id = $('#paciente_id').attr('value');
            var consulta_id = $('#consulta_id').attr('value');
            
            var postData = {
                            'consulta_id': consulta_id, 
                            'paciente_id' : paciente_id
                         };    
        
            open('POST', '<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
reportes/tratamiento', postData, '_blank');
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
        
            open('POST', '<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
reportes/formula', postData, '_blank');
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
        
            open('POST', '<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
reportes/procedimientos', postData, '_blank');
        }
        
        function eliminarInterconsulta(consulta_id, especialidad_id){
            var postData = {
                            'consulta_id': consulta_id, 
                            'especialidad_id' : especialidad_id
                         };

            $.post('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/delInterconsulta', postData, function(data){
                    $('#dv-interconsultas').empty();
                    $('#dv-interconsultas').html(data);
            });
        }
        
        function eliminarDiagnostico(consulta_id, diagnostico_id){
            var postData = {
                            'consulta_id': consulta_id, 
                            'diagnostico_id' : diagnostico_id
                         };

            $.post('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/delDiagnostico', postData, function(data){
                    $('#dv-diagnosticos').empty();
                    $('#dv-diagnosticos').html(data);
            });
        }
        
        function eliminarProcedimiento(consulta_id, procedimiento_id){
            var postData = {
                            'consulta_id': consulta_id, 
                            'procedimiento_id' : procedimiento_id
                         };

            $.post('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/delProcedimiento', postData, function(data){
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

            $.post('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/delMedicacion', postData, function(data){
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
            $.post('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/setConsulta', postData, function(data){
            });
        }
        
        function setInterconsulta(campo){
            postData = getData(campo);
            $.post('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/setInterconsulta', postData, function(data){});
        }
        
        function setCerrarConsulta(campo){
             postData = getData(campo);
            $.post('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/cerrarConsulta', postData, function(data){
                window.location.href = '<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/index';
            });
        }
        
        function imprimirHistoria(campo){
            postData = getData(campo);
            open('POST', '<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
reportes/historia', postData, '_blank');
        }
        
        function setAFamiliares(campo){
            postData = getData(campo);
            $.post('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/setAFamiliares', postData, function(data){
            });
        }
        function setAGinecologicos(campo){
            postData = getData(campo);
            $.post('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/setAGinecologicos', postData, function(data){});
        }
        function setAObstetricos(campo){
            postData = getData(campo);
            $.post('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/setAObstetricos', postData, function(data){});
        }
        function setAPareja(campo){
            postData = getData(campo);
            $.post('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/setAPareja', postData, function(data){});
        }
        function setAPersonales(campo){
            postData = getData(campo);
            $.post('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/setAPersonales', postData, function(data){});
        }
        function setConsultaExamen(campo){
            postData = getData(campo);
            $.post('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/setConsultaExamen', postData, function(data){});
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
                         
            $.post('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/setRevisionSistema', postData, function(data){});
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
                         
            $.post('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/setRevisionFisica', postData, function(data){});
        }
        
        function setIMC(){
            var consulta_id = $('#consulta_id').attr('value');
            
            var postData = {
                            'consulta_id': consulta_id, 
                            'campo' : 'imc',
                            'valor' : $('#imc').attr('value')
                         };
                         
            $.post('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/setConsulta', postData, function(data){ });
        }
        
        function setNormal(){
            <?php  $_smarty_tpl->tpl_vars['sg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_sistema']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sg']->key => $_smarty_tpl->tpl_vars['sg']->value) {
$_smarty_tpl->tpl_vars['sg']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['sg']->value['valoracion']==null) {?>
                    $('#id-<?php echo $_smarty_tpl->tpl_vars['sg']->value['id'];?>
').attr('value', 'Normal');
                    var x=document.getElementById("id-<?php echo $_smarty_tpl->tpl_vars['sg']->value['id'];?>
");
                    setRevisionSistema(x);
                <?php }?>
            <?php } ?>
                
            <?php  $_smarty_tpl->tpl_vars['pc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_partes_cuerpo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pc']->key => $_smarty_tpl->tpl_vars['pc']->value) {
$_smarty_tpl->tpl_vars['pc']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['pc']->value['valoracion']==null) {?>
                    $('#id-pc-<?php echo $_smarty_tpl->tpl_vars['pc']->value['id'];?>
').attr('value', 'Normal');
                    var x=document.getElementById("id-pc-<?php echo $_smarty_tpl->tpl_vars['pc']->value['id'];?>
");
                    setRevisionFisica(x);
                <?php }?>
            <?php } ?>
        }
    </script>



   <!-- END PAGE LEVEL SCRIPTS -->  
   <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html><?php }} ?>
