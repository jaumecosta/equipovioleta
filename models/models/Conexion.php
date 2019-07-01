<?php


class Conexion{

protected $conexion;


public function __construct($server,$user,$pass,$db){

    $this->conexion = new mysqli($server,$user,$pass,$db);
}


public function Query($query){

    $this->conexion->query("$query");

}

}
