<!-- /.Tabla especialistas -->
<div class="row mb-3">
      <div class="col-sm-1"></div>
      <div class="col-sm-10">
      <div class="card card-blue">
                <div class="card-header">
               <center><h3 class="m-0">Lista de especialistas</h3></center> 
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                  <table id="tabla_especialistas" class="table table-striped table-hover table-bordered table-sm">
                    <thead>
                      <tr>
                        <th><center>Nro</center></th>
                        <th><center>Nombres</center></th>
                        <th><center>Apellidos</center></th>
                        <th><center>Celular</center></th>
                        <th><center>Ciudad</center></th>
                        <th><center>Acciones</center></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    $contador = 0;
                    $especialistas = especialistasControlador::obtenerEspecialistas();
                    foreach ($especialistas as $especialista){
                      $id = $especialista['id_especialista'];
                      $nombres = $especialista['nombres'];
                      $apellidos = $especialista['apellidos'];
                      $celular = $especialista['celular'];
                      $ciudad = $especialista['ciudad'];
                      $contador=$contador + 1;
                      ?>
                      <tr>
                          <td><?php echo $contador ?></td>
                          <td><?php echo $nombres ?></td>
                          <td><?php echo $apellidos ?></td>
                          <td><?php echo $celular ?></td>
                          <td><?php echo $ciudad ?></td>
                          <td>
                            <center>
                            <a type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#especialistasModal">Editar <i class="fas fa-pen"></i></a>

                            <a href="<?php echo $URL?>/admin/especialistas/delete.php?id=<?php echo $id;?>" class="btn btn-danger btn-sm">Borrar <i class="fas fa-trash"></i></a>
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
    <!-- /. Fin de tabla especialistas -->





<!-- Modal -->
<div class="modal fade" id="especialistasModal" tabindex="-1" role="dialog" aria-labelledby="especialistasModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Especialistas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
       <!-- Formulario para modificar especialistas-->
       <div class="card">
                  <div class="card-header" style="background-color: #00A000; color: #ffffff">
                    Tomese su tiempo al modificar los campos
                  </div>
                  <div class="card-body">
                    <form action="controller_edit.php" method="post">
                    <div class="row">
                        <!-- CAMPO-->
                      <div class="col-md-5">
                        <div class="form-group">
                          <lavel for="">Nombres</lavel>
                          <input type = "text" value="" name="nombres" class="form-control" placeholder="Escribe los nombres" required>
                        </div>
                      </div>
                      <!-- CAMPO-->
                      <div class="col-md-7"> 
                        <div class="form-group">
                          <lavel for="">Apellidos</lavel>
                          <input type = "text" value="" name="apellidos" class="form-control" placeholder="Escribe los apellidos" required>
                        </div>
                      </div>
                      
                    </div>

                    <div class="row">
                        <!-- CAMPO-->
                      <div class="col-md-5"> 
                        <div class="form-group">
                          <lavel for="">Celular</lavel>
                          <input type = "text" value="" name="celular" class="form-control" placeholder="Escribe el celular">
                        </div>
                      </div>
                      <!-- CAMPO-->
                      <div class="col-md-7"> 
                        <div class="form-group">
                          <lavel for="">Ciudad</lavel>
                          <input type = "text" value="" name="ciudad" class="form-control" placeholder="Escribe la ciudad" required>
                        </div>
                      </div>

                    </div>
                    
                    <!-- Fin de lineas-->
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
