<?php

//$conn = mysqli_connect('MYSQL8002.site4now.net', 'a90b7e_baseh', 'Amanti_#9', 'db_a90b7e_baseh');
$conn = new mysqli('MYSQL8002.site4now.net', 'a90b7e_baseh', 'Amanti_#9', 'db_a90b7e_baseh');

mysqli_set_charset($conn, "utf8");

$sql = "select * from eventos";

$query = mysqli_query($conn, $sql);
echo '<h1 style="color: blue;">Lista dos eventos</h1>';
echo '<header>
    <a href="../menu.html" style="color: blue;font-size:20px">	
  		<img src="../images/Voltar.jpg" alt="Voltar"></a>
	</header>';

echo "<table border='2'>";

$row = mysqli_fetch_assoc($query);
$campos = array_keys($row);
echo '<tr>';


echo '<th>' . '' . '</th>';
echo '<th>' . 'id' . '</th>';
echo '<th>' . 'Evento' . '</th>';
echo '<th>' . $campos[2] . '</th>';
echo '<th>' . 'Valor' . '</th>';
echo '<th>' . $campos[4] . '</th>';
echo '<th>' . $campos[5] . '</th>';
echo '<th>' . $campos[6] . '</th>';
echo '<th>' . $campos[7] . '</th>';
echo '<th>' . $campos[8] . '</th>';
echo '<th>' . $campos[9] . '</th>';
echo '<th>' . $campos[10] . '</th>';
echo '<th>' . $campos[11] . '</th>';
echo '<th>' . $campos[12] . '</th>';
echo '<th>' . $campos[13] . '</th>';
echo '<th>' . $campos[14] . '</th>';
echo '<th>' . $campos[15] . '</th>';
//echo '<th>' . $campos[16] . '</th>';


echo '</tr>';

$numberOfRows = 16;

//style: 'currency', currency: 'BRL' });

mysqli_set_charset($conn, "utf8");

while ($rowr = mysqli_fetch_row($query)) {
	echo '<tr>';
	echo '<td>' . '<input type="radio" name="selected_id" value="{$rowr[$j]->id}">' . '</td>';
	for ($j = 0; $j < $numberOfRows; $j++) {
		if($j == 3){
			echo '<td style="text-align: right; font-size: 24px;">' .  number_format($rowr[$j], 2, ',', '.') . '</td>';
		}else	
			echo '<td style="font-size: 24px;">' . $rowr[$j] . '</td>';
	}


	echo
	'<td>
	<a href="client/delete/{$rowr[$j]->id}">
	<img src="../images/excluir.gif" alt=".">
	</a>
	</td>';
	echo '</tr>';
}


echo '</table>';

mysqli_close($conn);
exit;