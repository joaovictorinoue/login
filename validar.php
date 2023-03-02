<?php
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

if($usuario == "joao@joao" && $senha == "123"){
    header("location: painel.php");
}else{
    header("location: usuario-invalido.php");
}
?>