<div class="row mb-3">
      <div class="col-sm-1"></div>
      <div class="col-sm-10">
      <div class="card card-blue">
                <div class="card-header">
               <center><h3 class="m-0">Lista de usuarios</h3></center> 
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <div id="example1_wrapper"></div>


                  <table id="tabla_usuarios" class="table table-striped table-hover table-bordered table-sm">
                    <thead>
                      <tr>
                        <th><center>Nro</center></th>
                        <th><center>Nombres</center></th>
                        <th><center>Apellidos</center></th>
                        <th><center>Cédula</center></th>
                        <th><center>Celular</center></th>
                        <th><center>Correo</center></th>
                        <th><center>Acciones</center></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    $contador = 0;
                   
                    $usuarios=usuariosControlador::obtenerUsuarios();
               
                    foreach ($usuarios as $usuario){
                      $id = $usuario['id_usuario'];
                      $nombres = $usuario['nombres'];
                      $apellidos = $usuario['apellidos'];
                      $cedula = $usuario['cedula'];
                      $celular = $usuario['celular'];
                      $email = $usuario['email'];
                      $contador=$contador + 1;
                      ?>
                      <tr>
                          <td><?php echo $contador ?></td>
                          <td><?php echo $nombres ?></td>
                          <td><?php echo $apellidos ?></td>
                          <td><?php echo $cedula ?></td>
                          <td><?php echo $celular ?></td>
                          <td><?php echo $email ?></td>
                          <td>
                            <center>
                            <a data-toggle="modal" data-target="#Modalusuario" class="btn btn-success btn-sm">Editar <i class="fas fa-pen"></i></a>
                            <a href="<?php echo $URL?>/admin/usuarios/delete.php?id=<?php echo $id;?>" class="btn btn-danger btn-sm">Borrar <i class="fas fa-trash"></i></a>
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
    <!-- /. Fin de tabla usuarios -->
    <!-- /.content-header -->
      </div>
      <div class="col-sm-1"></div>
    </div>

    <div class="modal fade" id="Modalusuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      formulario
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>