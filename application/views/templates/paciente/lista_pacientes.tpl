<ul class="nav" id="nav1">
    <table class="table table-striped table-bordered table-hover" id="sample_2">
        <col style="width:10%">
        <col style="width:15%">
        <col style="width:15%">
        <col style="width:15%">
        <col style="width:25%">
        <col style="width:10%">
        <col style="width:10%">
        <thead>
           <tr>
              <th >Identificacion</th>
              <th >Nombre</th>
              <th >Apellido</th>
              <th >Telefono</th>
              <th >Correo</th>
              <th >Editar</th>
              <th >Eliminar</th>
           </tr>
        </thead>
        <tbody>
            {foreach $pacientes as $i}
                <tr class="odd gradeX">
                  <td>{$i.identificacion}</td>
                  <td>{$i.nombre1} {$i.nombre2}</td>
                  <td>{$i.apellido1} {$i.apellido2}</td>
                  <td>{$i.telefono}</td>
                  <td >{$i.email}</td>
                  <td><a href="{$url}pacientes/nuevo/{$i.paciente_id}" class="btn default btn-xs purple"><i class="icon-edit"></i> Editar</a></td>
                  <td><a href="{$url}pacientes/eliminar/{$i.paciente_id}" class="btn default btn-xs black"><i class="icon-trash"></i> Eliminar</a></td>
               </tr>
            {/foreach}
        </tbody>
     </table>
</ul>
<ul>
<div class="dataTables_paginate paging_bootstrap">
    <ul id="pagination-digg" class="pagination">
      {$pag_links}  
    </ul>
</div>