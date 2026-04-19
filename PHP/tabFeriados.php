<?php
$conn = new mysqli('MYSQL8002.site4now.net', 'a90b7e_baseh', 'Amanti_#9', 'db_a90b7e_baseh');
mysqli_set_charset($conn, "utf8");
$sql = "select * from feriados";
$query = mysqli_query($conn, $sql);
echo '<h1 style="color: blue;">Tabela de feriados</h1>';
echo '<header>
    <a href="../menu.html" style="color: blue;font-size:20px">	
  		<img src="../images/Voltar.jpg" alt="Voltar"></a>
	</header>';
echo "<table border='1'>";
$row = mysqli_fetch_assoc($query);
$campos = array_keys($row);
echo '<tr>';
echo '<th style="color: blue;  font-size: 24px;">' . 'Feriado' . '</th>';
echo '<th style="color: blue;  font-size: 24px;">' . 'Motivo' . '</th>';
echo '</tr>';
$numberOfRows = 2;
mysqli_set_charset($conn, "utf8");
while ($rowr = mysqli_fetch_row($query)) {
	echo '<tr>';
	for ($j = 0; $j < $numberOfRows; $j++) {
		echo '<td style="color: blue;  font-size: 24px;">' . $rowr[$j] . '</td>';
	}
	echo '</tr>';
}
echo '</table>';
mysqli_close($conn);
exit;
