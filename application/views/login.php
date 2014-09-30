<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.0
Version: 1.5.2
Author: KeenThemes
Website: http://www.keenthemes.com/
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
-->
<!--[if IE 8]> <html lang="es" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="es" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="es" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title> <?php echo $title; ?> | Inicio de sesión</title>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <meta name="MobileOptimized" content="320">
   <link href="<?php  ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url(); ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
   <!-- END GLOBAL MANDATORY STYLES -->
   <!-- BEGIN PAGE LEVEL STYLES --> 
   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/select2/select2_metro.css" />
   <!-- END PAGE LEVEL SCRIPTS -->
   <!-- BEGIN THEME STYLES --> 
   
   <link href="<?php echo base_url(); ?>assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url(); ?>assets/css/plugins.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url(); ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
   <link href="<?php echo $url; ?>assets/css/pages/login.css" rel="stylesheet" type="text/css"/>
   <link rel="shortcut icon" href="favicon.ico" />
   <!-- END THEME STYLES -->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
   <!-- BEGIN LOGO -->
   <div class="logo">
      <img src="<?php echo $url; ?>assets/img/logo-big.png" alt="" /> 
   </div>
   <!-- END LOGO -->
   <!-- BEGIN LOGIN -->
   <div class="content">
      <!-- BEGIN LOGIN FORM -->
      <form class="login-form" method="post">
         <h3 class="form-title">Bienvenido</h3>
         <div class="alert alert-error hide">
            <button class="close" data-dismiss="alert"></button>
            <span>Digite el nombre de usuario y contraseña</span>
         </div>
         <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Usuario</label>
            <div class="input-icon">
               <i class="icon-user"></i>
               <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Usuario" name="username"/>
            </div>
         </div>
         <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Contraseña</label>
            <div class="input-icon">
               <i class="icon-lock"></i>
               <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Contraseña" name="password"/>
            </div>
         </div>
         <div class="form-actions">
			<label class="checkbox">
            <input type="checkbox" name="remember" value="1"/> Recordarme
            </label>
            <button type="submit" class="btn green pull-right">
            Acceder <i class="m-icon-swapright m-icon-white"></i>
            </button>            
         </div>
		
		<span class="help-block">
			<?php if(@$error_login): ?>
				Error en el usuario o contrase&ntilde;a.
			<br />
			<?php endif; ?>

			<?php echo @validation_errors(); ?>
			<br />
		</span>
		
         <div class="forget-password">
            <h4>¿ Olvidó la contraseña ?</h4>
            <p>
               Click <a href="javascript:;"  id="forget-password">Aquí</a>
               para reiniciar su contraseña.
            </p>
         </div>
      </form>
      <!-- END LOGIN FORM -->        
      <!-- BEGIN FORGOT PASSWORD FORM -->
      <form class="forget-form" action="index.html" method="post">
         <h3 >Recuperar contraseña</h3>
         <p>Introduzca su dirección de correo electrónico a continuación para restablecer la contraseña.</p>
         <div class="form-group">
            <div class="input-icon">
               <i class="icon-envelope"></i>
               <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" />
            </div>
         </div>
         <div class="form-actions">
            <button type="button" id="back-btn" class="btn">
            <i class="m-icon-swapleft"></i> Atrás
            </button>
            <button type="submit" class="btn blue pull-right">
            Enviar <i class="m-icon-swapright m-icon-white"></i>
            </button>            
         </div>
      </form>
      <!-- END FORGOT PASSWORD FORM -->
     
   </div>
   <!-- END LOGIN -->
	
   <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
   <!-- BEGIN CORE PLUGINS -->   
   <!--[if lt IE 9]>
   <script src="<?php echo $url; ?>assets/plugins/respond.min.js"></script>
   <script src="<?php echo $url; ?>assets/plugins/excanvas.min.js"></script> 
   <![endif]-->   
   <script src="<?php echo $url; ?>assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
   <script src="<?php echo $url; ?>assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
   <script src="<?php echo $url; ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
   <script src="<?php echo $url; ?>assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
   <script src="<?php echo $url; ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
   <script src="<?php echo $url; ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
   <script src="<?php echo $url; ?>assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
   <script src="<?php echo $url; ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
   <!-- END CORE PLUGINS -->
   <!-- BEGIN PAGE LEVEL PLUGINS -->
   <script src="<?php echo $url; ?>assets/plugins/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
   <script src="<?php echo $url; ?>assets/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
   <script type="text/javascript" src="<?php echo $url; ?>assets/plugins/select2/select2.min.js"></script>
   <!-- END PAGE LEVEL PLUGINS -->
   <!-- BEGIN PAGE LEVEL SCRIPTS -->
   <script src="<?php echo $url; ?>assets/scripts/app.js" type="text/javascript"></script>
   <script src="<?php echo $url; ?>assets/scripts/login-soft.js" type="text/javascript"></script>      
   <!-- END PAGE LEVEL SCRIPTS --> 
   <script>
      jQuery(document).ready(function() {     
        App.init();
        Login.init();
      });
   </script>
   <!-- END JAVASCRIPTS -->
   <!-- BEGIN COPYRIGHT -->
	<div class="copyright">
		2013 &copy; Kamelot - Soluciones Tecnológicas.
	</div>
	<!-- END COPYRIGHT -->
	</body>
	<!-- END BODY -->
</html>