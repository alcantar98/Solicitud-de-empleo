<?php
//Definicion de Constantes
/*
$servidor="localhost";
$usuario="root";
$password="";
$basedatos="solicitud";

	$conexion = mysql_connect($servidor,$usuario,$password)or die("Error: ".mysql_error());
	mysql_select_db($basedatos, $conexion)or die("Error: ".mysql_error());
	


conexionBD.php
*/
define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DATABASE', 'solicitud');


    /*
        $servidor = "localhost";
        $usuario = "root";
        $contra = "";
        $baseDatos = "solicitud";

        $conexion = mysql_connect($servidor,$usuario,$contra)or die("Error: ".mysql_error());
        mysql_select_db($baseDatos,$conexion)or die("Error: ".mysql_error());
        
        if($conexion == false){
            echo "FALLO LA CONEXION AL SERVIDOR DE BASE DE DATOS";
        }else{
            return $conexion;
        }
            */

?>