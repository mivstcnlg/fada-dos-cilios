<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fada_dos_cilios";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cpf = $_POST['cpf'];
        $paciente = htmlspecialchars($_POST['paciente']);
        $profissao = htmlspecialchars($_POST['profissao']);
        $data_nascimento = htmlspecialchars($_POST['data_nascimento']);
        $sexo = $_POST['sexo'];
        $endereco = htmlspecialchars($_POST['endereco']);
        $cidade = htmlspecialchars($_POST['cidade']);
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $indicado_por = htmlspecialchars($_POST['indicado_por']);
        $tratamento_estetico = $_POST['tratamento_estetico'];
        $tipo_tratamento_estetico = htmlspecialchars($_POST['tipo_tratamento_estetico']);
        $alergia_medicamento = $_POST['alergia_medicamento'];
        $alergia_qual = htmlspecialchars($_POST['alergia_qual']);
        $uso_medicamento = $_POST['uso_medicamento'];
        $medicamento_qual = htmlspecialchars($_POST['medicamento_qual']);
        $fumante = $_POST['fumante'];
        $fumante_obs = htmlspecialchars($_POST['fumante_obs']);
        $acido_pele = $_POST['acido_pele'];
        $acido_obs = htmlspecialchars($_POST['acido_obs']);
        $tratamento_medico = $_POST['tratamento_medico'];
        $tratamento_med_qual = htmlspecialchars($_POST['tratamento_med_qual']);
        $gestante = $_POST['gestante'];
        $tmp_gestacao = htmlspecialchars($_POST['tmp_gestacao']);
        $filhos = $_POST['filhos'];
        $qtd_de_filhos = htmlspecialchars($_POST['qtd_de_filhos']);
        $problema_coracao = $_POST['problema_coracao'];
        $problema_coracao_qual = htmlspecialchars($_POST['problema_coracao_qual']);
        $exposicao_sol = $_POST['exposicao_sol'];
        $exposicao_sol_obs = htmlspecialchars($_POST['exposicao_sol_obs']);
        $cancer = $_POST['cancer'];
        $cancer_qual = htmlspecialchars($_POST['cancer_qual']);
        $cuidado_estetico = $_POST['cuidado_estetico'];
        $cuidado_qual = htmlspecialchars($_POST['cuidado_qual']);
        $intolerancia_lactose = $_POST['intolerancia_lactose'];
        $diabetes = $_POST['diabetes'];
        $alergia_ovo = $_POST['alergia_ovo'];
        $emergencia_nome = $_POST['emergencia_nome'];
        $emergencia_telefone = $_POST['emergencia_telefone'];
        $compromisso_orientacoes = $_POST['compromisso_orientacoes'];
        $data_termo = $_POST['data_termo'];
        $assinatura = $_POST['assinatura'];
        $termo_concordo = $_POST['termo_concordo'];

        $sql = "INSERT INTO anamnese_orofacial 
            (cpf, paciente, profissao, data_nascimento, sexo, endereco, cidade, telefone, email, indicado_por, 
            tratamento_estetico, tipo_tratamento_estetico, alergia_medicamento, alergia_qual, uso_medicamento, 
            medicamento_qual, fumante, fumante_obs, acido_pele, acido_obs, tratamento_medico, tratamento_med_qual, 
            gestante, tmp_gestacao, filhos, qtd_de_filhos, problema_coracao, problema_coracao_qual, exposicao_sol, 
            exposicao_sol_obs, cancer, cancer_qual, cuidado_estetico, cuidado_qual, intolerancia_lactose, diabetes, 
            alergia_ovo, emergencia_nome, emergencia_telefone, compromisso_orientacoes, data_termo, assinatura, 
            termo_concordo) 
            VALUES 
            (:cpf, :paciente, :profissao, :data_nascimento, :sexo, :endereco, :cidade, :telefone, :email, :indicado_por, 
            :tratamento_estetico, :tipo_tratamento_estetico, :alergia_medicamento, :alergia_qual, :uso_medicamento, 
            :medicamento_qual, :fumante, :fumante_obs, :acido_pele, :acido_obs, :tratamento_medico, :tratamento_med_qual, 
            :gestante, :tmp_gestacao, :filhos, :qtd_de_filhos, :problema_coracao, :problema_coracao_qual, :exposicao_sol, 
            :exposicao_sol_obs, :cancer, :cancer_qual, :cuidado_estetico, :cuidado_qual, :intolerancia_lactose, :diabetes, 
            :alergia_ovo, :emergencia_nome, :emergencia_telefone, :compromisso_orientacoes, :data_termo, :assinatura, 
            :termo_concordo)";

        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':cpf', $cpf);
        $stmt->bindParam(':paciente', $paciente);
        $stmt->bindParam(':profissao', $profissao);
        $stmt->bindParam(':data_nascimento', $data_nascimento);
        $stmt->bindParam(':sexo', $sexo);
        $stmt->bindParam(':endereco', $endereco);
        $stmt->bindParam(':cidade', $cidade);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':indicado_por', $indicado_por);
        $stmt->bindParam(':tratamento_estetico', $tratamento_estetico);
        $stmt->bindParam(':tipo_tratamento_estetico', $tipo_tratamento_estetico);
        $stmt->bindParam(':alergia_medicamento', $alergia_medicamento);
        $stmt->bindParam(':alergia_qual', $alergia_qual);
        $stmt->bindParam(':uso_medicamento', $uso_medicamento);
        $stmt->bindParam(':medicamento_qual', $medicamento_qual);
        $stmt->bindParam(':fumante', $fumante);
        $stmt->bindParam(':fumante_obs', $fumante_obs);
        $stmt->bindParam(':acido_pele', $acido_pele);
        $stmt->bindParam(':acido_obs', $acido_obs);
        $stmt->bindParam(':tratamento_medico', $tratamento_medico);
        $stmt->bindParam(':tratamento_med_qual', $tratamento_med_qual);
        $stmt->bindParam(':gestante', $gestante);
        $stmt->bindParam(':tmp_gestacao', $tmp_gestacao);
        $stmt->bindParam(':filhos', $filhos);
        $stmt->bindParam(':qtd_de_filhos', $qtd_de_filhos);
        $stmt->bindParam(':problema_coracao', $problema_coracao);
        $stmt->bindParam(':problema_coracao_qual', $problema_coracao_qual);
        $stmt->bindParam(':exposicao_sol', $exposicao_sol);
        $stmt->bindParam(':exposicao_sol_obs', $exposicao_sol_obs);
        $stmt->bindParam(':cancer', $cancer);
        $stmt->bindParam(':cancer_qual', $cancer_qual);
        $stmt->bindParam(':cuidado_estetico', $cuidado_estetico);
        $stmt->bindParam(':cuidado_qual', $cuidado_qual);
        $stmt->bindParam(':intolerancia_lactose', $intolerancia_lactose);
        $stmt->bindParam(':diabetes', $diabetes);
        $stmt->bindParam(':alergia_ovo', $alergia_ovo);
        $stmt->bindParam(':emergencia_nome', $emergencia_nome);
        $stmt->bindParam(':emergencia_telefone', $emergencia_telefone);
        $stmt->bindParam(':compromisso_orientacoes', $compromisso_orientacoes);
        $stmt->bindParam(':data_termo', $data_termo);
        $stmt->bindParam(':assinatura', $assinatura);
        $stmt->bindParam(':termo_concordo', $termo_concordo);

        $stmt->execute();

        echo "Dados inseridos com sucesso!";

    }

} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>
