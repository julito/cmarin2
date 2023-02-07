<?php
require_once 'Conexion.php';
class pacientesModelo{
    public static function obtenerPacientes()
    {
        $pacientes=Conexion::conex()->query("Select * from tb_pacientes");
        return $pacientes->fetchAll(PDO::FETCH_ASSOC);

    }
}