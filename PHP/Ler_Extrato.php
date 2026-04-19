<?php

include_once "Conectar_BaseH.php";

$sql = "SELECT CodMov, DataM, Deb, Cre, ValorM, Favor, DataGravação ";
$sql .= "FROM movimentos ";
$sql .= "ORDER BY CodMov DESC;";

$numberOfRows = 10;
$values = mysqli_query($dbcon, $sql);
mysqli_set_charset($dbcon, "utf8");

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