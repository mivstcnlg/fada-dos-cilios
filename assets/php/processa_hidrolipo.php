<?php
include('conexao.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cliente_id = $_POST['cliente_id'];  // Recebe o ID do cliente da sessão ou de um campo oculto
    $indicado_por = $_POST['indicado_por'];
    $objetivo_consulta = $_POST['objetivo_consulta'];
    $gestante = $_POST['gestante'];
    $anticoncepcional = $_POST['anticoncepcional'];
    $emergencia_nome = $_POST['emergencia_nome'];
    $emergencia_telefone = $_POST['emergencia_telefone'];
    $data_termo = $_POST['data_termo'];
    $assinatura = $_POST['assinatura'];
    $termo_concordo = $_POST['termo_concordo'];

    // Insere os dados na tabela de anamnese hidrolipo
    $query = "INSERT INTO anamnese_hidrolipo (id_cliente, indicado_por, objetivo_consulta, gestante, anticoncepcional, emergencia_nome, emergencia_telefone, 
            data_termo, assinatura, termo_concordo) 
            VALUES ('$cliente_id', '$indicado_por', '$objetivo_consulta', '$gestante', '$anticoncepcional', '$emergencia_nome', '$emergencia_telefone', 
            '$data_termo', '$assinatura', '$termo_concordo')";
    
    if (mysqli_query($conexao, $query)) {
        echo "Anamnese Hidrolipo processada com sucesso!";
    } else {
        echo "Erro ao processar anamnese: " . mysqli_error($conexao);
    }
}
?>
