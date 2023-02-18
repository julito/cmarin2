<?php
require 'Conexion.php';
class usuariosModelo
{
    static public function obtenerUsuarios()
    {
        $usuarios=Conexion::conex()->query('Select * from tb_usuarios');
        return $usuarios->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function actualizarUsuario($id,$nombre,$apellidos,$cedula,$celular,$cargo,$email)
    {
        $datos=Conexion::conex()->prepare('UPDATE tb_usuarios SET nombres=:nom, apellidos =:ape,cedula=:ced,celular=:cel,cargo=:car,email=:ema  WHERE tb_usuarios.id_usuario = :id');
        $datos->bindParam(':nom', $nombre, PDO::PARAM_STR);
        $datos->bindParam(':ape', $apellidos, PDO::PARAM_STR);
        $datos->bindParam(':ced', $cedula, PDO::PARAM_STR);
        $datos->bindParam(':cel', $celular, PDO::PARAM_STR);
        $datos->bindParam(':car', $cargo, PDO::PARAM_STR);
        $datos->bindParam(':ema', $email, PDO::PARAM_STR);
        $datos->bindParam(':id', $id, PDO::PARAM_INT);
        return $datos->execute();
    }
}