{extends file='myproject.tpl'}
{block name="title"}My Page Title{/block}
{block name="head" append}
  
{/block}
{block name="body"}{/block}
{block name="page-content"}

         <!-- BEGIN PAGE HEADER-->
         <div class="row">
            <div class="col-md-12">
               <!-- BEGIN PAGE TITLE & BREADCRUMB-->
               <h3 class="page-title">
                  Bienvenidos <small>Sistema de gestión médica</small>
               </h3>
               <ul class="page-breadcrumb breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="index.html">Inicio</a> 
                        <i class="icon-angle-right"></i>
                    </li>
                    <li>
                        <a href="#">Agenda Médica</a>
                    </li>

               </ul>
               <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
         </div>
         <!-- END PAGE HEADER-->
         
         <div class="clearfix"></div>
         <div class="row ">
             <!-- INICIO AGENDA ESPECIALISTA -->
             <div class="col-md-6 col-sm-6">
                <div class="portlet box blue">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-calendar"></i>{$hoy}
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-responsive" id="dv-agenda">
                            <!-- ESPACIO PARA LISTAR LA AGENDA DE ESPECIALISTA -->
                        </div>
                    </div>
                </div>
             </div>
            <!-- FIN AGENDA ESPECIALISTA -->
            
            <!-- DATOS DE PACIENTE -->
            <div id="dv-especialista" class="col-md-6 col-sm-6" style="display: none;"> 
                    <div class="portlet box blue">
                        <div class="portlet-title">
                            <div class="caption"><i class="icon-reorder"></i>DATOS DE PACIENTE</div>
                        </div>
                        <div class="portlet-body">
                            <div id="dv-paciente">
                                
                            </div>
                        </div>
                    </div>
                
            </div>
            <!-- FIN DATOS DE PACIENTE -->
         </div>
         
{/block}

{block name="scripts" append}
    <script language="javascript" type="text/javascript">
        timer = setInterval("actualizarAgenda()", 4000);
    </script>
   <script>
      jQuery(document).ready(function() {
            App.init(); // initlayout and core plugins
            Index.init();
            actualizarAgenda();
      });
      
    function actualizarAgenda(){
       var postData = {};

        $.post('{$url}especialista/agendaDia', postData, function(data){
                $('#dv-agenda').empty();
                $('#dv-agenda').html(data);
        });
    }
    
    function consulta(id, paciente){
        
        if(paciente != 0)
        {
            $.ajax({
                    type: "POST",
                    url: "{$url}especialista/paciente/"+id,
                    dataType: "text",  
                    cache:false,
                    success: 
                         function(data){
                            $('#dv-paciente').empty();
                            $('#dv-paciente').html(data);
                         }
            });

            $("#dv-especialista").attr('style', 'display:block');
        }
    }
   </script>
{/block}