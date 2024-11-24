
<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "fada_dos_cilios";
$banco = "nome_do_banco";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if (!$conexao) {
    die("Erro de conexão: " . mysqli_connect_error());
}
?>
