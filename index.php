<?php
define ('BD_SERVIDOR','localhost');
define ('BD_USUARIO','root');
define ('BD_PASSWORD','');
define ('BD_SISTEMA','bd_sis_clinica');
define ('NAMEAPP','Sis Clinica Marin');
define ('SEP',DIRECTORY_SEPARATOR);//SEPARADOR DE DIRECTORIO
define ('RUTA_MODULOS',dirname(__FILE__) . SEP . 'Vistas' . SEP . 'Modulos'. SEP);


/******************** CONTROLADORES ****************** */
require 'Controladores/plantillaControlador.php';
require 'Controladores/usuariosControlador.php';
require 'Controladores/pacientesControlador.php';


/******************** MODELOS ****************** */
require 'Modelos/Rutas.php';
require 'Modelos/usuariosModelo.php';
require 'Modelos/pacientesModelo.php';

$inicio = new plantillaControlador();
$inicio->index();