<?php

include_once "Conectar_BaseH.php";

date_default_timezone_set("America/Sao_Paulo");

$siteX = $_GET['SiteX'];
$usuario = $_GET['Usuario'];
$senha = $_GET['Senha'];

$sql = "INSERT INTO codigos (site, usuario, senha) VALUES ('$siteX', '$usuario', '$senha')";

$dbcon->query($sql);

mysqli_close($dbcon);
exit();

?>