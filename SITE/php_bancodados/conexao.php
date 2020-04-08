<?php

$servidor = "localhost";
$usuario = "id9305481_root";
$senha = "12345";
$dbname = "id9305481_dbhemocentro";

//Criar conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>