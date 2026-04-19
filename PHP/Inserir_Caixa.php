<?php

include_once "Conectar_BaseH.php";

date_default_timezone_set("America/Sao_Paulo");

$DataM = $_GET['DataM'];
if (!empty($DataM)) {
	$parts = explode('/', $DataM);
	$DataM = "$parts[2]-$parts[1]-$parts[0]";
}

$ValorM = $_GET['ValorM'];
$Deb = $_GET['Deb'];
$Cre = $_GET['Cre'];
$Favor = $_GET['Favor'];
$Obs = $_GET['Obs'];
$DataGravação = date('Y/m/d H:i:s');
$Parcelas = $_GET['Parcelas'];
$Fam = $_GET['Fam'];
$DateCard = $_GET['DateCard'];
if (!empty($DateCard)) {
	$parts = explode('/', $DateCard);
	$DateCard = "$parts[2]-$parts[1]-$parts[0]";
}


$sql = "INSERT INTO movimentos( DataM, ValorM, Deb, Cre, Favor, Obs, DataGravação, Parcelas, Fam, DateCard ) VALUES( '$DataM', '$ValorM', '$Deb', '$Cre', '$Favor', '$Obs', '$DataGravação', '$Parcelas', '$Fam', '$DateCard' )";

if (!mysqli_query($dbcon, $sql)) {
	die('Erro: ' . mysqli_error($dbcon));
}

mysqli_close($dbcon);
exit();

?>