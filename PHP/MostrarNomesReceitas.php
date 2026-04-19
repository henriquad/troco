<?php

include_once "Conectar_BaseH.php";

$Qtde = $_GET['Qtde'];


if ($Qtde == "1") {
	$Ing1 = $_GET['Ingrediente1'];
	$sql = "SELECT Receita FROM receitas where Receita LIKE '%$Ing1%' OR Preparo LIKE '%$Ing1%'";
} elseif ($Qtde == "2") {
	$Ing1 = $_GET['Ingrediente1'];
	$Ing2 = $_GET['Ingrediente2'];
	$sql = "SELECT Receita FROM receitas where Receita LIKE '%$Ing1%' AND Receita LIKE '%$Ing2%' OR Preparo LIKE '%$Ing1%' AND Preparo LIKE '%$Ing2%'";
} elseif ($Qtde == "3") {
	$Ing1 = $_GET['Ingrediente1'];
	$Ing2 = $_GET['Ingrediente2'];
	$Ing3 = $_GET['Ingrediente3'];
	$sql = "SELECT Receita FROM receitas where Receita LIKE '%$Ing1%' AND Receita LIKE '%$Ing2%' AND Receita LIKE '%$Ing3%' OR Preparo LIKE '%$Ing1%' AND Preparo LIKE '%$Ing2%' AND Preparo LIKE '%$Ing3%'";
} elseif ($Qtde == "4") {
	$Ing1 = $_GET['Ingrediente1'];
	$Ing2 = $_GET['Ingrediente2'];
	$Ing3 = $_GET['Ingrediente3'];
	$Ing4 = $_GET['Ingrediente4'];
	$sql = "SELECT Receita FROM receitas where Receita LIKE '%$Ing1%' AND Receita LIKE '%$Ing2%' AND Receita LIKE '%$Ing3%' AND Receita LIKE '%$Ing4%' OR Preparo LIKE '%$Ing1%' AND Preparo LIKE '%$Ing2%' AND Preparo LIKE '%$Ing3%' AND Preparo LIKE '%$Ing4%'";
} elseif ($Qtde == "5") {
	$Ing1 = $_GET['Ingrediente1'];
	$Ing2 = $_GET['Ingrediente2'];
	$Ing3 = $_GET['Ingrediente3'];
	$Ing4 = $_GET['Ingrediente4'];
	$Ing5 = $_GET['Ingrediente5'];
	$sql = "SELECT Receita FROM receitas where Receita LIKE '%$Ing1%' AND Receita LIKE '%$Ing2%' AND Receita LIKE '%$Ing3%' AND Receita LIKE '%$Ing4%' AND Receita LIKE '%$Ing5%' or Preparo LIKE '%$Ing1%' AND Preparo LIKE '%$Ing2%' AND Preparo LIKE '%$Ing3%' AND Preparo LIKE '%$Ing4%' AND Preparo LIKE '%$Ing5%'";
} elseif ($Qtde == "6") {
	$Ing1 = $_GET['Ingrediente1'];
	$Ing2 = $_GET['Ingrediente2'];
	$Ing3 = $_GET['Ingrediente3'];
	$Ing4 = $_GET['Ingrediente4'];
	$Ing5 = $_GET['Ingrediente5'];
	$Ing6 = $_GET['Ingrediente6'];
	$sql = "SELECT Receita FROM receitas where Receita LIKE '%$Ing1%' AND Receita LIKE '%$Ing2%' AND Receita LIKE '%$Ing3%' AND Receita LIKE '%$Ing4%' AND Receita LIKE '%$Ing5%' AND Receita LIKE '%$Ing6%' OR receitas where Preparo LIKE '%$Ing1%' AND Preparo LIKE '%$Ing2%' AND Preparo LIKE '%$Ing3%' AND Preparo LIKE '%$Ing4%' AND Preparo LIKE '%$Ing5%' AND Preparo LIKE '%$Ing6%'";
} elseif ($Qtde == "7") {
	$Ing1 = $_GET['Ingrediente1'];
	$Ing2 = $_GET['Ingrediente2'];
	$Ing3 = $_GET['Ingrediente3'];
	$Ing4 = $_GET['Ingrediente4'];
	$Ing5 = $_GET['Ingrediente5'];
	$Ing6 = $_GET['Ingrediente6'];
	$Ing7 = $_GET['Ingrediente7'];
	$sql = "SELECT Receita FROM receitas where Receita LIKE '%$Ing1%' AND Receita LIKE '%$Ing2%' AND Receita LIKE '%$Ing3%' AND Receita LIKE '%$Ing4%' AND Receita LIKE '%$Ing5%' AND Receita LIKE '%$Ing6%' AND Receita LIKE '%$Ing7%' OR Preparo LIKE '%$Ing1%' AND Preparo LIKE '%$Ing2%' AND Preparo LIKE '%$Ing3%' AND Preparo LIKE '%$Ing4%' AND Preparo LIKE '%$Ing5%' AND Preparo LIKE '%$Ing6%' AND Preparo LIKE '%$Ing7%'";
} elseif ($Qtde == "8") {
	$Ing1 = $_GET['Ingrediente1'];
	$Ing2 = $_GET['Ingrediente2'];
	$Ing3 = $_GET['Ingrediente3'];
	$Ing4 = $_GET['Ingrediente4'];
	$Ing5 = $_GET['Ingrediente5'];
	$Ing6 = $_GET['Ingrediente6'];
	$Ing7 = $_GET['Ingrediente7'];
	$Ing8 = $_GET['Ingrediente8'];
	$sql = "SELECT Receita FROM receitas where Receita LIKE '%$Ing1%' AND Receita LIKE '%$Ing2%' AND Receita LIKE '%$Ing3%' AND Receita LIKE '%$Ing4%' AND Receita LIKE '%$Ing5%' AND Receita LIKE '%$Ing6%' AND Receita LIKE '%$Ing7%' AND Receita LIKE '%$Ing8%' OR Preparo LIKE '%$Ing1%' AND Preparo LIKE '%$Ing2%' AND Preparo LIKE '%$Ing3%' AND Preparo LIKE '%$Ing4%' AND Preparo LIKE '%$Ing5%' AND Preparo LIKE '%$Ing6%' AND Preparo LIKE '%$Ing7%' AND Preparo LIKE '%$Ing8%'";
} elseif ($Qtde == "9") {
	$Ing1 = $_GET['Ingrediente1'];
	$Ing2 = $_GET['Ingrediente2'];
	$Ing3 = $_GET['Ingrediente3'];
	$Ing4 = $_GET['Ingrediente4'];
	$Ing5 = $_GET['Ingrediente5'];
	$Ing6 = $_GET['Ingrediente6'];
	$Ing7 = $_GET['Ingrediente7'];
	$Ing8 = $_GET['Ingrediente8'];
	$Ing9 = $_GET['Ingrediente9'];
	$sql = "SELECT Receita FROM receitas where Receita LIKE '%$Ing1%' AND Receita LIKE '%$Ing2%' AND Receita LIKE '%$Ing3%' AND Receita LIKE '%$Ing4%' AND Receita LIKE '%$Ing5%' AND Receita LIKE '%$Ing6%' AND Receita LIKE '%$Ing7%' AND Receita LIKE '%$Ing8%' AND Receita LIKE '%$Ing9%' OR Preparo LIKE '%$Ing1%' AND Preparo LIKE '%$Ing2%' AND Preparo LIKE '%$Ing3%' AND Preparo LIKE '%$Ing4%' AND Preparo LIKE '%$Ing5%' AND Preparo LIKE '%$Ing6%' AND Preparo LIKE '%$Ing7%' AND Preparo LIKE '%$Ing8%' AND Preparo LIKE '%$Ing9%'";
} elseif ($Qtde == "10") {
	$Ing1 = $_GET['Ingrediente1'];
	$Ing2 = $_GET['Ingrediente2'];
	$Ing3 = $_GET['Ingrediente3'];
	$Ing4 = $_GET['Ingrediente4'];
	$Ing5 = $_GET['Ingrediente5'];
	$Ing6 = $_GET['Ingrediente6'];
	$Ing7 = $_GET['Ingrediente7'];
	$Ing8 = $_GET['Ingrediente8'];
	$Ing9 = $_GET['Ingrediente9'];
	$Ing10 = $_GET['Ingrediente10'];
	$sql = "SELECT Receita FROM receitas where Receita LIKE '%$Ing1%' AND Receita LIKE '%$Ing2%' AND Receita LIKE '%$Ing3%' AND Receita LIKE '%$Ing4%' AND Receita LIKE '%$Ing5%' AND Receita LIKE '%$Ing6%' AND Receita LIKE '%$Ing7%' AND Receita LIKE '%$Ing8%' AND Receita LIKE '%$Ing9%' AND Receita LIKE '%$Ing10%' OR Preparo LIKE '%$Ing1%' AND Preparo LIKE '%$Ing2%' AND Preparo LIKE '%$Ing3%' AND Preparo LIKE '%$Ing4%' AND Preparo LIKE '%$Ing5%' AND Preparo LIKE '%$Ing6%' AND Preparo LIKE '%$Ing7%' AND Preparo LIKE '%$Ing8%' AND Preparo LIKE '%$Ing9%' AND Preparo LIKE '%$Ing10%'";
}

$numberOfRows = 1;
$csv_output = "";

$values = mysqli_query($dbcon, $sql);
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