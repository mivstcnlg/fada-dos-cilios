<?php
// Conexão com o banco de dados
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'fada_cilios';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Recebendo os dados do formulário
$queixa_principal = $_POST['qp'];
$medicamento_continuo = $_POST['medicamentos'];
$historico_familiar = $_POST['hf'];
$historico_pregressa_pessoal = $_POST['hpp'];
$antecedentes_oncologicos = $_POST['onco'];
$diabete = $_POST['diabete'];
$hipertensao = $_POST['hipotensao_hipotensao'];
$problema_circulatorio = $_POST['problema-circulatorio'];
$alergias = $_POST['alergias'];
$gestante = $_POST['gestante'];
$anticoncepcional = $_POST['anticoncepcional'];
$emergencia_nome = $_POST['emergencia_nome'];
$emergencia_telefone = $_POST['emergencia_telefone'];
$compromisso_orientacoes = $_POST['compromisso_orientacoes'];
$data_termo = $_POST['data_termo'];
$assinatura = $_POST['assinatura'];
$termo_concordo = isset($_POST['termo_concordo']) ? 1 : 0;

// Verifica se o CPF já existe
$query = "SELECT id FROM paciente WHERE cpf = ?";
//Prepara a consulta SQL para execução, associando-a ao objeto $stmt
$stmt = $conn->prepare($query);
// Liga o valor da variável $cpf ao marcador de posição ?. O parâmetro "s" indica que o valor é uma string.
$stmt->bind_param("s", $cpf);
// Executa a consulta SQL preparada.
$stmt->execute();
// Obtém o resultado da consulta.
$result = $stmt->get_result();

// Verifica se há pelo menos uma linha no resultado, indicando que o CPF já existe.
if ($result->num_rows > 0) {
    // Atualiza os dados do paciente
    $row = $result->fetch_assoc();
    $paciente_id = $row['id'];

    // Define uma consulta SQL para atualizar os dados do paciente com base no id.
    $query = "UPDATE paciente SET nome = ?, profissao = ?, data_nascimento = ?, sexo = ?, endereco = ?, cidade = ?, telefone = ?, email = ? WHERE id = ?";
    // Prepara a consulta e associa os valores às respectivas colunas. O formato "ssssssssi" indica: 8 strings (s) para os campos de texto. 1 inteiro (i) para o id.
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssssssssi", $nome, $profissao, $data_nascimento, $sexo, $endereco, $cidade, $telefone, $email, $paciente_id);
} else {
    // Insere um novo paciente, caso o cpf nao tenha sido cadastrado ainda
    $query = "INSERT INTO paciente (cpf, nome, profissao, data_nascimento, sexo, endereco, cidade, telefone, email) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    // Prepara a consulta e associa os valores às colunas correspondentes.
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssssssss", $cpf, $nome, $profissao, $data_nascimento, $sexo, $endereco, $cidade, $telefone, $email); 
    // executa a consulta e obtem o ID do novo registro inserido
    $stmt->execute();
    $paciente_id = $stmt->insert_id;
}

// Insere os dados do formulário
$query = "INSERT INTO formulario (paciente_id, indicado_por, queixa_principal, medicamento_continuo, historico_familiar, historico_pregressa_pessoal, antecedentes_oncologicos, diabete, hipertensao, problema_circulatorio, alergias, gestante, anticoncepcional, emergencia_nome, emergencia_telefone, compromisso_orientacoes, data_termo, assinatura, termo_concordo) 
          VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($query);
$stmt->bind_param("isssssssssssssssssi", $paciente_id, $indicado_por, $queixa_principal, $medicamento_continuo, $historico_familiar, $historico_pregressa_pessoal, $antecedentes_oncologicos, $diabete, $hipertensao, $problema_circulatorio, $alergias, $gestante, $anticoncepcional, $emergencia_nome, $emergencia_telefone, $compromisso_orientacoes, $data_termo, $assinatura, $termo_concordo);
$stmt->execute();

echo "Formulário enviado com sucesso!";
?>
