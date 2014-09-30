{extends file='layout.tpl'}
{block name="title"}My Page Title{/block}
{block name="styles" append}
  <link rel="stylesheet" href="{$url}assets/plugins/data-tables/DT_bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="{$url}assets/plugins/select2/select2_metro.css" />
  
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
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box grey">
                <div class="portlet-title">
                  <div class="caption"><i class="icon-user"></i>Pacientes</div>
                  <div class="actions">
                     <a href="{$url}pacientes/nuevo" class="btn green"><i class="icon-pencil"></i> Nuevo</a>
                  </div>
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
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
     </div>
     <!-- END PAGE CONTENT-->
{/block}
{block name="scripts" append}

<script type="text/javascript" src="{$url}assets/plugins/data-tables/jquery.dataTables.js"></script>
<script type="text/javascript" src="{$url}assets/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="{$url}assets/plugins/data-tables/DT_bootstrap.js"></script>
<script src="{$url}assets/scripts/table-managed.js"></script>

<script>
  jQuery(document).ready(function() {       
        App.init();
        TableManaged.init();
         
        $("#contenedor").load("{$url}/pacientes/lista");
        $(document).on("click", "#pagination-digg li a", function(e){
            e.preventDefault();
           var href = $(this).attr("href");
           $("#contenedor").load(href);
        });
        
        $( "#txt_buscar" ).keyup(function() {
            var buscar = $( '#txt_buscar' ).val();
            buscar = buscar.replace(" ", "");
            var href = "{$url}/pacientes/lista/0/"+buscar;
            $("#contenedor").load(href);
        });
  });
</script>

{/block}