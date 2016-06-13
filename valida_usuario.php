<?php
session_start();
$usuario = $_POST["usuario"];
$validado = false;



if($usuario == "joao") {
    $validado = true;
    $_SESSION['usuario'] = $usuario;
}

    if($validado) {
        header("Location: ti.php");
    } else {
        header("Location: nao_autorizado.php");
    }

?>
