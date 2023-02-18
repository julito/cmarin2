<!-- /.Tabla especialidades -->
<div class="row mb-3">
      <div class="col-sm-1"></div>
      <div class="col-sm-10">
      <div class="card card-blue">
                <div class="card-header">
               <center><h3 class="m-0">Lista de especialidades</h3></center> 
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                  <table id="tabla_especialidades" class="table table-striped table-hover table-bordered table-sm">
                    <thead>
                      <tr>
                        <th><center>Nro</center></th>
                        <th><center>Nombres</center></th>
                        <th><center>Descripción</center></th>
                        <th><center>Acciones</center></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    $contador = 0;
                    $especialidades = especialidadesControlador::obtenerEspecialidades();
                    
                    foreach ($especialidades as $especialidad){
                      $id = $especialidad['id_especialidad'];
                      $nombre = $especialidad['nombre'];
                      $descripcion = $especialidad['descripcion'];
                      $contador=$contador + 1;
                      ?>
                      <tr>
                          <td><?php echo $contador ?></td>
                          <td><?php echo $nombre ?></td>
                          <td><?php echo $descripcion ?></td>
                          <td>
                            <center>
                            <a type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#especialidadesModal">Editar <i class="fas fa-pen"></i></a>
                            <a href="<?php echo $URL?>/admin/especialidades/delete.php?id=<?php echo $id;?>" class="btn btn-danger btn-sm">Borrar <i class="fas fa-trash"></i></a>
                            </center>
                          </td>
                      </tr>
                      <?php 
                     }
                    ?>
                      
                    </tbody>
                  </table>
                  </div>
                </div>
              </div>
    <!-- /. Fin de tabla especialidades -->


<!-- Modal -->
<div class="modal fade" id="especialidadesModal" tabindex="-1" role="dialog" aria-labelledby="especialidadesModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Especialidades</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Formulario para crear especialidades-->
        <div class="card">
                  <div class="card-header" style="background-color: #00A000; color: #ffffff">
                    Tomese su tiempo al modifficar los campos
                  </div>
                  <div class="card-body">
                    <form action="controller_edit.php" method="post">
                    <div class="row">
                        <!-- CAMPO-->
                      <div class="col-md-5"> 
                        <div class="form-group">
                          <lavel for="">Nombre</lavel>
                          <input type = "text" value="" name="nombre" class="form-control" placeholder="Nombre de la especialidad" required>
                        </div>
                      </div>
                      <!-- CAMPO-->
                       <div class="col-md-7"> 
                        <div class="form-group">
                          <lavel for="">Descripcion</lavel>
                          <input type = "text" value="" name="descripcion" class="form-control" placeholder="Breve descripción" required>
                          <input type="text" name="id_especialidad" value="" hidden>
                        </div>
                      </div>
                    </div>
                    </form>
                  </div>
                </div> 
                
          <!-- Fin Formulario -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
        <button type="button" class="btn btn-success">GUARDAR</button>
      </div>
    </div>
  </div>
</div>

