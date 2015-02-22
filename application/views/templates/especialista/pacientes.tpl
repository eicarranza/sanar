{extends file='layout.tpl'}
{block name="title"}My Page Title{/block}
{block name="styles" append}
    <link rel="stylesheet" href="{$url}assets/plugins/data-tables/DT_bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="{$url}assets/plugins/select2/select2_metro.css" />
    <!-- MODAL -->
    <link href="{$url}assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
    <link href="{$url}assets/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css"/>
    <link href="{$url}assets/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>
    <!-- END MODAL -->
{/block}
{block name="body"}{/block}
{block name="page-content"}
     <!-- BEGIN PAGE HEADER-->
     <div class="row">
        <div class="col-md-12">
           <!-- BEGIN PAGE TITLE & BREADCRUMB-->
           <h3 class="page-title">
              Administrar Pacientes
           </h3>
           <ul class="page-breadcrumb breadcrumb">
             <li>
                 <i class="icon-home"></i>
                 <a href="{$url}">Inicio</a> 
                 <i class="icon-angle-right"></i>
              </li>
              <li>
                 <a href="#">Pacientes</a>
              </li>
           </ul>
           <!-- END PAGE TITLE & BREADCRUMB-->
        </div>
     </div>
     <!-- END PAGE HEADER-->
     <!-- BEGIN PAGE CONTENT-->
     <div class="row">
        <div class="col-md-12">
               <!-- BEGIN LIST PATIENT-->
               <div class="portlet box grey">
                    <div class="portlet-title">
                      <div class="caption"><i class="icon-user"></i>Pacientes</div>
                    </div>

                    <div class="portlet-body">
                        <div id="sample_2_wrapper" class="dataTables_wrapper form-inline" role="grid">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="dataTables_filter" id="sample_2_filter">
                                        <label>Buscar: <input type="text" id="txt_buscar" aria-controls="sample_2" class="form-control input-small"></label>
                                    </div>
                                </div>
                            </div>

                            <div id="contenedor">
                            </div>
                        </div>
                    </div>
                </div>
               <!-- END LIST PATIENT -->
            </div>
     </div>
     <!-- END PAGE CONTENT-->
     
     
     <div id="dv-consultas" class="modal fade" tabindex="-1" data-width="760">
        <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
               <h4 class="modal-title">Consultas de paciente</h4>
            </div>
            <div id="dv_paciente" class="modal-body">

            </div>
            <div class="modal-footer">
               <button type="button" data-dismiss="modal" class="btn btn-default">Cerrar</button>
            </div>
        </div>
        
    </div>
     
{/block}
{block name="scripts" append}
<!-- MODAL -->
<script src="{$url}assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript" ></script>
<script src="{$url}assets/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript" ></script>
<script src="{$url}assets/scripts/ui-extended-modals.js"></script> 
<!-- END MODAL -->
<script type="text/javascript" src="{$url}assets/plugins/data-tables/jquery.dataTables.js"></script>
<script type="text/javascript" src="{$url}assets/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="{$url}assets/plugins/data-tables/DT_bootstrap.js"></script>
<script src="{$url}assets/scripts/table-managed.js"></script>

<script>
  jQuery(document).ready(function() {       
	 App.init();
	 TableManaged.init();
         
        $("#contenedor").load("{$url}especialista/pacientesLista");
        $(document).on("click", "#pagination-digg li a", function(e){
            e.preventDefault();
            var href = $(this).attr("href");
            $("#contenedor").load(href);
        });
        
        $( "#txt_buscar" ).keyup(function() {
            var buscar = $( '#txt_buscar' ).val();
            buscar = buscar.replace(" ", "");
            var href = "{$url}especialista/pacientesLista/0/"+buscar;
            $("#contenedor").load(href);
        });
  });
  
  
  function pacienteConsultas(paciente_id){
        var postData = {
                        'paciente_id': paciente_id
                    };
        $.post('{$url}especialista/pacienteConsultas', postData, function(data){
                $('#dv_paciente').empty();
                $('#dv_paciente').html(data);
        });

        $("#dv-consultas").modal('show');

        return false;
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