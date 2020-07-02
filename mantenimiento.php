<?php
 session_start();

 if(isset($_POST['accion'])){
     switch ($_POST['accion'])
     {
         case 'Guardar':
                guardarUsuario();
                header('location:index.php');
                break;
         case 'Guardar Cambios':
                guardarEditar();
                header('location:index.php');
                break;
         case 'Cancelar':
                unset($_SESSION['usuarioEditar']);
                header('location:index.php');
                break;
     }  
 }
 
 if(isset($_GET['accion'])){  
     switch ($_GET['accion'])
     {
         case 'Eliminar':
                eliminarUsuario();
                header('location:index.php');
                break;
         case 'EliminarSesion':    
                eliminarSesion();
                header('location:index.php');
                break;
         case 'Editar':
                editarUsuario();
                header('location:index.php');
                break;
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
     
     $usuario = array("nombre"=>$nombre,"correo"=>$correo,"direccion"=>$direccion,"telefono"=>$telefono);
     $lista = obtenerListaUsuarios();
     array_push($lista,$usuario);
     $_SESSION['listaUsuarios'] = $lista;     
 }
 
 function obtenerUsuarioEditar(){
     if(isset($_SESSION['usuarioEditar'])){
       $usuarioEditar = $_SESSION['usuarioEditar'];
    }else{
       $usuarioEditar = array();     
       $_SESSION['usuarioEditar'] = $usuarioEditar;
    }   
    return $usuarioEditar;
 }
 
 function editarUsuario(){
     $posicion = $_GET['posicion'];
     $lista = obtenerListaUsuarios();
     $usuarioEditar = $_SESSION['usuarioEditar'];
     $usuarioEditar = $lista[$_GET['posicion']];
     array_push($usuarioEditar, $_GET['posicion']);
     $_SESSION['usuarioEditar'] = $usuarioEditar;
 }
 
 function guardarEditar(){
     $nombre = $_POST['nombre'];
     $correo = $_POST['correo'];
     $direccion = $_POST['direccion'];
     $telefono = $_POST['telefono'];
     
     $listaEditar = obtenerUsuarioEditar();
     $listaTodos = obtenerListaUsuarios();
     $listaTodos[$listaEditar[0]]['nombre'] = $nombre;
     $listaTodos[$listaEditar[0]]['correo'] = $correo;
     $listaTodos[$listaEditar[0]]['direccion'] = $direccion;
     $listaTodos[$listaEditar[0]]['telefono'] = $telefono;
     
     $_SESSION['listaUsuarios'] = $listaTodos;
     unset($_SESSION['usuarioEditar']);
 }



 function eliminarUsuario(){
     $posicion = $_GET['posicion'];
     $lista = obtenerListaUsuarios();
     unset($lista[$posicion]);
     $_SESSION['listaUsuarios'] = $lista;
 }


 function eliminarSesion(){
     unset($_SESSION['listaUsuarios']);
     session_unset();
     session_destroy();
 }

?>