<?php
$conn = new mysqli('MYSQL8002.site4now.net', 'a90b7e_baseh', 'Amanti_#9', 'db_a90b7e_baseh');

mysqli_set_charset($conn, "utf8");
$sql = "select * from datas";

$query = mysqli_query($conn, $sql);



$row = mysqli_fetch_assoc($query);
$campos = array_keys($row);

echo "<table border='2'>";
echo '<h1>Calendário para eventos</h1>';


echo '<header>
    <a href="../menu.html" style="color: blue;font-size:20px">	
  		<img src="../images/Voltar.jpg" alt="Voltar"></a>
  </header>';

echo '<tr>';

echo '<th style="color: blue;  font-size: 24px;">' . $campos[0] . '</th>';
echo '<th style="color: blue;  font-size: 24px;">' . $campos[1] . '</th>';
echo '<th style="color: blue;  font-size: 24px;">' . $campos[2] . '</th>';
echo '<th style="color: blue;  font-size: 24px;">' . $campos[3] . '</th>';
echo '<th style="color: blue;  font-size: 24px;">' . $campos[4] . '</th>';
echo '<th style="color: blue;  font-size: 24px;">' . $campos[5] . '</th>';
echo '<th style="color: blue;  font-size: 24px;">' . $campos[6] . '</th>';
echo '<th style="color: blue;  font-size: 24px;">' . $campos[7] . '</th>';
echo '<th style="color: blue;  font-size: 24px;">' . $campos[8] . '</th>';
echo '<th style="color: blue;  font-size: 24px;">' . $campos[9] . '</th>';
echo '<th style="color: blue;  font-size: 24px;">' . $campos[10] . '</th>';
echo '<th style="color: blue;  font-size: 24px;">' . $campos[11] . '</th>';
echo '<th style="color: blue;  font-size: 24px;">' . $campos[12] . '</th>';


echo '</tr>';

$numberOfRows = 13;

mysqli_set_charset($conn, "utf8");

while ($rowr = mysqli_fetch_row($query)) {
	for ($j = 0; $j < $numberOfRows; $j++) {
		//echo '<tr>';
		echo '<td style="color: blue;  font-size: 24px;">' . $rowr[$j] . '</td>';
	}
	echo '</tr>';
}


echo '</table>';



mysqli_close($conn);
exit;
