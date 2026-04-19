<?php
$conn = new mysqli('MYSQL8002.site4now.net', 'a90b7e_baseh', 'Amanti_#9', 'db_a90b7e_baseh');
mysqli_set_charset($conn, "utf8");

echo '<body>';


echo '<div class="container-tabelas">';



// tabela Feriados ==============
$sql = "select * from feriados";
$query = mysqli_query($conn, $sql);


$row = mysqli_fetch_assoc($query);
$campos = array_keys($row);


echo '<table class="tabela">';
echo '<tr>';
echo '<th>' . 'Feriado' . '</th>';
echo '<th>' . 'Motivo' . '</th>';
echo '</tr>';
$numberOfRows = 2;



while ($rowr = mysqli_fetch_row($query)) {
	echo '<tr>';
	for ($j = 0; $j < $numberOfRows; $j++) {
		echo '<td>' . $rowr[$j] . '</td>';
	}
	echo '</tr>';
}
echo '</table>';

// tabela Datas ==============
$sql = "select * from datas";
$query = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($query);
$campos = array_keys($row);

echo '<table class="tabela">';
echo '<tr>';
echo '<th>' . $campos[0] . '</th>';
echo '<th>' . $campos[1] . '</th>';
echo '<th>' . $campos[2] . '</th>';
echo '<th>' . $campos[3] . '</th>';
echo '<th>' . $campos[4] . '</th>';
echo '<th>' . $campos[5] . '</th>';
echo '<th>' . $campos[6] . '</th>';
echo '<th>' . $campos[7] . '</th>';
echo '<th>' . $campos[8] . '</th>';
echo '<th>' . $campos[9] . '</th>';
echo '<th>' . $campos[10] . '</th>';
echo '<th>' . $campos[11] . '</th>';
echo '<th>' . $campos[12] . '</th>';
echo '</tr>';
$numberOfRows = 13;
mysqli_set_charset($conn, "utf8");
while ($rowr = mysqli_fetch_row($query)) {
	for ($j = 0; $j < $numberOfRows; $j++) {
		//echo '<tr>';
		echo '<td>' . $rowr[$j] . '</td>';
	}
	echo '</tr>';
}
echo '</table>';
echo '</div>';
echo '</body>';
// ###################################
mysqli_close($conn);
exit;
