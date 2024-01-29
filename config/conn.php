<!-- Configuracion de encriptacion del sistema y conexion a la base de datos -->
<?php 
    const SERVER="localhost";
    const DB="sistema_de_prestamos";
    const USER= "root";
    const PASS="";

    const SGBBD="mysql:host=".SERVER.";dbname=".DB;


    const METHOD="AES-256-CBC";
    const SECRET_KEY='$PRESTAMOS@2024';
    const SECRET_ID='000001';
?>