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
                            <a href="<?php echo $URL?>/admin/pacientes/edit.php?id=<?php echo $id;?>" class="btn btn-success btn-sm">Editar <i class="fas fa-pen"></i></a>
                            <a href="<?php echo $URL?>/admin/pacientes/delete.php?id=<?php echo $id;?>" class="btn btn-danger btn-sm">Borrar <i class="fas fa-trash"></i></a>
                            <a nombre_paciente="<?=$paciente['nombres']?> <?=$paciente['apellidos']?>" id_paciente="<?php echo $id;?>" href="#" data-toggle="modal" data-target="#ModalAgendar" class="btn btn-info btn-sm btnAgendar">Agendar <i class="fas fa-book"></i></a>
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
    <!-- /.content-header -->
      </div>