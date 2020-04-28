<?php
require 'conexion_db.php';


$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT COUNT(*) as contar,id from Users where email = '$email' and password = '$password'";

$bdconect = mysqli_query($conexion,$query);
$parametros = mysqli_fetch_array($bdconect);

$id = $parametros['id'];

if($parametros['contar']>0){

    session_start();

    $_SESSION['id'] = $id;

    header("location: ../home.php");

}else {

    echo "<script>alert('Contraseña incorrecta o usuario no existe.');</script>";

}