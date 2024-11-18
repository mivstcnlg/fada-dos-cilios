<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fada_dos_cilios";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Filtrando dados de entrada
        $paciente = htmlspecialchars($_POST['paciente']);
        $profissao = htmlspecialchars($_POST['profissao']);
        $data_nasc = $_POST['data_nasc'];
        $sexo = $_POST['sexo'];
        $estado_civil = $_POST['estado_civil'];
        $endereco = htmlspecialchars($_POST['endereco']);
        $cidade = $_POST['cidade'];
        $telefone = $_POST['telefone'];
        $email = htmlspecialchars($_POST['email']);
        $indicado_por = htmlspecialchars($_POST['indicado_por']);
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

        // Preparando a consulta SQL com placeholders
        $sql = "INSERT INTO hidrolipo 
                (paciente, profissao, data_nasc, sexo, estado_civil, endereco, cidade, telefone, email, indicado_por, inicio_tratamento, objetivo_consulta, nome_emergencia, telefone_emergencia, tratamento_estetico, tipo_tratamento_estetico, alergia_medicamento, alergia_medicamento_qual, medicamento, medicamento_qual, fumante, fumante_tempo, uso_acido, tipo_acido_usado, tratamento_medico, tipo_tratamento_medico, gestante, tempo_gestacao, filhos, quantidade_filhos, problema_cardiaco, tipo_problema_cardiaco, exposicao_sol, tempo_exposicao_sol, cancer, tipo_cancer, intolerancia_lactose, diabete, alergia_ovo, data_tempo, assinatura, termo_acordado) 
                VALUES 
                (:paciente, :profissao, :data_nasc, :sexo, :estado_civil, :endereco, :cidade, :telefone, :email, :indicado_por, :inicio_tratamento, :objetivo_consulta, :nome_emergencia, :telefone_emergencia, :tratamento_estetico, :tipo_tratamento_estetico, :alergia_medicamento, :alergia_medicamento_qual, :medicamento, :medicamento_qual, :fumante, :fumante_tempo, :uso_acido, :tipo_acido_usado, :tratamento_medico, :tipo_tratamento_medico, :gestante, :tempo_gestacao, :filhos, :quantidade_filhos, :problema_cardiaco, :tipo_problema_cardiaco, :exposicao_sol, :tempo_exposicao_sol, :cancer, :tipo_cancer, :intolerancia_lactose, :diabete, :alergia_ovo, :data_tempo, :assinatura, :termo_acordado)";

        // Preparando a declaração
        $stmt = $pdo->prepare($sql);

        // Associando os parâmetros
        $stmt->bindParam(':paciente', $paciente);
        $stmt->bindParam(':profissao', $profissao);
        $stmt->bindParam(':data_nasc', $data_nasc);
        $stmt->bindParam(':sexo', $sexo);
        $stmt->bindParam(':estado_civil', $estado_civil);
        $stmt->bindParam(':endereco', $endereco);
        $stmt->bindParam(':cidade', $cidade);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':indicado_por', $indicado_por);
        $stmt->bindParam(':inicio_tratamento', $inicio_tratamento);
        $stmt->bindParam(':objetivo_consulta', $objetivo_consulta);
        $stmt->bindParam(':nome_emergencia', $nome_emergencia);
        $stmt->bindParam(':telefone_emergencia', $telefone_emergencia);
        $stmt->bindParam(':tratamento_estetico', $tratamento_estetico);
        $stmt->bindParam(':tipo_tratamento_estetico', $tipo_tratamento_estetico);
        $stmt->bindParam(':alergia_medicamento', $alergia_medicamento);
        $stmt->bindParam(':alergia_medicamento_qual', $alergia_medicamento_qual);
        $stmt->bindParam(':medicamento', $medicamento);
        $stmt->bindParam(':medicamento_qual', $medicamento_qual);
        $stmt->bindParam(':fumante', $fumante);
        $stmt->bindParam(':fumante_tempo', $fumante_tempo);
        $stmt->bindParam(':uso_acido', $uso_acido);
        $stmt->bindParam(':tipo_acido_usado', $tipo_acido_usado);
        $stmt->bindParam(':tratamento_medico', $tratamento_medico);
        $stmt->bindParam(':tipo_tratamento_medico', $tipo_tratamento_medico);
        $stmt->bindParam(':gestante', $gestante);
        $stmt->bindParam(':tempo_gestacao', $tempo_gestacao);
        $stmt->bindParam(':filhos', $filhos);
        $stmt->bindParam(':quantidade_filhos', $quantidade_filhos);
        $stmt->bindParam(':problema_cardiaco', $problema_cardiaco);
        $stmt->bindParam(':tipo_problema_cardiaco', $tipo_problema_cardiaco);
        $stmt->bindParam(':exposicao_sol', $exposicao_sol);
        $stmt->bindParam(':tempo_exposicao_sol', $tempo_exposicao_sol);
        $stmt->bindParam(':cancer', $cancer);
        $stmt->bindParam(':tipo_cancer', $tipo_cancer);
        $stmt->bindParam(':intolerancia_lactose', $intolerancia_lactose);
        $stmt->bindParam(':diabete', $diabete);
        $stmt->bindParam(':alergia_ovo', $alergia_ovo);
        $stmt->bindParam(':data_tempo', $data_tempo);
        $stmt->bindParam(':assinatura', $assinatura);
        $stmt->bindParam(':termo_acordado', $termo_acordado);

        // Executando a declaração
        $stmt->execute();

        echo "Cadastro de paciente Hidrolipo realizado com sucesso!";
    }

} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>
