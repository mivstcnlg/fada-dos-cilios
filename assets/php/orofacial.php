<?php
// orofacial.php - Processamento do Formulário Orofacial

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
    $nome_emergencia = $_POST['nome_emergencia'];
    $telefone_emergencia = $_POST['telefone_emergencia'];
    $tratamento_estetico = $_POST['tratamento_estetico'];
    $tipo_tratamento_estetico = $_POST['tipo_tratamento_estetico'];
    $alergia_medicamento = $_POST['alergia_medicamento'];
    $alergia_medicamento_qual = $_POST['alergia_medicamento_qual'];
    $medicamento = $_POST['medicamento'];
    $medicamento_qual = $_POST['medicamento_qual'];
    $fumante = $_POST['fumante'];
    $fumante_tempo = $_POST['fumante_tempo'];
    $uso_acido = $_POST['uso_acido'];
    $tipo_acido_usado = $_POST['tipo_acido_usado'];
    $tratamento_medico = $_POST['tratamento_medico'];
    $tipo_tratamento_medico = $_POST['tipo_tratamento_medico'];
    $gestante = $_POST['gestante'];
    $tempo_gestacao = $_POST['tempo_gestacao'];
    $filhos = $_POST['filhos'];
    $quantidade_filhos = $_POST['quantidade_filhos'];
    $problema_cardiaco = $_POST['problema_cardiaco'];
    $tipo_problema_cardiaco = $_POST['tipo_problema_cardiaco'];
    $exposicao_sol = $_POST['exposicao_sol'];
    $tempo_exposicao_sol = $_POST['tempo_exposicao_sol'];
    $cancer = $_POST['cancer'];
    $tipo_cancer = $_POST['tipo_cancer'];
    $intolerancia_lactose = $_POST['intolerancia_lactose'];
    $diabete = $_POST['diabete'];
    $alergia_ovo = $_POST['alergia_ovo'];
    $data_tempo = $_POST['data_tempo'];
    $assinatura = $_POST['assinatura'];
    $termo_acordado = $_POST['termo_acordado'];

    $sql = "INSERT INTO orofacial (paciente, profissao, data_nasc, sexo, estado_civil, endereco, cidade, telefone, email, indicado_por, inicio_tratamento, objetivo_consulta, nome_emergencia, telefone_emergencia, tratamento_estetico, tipo_tratamento_estetico, alergia_medicamento, alergia_medicamento_qual, medicamento, medicamento_qual, fumante, fumante_tempo, uso_acido, tipo_acido_usado, tratamento_medico, tipo_tratamento_medico, gestante, tempo_gestacao, filhos, quantidade_filhos, problema_cardiaco, tipo_problema_cardiaco, exposicao_sol, tempo_exposicao_sol, cancer, tipo_cancer, intolerancia_lactose, diabete, alergia_ovo, data_tempo, assinatura, termo_acordado) 
            VALUES ('$paciente', '$profissao', '$data_nasc', '$sexo', '$estado_civil', '$endereco', '$cidade', '$telefone', '$email', '$indicado_por', '$inicio_tratamento', '$objetivo_consulta', '$nome_emergencia', '$telefone_emergencia', '$tratamento_estetico', '$tipo_tratamento_estetico', '$alergia_medicamento', '$alergia_medicamento_qual', '$medicamento', '$medicamento_qual', '$fumante', '$fumante_tempo', '$uso_acido', '$tipo_acido_usado', '$tratamento_medico', '$tipo_tratamento_medico', '$gestante', '$tempo_gestacao', '$filhos', '$quantidade_filhos', '$problema_cardiaco', '$tipo_problema_cardiaco', '$exposicao_sol', '$tempo_exposicao_sol', '$cancer', '$tipo_cancer', '$intolerancia_lactose', '$diabete', '$alergia_ovo', '$data_tempo', '$assinatura', '$termo_acordado')";

    if ($conn->query($sql) === TRUE) {
        echo "Cadastro de paciente orofacial realizado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
