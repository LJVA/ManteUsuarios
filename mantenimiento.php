<?php

session_start();

if(isset($_POST['accion'])){
    if($_POST['accion'] == 'guardar'){
        guardarUsuario();
        header('location:index.php');
    }
}

if(isset($_GET['accion'])){
    if($_GET['accion'] == 'EliminarSesion'){
        eliminarSesion();
        header('location:index.php');
    }
}

function obtenerListaUsuarios(){
    if(isset($_SESSION['listaUsuarios'])){
        $listaUsuarios = $_SESSION['listaUsuarios'];
    }else{
        $listaUsuarios = array();
        $_SESSION['listaUsuarios'] = $listaUsuarios;
    }
    return $listaUsuarios;
}


function guardarUsuario(){
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    
    $usuario = array("nombre"=>$nombre, "correo"=>$correo, "direccion"=>$direccion, "telefono"=>$telefono);
    $lista = obtenerListaUsuarios();
    array_push($lista, $usuario);
    $_SESSION['listaUsuarios'] = $lista;
}

function eliminarSesion(){
    unset($_SESSION['listaUsuarios']);
    session_unset();
    session_destroy();
}



?>

