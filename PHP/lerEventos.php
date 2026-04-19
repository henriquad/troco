<?php

include_once "Conectar_BaseH.php";

$sql = "SELECT * FROM eventos";

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