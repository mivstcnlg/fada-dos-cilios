<?php
include('conexao.php');  // Inclua a conexão com o banco de dados

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $estado_civil = $_POST['estado_civil'];
    $data_nascimento = $_POST['data_nascimento'];
    $sexo = $_POST['sexo'];
    $termo_concordo = $_POST['termo_concordo'];

    // Verifica se o cliente já existe
    $query = "SELECT id FROM clientes WHERE email = '$email'";
    $result = mysqli_query($conexao, $query);
    if (mysqli_num_rows($result) == 0) {
        // Insere o cliente na tabela
        $query = "INSERT INTO clientes (nome, email, telefone, endereco, cidade, estado_civil, data_nascimento, sexo, termo_concordo) 
                  VALUES ('$nome', '$email', '$telefone', '$endereco', '$cidade', '$estado_civil', '$data_nascimento', '$sexo', '$termo_concordo')";
        mysqli_query($conexao, $query);
        $cliente_id = mysqli_insert_id($conexao);
    } else {
        $cliente = mysqli_fetch_assoc($result);
        $cliente_id = $cliente['id'];
    }

    // Agora redireciona ou insere nas outras tabelas, conforme necessário
    // Redirecionar ou exibir mensagem
   
