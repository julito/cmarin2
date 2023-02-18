<?php
class usuariosControlador
{
    public static function obtenerUsuarios()
    {
       $usuarios=usuariosModelo::obtenerUsuarios();
       return $usuarios;
    }

    public static function actualizarUsuario($id,$nombre,$apellidos,$cedula,$celular,$cargo,$email)
    {
       
       $resp=usuariosModelo::actualizarUsuario($id,$nombre,$apellidos,$cedula,$celular,$cargo,$email);
       if($resp)
       {
        echo '<script>alert("Usuario Actualizado");window.location="usuarios";</script>';
       }
       else
       {
        echo '<script>alert("Error al Actualizar Usuario");window.location="usuarios";b</script>';
       } 
    }
}