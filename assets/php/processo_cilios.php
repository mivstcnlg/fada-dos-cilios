<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fada_dos_cilios";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $paciente = htmlspecialchars($_POST['paciente']);
        $profissao = htmlspecialchars($_POST['profissao']);
        $data_nasc = $_POST['data_nasc'];
        $sexo = $_POST['sexo'];
        $endereco = htmlspecialchars($_POST['endereco']);
        $cidade = $_POST['cidade'];
        $telefone = $_POST['telefone'];
        $email = htmlspecialchars($_POST['email']);
        $indicado_por = htmlspecialchars($_POST['indicado_por']);
        $fez_extensao = $_POST['fez_extensao'];
        $gestante = $_POST['gestante'];
        $tempo_gestacao = $_POST['tempo_gestacao'];
        $procedimento_olhos = $_POST['procedimento_olhos'];
        $alergia_esmalte = $_POST['alergia_esmalte'];
        $alergia_esmalte_qual = $_POST['alergia_esmalte_qual'];
        $tireoide = $_POST['tireoide'];
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
        $titura = $_POST['titura'];
        $cor = $_POST['cor'];
        $data_tempo = $_POST['data_tempo'];
        $assinatura = $_POST['assinatura'];
        $termo_acordado = $_POST['termo_acordado'];
        $cpf = $_POST['cpf'];

        $stmt = $pdo->prepare("SELECT * FROM pacientes WHERE cpf = :cpf");
        $stmt->bindParam(':cpf', $cpf);
        $stmt->execute();

        $pacienteData = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($pacienteData) {
            $paciente = $pacienteData['paciente'];
            $profissao = $pacienteData['profissao'];
            $data_nasc = $pacienteData['data_nasc'];
            $sexo = $pacienteData['sexo'];
            $endereco = $pacienteData['endereco'];
            $cidade = $pacienteData['cidade'];
            $telefone = $pacienteData['telefone'];
            $email = $pacienteData['email'];
            $indicado_por = $pacienteData['indicado_por'];
        }

        $sql = "INSERT INTO cilios (paciente, profissao, data_nasc, sexo, endereco, cidade, telefone, email, indicado_por, fez_extensao, gestante, tempo_gestacao, procedimento_olhos, alergia_esmalte, alergia_esmalte_qual, tireoide, problema_respiratorio, tipo_problema_respiratorio, uso_lentes, problema_ocular, tipo_problema_ocular, tratamento_oncologico, dorme_de_lado, posicao, problemas_serios, tipo_procedimento, mapping, estilo, modelo_de_fios, espessura, curvatura, adesivo, marca, pads, tempo_de_acao, tintura, cor, data_tempo, assinatura, termo_acordado, cpf) 
                VALUES (:paciente, :profissao, :data_nasc, :sexo, :endereco, :cidade, :telefone, :email, :indicado_por, :fez_extensao, :gestante, :tempo_gestacao, :procedimento_olhos, :alergia_esmalte, :alergia_esmalte_qual, :tireoide, :problema_respiratorio, :tipo_problema_respiratorio, :uso_lentes, :problema_ocular, :tipo_problema_ocular, :tratamento_oncologico, :dorme_de_lado, :posicao, :problemas_serios, :tipo_procedimento, :mapping, :estilo, :modelo_de_fios, :espessura, :curvatura, :adesivo, :marca, :pads, :tempo_de_acao, :titura, :cor, :data_tempo, :assinatura, :termo_acordado, :cpf)";

        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':paciente', $paciente);
        $stmt->bindParam(':profissao', $profissao);
        $stmt->bindParam(':data_nasc', $data_nasc);
        $stmt->bindParam(':sexo', $sexo);
        $stmt->bindParam(':endereco', $endereco);
        $stmt->bindParam(':cidade', $cidade);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':indicado_por', $indicado_por);
        $stmt->bindParam(':fez_extensao', $fez_extensao);
        $stmt->bindParam(':gestante', $gestante);
        $stmt->bindParam(':tempo_gestacao', $tempo_gestacao);
        $stmt->bindParam(':procedimento_olhos', $procedimento_olhos);
        $stmt->bindParam(':alergia_esmalte', $alergia_esmalte);
        $stmt->bindParam(':alergia_esmalte_qual', $alergia_esmalte_qual);
        $stmt->bindParam(':tireoide', $tireoide);
        $stmt->bindParam(':problema_respiratorio', $problema_respiratorio);
        $stmt->bindParam(':tipo_problema_respiratorio', $tipo_problema_respiratorio);
        $stmt->bindParam(':uso_lentes', $uso_lentes);
        $stmt->bindParam(':problema_ocular', $problema_ocular);
        $stmt->bindParam(':tipo_problema_ocular', $tipo_problema_ocular);
        $stmt->bindParam(':tratamento_oncologico', $tratamento_oncologico);
        $stmt->bindParam(':dorme_de_lado', $dorme_de_lado);
        $stmt->bindParam(':posicao', $posicao);
        $stmt->bindParam(':problemas_serios', $problemas_serios);
        $stmt->bindParam(':tipo_procedimento', $tipo_procedimento);
        $stmt->bindParam(':mapping', $mapping);
        $stmt->bindParam(':estilo', $estilo);
        $stmt->bindParam(':modelo_de_fios', $modelo_de_fios);
        $stmt->bindParam(':espessura', $espessura);
        $stmt->bindParam(':curvatura', $curvatura);
        $stmt->bindParam(':adesivo', $adesivo);
        $stmt->bindParam(':marca', $marca);
        $stmt->bindParam(':pads', $pads);
        $stmt->bindParam(':tempo_de_acao', $tempo_de_acao);
        $stmt->bindParam(':titura', $titura);
        $stmt->bindParam(':cor', $cor);
        $stmt->bindParam(':data_tempo', $data_tempo);
        $stmt->bindParam(':assinatura', $assinatura);
        $stmt->bindParam(':termo_acordado', $termo_acordado);
        $stmt->bindParam(':cpf', $cpf);

        $stmt->execute();

        echo "Cadastro realizado com sucesso!";
    }

} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>
