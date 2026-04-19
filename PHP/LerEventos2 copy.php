<?php

include_once "Conectar_BaseH.php";

/*$sql = "SELECT * FROM eventos";

$numberOfRows = 10;
$csv_output = "";
d
$values = mysqli_query($dbcon, $sql);
while ($rowr = mysqli_fetch_array($values)) {
		
		$csv_output .= $rowr[$j] . ' - ';
	}
	$csv_output .= "\n";
}

print $csv_output;
mysqli_close($dbcon);
exit;
*/


// Consulta para listar os nomes das colunas
// $queryColunas = mysqli_query($dbcon, "SHOW COLUMNS FROM eventos");

// $colunas = array();
// while ($coluna = mysqli_fetch_assoc($queryColunas)) {
// 	$colunas[] = $coluna['Field'];
// }

// // Exibe o array com os nomes das colunas
// print_r($colunas);


$query = mysqli_query($dbcon, "select * from eventos");

echo '<table border="1">';
//while ($row = mysqli_fetch_assoc($query)) {
$row = mysqli_fetch_assoc($query);
$campos = array_keys($row);
echo '<tr>';
//foreach ($campos as $campo) {
echo '<td>' . $campos[0] . '</td>';
echo '<td>' . $campos[1] . '</td>';
echo '<td>' . $campos[2] . '</td>';
echo '<td>' . $campos[3] . '</td>';
echo '<td>' . $campos[4] . '</td>';
echo '<td>' . $campos[5] . '</td>';
echo '<td>' . $campos[6] . '</td>';
echo '<td>' . $campos[7] . '</td>';
echo '<td>' . $campos[8] . '</td>';
echo '<td>' . $campos[9] . '</td>';
echo '<td>' . $campos[10] . '</td>';
echo '<td>' . $campos[11] . '</td>';
echo '<td>' . $campos[12] . '</td>';
echo '<td>' . $campos[13] . '</td>';
echo '<td>' . $campos[14] . '</td>';
echo '<td>' . $campos[15] . '</td>';
echo '<td>' . $campos[16] . '</td>';
echo '<td>' . $campos[17] . '</td>';
echo '<td>' . $campos[18] . '</td>';
//}
echo '</tr>';
//}
echo '</table>';

mysqli_close($dbcon);
exit;
