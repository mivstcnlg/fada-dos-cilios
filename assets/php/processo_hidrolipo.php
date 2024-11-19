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
        $objetivo_consulta = htmlspecialchars($_POST['objetivo_consulta']);
        $queixa_principal = $_POST['queixa_principal'];
        $tipo_queixa = htmlspecialchars($_POST['tipo_queixa']);
        $medicacao_continua = $_POST['medicacao_continua'];
        $tipo_medicacao_continua = htmlspecialchars($_POST['tipo_medicacao_continua']);
        $historico_familiar = $_POST['historico_familiar'];
        $problema_historico_familiar = htmlspecialchars($_POST['problema_historico_familiar']);
        $historico_pregressa_familiar = $_POST['historico_pregressa_familiar'];
        $problema_pregressa_familiar = htmlspecialchars($_POST['problema_pregressa_familiar']);
        $oncologia = $_POST['oncologia'];
        $historico_oncologia = htmlspecialchars($_POST['historico_oncologia']);
        $diabete = $_POST['diabete'];
        $hipertensao_hipotensao = $_POST['hipertensao_hipotensao'];
        $problema_circular = $_POST['problema_circular'];
        $tipo_problema_circular = htmlspecialchars($_POST['tipo_problema_circular']);
        $alergia = $_POST['alergia'];
        $tipo_alergia = htmlspecialchars($_POST['tipo_alergia']);
        $gestante = $_POST['gestante'];
        $tempo_gestacao = $_POST['tempo_gestacao'];
        $anticoncepcional = $_POST['anticoncepcional'];
        $nome_emergencia = htmlspecialchars($_POST['nome_emergencia']);
        $telefone_emergencia = $_POST['telefone_emergencia'];
        $data_tempo = $_POST['data_tempo'];
        $assinatura = htmlspecialchars($_POST['assinatura']);
        $termo_acordado = $_POST['termo_acordado'];

        // Preparando a consulta SQL
        $sql = "INSERT INTO hidrolipo (paciente, profissao, data_nasc, sexo, estado_civil, endereco, cidade, telefone, email, indicado_por, inicio_tratamento, objetivo_consulta, queixa_principal, tipo_queixa, medicacao_continua, tipo_medicacao_continua, historico_familiar, problema_historico_familiar, historico_pregressa_familiar, problema_pregressa_familiar, oncologia, historico_oncologia, diabete, hipertensao_hipotensao, problema_circular, tipo_problema_circular, alergia, tipo_alergia, gestante, tempo_gestacao, anticoncepcional, nome_emergencia, telefone_emergencia, data_tempo, assinatura, termo_acordado) 
                VALUES (:paciente, :profissao, :data_nasc, :sexo, :estado_civil, :endereco, :cidade, :telefone, :email, :indicado_por, :inicio_tratamento, :objetivo_consulta, :queixa_principal, :tipo_queixa, :medicacao_continua, :tipo_medicacao_continua, :historico_familiar, :problema_historico_familiar, :historico_pregressa_familiar, :problema_pregressa_familiar, :oncologia, :historico_oncologia, :diabete, :hipertensao_hipotensao, :problema_circular, :tipo_problema_circular, :alergia, :tipo_alergia, :gestante, :tempo_gestacao, :anticoncepcional, :nome_emergencia, :telefone_emergencia, :data_tempo, :assinatura, :termo_acordado)";

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
        $stmt->bindParam(':queixa_principal', $queixa_principal);
        $stmt->bindParam(':tipo_queixa', $tipo_queixa);
        $stmt->bindParam(':medicacao_continua', $medicacao_continua);
        $stmt->bindParam(':tipo_medicacao_continua', $tipo_medicacao_continua);
        $stmt->bindParam(':historico_familiar', $historico_familiar);
        $stmt->bindParam(':problema_historico_familiar', $problema_historico_familiar);
        $stmt->bindParam(':historico_pregressa_familiar', $historico_pregressa_familiar);
        $stmt->bindParam(':problema_pregressa_familiar', $problema_pregressa_familiar);
        $stmt->bindParam(':oncologia', $oncologia);
        $stmt->bindParam(':historico_oncologia', $historico_oncologia);
        $stmt->bindParam(':diabete', $diabete);
        $stmt->bindParam(':hipertensao_hipotensao', $hipertensao_hipotensao);
        $stmt->bindParam(':problema_circular', $problema_circular);
        $stmt->bindParam(':tipo_problema_circular', $tipo_problema_circular);
        $stmt->bindParam(':alergia', $alergia);
        $stmt->bindParam(':tipo_alergia', $tipo_alergia);
        $stmt->bindParam(':gestante', $gestante);
        $stmt->bindParam(':tempo_gestacao', $tempo_gestacao);
        $stmt->bindParam(':anticoncepcional', $anticoncepcional);
        $stmt->bindParam(':nome_emergencia', $nome_emergencia);
        $stmt->bindParam(':telefone_emergencia', $telefone_emergencia);
        $stmt->bindParam(':data_tempo', $data_tempo);
        $stmt->bindParam(':assinatura', $assinatura);
        $stmt->bindParam(':termo_acordado', $termo_acordado);

        // Executando a declaração
        $stmt->execute();

        echo "Cadastro realizado com sucesso!";
    }

} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>
