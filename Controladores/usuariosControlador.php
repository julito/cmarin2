<?php
class usuariosControlador
{
    public function obtenerUsuarios()
    {
       $usuarios=usuariosModelo::obtenerUsuarios();
       return $usuarios;
    }
}