<?php
// Dados da tabela 1
$dados1 = [["Col1", "Col2"], ["A", "B"], ["C", "D"]];

// Dados da tabela 2
$dados2 = [["ColX", "ColY"], ["1", "2"], ["3", "4"]];
?>

<style>
    .tabela-wrapper {
        display: inline-block;
        margin: 10px;
        vertical-align: top;
    }
</style>

<div class="tabela-wrapper">
    <table border="1">
        <tr>
            <th>Col1</th>
            <th>Col2</th>
        </tr>
        <?php foreach ($dados1 as $linha): ?>
            <tr>
                <td><?php echo $linha[0]; ?></td>
                <td><?php echo $linha[1]; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

<div class="tabela-wrapper">
    <table border="1">
        <tr>
            <th>ColX</th>
            <th>ColY</th>
        </tr>
        <?php foreach ($dados2 as $linha): ?>
            <tr>
                <td><?php echo $linha[0]; ?></td>
                <td><?php echo $linha[1]; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>