<?php

include_once "Conectar_BaseH.php";

$CodMov = trim($_GET['CodMov']);

$sql = "DELETE FROM movimentos WHERE CodMov = '$CodMov'";

if (mysqli_query($dbcon, $sql)) {
    echo "Receita excluída...! " . mysqli_error($dbcon);
} else {
    echo "err...! " . mysqli_error($dbcon);
}

mysqli_close($dbcon);
exit;

?>