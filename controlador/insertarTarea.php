<?php
/**Controlador que permite al admin insertar una nueva tarea, cogiendo los datos de un formulario de alta */
include("../modelo/modTarea.php"); 
include('filtrarErrores.php');

$fich_dest = "../Doc";
$subir_archivo = $fich_dest . basename($_FILES['fichero']['name']);

if (!$_POST) {
    // 1º vez
    include('../vista/form_alta.php');
}
else {
    $errores = filtrarErrores();
    
 if ($errores){
    include('../vista/form_alta.php');
 }else{
        if (is_uploaded_file($_FILES['fichero']['tmp_name'])) {
            move_uploaded_file($_FILES['fichero']['tmp_name'], $subir_archivo);
        }
    $reg = [
        'id' => filter_input(INPUT_POST, 'id'),
        'nif' => filter_input(INPUT_POST, 'nif'),
        'nombre' => filter_input(INPUT_POST, 'nombre'),
        'apellidos' => filter_input(INPUT_POST, 'apellidos'),
        'tlf' => filter_input(INPUT_POST, 'tlf'),
        'descripcion' => filter_input(INPUT_POST, 'descripcion'),
        'correo' => filter_input(INPUT_POST, 'correo'),
        'direccion' => filter_input(INPUT_POST, 'direccion'),
        'poblacion' => filter_input(INPUT_POST, 'pob'),
        'cp' => filter_input(INPUT_POST, 'cp'),
        'provincia' => filter_input(INPUT_POST, 'provincia'),
        'estadoTarea' => filter_input(INPUT_POST, 'estadoTarea'),
        'fechaC' => filter_input(INPUT_POST, 'fechaC'),
        'operario' => filter_input(INPUT_POST, 'operario'),
        'fechaR' => filter_input(INPUT_POST, 'fechaR'),
        'anotA' => filter_input(INPUT_POST, 'anotA'),
        'anotP' => filter_input(INPUT_POST, 'anotP'),
        'fichero' => filter_input(INPUT_POST, 'fichero'),
        'foto' => $nombre_archivo,
    ];

$tarea=new Tarea();
$tarea->insertar($reg);
}
}