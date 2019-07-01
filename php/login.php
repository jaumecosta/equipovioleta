<?php

function login(){

$nombre = $_POST['nombre'];
$password = $_POST['pass'];
$email = $_POST['email'];
$verificado = $_POST['verificado'];

$con = new Conexion('localhost','root','','Signup&in'); 

$query = $con->Query('SELECT pass,email,verificado FROM signup');

while($fila = $query->fetch_assoc()){


if($fila['email'] == $email && $fila['pass'] == $pass){

 echo header("location: CAMBIARPAGINADEDESTINO");   

}else if($fila['email'] != $email || $fila['pass'] != $pass){

echo 'Email o contraseña incorrectos';

}



}


}