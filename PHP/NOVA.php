<?php

//$conn = mysqli_connect('MYSQL8002.site4now.net', 'a90b7e_baseh', 'Amanti_#9', 'db_a90b7e_baseh');
$conn = new mysqli('MYSQL8002.site4now.net', 'a90b7e_baseh', 'Amanti_#9', 'db_a90b7e_baseh');

mysqli_set_charset($conn, "utf8");

$sql = "select * from feriados";

$query = mysqli_query($conn, $sql);

echo "<table border='1'>";

$row = mysqli_fetch_assoc($query);
$campos = array_keys($row);
echo '<tr>';

echo '<th>' . $campos[0] . '</th>';
echo '<th>' . $campos[1] . '</th>';

echo '</tr>';

$numberOfRows = 2;

mysqli_set_charset($conn, "utf8");

while ($rowr = mysqli_fetch_row($query)) {
	echo '<tr>';
	for ($j = 0; $j < $numberOfRows; $j++) {
		echo '<td>' . $rowr[$j] . '</td>';
	}
	echo '</tr>';
}


echo '</table>';

mysqli_close($conn);
exit;
