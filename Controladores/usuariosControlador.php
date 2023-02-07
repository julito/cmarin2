<?php
class usuariosControlador
{
    public static function obtenerUsuarios()
    {
       $usuarios=usuariosModelo::obtenerUsuarios();
       return $usuarios;
    }
}