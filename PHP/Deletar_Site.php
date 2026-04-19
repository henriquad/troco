<?php

include_once "Conectar_BaseH.php";

$Codigo = $_GET['Codigo'];

$sql = "DELETE FROM codigos WHERE codigo = '$Codigo'";

if (mysqli_query($dbcon, $sql)) {
    echo "Site excluído...! " . mysqli_error($dbcon);
} else {
    echo "err...! " . mysqli_error($dbcon);
}

mysqli_close($dbcon);
exit;

?>