<?php

require_once 'conexao.php';

// Consulta SQL
$sql = "SELECT * FROM reservas ORDER BY data_entrada DESC";
$resultado = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minhas Reservas</title>
</head>
<body>
    
<h1>Minhas Reservas</h1>

<table border="1">
    <thead>
        <tr>
            <td>ID</td>
            <th>Hotel</th>
            <th>Data de Entrada</th>
            <th>Data de Saída</th>
        </tr>
    </thead>

    <tbody>
        <?php while ($reserva = mysql_fetch_assoc($resultado)) { ?>
    <tr>
        <td><?php echo $reserva['id']; ?></td>
        <td><?php echo $reserva['hotel']; ?></td>
        <td><?php echo date('d/m/Y', strtotime($reserva['data_entrada'])); ?></td>
        <td><?php echo date('d/m/Y', strtotime($reserva['data_saida'])); ?></td>
    </tr>
    <?php } ?>
    </tbody>
</table>

<br>

<a href="listar_hoteis.php">Voltar para a lista de hotéis</a>

</body>
</html>