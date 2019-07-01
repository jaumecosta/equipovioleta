<?php

require_once '../models/Conexion.php';
require_once '../models/User.php';

$hay_usuario = false;
$nombre = $_POST['nombre'];
$password = $_POST['pass'];
$email = $_POST['email'];
$verificado = $_POST['verificado'];

$con = new Conexion('localhost','root','','Signup&in');

$c = $con->Query('SELECT nombre,password,email,verificado FROM singin');

while($fila = $c->fetch_assoc()){

if($fila['email'] == $email){
    echo 'El usuario ya existe';
    $hayUsuario = true;
}


}
if(!$hayUsuario){
    $user = new User($nombre,$password,$email,$verificado);
    $user->crearUsuario();

}

