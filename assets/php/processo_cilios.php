<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fada_dos_cilios";


$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro ao conectar ao banco de dados: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $cpf = $_POST['cpf'];
    $paciente = $_POST['paciente'];
    $profissao = $_POST['profissao'];
    $data_nascimento = $_POST['data_nascimento'];
    $sexo = $_POST['sexo'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $indicado_por = $_POST['indicado_por'];
    $fez_extensao = $_POST['fez_extensao'];
    $gestante = $_POST['gestante'];
    $tmp_gestacao = $_POST['tmp_gestacao'];
    $procedimentos_olhos = $_POST['procedimentos_olhos'];
    $alergias = $_POST['alergias'];
    $alergiacilios_qual = $_POST['alergiacilios_qual'];
    $tireoide = $_POST['tireoide'];
    $problema_respiratorio = $_POST['problema_respiratorio'];
    $problema_respiratorio_qual = $_POST['problema_respiratorio_qual'];
    $lentes = $_POST['lentes'];
    $problema_ocular = $_POST['problema_ocular'];
    $problema_ocular_qual = $_POST['problema_ocular_qual'];
    $tratamento_oncologico = $_POST['tratamento_oncologico'];
    $trat_ocular_qual = $_POST['trat_ocular_qual'];
    $dorme_lado = $_POST['dorme_lado'];
    $dorme_lado_qual = $_POST['dorme_lado_qual'];
    $info_extra = $_POST['info_extra'];
    $informacao_extra = $_POST['informacao_extra'];
    $tipo = implode(", ", $_POST['tipo']);
    $mapping = $_POST['mapping'];
    $estilo = $_POST['estilo'];
    $modelo_fios = $_POST['modelo_fios'];
    $espessura = $_POST['espessura'];
    $curvatura = $_POST['curvatura'];
    $adesivo = $_POST['adesivo'];
    $marca = $_POST['marca'];
    $moldes = $_POST['moldes'];
    $tempo_acao = $_POST['tempo_acao'];
    $tintura = $_POST['tintura'];
    $cor = $_POST['cor'];
    $emergencia_nome = $_POST['emergencia_nome'];
    $emergencia_telefone = $_POST['emergencia_telefone'];
    $compromisso_orientacoes = $_POST['compromisso_orientacoes'];
    $data_termo = $_POST['data_termo'];
    $assinatura = $_POST['assinatura'];
    $termo_concordo = $_POST['termo_concordo'];

    $fields = [
        'cpf', 'paciente', 'profissao', 'data_nascimento', 'sexo', 'endereco', 'cidade', 'telefone', 'email', 'data_termo', 'assinatura', 'termo_concordo'
    ];
    foreach ($fields as $field) {
        if (empty($$field)) {
            echo "O campo $field é obrigatório!";
            exit;
        }
    }

    $sql = "INSERT INTO anamnese_cilios (
        id,cpf, paciente, profissao, data_nascimento, sexo, endereco, cidade, telefone, email, indicado_por, 
        fez_extensao, gestante, tmp_gestacao, procedimentos_olhos, alergias, alergiacilios_qual, tireoide, 
        problema_respiratorio, problema_respiratorio_qual, lentes, problema_ocular, problema_ocular_qual, 
        tratamento_oncologico, trat_ocular_qual, dorme_lado, dorme_lado_qual, info_extra, informacao_extra, 
        tipo, mapping, estilo, modelo_fios, espessura, curvatura, adesivo, marca, moldes, tempo_acao, tintura, 
        cor, emergencia_nome, emergencia_telefone, compromisso_orientacoes, data_termo, assinatura, termo_concordo
    ) VALUES (
       1, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
    )";


    $stmt = $conn->prepare($sql);


    $stmt->bind_param('ssssssssssssssssssssssssssssssssssssssssssssssss', 
        $cpf, $paciente, $profissao, $data_nascimento, $sexo, $endereco, $cidade, $telefone, $email, $indicado_por, 
        $fez_extensao, $gestante, $tmp_gestacao, $procedimentos_olhos, $alergias, $alergiacilios_qual, $tireoide, 
        $problema_respiratorio, $problema_respiratorio_qual, $lentes, $problema_ocular, $problema_ocular_qual, 
        $tratamento_oncologico, $trat_ocular_qual, $dorme_lado, $dorme_lado_qual, $info_extra, $informacao_extra, 
        $tipo, $mapping, $estilo, $modelo_fios, $espessura, $curvatura, $adesivo, $marca, $moldes, $tempo_acao, $tintura, 
        $cor, $emergencia_nome, $emergencia_telefone, $compromisso_orientacoes, $data_termo, $assinatura, $termo_concordo
    );

    if ($stmt->execute()) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir os dados: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
