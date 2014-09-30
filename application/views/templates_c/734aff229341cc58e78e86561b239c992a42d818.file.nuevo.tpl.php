<?php /* Smarty version Smarty-3.1.15, created on 2014-07-14 00:00:04
         compiled from "application\views\templates\administrador\nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2331052bd05537a85b7-44779982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '734aff229341cc58e78e86561b239c992a42d818' => 
    array (
      0 => 'application\\views\\templates\\administrador\\nuevo.tpl',
      1 => 1390251570,
      2 => 'file',
    ),
    '69edd536ad22a96e4e860274a997e06eee10299c' => 
    array (
      0 => 'application\\views\\templates\\layout.tpl',
      1 => 1401593640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2331052bd05537a85b7-44779982',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52bd0553c3edf0_13467114',
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
<?php if ($_valid && !is_callable('content_52bd0553c3edf0_13467114')) {function content_52bd0553c3edf0_13467114($_smarty_tpl) {?><!DOCTYPE html>
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
              Administrar usuario
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
administrador/index">Usuarios</a>
                 <i class="icon-angle-right"></i>
              </li>
              <li><a href="#">Nuevo</a></li>
           </ul>
           <!-- END PAGE TITLE & BREADCRUMB-->
        </div>
     </div>
     <!-- END PAGE HEADER-->
     <!-- BEGIN PAGE CONTENT-->
     <div class="row profile">
        <div class="col-md-12">
           <!--BEGIN TABS-->
            <!--tab_1_2-->
            <div class="tab-pane" id="tab_1_3">
               <div class="row profile-account">
                  <div class="col-md-3">
                     <ul class="ver-inline-menu tabbable margin-bottom-10">
                        <li class="active">
                           <a data-toggle="tab" href="#tab_1-1"><i class="icon-cog"></i> Información personal</a> 
                           <span class="after"></span>                                    
                        </li>
                        <li ><a data-toggle="tab" href="#tab_3-3"><i class="icon-lock"></i> Perfiles de usuario</a></li>
                     </ul>
                  </div>
                   
                  <div class="col-md-9">
                     <div class="tab-content">
                        <div id="tab_1-1" class="tab-pane active">
                           <!-- BEGIN PERSONAL FORM -->   
                           <div class="portlet box blue ">
                             <div class="portlet-title">
                                <div class="caption">
                                   <i class="icon-reorder"></i> Información Personal
                                </div>
                                <div class="tools">
                                   <a href="" class="reload"></a>
                                </div>
                             </div>
                             <div class="portlet-body form">
                                <?php echo $_smarty_tpl->tpl_vars['errors']->value;?>

                                <form id="form-user" class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
administrador/nuevo" method="post" accept-charset="utf-8">

                               <div class="form-body">
                                   <div class="form-group">
                                       <label  class="col-md-3 control-label">Tipo identificación</label>
                                       <div class="col-md-9">
                                           <select  class="form-control" name="tipo_documento" >
                                               <option value="00">- SELECCIONE -</option>
                                               <?php  $_smarty_tpl->tpl_vars['gs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tipo_documento']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gs']->key => $_smarty_tpl->tpl_vars['gs']->value) {
$_smarty_tpl->tpl_vars['gs']->_loop = true;
?>
                                                       <option value="<?php echo $_smarty_tpl->tpl_vars['gs']->value['id'];?>
" <?php if (($_smarty_tpl->tpl_vars['id']->value>0)) {?><?php if (($_smarty_tpl->tpl_vars['usuario']->value['tipo_documento']==$_smarty_tpl->tpl_vars['gs']->value['id'])) {?>selected<?php }?><?php }?>><?php echo $_smarty_tpl->tpl_vars['gs']->value['descripcion'];?>
</option>
                                               <?php } ?>
                                           </select>
                                     </div>
                                   </div>
                                    <div class="form-group">
                                       <label class="col-md-3 control-label">Identificación</label>
                                       <div class="col-md-9">
                                          <input type="text" class="form-control" name="identificacion" maxlength="20" value="<?php if (($_smarty_tpl->tpl_vars['id']->value>0)) {?><?php echo $_smarty_tpl->tpl_vars['usuario']->value['identificacion'];?>
<?php }?>" required>
                                          <input type="hidden" id="usuario_id" name="usuario_id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Tarjeta profesional</label>
                                        <div class="col-md-9">
                                           <input type="text" class="form-control" name="tarjeta_profesional" maxlength="20" value="<?php if (($_smarty_tpl->tpl_vars['id']->value>0)) {?><?php echo $_smarty_tpl->tpl_vars['usuario']->value['tarjeta_profesional'];?>
<?php }?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       <label  class="col-md-3 control-label">Nombres</label>
                                       <div class="col-md-9">
                                          <input type="text" class="form-control" name="nombres" maxlength="45" value="<?php if (($_smarty_tpl->tpl_vars['id']->value>0)) {?><?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombres'];?>
<?php }?>" required>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label  class="col-md-3 control-label">Apellidos</label>
                                       <div class="col-md-9">
                                          <input type="text" class="form-control" name="apellidos" maxlength="45" value="<?php if (($_smarty_tpl->tpl_vars['id']->value>0)) {?><?php echo $_smarty_tpl->tpl_vars['usuario']->value['apellidos'];?>
<?php }?>" required>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label  class="col-md-3 control-label">Especialidad</label>
                                       <div class="col-md-9">
                                           <select  class="form-control" name="especialidad" >
                                               <option value="00">- SELECCIONE -</option>
                                               <?php  $_smarty_tpl->tpl_vars['gs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['especialidades']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gs']->key => $_smarty_tpl->tpl_vars['gs']->value) {
$_smarty_tpl->tpl_vars['gs']->_loop = true;
?>
                                                       <option value="<?php echo $_smarty_tpl->tpl_vars['gs']->value['id'];?>
" <?php if (($_smarty_tpl->tpl_vars['id']->value>0)) {?><?php if (($_smarty_tpl->tpl_vars['usuario']->value['especialidad']==$_smarty_tpl->tpl_vars['gs']->value['id'])) {?>selected<?php }?><?php }?>><?php echo $_smarty_tpl->tpl_vars['gs']->value['descripcion'];?>
</option>
                                               <?php } ?>
                                           </select>
                                     </div>
                                   </div>
                                    <div class="form-group">
                                       <label  class="col-md-3 control-label">Sexo</label>
                                       <div class="col-md-9">
                                          <select  class="form-control"  name="sexo" >
                                             <option value="F" <?php if (($_smarty_tpl->tpl_vars['id']->value>0)) {?><?php if (($_smarty_tpl->tpl_vars['usuario']->value['sexo']=="F")) {?>selected<?php }?><?php }?>>Femenino</option>
                                             <option value="M" <?php if (($_smarty_tpl->tpl_vars['id']->value>0)) {?><?php if (($_smarty_tpl->tpl_vars['usuario']->value['sexo']=="M")) {?>selected<?php }?><?php }?>>Masculino</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label  class="col-md-3 control-label">Dirección</label>
                                       <div class="col-md-9">
                                          <input type="text" class="form-control" maxlength="80"  name="direccion" value="<?php if (($_smarty_tpl->tpl_vars['id']->value>0)) {?><?php echo $_smarty_tpl->tpl_vars['usuario']->value['direccion'];?>
<?php }?>" >
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label  class="col-md-3 control-label" name="telefono" >Teléfono</label>
                                       <div class="col-md-9">
                                          <input type="text" class="form-control" maxlength="15"  name="telefono" value="<?php if (($_smarty_tpl->tpl_vars['id']->value>0)) {?><?php echo $_smarty_tpl->tpl_vars['usuario']->value['telefono'];?>
<?php }?>" >
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label class="col-md-3 control-label">Correo electrónico</label>
                                       <div class="col-md-9">
                                           <div class="input-group">
                                              <span class="input-group-addon"><i class="icon-envelope"></i></span>
                                              <input type="email" class="form-control" placeholder="Correo electrónico" name="email"  maxlength="80" value="<?php if (($_smarty_tpl->tpl_vars['id']->value>0)) {?><?php echo $_smarty_tpl->tpl_vars['usuario']->value['email'];?>
<?php }?>" />
                                           </div>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label  class="col-md-3 control-label">Nombre de usuario</label>
                                       <div class="col-md-9">
                                           <input type="text" class="form-control" maxlength="80"  name="usuario" value="<?php if (($_smarty_tpl->tpl_vars['id']->value>0)) {?><?php echo $_smarty_tpl->tpl_vars['usuario']->value['usuario'];?>
<?php }?>" <?php if (($_smarty_tpl->tpl_vars['id']->value>0)) {?> disabled="true" <?php }?> >
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label  class="col-md-3 control-label">Contraseña</label>
                                       <div class="col-md-9">
                                          <input type="password" class="form-control" maxlength="80"  name="contrasena" value="" >
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label  class="col-md-3 control-label">Confirme Contraseña</label>
                                       <div class="col-md-9">
                                          <input type="password" class="form-control" maxlength="80"  name="re-contrasena" value="" >
                                       </div>
                                    </div>
                                 
                               </div>
                               <div class="form-actions fluid">
                                  <div class="col-md-offset-3 col-md-9">
                                     <button type="submit" class="btn green">Guardar</button>
                                     <button type="button" class="btn default">Cancelar</button>                              
                                  </div>
                               </div>
                            </form>
                           </div>
                           </div>
                           <!-- END PERSONAL FORM -->   
                        </div>
                        

                        <div id="tab_3-3" class="tab-pane">
                        <!-- BEGIN ROLES USUARIO FORM --> 
                        <div class="portlet box blue ">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="icon-reorder"></i> Perfiles de usuario
                                </div>
                                <div class="tools">
                                    <a href="" class="reload"></a>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <?php echo $_smarty_tpl->tpl_vars['errors']->value;?>

                                <form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
administrador/perfilUsuario" method="post" accept-charset="utf-8">
                                    <div class="form-body">
                                        <div class="table-responsive">
                                            <input type="hidden" name="usuario_id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                                           <table class="table table-striped table-bordered table-hover" id="sample_2">
                                                <thead>
                                                   <tr>
                                                      <!--<th style="width1:8px;"><input type="checkbox" class="group-checkable" data-set="#sample_2 .checkboxes" /></th>-->
                                                      <th >Estado</th>
                                                      <th >Perfil</th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_roles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                                                        <tr class="odd gradeX">
                                                            <td><input type="checkbox" class="checkboxes" name="chk_<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" id="chk_<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" 
                                                                <?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuario_roles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['j']->key => $_smarty_tpl->tpl_vars['j']->value) {
$_smarty_tpl->tpl_vars['j']->_loop = true;
?>
                                                                     <?php if ($_smarty_tpl->tpl_vars['i']->value['id']==$_smarty_tpl->tpl_vars['j']->value['rol_id']) {?> checked <?php }?>
                                                                <?php } ?>
                                                                />
                                                            </td>
                                                          <td><?php echo $_smarty_tpl->tpl_vars['i']->value['nombre'];?>
</td>
                                                       </tr>
                                                    <?php } ?>
                                                </tbody>
                                             </table>
                                        </div>
                                    </div>
                                    <div class="form-actions fluid">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" class="btn green">Guardar</button>
                                            <button type="button" class="btn default">Cancelar</button>                              
                                        </div>
                                    </div>
                               </form>
                            </div>
                           <!-- END ROLES USUARIO FORM -->   
                      </div>
                    </div>
                  <!--end col-md-9-->                                   
               </div>
            </div>
                 
        </div>
     </div>
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
   
   
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/bootstrap-fileupload/bootstrap-fileupload.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>  
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js"></script>   
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/data-tables/jquery.dataTables.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/plugins/data-tables/DT_bootstrap.js"></script>
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
assets/scripts/app.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
assets/scripts/form-components.js"></script>     
    <!-- END PAGE LEVEL SCRIPTS -->
    <script>
      jQuery(document).ready(function() {       
         // initiate layout and plugins
         App.init();
         FormComponents.init();
      });
      
      $( '#form-user' ).submit(function() {
            
                if($('#contrasena').value != ""){
                    if($('#contrasena').value != $('#re-contrasena').value){
                        alert("Las contraseñas no coinciden.");
                        return false;
                    }
                }
                else{
                    alert("Digite la contraseña.");
                    return false;
                }
            
        });
    </script>


   <!-- END PAGE LEVEL SCRIPTS -->  
   <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html><?php }} ?>
