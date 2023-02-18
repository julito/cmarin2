<div class="row mb-3">
      <div class="col-sm-1"></div>
      <div class="col-sm-10">
      <div class="card card-blue">
                <div class="card-header">
               <center><h3 class="m-0">Lista de usuarios</h3></center> 
                </div>
                <div class="card-body">
                  <div class="table-responsive">
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
                            <a type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#usuariosModal">Editar <i class="fas fa-pen"></i></a>
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


    
<!-- Modal -->
<div class="modal fade" id="usuariosModal" tabindex="-1" role="dialog" aria-labelledby="usuariosModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Usuarios Pacientes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      <!-- Formulario para editar usuario-->
      <div class="card">
                  <div class="card-header" style="background-color: #00A000; color: #ffffff">
                    Tomese su tiempo al llenar los campos
                  </div>
                  <div class="card-body">
                    
                    <div class="row">
                      <div class="col-md-4"> 
                        <div class="form-group">
                          <lavel for="">Nombres</lavel>
                          <input type = "text" name="nombres"  class="form-control" placeholder="Completos" required>
                        </div>
                      </div>
                      <div class="col-md-4">
                      <div class="form-group">
                          <lavel for="">Apellidos</lavel>
                          <input type = "text" name="apellidos" class="form-control" placeholder="Completos" required>
                      </div>
                      </div>
                      <div class="col-md-4">
                      <div class="form-group">
                          <lavel for="">Cédula</lavel>
                          <input type = "text" name="cedula" class="form-control" placeholder="# Cédula" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                      <div class="form-group">
                          <lavel for="">Celular</lavel>
                          <input type = "number" name="celular" class="form-control" placeholder="# Celular" required>
                      </div>
                      </div>
                      <div class="col-md-6">
                      <div class="form-group">
                          <lavel for="">Cargo</lavel>
                          <select name="cargo" id="" class ="form-control">
                            
                            <option value="PUBLICO">PUBLICO</option>
                            <option value="DOCENTE">DOCENTE</option>
                            <option value="ESTUDIANTE">ESTUDIANTE</option>
                            <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                          </select>
                      </div>
                      </div>
                    </div>
                    <div class="row">
                    <div class="col-md-4"></div>
                      <div class="col-md-4">
                      <div class="form-group">
                          <lavel for="">Correo Electrónico</lavel>
                          <input type="email" name="email" class="form-control" placeholder="ejemplo@mail.com" required>
                          
                      </div>
                      </div>
                      <div class="col-md-4"></div>
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
