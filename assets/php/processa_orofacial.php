<?php
include('conexao.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cliente_id = $_POST['cliente_id'];  // Recebe o ID do cliente da sessão ou de um campo oculto
    $indicado_por = $_POST['indicado_por'];
    $inicio_tratamento = $_POST['inicio_tratamento'];
    $objetivo_consulta = $_POST['objetivo_consulta'];
    $emergencia_nome = $_POST['emergencia_nome'];
    $emergencia_telefone = $_POST['emergencia_telefone'];
    $tratamento_estetico = $_POST['tratamento_estetico'];
    $alergia_medicamento = $_POST['alergia_medicamento'];
    $alergia_qual = $_POST['alergia_qual'];
    $uso_medicamento = $_POST['uso_medicamento'];
    $medicamento_qual = $_POST['medicamento_qual'];
    $fumante = $_POST['fumante'];
    $fumante_obs = $_POST['fumante_obs'];
    $acido_pele = $_POST['acido_pele'];
    $acido_obs = $_POST['acido_obs'];
    $tratamento_medico = $_POST['tratamento_medico'];
    $tratamento_med_qual = $_POST['tratamento_med_qual'];
    $gestante = $_POST['gestante'];
    $filhos = $_POST['filhos'];
    $problema_coracao = $_POST['problema_coracao'];
    $coracao_qual = $_POST['coracao_qual'];
    $exposicao_sol = $_POST['exposicao_sol'];
    $exposicao_sol_obs = $_POST['exposicao_sol_obs'];
    $cancer = $_POST['cancer'];
    $cancer_qual = $_POST['cancer_qual'];
    $cuidado_estetico = $_POST['cuidado_estetico'];
    $cuidado_qual = $_POST['cuidado_qual'];
    $intolerancia_lactose = $_POST['intolerancia_lactose'];
    $diabetes = $_POST['diabetes'];
    $alergia_ovo = $_POST['alergia_ovo'];
    $data_termo = $_POST['data_termo'];
    $assinatura = $_POST['assinatura'];
    $termo_concordo = $_POST['termo_concordo'];

    // Insere os dados na tabela de anamnese orofacial
    $query = "INSERT INTO anamnese_orofacial (id_cliente, indicado_por, inicio_tratamento, objetivo_consulta, emergencia_nome, emergencia_telefone, 
             tratamento_estetico, alergia_medicamento, alergia_qual, uso_medicamento, medicamento_qual, fumante, fumante_obs, acido_pele, acido_obs, 
             tratamento_medico, tratamento_med_qual, gestante, filhos, problema_coracao, coracao_qual, exposicao_sol, exposicao_sol_obs, cancer, cancer_qual, 
             cuidado_estetico, cuidado_qual, intolerancia_lactose, diabetes, alergia_ovo, data_termo, assinatura, termo_concordo) 
             VALUES ('$cliente_id', '$indicado_por', '$inicio_tratamento', '$objetivo_consulta', '$emergencia_nome', '$emergencia_telefone', 
             '$tratamento_estetico', '$alergia_medicamento', '$alergia_qual', '$uso_medicamento', '$medicamento_qual', '$fumante', '$fumante_obs', '$acido_pele', 
             '$acido_obs', '$tratamento_medico', '$tratamento_med_qual', '$gestante', '$filhos', '$problema_coracao', '$coracao_qual', '$exposicao_sol', 
             '$exposicao_sol_obs', '$cancer', '$cancer_qual', '$cuidado_estetico', '$cuidado_qual', '$intolerancia_lactose', '$diabetes', '$alergia_ovo', 
             '$data_termo', '$assinatura', '$termo_concordo')";
    mysqli_query($conexao, $query);

    echo "Anamnese Orofacial processada com sucesso!";
}
?>
