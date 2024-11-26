<?php
include 'db_conection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $profissao = $_POST['profissao'];
    $data_nasc = $_POST['data_nasc'];
    $sexo = $_POST['sexo'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $indicado_por = $_POST['indicado_por'];

    $sql = "INSERT INTO pacientes (cpf, nome, profissao, data_nasc, sexo, endereco, cidade, telefone, email, indicado_por) 
            VALUES ('$cpf', '$nome', '$profissao', '$data_nasc', '$sexo', '$endereco', '$cidade', '$telefone', '$email', '$indicado_por')";

    if ($conn->query($sql) === TRUE) {
        echo "Paciente cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar paciente: " . $conn->error;
    }
}

$conn->close();
?>
