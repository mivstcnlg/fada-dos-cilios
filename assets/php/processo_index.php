<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fada_dos_cilios";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = htmlspecialchars($_POST['nome']);
        $email = htmlspecialchars($_POST['email']);
        $cpf = $_POST['cpf'];
        $telefone = $_POST['telefone'];
        $mensagem = htmlspecialchars($_POST['mensagem']);

        $stmt = $pdo->prepare("SELECT * FROM pacientes WHERE cpf = :cpf");
        $stmt->bindParam(':cpf', $cpf);
        $stmt->execute();

        $pacienteData = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($pacienteData) {
            $nome = $pacienteData['nome'];
            $email = $pacienteData['email'];
        }

        $sql = "INSERT INTO contatos (nome, email, cpf, telefone, mensagem) 
                VALUES (:nome, :email, :cpf, :telefone, :mensagem)";

        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':mensagem', $mensagem);

        $stmt->execute();

        echo "Mensagem enviada com sucesso! Agradecemos seu contato.";

    }

} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>
