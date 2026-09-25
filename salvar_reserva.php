<?php

require_once 'conexao.php';

$cliente_id = $_POST['cliente_id'];
$quarto_id = $_POST['quarto_id'];
$data_entrada = $_POST['data_entrada'];
$data_saida = $_POST['data_saida'];

$sql = "INSERT INTO reservas (cliente_id, quarto_id,
data_entrada, data_saida) VALUES ($cliente_id,
$quarto_id, '$data_entrada', '$data_saida')";

if (mysqli_query($conexao, $sql)) {
    echo "<h2>Reserva realizada com sucesso!</h2>";
    echo "<a href='minhas_reservas.php'>Ver Minhas Reservas</a>";
} else {
    header("Location: ver_quartos.php");
    exit();
}

?>