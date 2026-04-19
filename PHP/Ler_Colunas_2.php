  <?php
    // Conectar ao banco de dados
    $conn = mysqli_connect("MYSQL8002.site4now.net", "a90b7e_baseh", "Amanti_#9", "db_a90b7e_baseh");

    // Executar a consulta SQL para mostrar as colunas
    $result = mysqli_query($conn, "DESCRIBE eventos");

    // Criar a tabela HTML para mostrar os resultados
    echo "<table>";
    echo "<tr><th>Nome da Coluna</th><th>Tipo de Dado</th><th>Permite Nulo</th><th>Chave Primária</th><th>Chave Estrangeira</th></tr>";

    // Mostrar os nomes das colunas na tabela HTML
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row[0] . "</td>"; // Nome da coluna
        echo "<td>" . $row[1] . "</td>"; // Tipo de dado
        echo "<td>" . $row[2] . "</td>"; // Permite nulo
        echo "<td>" . $row[3] . "</td>"; // Chave primária
        echo "<td>" . $row[4] . "</td>"; // Chave estrangeira
        echo "</tr>";
    }

    echo "</table>";

    // Fechar a conexão com o banco de dados
    mysqli_close($conn);
    ?>