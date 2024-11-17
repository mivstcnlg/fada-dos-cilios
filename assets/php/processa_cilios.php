<?php
include('conexao.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cliente_id = $_POST['cliente_id'];  // Recebe o ID do cliente da sessão ou de um campo oculto
    $fez_extensao = $_POST['fez_extensao'];
    $gestante = $_POST['gestante'];
    $alergias = $_POST['alergias'];
    $alergiacilios_qual = $_POST['alergiacilios_qual'];
    $tipo = $_POST['tipo'];
    $mapping = $_POST['mapping'];
    $estilo = $_POST['estilo'];
    $modelo = $_POST['modelo'];
    $espessura = $_POST['espessura'];
    $curvatura = $_POST['curvatura'];
    $tempo = $_POST['tempo'];
    $tintura = $_POST['tintura'];
    $cor = $_POST['cor'];
    $data_termo = $_POST['data_termo'];
    $assinatura = $_POST['assinatura'];
    $termo_concordo = $_POST['termo_concordo'];

    // Insere os dados na tabela de anamnese cílios
    $query = "INSERT INTO anamnese_cilios (id_cliente, fez_extensao, gestante, alergias, alergiacilios_qual, tipo, mapping, estilo, modelo, espessura, curvatura, tempo, tintura, cor, data_termo, assinatura, termo_concordo) 
              VALUES ('$cliente_id', '$fez_extensao', '$gestante', '$alergias', '$alergiacilios_qual', '$tipo', '$mapping', '$estilo', '$modelo', '$espessura', '$curvatura', '$tempo', '$tintura', '$cor', '$data_termo', '$assinatura', '$termo_concordo')";
    mysqli_query($conexao, $query);

    echo "Anamnese Cílios processada com sucesso!";
}
?>
