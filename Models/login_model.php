<?php
require 'conexion_db.php';


$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT COUNT(*) as contar from Users where email = '$email' and password = '$password'";

$bdconect = mysqli_query($conexion,$query);
$parametros = mysqli_fetch_array($bdconect);

$id = $parametros['id'];
$name = $parametros['name'];

if($parametros['contar']>0){

    session_start();
    $_SESSION['email'] = $email;
    $_SESSION['id'] = $id;
    $_SESSION['name'] = $name;

    header("location: ../home.php");

}else {

    echo "<script>alert('Contraseña incorrecta o usuario no existe.');</script>";

}