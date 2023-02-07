<?php
class Conexion
{

    static public function conex()
    {
        $servidor = "mysql:host=" . BD_SERVIDOR . ";dbname=" . BD_SISTEMA;

        try {

            $pdo = new PDO($servidor, BD_USUARIO, BD_PASSWORD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            return $pdo;
        } catch (PDOException $e) {
            echo "<script>alert('Error de conexión a la base de datos');</script>";
            return null;
        }
    }
}
