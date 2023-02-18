<!-- /.Tabla Pacientes -->
<div class="row mb-3">
      <div class="col-sm-1"></div>
      <div class="col-sm-10">
      <div class="card card-blue">
                <div class="card-header">
               <center><h3 class="m-0">Lista de pacientes</h3></center> 
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                  <table id="tabla_pacientes" class="table table-striped table-hover table-bordered table-sm">
                    <thead>
                      <tr>
                        <th><center>Nro</center></th>
                        <th><center>Expediente</center></th>
                        <th><center>Nombres</center></th>
                        <th><center>Apellidos</center></th>
                        <th><center>Edad</center></th>
                        <th><center>Celular</center></th>
                        <th><center>Ciudad</center></th>
                        <th><center>Correo</center></th>
                        <th><center>Acciones</center></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    $contador = 0;
                    $Pacientes = pacientesControlador::obtenerPacientes();
                    foreach ($Pacientes as $paciente){
                      $id = $paciente['id_paciente'];
                      $no_expediente = $paciente['no_expediente'];
                      $nombres = $paciente['nombres'];
                      $apellidos = $paciente['apellidos'];
                      $edad = $paciente['edad'];
                      $celular = $paciente['celular'];
                      $ciudad = $paciente['ciudad'];
                      $email = $paciente['email'];
                      $contador=$contador + 1;
                      ?>
                      <tr>
                          <td><?php echo $contador ?></td>
                          <td><?php echo $no_expediente ?></td>
                          <td><?php echo $nombres ?></td>
                          <td><?php echo $apellidos ?></td>
                          <td><?php echo $edad ?></td>
                          <td><?php echo $celular ?></td>
                          <td><?php echo $ciudad ?></td>
                          <td><?php echo $email ?></td>
                          <td>
                            <center>
                            <a type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#pacientesModal">Editar <i class="fas fa-pen"></i></a>
                            <a href="<?php echo $URL?>/admin/pacientes/delete.php?id=<?php echo $id;?>" class="btn btn-danger btn-sm">Borrar <i class="fas fa-trash"></i></a>
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
    <!-- /. Fin de tabla Pacientes -->

    

<!-- Modal -->
<div class="modal fade" id="pacientesModal" tabindex="-1" role="dialog" aria-labelledby="pacientesModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Pacientes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!-- Formulario para crear pacientes-->
      <div class="card">
          <div class="card-header" style="background-color: #00A000; color: #ffffff">
                    Tomese su tiempo al llenar los campos
                  </div>
                  <div class="card-body">
                    <form action="" method="">
                    <div class="row">
                        <!-- CAMPO-->
                      <div class="col-md-4">
                      <div class="form-group">
                          <lavel for="">Expediente</lavel>
                          <input type = "text" name="no_expediente" class="form-control" placeholder="Número" required>
                      </div>
                      </div>
                      <!-- CAMPO-->
                      <div class="col-md-4"> 
                        <div class="form-group">
                          <lavel for="">Nombres</lavel>
                          <input type = "text" name="nombres" class="form-control" placeholder="Nombres completos" required>
                        </div>
                      </div>
                      <!-- CAMPO-->
                      <div class="col-md-4">
                      <div class="form-group">
                          <lavel for="">Apellidos</lavel>
                          <input type = "text" name="apellidos" class="form-control" placeholder="Apellidos completos" required>
                      </div>
                      </div>
                      </div>
                    <!-- Otra linea-->
                    <div class="row">
                        <!-- CAMPO-->
                        <div class="col-md-4">
                        <div class="form-group">
                            <lavel for="">Nacimiento</lavel>
                            <input type = "date" name="fecha_nacim" class="form-control" >
                        </div>
                        </div>
                        <!-- CAMPO-->
                        <div class="col-md-4">
                        <div class="form-group">
                            <lavel for="">Edad</lavel>
                            <input type = "number" name="edad" class="form-control" placeholder="Edad paciente" required>
                        </div>
                        </div>
                            <!-- CAMPO-->
                        <div class="col-md-4">
                        <div class="form-group">
                            <lavel for="">Celular</lavel>
                            <input type = "number" name="celular" class="form-control" placeholder="Celular paciente">
                        </div>
                        </div>
                    </div>
                    <!-- Otra linea-->
                    <div class="row">
                        <!-- CAMPO-->
                      <div class="col-md-4">
                      <div class="form-group">
                          <lavel for="">Ciudad</lavel>
                          <input type = "text" name="ciudad" class="form-control" placeholder="Residencia" required>
                      </div>
                      </div>
                      <!-- CAMPO-->
                      <div class="col-md-4">
                      <div class="form-group">
                          <lavel for="">Dirección</lavel>
                          <input type = "text" name="direccion" class="form-control" placeholder="Dirección exacta" required>
                      </div>
                      </div>
                      <!-- CAMPO-->
                      <div class="col-md-4">
                      <div class="form-group">
                          <lavel for="">Correo Electrónico</lavel>
                          <input type="email" name="email" class="form-control" placeholder="ejemplo@mail.com">
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
