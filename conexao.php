<?php
$localhost = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'SandroDB'

$conexao = mysqli_connect($localhost, $usuario, $senha, $banco) or die ('Não foi possível conectar');
?>
