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
                      $cargo = $usuario['cargo'];
                      $contador=$contador + 1;
                      ?>
                      <tr>
                          <td><?php echo $contador ?></td>
                          <td class="nombres-<?=$id?>"><?php echo $nombres ?></td>
                          <td class="apellidos-<?=$id?>"><?php echo $apellidos ?></td>
                          <td class="cedula-<?=$id?>"><?php echo $cedula ?></td>
                          <td class="celular-<?=$id?>"><?php echo $celular ?></td>
                          <td class="email-<?=$id?>"><?php echo $email ?></td>
                          <td>
                            <center>
                            <a type="button" datacargo="<?php echo $cargo ;?>" dataid="<?php echo $id ;?>" class="btn btn-success btn-sm beditaru" data-toggle="modal" data-target="#usuariosModal">Editar <i class="fas fa-pen"></i></a>
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
    <form method="post">
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
                    <input type="hidden" name="idue" id="idue">
                    <div class="row">
                      <div class="col-md-4"> 
                        <div class="form-group">
                          <lavel for="">Nombres</lavel>
                          <input type = "text" name="nombrese" id="nombrese"   class="form-control" placeholder="Completos" required>
                        </div>
                      </div>
                      <div class="col-md-4">
                      <div class="form-group">
                          <lavel for="">Apellidos</lavel>
                          <input type = "text" name="apellidose" id="apellidose" class="form-control" placeholder="Completos" required>
                      </div>
                      </div>
                      <div class="col-md-4">
                      <div class="form-group">
                          <lavel for="">Cédula</lavel>
                          <input type = "text" name="cedulae" id="cedulae" class="form-control" placeholder="# Cédula" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                      <div class="form-group">
                          <lavel for="">Celular</lavel>
                          <input type = "number" name="celulare" id="celulare" class="form-control" placeholder="# Celular" required>
                      </div>
                      </div>
                      <div class="col-md-6">
                      <div class="form-group">
                          <lavel for="">Cargo</lavel>
                          <select name="cargoe" id="cargoe" class ="form-control">
                            <option value="DIGITADOR">DIGITADOR</option>
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
                          <input type="email" name="emaile" id="emaile" class="form-control" placeholder="ejemplo@mail.com" required>
                          
                      </div>
                      </div>
                      <div class="col-md-4"></div>
                    </div>
                    
                    
                  </div>
                </div> 
              
          <!-- Fin Formulario -->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
        <input  type="submit" value="Guardar" class="btn btn-success">
      </div>
      <?php
      if(isset($_POST['idue']))
      {
        usuariosControlador::actualizarUsuario($_POST['idue'],$_POST['nombrese'],$_POST['apellidose'],$_POST['cedulae'],$_POST['celulare'],$_POST['cargoe'],$_POST['emaile']);
      }

      ?>
    </form> 
    </div>
  </div>
</div>
