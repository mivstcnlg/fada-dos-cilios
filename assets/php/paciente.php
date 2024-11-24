<?php
include 'conexao.php';

$nome = $data_nasc = $sexo = $telefone = $email = $endereco = $cidade = $cpf = "";
$paciente_id = "";

if (isset($_GET['id'])) {
    $paciente_id = $_GET['id'];
    
    $sql = "SELECT * FROM paciente WHERE id = :paciente_id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':paciente_id', $paciente_id);
    $stmt->execute();
    
    if ($stmt->rowCount() > 0) {
        $paciente = $stmt->fetch(PDO::FETCH_ASSOC);
        $nome = $paciente['nome'];
        $data_nasc = $paciente['data_nasc'];
        $sexo = $paciente['sexo'];
        $telefone = $paciente['telefone'];
        $email = $paciente['email'];
        $endereco = $paciente['endereco'];
        $cidade = $paciente['cidade'];
        $cpf = $paciente['cpf'];
    } else {
        echo "Paciente não encontrado!";
        exit;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $data_nasc = $_POST['data_nasc'];
    $sexo = $_POST['sexo'];
    $telefone = htmlspecialchars($_POST['telefone']);
    $email = htmlspecialchars($_POST['email']);
    $endereco = htmlspecialchars($_POST['endereco']);
    $cidade = $_POST['cidade'];
    $cpf = htmlspecialchars($_POST['cpf']);

    if (empty($nome) || empty($email) || empty($telefone) || empty($cpf)) {
        echo "Todos os campos obrigatórios precisam ser preenchidos!";
        exit;
    }

    if (!preg_match('/^\d{11}$/', $cpf)) {
        echo "Por favor, insira um CPF válido (11 dígitos).";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Por favor, insira um e-mail válido!";
        exit;
    }

    if (!preg_match('/^\d{10,11}$/', $telefone)) {
        echo "Por favor, insira um número de telefone válido (10 ou 11 dígitos).";
        exit;
    }

    if (empty($paciente_id)) {
        $sql = "INSERT INTO paciente (nome, data_nasc, sexo, telefone, email, endereco, cidade, cpf) 
                VALUES (:nome, :data_nasc, :sexo, :telefone, :email, :endereco, :cidade, :cpf)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':data_nasc', $data_nasc);
        $stmt->bindParam(':sexo', $sexo);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':endereco', $endereco);
        $stmt->bindParam(':cidade', $cidade);
        $stmt->bindParam(':cpf', $cpf);
        
        if ($stmt->execute()) {
            echo "Paciente cadastrado com sucesso!";
        } else {
            echo "Erro ao cadastrar paciente.";
        }
    } else {
        $sql = "UPDATE paciente 
                SET nome = :nome, data_nasc = :data_nasc, sexo = :sexo, telefone = :telefone, 
                    email = :email, endereco = :endereco, cidade = :cidade, cpf = :cpf
                WHERE id = :paciente_id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':data_nasc', $data_nasc);
        $stmt->bindParam(':sexo', $sexo);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':endereco', $endereco);
        $stmt->bindParam(':cidade', $cidade);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->bindParam(':paciente_id', $paciente_id);
        
        if ($stmt->execute()) {
            echo "Paciente atualizado com sucesso!";
        } else {
            echo "Erro ao atualizar paciente.";
        }
    }
}
?>
