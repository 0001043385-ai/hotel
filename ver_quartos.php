<?php

require_once "conexao.php";

$id_hotel = $_GET['id_hotel'];

$sql = "SELECT * FROM quartos WHERE id = '$id_hotel'";
$resultado = mysqli_query($conexao, $sql);

if (!$resultado) {
    die("Erro na consulta: " . mysqli_error($conexao));
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Quartos Disponíveis</title>
</head>
<body>
    
<h1>Quartos Disponíveis</h1>

<table border="1">
    <thead>
        <tr>
            <th>Número</th>
            <th>Tipo</th>
            <th>Preço da Diária</th>
            <th>ID do Quarto</th>
        </tr>
    </thead>

    <tbody>
        <?php while ($quarto = mysqli_fetch_assoc($resultado)) { ?>
    <tr>
        <td><?php echo $quarto['numero_quarto']; ?></td>
        <td><?php echo $quarto['tipo']; ?></td>
        <td>R$ <?php echo $quarto['preco']; ?></td>
        <td><?php echo $quarto['id_quarto']; ?></td>
    </tr>
    <?php } ?>
    </tbody>
</table>

<h2>Fazer Reserva</h2>

<form action="salvar_reserva.php" method="post">

<label>ID do Cliente:</label>
<input type="number" name="id_cliente" required>

<br><br>

<label>ID do Quarto:</label>
<input type="number" name="id_quarto" required>

<br><br>

<label>Data de Entrada/Check-in:</label>
<input type="date" name="data_entrada" required>

<br><br>

<label>Data de Saída/Check-out:</label>
<input type="date" name="data_saida" required>

<br><br>

<button type="submit">Confirmar Reserva</button>
</form>

</body>
</html>