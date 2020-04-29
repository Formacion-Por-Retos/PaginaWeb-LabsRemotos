<?php
$host = "35.199.40.228";
$usuario = "paul9834";
$clave = "paul9834";
$db = "estados2020";
$conexion = mysqli_connect($host, $usuario, $clave, $db);

function connect(){
    return new mysqli("35.199.40.228", "paul9834", "paul9834", "bitacora");



}

