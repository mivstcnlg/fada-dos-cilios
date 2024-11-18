<?php
// hidrolipo.php - Processamento do Formulário Hidrolipo

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fada_dos_cilios";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $paciente = $_POST['paciente'];
    $profissao = $_POST['profissao'];
    $data_nasc = $_POST['data_nasc'];
    $sexo = $_POST['sexo'];
    $estado_civil = $_POST['estado_civil'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $indicado_por = $_POST['indicado_por'];
    $inicio_tratamento = $_POST['inicio_tratamento'];
    $objetivo_consulta = $_POST['objetivo_consulta'];
    $queixa_principal = $_POST['queixa_principal'];
    $tipo_queixa = $_POST['tipo_queixa'];
    $medicacao_continua = $_POST['medicacao_continua'];
    $tipo_medicacao_continua = $_POST['tipo_medicacao_continua'];
    $historico_familiar = $_POST['historico_familiar'];
    $problema_historico_familiar = $_POST['problema_historico_familiar'];
    $historico_pregressa_familiar = $_POST['historico_pregressa_familiar'];
    $problema_pregressa_familiar = $_POST['problema_pregressa_familiar'];
    $oncologia = $_POST['oncologia'];
    $historico_oncologia = $_POST['historico_oncologia'];
    $diabete = $_POST['diabete'];
    $hipertensao_hipotensao = $_POST['hipertensao_hipotensao'];
    $problema_circular = $_POST['problema_circular'];
    $tipo_problema_circular = $_POST['tipo_problema_circular'];
    $alergia = $_POST['alergia'];
    $tipo_alergia = $_POST['tipo_alergia'];
    $gestante = $_POST['gestante'];
    $tempo_gestacao = $_POST['tempo_gestacao'];
    $anticoncepcional = $_POST['anticoncepcional'];
    $nome_emergencia = $_POST['nome_emergencia'];
    $telefone_emergencia = $_POST['telefone_emergencia'];
    $data_tempo = $_POST['data_tempo'];
    $assinatura = $_POST['assinatura'];
    $termo_acordado = $_POST['termo_acordado'];

    $sql = "INSERT INTO hidrolipo (paciente, profissao, data_nasc, sexo, estado_civil, endereco, cidade, telefone, email, indicado_por, inicio_tratamento, objetivo_consulta, queixa_principal, tipo_queixa, medicacao_continua, tipo_medicacao_continua, historico_familiar, problema_historico_familiar, historico_pregressa_familiar, problema_pregressa_familiar, oncologia, historico_oncologia, diabete, hipertensao_hipotensao, problema_circular, tipo_problema_circular, alergia, tipo_alergia, gestante, tempo_gestacao, anticoncepcional, nome_emergencia, telefone_emergencia, data_tempo, assinatura, termo_acordado)
            VALUES ('$paciente', '$profissao', '$data_nasc', '$sexo', '$estado_civil', '$endereco', '$cidade', '$telefone', '$email', '$indicado_por', '$inicio_tratamento', '$objetivo_consulta', '$queixa_principal', '$tipo_queixa', '$medicacao_continua', '$tipo_medicacao_continua', '$historico_familiar', '$problema_historico_familiar', '$historico_pregressa_familiar', '$problema_pregressa_familiar', '$oncologia', '$historico_oncologia', '$diabete', '$hipertensao_hipotensao', '$problema_circular', '$tipo_problema_circular', '$alergia', '$tipo_alergia', '$gestante', '$tempo_gestacao', '$anticoncepcional', '$nome_emergencia', '$telefone_emergencia', '$data_tempo', '$assinatura', '$termo_acordado')";

    if ($conn->query($sql) === TRUE) {
        echo "Cadastro de paciente Hidrolipo realizado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
