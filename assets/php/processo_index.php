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
        $nome = htmlspecialchars($_POST['nome']);
        $email = htmlspecialchars($_POST['email']);
        $mensagem = htmlspecialchars($_POST['mensagem']);

        // Preparando a consulta SQL
        $sql = "INSERT INTO contato (nome, email, mensagem) 
                VALUES (:nome, :email, :mensagem)";

        // Preparando a declaração
        $stmt = $pdo->prepare($sql);

        // Associando os parâmetros
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':mensagem', $mensagem);

        // Executando a declaração
        $stmt->execute();

        // Retornando uma resposta de sucesso
        echo "Mensagem enviada com sucesso!";
    }

} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>
