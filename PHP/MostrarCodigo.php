<?php

include_once "Conectar_Baseh.php";

$SiteP = $_GET['SiteX'];

//$sql = "SELECT CONCAT(site, ';', mb_strtolower(Usuario),';', mb_strtolower(Senha)) as Linha FROM codigos where Site like '%$SiteP%'";
$sql = "SELECT CONCAT(site, ';', Usuario, ';', Senha, ';',Codigo) as Linha FROM codigos where Site like '%$SiteP%'";

$numberOfRows = 1;
$csv_output = "";

$values = mysqli_query($dbcon, $sql);
while ($rowr = mysqli_fetch_array($values)) {
	for ($j = 0; $j < $numberOfRows; $j++) {
		$csv_output .= $rowr[$j];
	}
	$csv_output .= "\n";
}

print $csv_output;
mysqli_close($dbcon);
exit;
?>