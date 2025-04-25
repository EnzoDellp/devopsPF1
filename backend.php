<?php
if ($_SERVER["REQUEST_METHOD"]==="POST") {
    if (!empty($_POST["nombre"])) {
        $nombre=htmlspecialchars($_POST["nombre"]);
        if(strlen($nombre)>=3){
            echo"OK: Nombre Recibido Correctamente. $nombre!";
        }
        else{
            echo"ERROR: El nombre debe tener al menos 3 caracteres.";
        }
    }else{
        echo"ERROR: No se Recibio el Nombre.";
    }
}
?>