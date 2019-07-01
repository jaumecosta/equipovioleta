<?php

require '../models/Conexion.php';

$nombre = $_POST['nombre'];
$password = $_POST['pass'];
$email = $_POST['email'];
$verificado = $_POST['verificado'];

$con = new Conexion('localhost','root','','Signup&in');
