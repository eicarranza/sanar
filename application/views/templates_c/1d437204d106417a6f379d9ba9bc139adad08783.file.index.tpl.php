<?php /* Smarty version Smarty-3.1.15, created on 2014-09-29 22:58:31
         compiled from "application\views\templates\especialista\anestesia\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1091538a9fe0d988b2-37528957%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d437204d106417a6f379d9ba9bc139adad08783' => 
    array (
      0 => 'application\\views\\templates\\especialista\\anestesia\\index.tpl',
      1 => 1402896781,
      2 => 'file',
    ),
    '69edd536ad22a96e4e860274a997e06eee10299c' => 
    array (
      0 => 'application\\views\\templates\\layout.tpl',
      1 => 1401593640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1091538a9fe0d988b2-37528957',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_538a9fe17a4c28_75092841',
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
<?php if ($_valid && !is_callable('content_538a9fe17a4c28_75092841')) {function content_538a9fe17a4c28_75092841($_smarty_tpl) {?><!DOCTYPE html>
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

                <input type="hidden" id="consulta_id" name="consulta_id" value="<?php echo $_smarty_tpl->tpl_vars['consulta']->value['id'];?>
">
                <input type="hidden" id="paciente_id" name="paciente_id" value="<?php echo $_smarty_tpl->tpl_vars['paciente']->value['paciente_id'];?>
">
                <input type="hidden" id="especialista_id" name="especialista_id" value="<?php echo $_smarty_tpl->tpl_vars['especialista']->value;?>
">
                <input type="hidden" id="fecha" name="fecha" value="<?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>
">
           </h3>
           
           <ul class="page-breadcrumb breadcrumb">
                <li class="btn-group">
                    <button type="button" class="btn blue dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
                    <span>Acciones</span> <i class="icon-angle-down"></i>
                    </button>
                    <ul class="dropdown-menu pull-right" role="menu">
                        <li><a href="#" id="btn-imprimir-historia" name="consulta_activa">Imprimir valoración</a></li>
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
                     <li class="active"><a href="#tab_1_1" data-toggle="tab">Antecedentes</a></li>
                     <li><a href="#tab_1_2" data-toggle="tab">Exámenes</a></li>
                     <li><a href="#tab_1_3" data-toggle="tab">Laboratorios</a></li>
                     <li><a href="#tab_1_4" data-toggle="tab">Plan</a></li>
                  </ul>
                   <div class="tab-content" id="dv-tabConsulta">
                        <div class="tab-pane active" id="tab_1_1">
                        
                        </div>
                     <!--tab_1_2-->
                     <div class="tab-pane" id="tab_1_2">
                        
                     </div>
                     <!--end tab-pane-->
                     <div class="tab-pane" id="tab_1_3">
                        
                     </div>
                     <!--end tab-pane-->
                    <div class="tab-pane" id="tab_1_4">
                        
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
            getAnestesia();
            
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
            
            $('#btn-cerrar-consulta').click(function () {
                setCerrarConsulta(this);
            });
            
            $('#btn-imprimir-historia').click(function () {
                imprimirHistoria(this);
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
             
            $.post('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/getAnestesiaAntecedentes', postData, function(data){
                     $('#tab_1_1').empty();
                     $('#tab_1_1').html(data);
             });
             
             $.post('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/getAnestesiaExamen', postData, function(data){
                     $('#tab_1_2').empty();
                     $('#tab_1_2').html(data);
             });
             
             $.post('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/getAnestesiaLaboratorios', postData, function(data){
                     $('#tab_1_3').empty();
                     $('#tab_1_3').html(data);
             });
             
             $.post('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/getAnestesiaPlan', postData, function(data){
                     $('#tab_1_4').empty();
                     $('#tab_1_4').html(data);
             });
         }
         
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
        
        function setAPersonales(campo){
            postData = getData(campo);
            $.post('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/setAPersonales', postData, function(data){});
        }
        
        function setConsultaExamen(campo){
            postData = getData(campo);
            $.post('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/setConsultaAnestesiaExamen', postData, function(data){});
        }
        
        function setConsultaLaboratorios(campo){
            postData = getData(campo);
            $.post('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/setConsultaLaboratorios', postData, function(data){});
        }
        
        function setAnestesiaPlan(campo){
            postData = getData(campo);
            $.post('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/setAnestesiaPlan', postData, function(data){});
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
        
    </script>



   <!-- END PAGE LEVEL SCRIPTS -->  
   <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html><?php }} ?>
