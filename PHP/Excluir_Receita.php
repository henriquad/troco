<?php

include_once "Conectar_BaseH.php";

$Receita = trim($_GET['Receita']);

$sql = "DELETE FROM receitas WHERE Receita = '$Receita'";

if (mysqli_query($dbcon, $sql)) {
    echo "Receita excluída...! " . mysqli_error($dbcon);
} else {
    echo "err...! " . mysqli_error($dbcon);
}

mysqli_close($dbcon);
exit;

?>