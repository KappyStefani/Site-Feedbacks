<?php 
$servidor = "localhost";
$usuario = "admin";
$senha = "123";
$banco = "sistema_feedback";

$link = mysqli_connect($servidor, $usuario, $senha, $banco)
    or die("Não foi possivel se conectar:" . mysqli_error($link));