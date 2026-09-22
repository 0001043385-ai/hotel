<?php

require_once 'conexao.php';

$id_hotel = $_POST['id_hotel'];
$numero_quarto = $_POST['numero_quarto'];
$tipo = $_POST['tipo'];
$preco = $_POST['preco'];

$sql = "INSERT INTO quartos (hotel_id,numero,
tipo, preco_diaria, disponivel) VALUES ('$id_hotel','$numero_quarto',
'$tipo', '$preco', 1)";

if (mysqli_query($conexao, $sql)){
    echo "<h2>Quarto cadastrado com sucesso!</h2>";
    echo "<a
    href='cadastrar_quarto.html'>Cadastrar outro quarto</a><br><br>";
    echo "<a
    href='logout_hotel.php'>Sair do sistema </a>";
}else{
    echo "Erro ao cadastrar o quarto:" . mysqli_error($conexao);
}

?>