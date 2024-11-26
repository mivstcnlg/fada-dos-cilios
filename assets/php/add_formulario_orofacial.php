<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $paciente_id = $_POST['paciente_id'];
    $nome_emergencia = $_POST['nome_emergencia'];
    $telefone_emergencia = $_POST['telefone_emergencia'];
    $tratamento_estetico = isset($_POST['tratamento_estetico']) ? 1 : 0;
    $tipo_tratamento_estetico = $_POST['tipo_tratamento_estetico'];
    $alergia_medicamento = isset($_POST['alergia_medicamento']) ? 1 : 0;
    $alergia_medicamento_qual = $_POST['alergia_medicamento_qual'];
    $medicamento = isset($_POST['medicamento']) ? 1 : 0;
    $medicamento_qual = $_POST['medicamento_qual'];
    $fumante = isset($_POST['fumante']) ? 1 : 0;
    $fumante_tempo = $_POST['fumante_tempo'];
    $uso_acido = isset($_POST['uso_acido']) ? 1 : 0;
    $tipo_acido_usado = $_POST['tipo_acido_usado'];
    $tratamento_medico = isset($_POST['tratamento_medico']) ? 1 : 0;
    $tipo_tratamento_medico = $_POST['tipo_tratamento_medico'];
    $gestante = isset($_POST['gestante']) ? 1 : 0;
    $tempo_gestacao = $_POST['tempo_gestacao'];
    $filhos = isset($_POST['filhos']) ? 1 : 0;
    $quantidade_filhos = $_POST['quantidade_filhos'];
    $problema_cardiaco = isset($_POST['problema_cardiaco']) ? 1 : 0;
    $tipo_problema_cardiaco = $_POST['tipo_problema_cardiaco'];
    $exposicao_sol = isset($_POST['exposicao_sol']) ? 1 : 0;
    $tempo_exposicao_sol = $_POST['tempo_exposicao_sol'];
    $cancer = isset($_POST['cancer']) ? 1 : 0;
    $tipo_cancer = $_POST['tipo_cancer'];
    $intolerancia_lactose = isset($_POST['intolerancia_lactose']) ? 1 : 0;
    $diabete = isset($_POST['diabete']) ? 1 : 0;
    $alergia_ovo = isset($_POST['alergia_ovo']) ? 1 : 0;
    $data_tempo = $_POST['data_tempo'];
    $assinatura = $_POST['assinatura'];
    $termo_acordado = isset($_POST['termo_acordado']) ? 1 : 0;

    $sql = "INSERT INTO formulario_orofacial (paciente_id, nome_emergencia, telefone_emergencia, tratamento_estetico, tipo_tratamento_estetico, alergia_medicamento, alergia_medicamento_qual, medicamento, medicamento_qual, fumante, fumante_tempo, uso_acido, tipo_acido_usado, tratamento_medico, tipo_tratamento_medico, gestante, tempo_gestacao, filhos, quantidade_filhos, problema_cardiaco, tipo_problema_cardiaco, exposicao_sol, tempo_exposicao_sol, cancer, tipo_cancer, intolerancia_lactose, diabete, alergia_ovo, data_tempo, assinatura, termo_acordado)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("isssssssiissssssiiissssssssi", $paciente_id, $nome_emergencia, $telefone_emergencia, $tratamento_estetico, $tipo_tratamento_estetico, $alergia_medicamento, $alergia_medicamento_qual, $medicamento, $medicamento_qual, $fumante, $fumante_tempo, $uso_acido, $tipo_acido_usado, $tratamento_medico, $tipo_tratamento_medico, $gestante, $tempo_gestacao, $filhos, $quantidade_filhos, $problema_cardiaco, $tipo_problema_cardiaco, $exposicao_sol, $tempo_exposicao_sol, $cancer, $tipo_cancer, $intolerancia_lactose, $diabete, $alergia_ovo, $data_tempo, $assinatura, $termo_acordado);

        $stmt->execute();
        echo "Dados salvos com sucesso!";
    } else {
        echo "Erro ao salvar os dados: " . $conn->error;
    }

    $stmt->close();
}
?>
