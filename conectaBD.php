<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'sneakersbd';

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if (!$conexao) {
    die('Não foi possivel conectar:' .mysql_error());
}
?>