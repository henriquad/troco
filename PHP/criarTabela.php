<?php include 'Tabelas.html';

include_once "conectarMysql.php";

// 1. Conexão com o banco de dados (arquivo db.php ou direto no script)
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastroProdutos";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}*/

// 2. Executa a consulta SQL
$sql = "SELECT contaD, Favorecido, ValorE FROM eventos";
$result = $dbcon->query($sql);

// 3. Gera a tabela HTML se houver registros
if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>contaD</th><th>Favorecido</th><th>ValoE</th></tr>";
    
    // Loop para exibir cada linha
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["contaD"] . "</td>";
        echo "<td>" . $row["Favorecido"] . "</td>";
        echo "<td>" . $row["ValorE"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 resultados";
}

// 4. Fecha a conexão
$dbcon->close();
?>   