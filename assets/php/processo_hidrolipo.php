<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fada_dos_cilios";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

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


$query = "SELECT id FROM paciente WHERE cpf = ?";

$stmt = $conn->prepare($query);

$stmt->bind_param("s", $cpf);

$stmt->execute();

$result = $stmt->get_result();


if ($result->num_rows > 0) {

    $row = $result->fetch_assoc();
    $paciente_id = $row['id'];

    $query = "UPDATE paciente SET nome = ?, profissao = ?, data_nascimento = ?, sexo = ?, endereco = ?, cidade = ?, telefone = ?, email = ? WHERE id = ?";

    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssssssssi", $nome, $profissao, $data_nascimento, $sexo, $endereco, $cidade, $telefone, $email, $paciente_id);
} else {

    $query = "INSERT INTO paciente (cpf, nome, profissao, data_nascimento, sexo, endereco, cidade, telefone, email) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssssssss", $cpf, $nome, $profissao, $data_nascimento, $sexo, $endereco, $cidade, $telefone, $email); 

    $stmt->execute();
    $paciente_id = $stmt->insert_id;
}

$query = "INSERT INTO formulario (paciente_id, indicado_por, queixa_principal, medicamento_continuo, historico_familiar, historico_pregressa_pessoal, antecedentes_oncologicos, diabete, hipertensao, problema_circulatorio, alergias, gestante, anticoncepcional, emergencia_nome, emergencia_telefone, compromisso_orientacoes, data_termo, assinatura, termo_concordo) 
          VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($query);
$stmt->bind_param("isssssssssssssssssi", $paciente_id, $indicado_por, $queixa_principal, $medicamento_continuo, $historico_familiar, $historico_pregressa_pessoal, $antecedentes_oncologicos, $diabete, $hipertensao, $problema_circulatorio, $alergias, $gestante, $anticoncepcional, $emergencia_nome, $emergencia_telefone, $compromisso_orientacoes, $data_termo, $assinatura, $termo_concordo);
$stmt->execute();

echo "Formulário enviado com sucesso!";
?>
