<?php

include_once "Conectar_Baseh.php";

$Letra = $_GET['Letra'];

$sql = "SELECT Site FROM codigos where Site LIKE '%$Letra%'";

$numberOfRows = 1;
$csv_output = "";

$values = mysqli_query($dbcon, $sql);
while ($rowr = mysqli_fetch_row($values)) {
	for ($j = 0; $j < $numberOfRows; $j++) {
		$csv_output .= $rowr[$j] . ", ";
	}
	$csv_output .= "\n";
}

print $csv_output;
mysqli_close($dbcon);
exit;

?>