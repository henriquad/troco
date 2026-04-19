<?php

include_once "Conectar_BaseH.php";


$Usuario = trim($_GET['Usuario']);
$Senha = trim($_GET['Senha']);
$SiteX = trim($_GET['SiteX']);

$sql = "UPDATE codigos SET Usuario = '{$Usuario}', Senha = '{$Senha}' WHERE site = '{$SiteX}'";

echo $sql;

$dbcon->query($sql);
//if (!mysqli_query($dbcon, $sql)) {
//	die('Erro: ' . mysqli_error($dbcon));
//}


mysqli_close($dbcon);
exit;

?>