<?php
require_once("../modelo/modTarea.php"); 
if ($_POST) {    
    $nif = filter_input(INPUT_POST, 'nif');
    $nombre = filter_input(INPUT_POST, 'nombre');
    $apellidos = filter_input(INPUT_POST, 'apellidos');
    $tlf = filter_input(INPUT_POST, 'tlf');
    $descripcion = filter_input(INPUT_POST, 'descripcion');
    $correo = filter_input(INPUT_POST, 'correo');
    $direccion = filter_input(INPUT_POST, 'direccion');
    $poblacion = filter_input(INPUT_POST, 'pob');
    $cp = filter_input(INPUT_POST, 'cp');
    $provincia =filter_input(INPUT_POST, 'provincia');
    $estadoTarea = filter_input(INPUT_POST, 'estadoTarea');
    $fechaC = filter_input(INPUT_POST, 'fechaC');
    $operario = filter_input(INPUT_POST, 'operario');
    $fechaR = filter_input(INPUT_POST, 'fechaR');
    $anotA = filter_input(INPUT_POST, 'anotA');
    $anotP = filter_input(INPUT_POST, 'anotP');
    $fichero = filter_input(INPUT_POST, 'fichero');
    $foto = filter_input(INPUT_POST, 'foto');

$tarea=new Tarea();
$tarea->insertar($nif,$nombre,$apellidos,$tlf,$descripcion,$correo,$direccion,$poblacion,$cp,$provincia,
$estadoTarea,$fechaC,$operario,$fechaR,$anotA,$anotP,$foto,$fichero);
}