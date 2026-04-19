	<?php
	
	include_once "Conectar_BaseH.php";
	
	function tirarAcentos($string)
	{
		$string = str_replace('ã', 'a', $string);
		$string = str_replace('á', 'a', $string);
		$string = str_replace('Ã', 'A', $string);
		$string = str_replace('Á', 'A', $string);
		$string = str_replace('ç', 'c', $string);
		$string = str_replace('Ç', 'C', $string);
		$string = str_replace('ẽ', 'e', $string);
		$string = str_replace('é', 'e', $string);
		$string = str_replace('Ẽ', 'E', $string);
		$string = str_replace('É', 'E', $string);
		$string = str_replace('í', 'i', $string);
		$string = str_replace('Í', 'I', $string);
		$string = str_replace('ó', 'o', $string);
		$string = str_replace('Ó', 'O', $string);
		$string = str_replace('Ú', 'U', $string);
		$string = str_replace('ú', 'u', $string);
		return $string;
	}

	
	$Origem1 = $_GET['Origem'];
	$Origem = tirarAcentos($Origem1);
	
	$sql = "SELECT DISTINCT `pares`.`origem` FROM `pares` LEFT JOIN (SELECT `pares`.`destino`, `pares`.`Km` FROM `pares` WHERE `pares`.`origem` = '$Origem') AS Divisas ON `pares`.`origem` = Divisas.destino WHERE Divisas.destino Is Null AND `pares`.`origem` <> '$Origem' ORDER BY `pares`.`origem`;";
            
	$numberOfRows = 1;
	$values = mysqli_query($dbcon, $sql);
	while ($rowr = mysqli_fetch_row($values)) {
		for ($j = 0; $j < $numberOfRows; $j++) {
			$csv_output .= $rowr[$j] . ",";
		}
		$csv_output .= "\n";
	}

	print $csv_output;
	mysqli_close($dbcon);
	exit;

	?>