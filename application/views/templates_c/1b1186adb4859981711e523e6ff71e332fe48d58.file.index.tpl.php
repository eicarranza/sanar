<?php /* Smarty version Smarty-3.1.15, created on 2014-06-16 01:42:15
         compiled from "application\views\templates\especialista\quirurgico\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4516536d483be3ca60-60315759%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b1186adb4859981711e523e6ff71e332fe48d58' => 
    array (
      0 => 'application\\views\\templates\\especialista\\quirurgico\\index.tpl',
      1 => 1402897332,
      2 => 'file',
    ),
    '69edd536ad22a96e4e860274a997e06eee10299c' => 
    array (
      0 => 'application\\views\\templates\\layout.tpl',
      1 => 1401593640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4516536d483be3ca60-60315759',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_536d483c922bc4_45114572',
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
<?php if ($_valid && !is_callable('content_536d483c922bc4_45114572')) {function content_536d483c922bc4_45114572($_smarty_tpl) {?><!DOCTYPE html>
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
              Procedimiento Quirúrgico: <?php echo $_smarty_tpl->tpl_vars['consulta']->value['nombre1'];?>
 <?php echo $_smarty_tpl->tpl_vars['consulta']->value['apellido1'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['especialidad'];?>

           </h3>
           
           <ul class="page-breadcrumb breadcrumb">
                <li class="btn-group">
                    <button type="button" class="btn blue dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
                    <span>Acciones</span> <i class="icon-angle-down"></i>
                    </button>
                    <ul class="dropdown-menu pull-right" role="menu">
                        <li><a href="#" id="btn-imprimir-historia" name="consulta_activa">Imprimir informe</a></li>
                        <li><a href="#" id="btn-cerrar-consulta" name="consulta_activa">Cerrar informe</a></li>
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
                                                             <input type="text" name="inicio_procedimiento" id="inicio_procedimiento" value="<?php if (!empty($_smarty_tpl->tpl_vars['cirugia']->value)) {?><?php echo $_smarty_tpl->tpl_vars['cirugia']->value['inicio'];?>
<?php } else { ?>08:00<?php }?>" readonly class="form-control clockface_1" onchange="setCirugiaTime(this)" />
                                                             <span class="input-group-addon">Hora final: </span>
                                                             <input type="text" name="fin_procedimiento" id="fin_procedimiento" value="<?php if (!empty($_smarty_tpl->tpl_vars['cirugia']->value)) {?><?php echo $_smarty_tpl->tpl_vars['cirugia']->value['fin'];?>
<?php } else { ?>10:00<?php }?>" readonly class="form-control clockface_1" onchange="setCirugiaTime(this)" />
                                                             <span class="input-group-btn">
                                                                <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/img/icons/save.png" title="Guardar" onclick="setCirugiaTime()"/>
                                                             </span>
                                                         </div>
                                                       <!-- /input-group -->
                                                       <span class="help-block">Seleccione el horario de procedimiento.</span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" >Tiempo operatorio:</label>
                                                    <div class="col-md-2">
                                                        <input type="number" class="form-control" name="tiempo_operatorio" min="1" onchange="setCirugia(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['cirugia']->value)) {?><?php echo $_smarty_tpl->tpl_vars['cirugia']->value['tiempo_operatorio'];?>
<?php }?>">
                                                    </div>
                                                    <label class="col-md-1 control-label" >Min.</label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" >Sangrado:</label>
                                                    <div class="col-md-2">
                                                        <input type="text" class="form-control" name="sangrado" onchange="setCirugia(this)" value="<?php if (!empty($_smarty_tpl->tpl_vars['cirugia']->value)) {?><?php echo $_smarty_tpl->tpl_vars['cirugia']->value['sangrado'];?>
<?php }?>">
                                                    </div>
                                                    <label class="col-md-1 control-label" >cc</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-3">
                                                    <label class="control-label" >Complicaciones:</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <textarea class="form-control" name="complicaciones" onchange="setCirugia(this)"><?php if (!empty($_smarty_tpl->tpl_vars['cirugia']->value)) {?><?php echo $_smarty_tpl->tpl_vars['cirugia']->value['complicaciones'];?>
<?php }?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-3">
                                                <label class="control-label" >Tejidos enviados a patología:</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <textarea class="form-control" name="tejidos_patologia" onchange="setCirugia(this)"><?php if (!empty($_smarty_tpl->tpl_vars['cirugia']->value)) {?><?php echo $_smarty_tpl->tpl_vars['cirugia']->value['tejidos_patologia'];?>
<?php }?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-3">
                                                    <label class="control-label">Prótesis o Bioimplantes:</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <textarea class="form-control" name="protesis" onchange="setCirugia(this)"><?php if (!empty($_smarty_tpl->tpl_vars['cirugia']->value)) {?><?php echo $_smarty_tpl->tpl_vars['cirugia']->value['protesis'];?>
<?php }?></textarea>
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
                                                    <textarea id="motivo" name="intervencion" class="form-control" rows="6" onchange="setCirugia(this)"><?php if (!empty($_smarty_tpl->tpl_vars['cirugia']->value)) {?><?php echo $_smarty_tpl->tpl_vars['cirugia']->value['intervencion'];?>
<?php }?></textarea>
                                                    <input type="hidden" id="consulta_id" name="consulta_id" value="<?php echo $_smarty_tpl->tpl_vars['consulta']->value['id'];?>
">
                                                    <input type="hidden" id="paciente_id" name="paciente_id" value="<?php echo $_smarty_tpl->tpl_vars['paciente']->value['paciente_id'];?>
">
                                                    <input type="hidden" id="especialista_id" name="especialista_id" value="<?php echo $_smarty_tpl->tpl_vars['especialista']->value;?>
">
                                                    <input type="hidden" id="fecha" name="fecha" value="<?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>
">
                                                    <input type="hidden" id="_fecha" name="_fecha" value="<?php echo $_smarty_tpl->tpl_vars['consulta']->value['fecha'];?>
">
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
                                                        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_diagnostico_pre']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
, <?php echo $_smarty_tpl->tpl_vars['i']->value['diagnostico_tipo_id'];?>
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
                                                        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_diagnostico_pos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
, <?php echo $_smarty_tpl->tpl_vars['i']->value['diagnostico_tipo_id'];?>
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
                                <div id="tab_2-4" class="tab-pane">
                                    <h3 class="form-section">Descripción del Procedimiento</h3>
                                    
                                    <div class="form-group">
                                        <textarea id="procedimiento_descripcion" name="procedimiento_descripcion" class="form-control" rows="3" onchange="setCirugia(this)"><?php if (!empty($_smarty_tpl->tpl_vars['cirugia']->value)) {?><?php echo $_smarty_tpl->tpl_vars['cirugia']->value['procedimiento_descripcion'];?>
<?php }?></textarea>
                                    </div>
                                    
                                    <h3 class="form-section">Hallazgos</h3>
                                    <div class="form-group">
                                        <textarea id="hallazgos" name="hallazgos" class="form-control" rows="3" onchange="setCirugia(this)"><?php if (!empty($_smarty_tpl->tpl_vars['cirugia']->value)) {?><?php echo $_smarty_tpl->tpl_vars['cirugia']->value['hallazgos'];?>
<?php }?></textarea>
                                    </div>
                                </div>
                                <div id="tab_2-5" class="tab-pane">
                                        <h3 class="form-section">Documentos</h3>
                                            <form class="form-horizontal" 
                                                  action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/setDocumentacion/<?php echo $_smarty_tpl->tpl_vars['consulta']->value['id'];?>
" 
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
                                                                   <?php  $_smarty_tpl->tpl_vars['gs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['documentos_cirujano']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gs']->key => $_smarty_tpl->tpl_vars['gs']->value) {
$_smarty_tpl->tpl_vars['gs']->_loop = true;
?>
                                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['gs']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['gs']->value['descripcion'];?>
</option>
                                                                   <?php } ?>
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
                                                          <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['archivos_cirugia']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                                                               <tr>
                                                                  <td><?php echo $_smarty_tpl->tpl_vars['i']->value['documento_url'];?>
</td>
                                                                  <td><?php echo $_smarty_tpl->tpl_vars['i']->value['descripcion'];?>
</td>
                                                                  <td>
                                                                       <a href="#" id="del<?php echo $_smarty_tpl->tpl_vars['i']->value['tipo_id'];?>
" >
                                                                            <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/img/icons/delete_page.png" title="Eliminar"
                                                                                 onclick="if(confirm('¿Realmente desea eliminar el archivo?')){ eliminar(<?php echo $_smarty_tpl->tpl_vars['i']->value['consulta_id'];?>
, <?php echo $_smarty_tpl->tpl_vars['i']->value['tipo_id'];?>
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
                                        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_evolucion']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                                             <tr>
                                                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['fecha'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['especialista'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['detalle'];?>
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
                                                action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/setDocumentacion/<?php echo $_smarty_tpl->tpl_vars['consulta']->value['id'];?>
" 
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
                                                                 <?php  $_smarty_tpl->tpl_vars['gs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['documentos_anestesia']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gs']->key => $_smarty_tpl->tpl_vars['gs']->value) {
$_smarty_tpl->tpl_vars['gs']->_loop = true;
?>
                                                                      <option value="<?php echo $_smarty_tpl->tpl_vars['gs']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['gs']->value['descripcion'];?>
</option>
                                                                 <?php } ?>
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
                                                        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['archivos_anestesia']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                                                             <tr>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['documento_url'];?>
</td>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['descripcion'];?>
</td>
                                                                <td>
                                                                     <a href="#" id="del<?php echo $_smarty_tpl->tpl_vars['i']->value['tipo_id'];?>
" >
                                                                          <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/img/icons/delete_page.png" title="Eliminar"
                                                                               onclick="if(confirm('¿Realmente desea eliminar el archivo?')){ eliminar(<?php echo $_smarty_tpl->tpl_vars['i']->value['consulta_id'];?>
, <?php echo $_smarty_tpl->tpl_vars['i']->value['tipo_id'];?>
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
                                                           <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_notas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                                                                <tr>
                                                                   <td><?php echo $_smarty_tpl->tpl_vars['i']->value['fecha'];?>
</td>
                                                                   <td><?php echo $_smarty_tpl->tpl_vars['i']->value['enfermera'];?>
</td>
                                                                   <td><?php echo $_smarty_tpl->tpl_vars['i']->value['notas'];?>
</td>
                                                                </tr>
                                                            <?php } ?>
                                                       </tbody>
                                                     </table>
                                                  </div>
                                               </div>
                                           </div>
                                    </div>
                                    <div id="tab_4-2" class="tab-pane">
                                        <h3 class="form-section">Documentos</h3>
                                            <form class="form-horizontal" 
                                                  action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/setDocumentacion/<?php echo $_smarty_tpl->tpl_vars['consulta']->value['id'];?>
" 
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
                                                                   <?php  $_smarty_tpl->tpl_vars['gs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['documentos_enfermeria']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gs']->key => $_smarty_tpl->tpl_vars['gs']->value) {
$_smarty_tpl->tpl_vars['gs']->_loop = true;
?>
                                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['gs']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['gs']->value['descripcion'];?>
</option>
                                                                   <?php } ?>
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
                                                          <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['archivos_enfermeria']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                                                               <tr>
                                                                  <td><?php echo $_smarty_tpl->tpl_vars['i']->value['documento_url'];?>
</td>
                                                                  <td><?php echo $_smarty_tpl->tpl_vars['i']->value['descripcion'];?>
</td>
                                                                  <td>
                                                                       <a href="#" id="del<?php echo $_smarty_tpl->tpl_vars['i']->value['tipo_id'];?>
" >
                                                                            <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/img/icons/delete_page.png" title="Eliminar"
                                                                                 onclick="if(confirm('¿Realmente desea eliminar el archivo?')){ eliminar(<?php echo $_smarty_tpl->tpl_vars['i']->value['consulta_id'];?>
, <?php echo $_smarty_tpl->tpl_vars['i']->value['tipo_id'];?>
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
            getAnestesia();
            verificarEdicion();
            
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
especialista/cirugia/setProcedimiento', postData, function(data){
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
                                    url: "<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/getDiagnostico",
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

                    $.post('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/setDiagnosticoPre', postData, function(data){
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
                                    url: "<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/getDiagnostico",
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

                    $.post('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/setDiagnosticoPos', postData, function(data){
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

                    $.post('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/setEvolucion', postData, function(data){
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

                    $.post('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/setNotasEnfermeria', postData, function(data){
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
             
            $.post('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/getAnestesiaAntecedentes', postData, function(data){
                     $('#tab_3-2').empty();
                     $('#tab_3-2').html(data);
                     $("#tab_3_2 *").attr("disabled", "disabled").off('click');
             });
             
             $.post('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/getAnestesiaExamen', postData, function(data){
                     $('#tab_3-3').empty();
                     $('#tab_3-3').html(data);
                     $("#tab_3_3 *").attr("disabled", "disabled").off('click');
             });
             
             $.post('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/getAnestesiaLaboratorios', postData, function(data){
                     $('#tab_3-4').empty();
                     $('#tab_3-4').html(data);
                     $("#tab_3_4 *").attr("disabled", "disabled").off('click');
             });
             
             $.post('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/getAnestesiaPlan', postData, function(data){
                     $('#tab_3-5').empty();
                     $('#tab_3-5').html(data);
                     $("#tab_3_5 *").attr("disabled", "disabled").off('click');
             });
         }
         
        function verificarEdicion(){
            <?php if (($_smarty_tpl->tpl_vars['consulta_activa']->value==0)) {?>
                    $("#dv-tabConsulta *").attr("disabled", "disabled").off('click');
            <?php }?>
                
            <?php if ($_smarty_tpl->tpl_vars['user']->value['especialidad']==21) {?>
                $("#tab_1_1 *").attr("disabled", "disabled").off('click');
                $("#tab_1_2 *").attr("disabled", "disabled").off('click');
                $("#tab_1_4 *").attr("disabled", "disabled").off('click');
            <?php }?>
                
            <?php if ($_smarty_tpl->tpl_vars['user']->value['especialidad']==23) {?>
                $("#tab_1_1 *").attr("disabled", "disabled").off('click');
                $("#tab_1_2 *").attr("disabled", "disabled").off('click');
                $("#tab_1_3 *").attr("disabled", "disabled").off('click');
            <?php } elseif ($_smarty_tpl->tpl_vars['user']->value['especialidad']!=21) {?>
                $("#tab_1_3 *").attr("disabled", "disabled").off('click');
                $("#tab_1_4 *").attr("disabled", "disabled").off('click');
            <?php }?>
        }
        
        function eliminarDiagnostico(consulta_id, diagnostico_id, diagnostico_tipo_id){
            var postData = {
                            'consulta_id': consulta_id, 
                            'diagnostico_id' : diagnostico_id, 
                            'diagnostico_tipo_id' : diagnostico_tipo_id
                         };
            
            if(diagnostico_tipo_id == 2){
                $.post('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/delDiagnosticoPos', postData, function(data){
                        $('#dv-PosDiagnosticos').empty();
                        $('#dv-PosDiagnosticos').html(data);
                });
            }
            else{
                $.post('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/delDiagnosticoPre', postData, function(data){
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

            $.post('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/cirugia/delProcedimiento', postData, function(data){
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
            $.post('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/setCirugia', postData, function(data){
            });
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
            
            
            $.post('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/setCirugiaTime', postData, function(data){
                
            });
        }
        
        function setCerrarCirugia(campo){
             postData = getData(campo);
            $.post('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/cerrarConsulta', postData, function(data){
                window.location.href = '<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
especialista/index';
            });
        }
        
    </script>



   <!-- END PAGE LEVEL SCRIPTS -->  
   <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html><?php }} ?>
