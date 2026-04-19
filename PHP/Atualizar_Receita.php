<?php

include_once "Conectar_BaseH.php";

$Preparo = trim($_GET['Preparo']);
$Receita = trim($_GET['Receita']);

$sql = "SELECT * FROM receitas WHERE Receita = '$Receita'";

$values = mysqli_query($dbcon, $sql);
$rowr = mysqli_fetch_row($values);
if ($rowr > 0) {
    $sql = "UPDATE receitas SET Preparo = '$Preparo' WHERE Receita = '$Receita'";
    $dbcon->query($sql);
} else {
    $sql = "INSERT INTO receitas (Preparo, Receita) VALUES ('$Preparo', '$Receita')";
    $dbcon->query($sql);
    echo "Receita salva! " . mysqli_error($dbcon);
}

mysqli_close($dbcon);
exit;

?>