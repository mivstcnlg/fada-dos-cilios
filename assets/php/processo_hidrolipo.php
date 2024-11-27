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
        $queixa_principal = $_POST['queixa_principal'];
        $qp_texto = htmlspecialchars($_POST['qp_texto']);
        $medicamento_continuo = $_POST['medicamento_continuo'];
        $medicamentos_texto = htmlspecialchars($_POST['medicamentos_texto']);
        $historico_familiar = $_POST['historico_familiar'];
        $hf_texto = htmlspecialchars($_POST['hf_texto']);
        $historico_pregressa_pessoal = $_POST['historico_pregressa_pessoal'];
        $hpp_texto = htmlspecialchars($_POST['hpp_texto']);
        $oncologia = $_POST['oncologia'];
        $onco_texto = htmlspecialchars($_POST['onco_texto']);
        $diabete = $_POST['diabete'];
        $hipotensao_hipertensao = $_POST['hipotensao_hipertensao'];
        $problema_circulatorio = $_POST['problema_circulatorio'];
        $problema_circulatorio_texto = htmlspecialchars($_POST['problema_circulatorio_texto']);
        $alergia_qual = $_POST['alergia_qual'];
        $alergias_texto = htmlspecialchars($_POST['alergias_texto']);
        $gestante = $_POST['gestante'];
        $tmp_gestacao_texto = htmlspecialchars($_POST['tmp_gestacao_texto']);
        $anticoncepcional = $_POST['anticoncepcional'];
        $emergencia_nome = $_POST['emergencia_nome'];
        $emergencia_telefone = $_POST['emergencia_telefone'];
        $compromisso_orientacoes = $_POST['compromisso_orientacoes'];
        $data_termo = $_POST['data_termo'];
        $assinatura = htmlspecialchars($_POST['assinatura']);
        $termo_concordo = isset($_POST['termo_concordo']) ? 1 : 0;

        $sql = "INSERT INTO anamnese_hidrolipo 
            (cpf, paciente, profissao, data_nascimento, sexo, endereco, cidade, telefone, email, indicado_por, 
            queixa_principal, qp_texto, medicamento_continuo, medicamentos_texto, historico_familiar, hf_texto, 
            historico_pregressa_pessoal, hpp_texto, oncologia, onco_texto, diabete, hipotensao_hipertensao, 
            problema_circulatorio, problema_circulatorio_texto, alergia_qual, alergias_texto, gestante, 
            tmp_gestacao_texto, anticoncepcional, emergencia_nome, emergencia_telefone, compromisso_orientacoes, 
            data_termo, assinatura, termo_concordo)
            VALUES 
            (:cpf, :paciente, :profissao, :data_nascimento, :sexo, :endereco, :cidade, :telefone, :email, 
            :indicado_por, :queixa_principal, :qp_texto, :medicamento_continuo, :medicamentos_texto, 
            :historico_familiar, :hf_texto, :historico_pregressa_pessoal, :hpp_texto, :oncologia, :onco_texto, 
            :diabete, :hipotensao_hipertensao, :problema_circulatorio, :problema_circulatorio_texto, :alergia_qual, 
            :alergias_texto, :gestante, :tmp_gestacao_texto, :anticoncepcional, :emergencia_nome, :emergencia_telefone, 
            :compromisso_orientacoes, :data_termo, :assinatura, :termo_concordo)";

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
        $stmt->bindParam(':queixa_principal', $queixa_principal);
        $stmt->bindParam(':qp_texto', $qp_texto);
        $stmt->bindParam(':medicamento_continuo', $medicamento_continuo);
        $stmt->bindParam(':medicamentos_texto', $medicamentos_texto);
        $stmt->bindParam(':historico_familiar', $historico_familiar);
        $stmt->bindParam(':hf_texto', $hf_texto);
        $stmt->bindParam(':historico_pregressa_pessoal', $historico_pregressa_pessoal);
        $stmt->bindParam(':hpp_texto', $hpp_texto);
        $stmt->bindParam(':oncologia', $oncologia);
        $stmt->bindParam(':onco_texto', $onco_texto);
        $stmt->bindParam(':diabete', $diabete);
        $stmt->bindParam(':hipotensao_hipertensao', $hipotensao_hipertensao);
        $stmt->bindParam(':problema_circulatorio', $problema_circulatorio);
        $stmt->bindParam(':problema_circulatorio_texto', $problema_circulatorio_texto);
        $stmt->bindParam(':alergia_qual', $alergia_qual);
        $stmt->bindParam(':alergias_texto', $alergias_texto);
        $stmt->bindParam(':gestante', $gestante);
        $stmt->bindParam(':tmp_gestacao_texto', $tmp_gestacao_texto);
        $stmt->bindParam(':anticoncepcional', $anticoncepcional);
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
