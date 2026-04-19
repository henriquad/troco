	<?php

	include_once "Conectar_BaseH.php";
		
	$sql = "SELECT distinct origem FROM pares ORDER BY origem;";
	
	$numberOfRows = 1;
	$values = mysqli_query($dbcon, $sql);
	while ($rowr = mysqli_fetch_row($values)) {
		for ($j = 0; $j < $numberOfRows; $j++) {
			$csv_output .= $rowr[$j];
		}
		$csv_output .= "\n";
	}

	print $csv_output;
	mysqli_close($dbcon);
	exit;

	?>