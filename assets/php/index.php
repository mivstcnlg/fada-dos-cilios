<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fada_dos_cilios";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consultando todos os pacientes de 'orofacial' e 'hidrolipo'
    $sql = "SELECT * FROM orofacial UNION ALL SELECT * FROM hidrolipo";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    // Exibindo os resultados
    echo "<h1>Pacientes cadastrados</h1>";
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Paciente</th>
                <th>Profissão</th>
                <th>Data de Nascimento</th>
                <th>Telefone</th>
                <th>Email</th>
            </tr>";

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>
                <td>" . htmlspecialchars($row['id']) . "</td>
                <td>" . htmlspecialchars($row['paciente']) . "</td>
                <td>" . htmlspecialchars($row['profissao']) . "</td>
                <td>" . htmlspecialchars($row['data_nasc']) . "</td>
                <td>" . htmlspecialchars($row['telefone']) . "</td>
                <td>" . htmlspecialchars($row['email']) . "</td>
            </tr>";
    }
    echo "</table>";

} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>
