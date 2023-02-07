<?php
require 'Conexion.php';
class usuariosModelo
{
    static public function obtenerUsuarios()
    {
        $usuarios=Conexion::conex()->query('Select * from tb_usuarios');
        return $usuarios->fetchAll(PDO::FETCH_ASSOC);
    }
}