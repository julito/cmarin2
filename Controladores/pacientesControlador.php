<?php
class pacientesControlador
{
    public static function obtenerPacientes()
    {
        $pacientes=pacientesModelo::obtenerPacientes();
        return $pacientes;
    }
}