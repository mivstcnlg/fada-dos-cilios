<?php
include 'db_conection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cpf = $_POST['cpf'];
    $paciente = $_POST['paciente'];
    $profissao = $_POST['profissao'];
    $data_nasc = $_POST['data_nasc'];
    $sexo = $_POST['sexo'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $indicado_por = $_POST['indicado_por'];
    $fez_extensao = $_POST['fez_extensao'];
    $gestante = $_POST['gestante'];
    $tempo_gestacao = $_POST['tempo_gestacao'];
    $procedimento_olhos = $_POST['procedimento_olhos'];
    $alergia_esmalte = $_POST['alergia_esmalte'];
    $alergia_esmalte_qual = $_POST['alergia_esmalte_qual'];
    $tiroide = $_POST['tiroide'];
    $problema_respiratorio = $_POST['problema_respiratorio'];
    $tipo_problema_respiratorio = $_POST['tipo_problema_respiratorio'];
    $uso_lentes = $_POST['uso_lentes'];
    $problema_ocular = $_POST['problema_ocular'];
    $tipo_problema_ocular = $_POST['tipo_problema_ocular'];
    $tratamento_oncologico = $_POST['tratamento_oncologico'];
    $dorme_de_lado = $_POST['dorme_de_lado'];
    $posicao = $_POST['posicao'];
    $problemas_serios = $_POST['problemas_serios'];
    $tipo_procedimento = $_POST['tipo_procedimento'];
    $mapping = $_POST['mapping'];
    $estilo = $_POST['estilo'];
    $modelo_de_fios = $_POST['modelo_de_fios'];
    $espessura = $_POST['espessura'];
    $curvatura = $_POST['curvatura'];
    $adesivo = $_POST['adesivo'];
    $marca = $_POST['marca'];
    $pads = $_POST['pads'];
    $tempo_de_acao = $_POST['tempo_de_acao'];
    $tintura = $_POST['tintura'];
    $cor = $_POST['cor'];
    $data_tempo = $_POST['data_tempo'];
    $assinatura = $_POST['assinatura'];
    $termo_acordado = $_POST['termo_acordado'];

    $sql = "INSERT INTO formulario_cilios (cpf, paciente, profissao, data_nasc, sexo, endereco, cidade, telefone, email, indicado_por, fez_extensao, gestante, tempo_gestacao, procedimento_olhos, alergia_esmalte, alergia_esmalte_qual, tiroide, problema_respiratorio, tipo_problema_respiratorio, uso_lentes, problema_ocular, tipo_problema_ocular, tratamento_oncologico, dorme_de_lado, posicao, problemas_serios, tipo_procedimento, mapping, estilo, modelo_de_fios, espessura, curvatura, adesivo, marca, pads, tempo_de_acao, tintura, cor, data_tempo, assinatura, termo_acordado) 
            VALUES ('$cpf', '$paciente', '$profissao', '$data_nasc', '$sexo', '$endereco', '$cidade', '$telefone', '$email', '$indicado_por', '$fez_extensao', '$gestante', '$tempo_gestacao', '$procedimento_olhos', '$alergia_esmalte', '$alergia_esmalte_qual', '$tiroide', '$problema_respiratorio', '$tipo_problema_respiratorio', '$uso_lentes', '$problema_ocular', '$tipo_problema_ocular', '$tratamento_oncologico', '$dorme_de_lado', '$posicao', '$problemas_serios', '$tipo_procedimento', '$mapping', '$estilo', '$modelo_de_fios', '$espessura', '$curvatura', '$adesivo', '$marca', '$pads', '$tempo_de_acao', '$tintura', '$cor', '$data_tempo', '$assinatura', '$termo_acordado')";

    if ($conn->query($sql) === TRUE) {
        echo "Tratamento de Cílios registrado com sucesso!";
    } else {
        echo "Erro ao registrar tratamento de Cílios: " . $conn->error;
    }
}

$conn->close();
?>
