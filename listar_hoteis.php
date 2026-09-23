<?php

require_once "conexao.php";

$sql = "SELECT * FROM hoteis";
$resultado = mysqli_query($conexao, $sql);

if (!$resultado) {
    die("Erro na consulta: " . mysqli_error($conexao));
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Hotéis Parceiros</title>
</head>
<body>
    
<h1>Hotéis Parceiros</h1>

<table border="1">
    
    <thead>
        <tr>
            <th>Nome do Hotel</th>
            <th>Cidade</th>
            <th>Classificação</th>
            <th>Ação</th>
        </tr>
    </thead>

    <tbody>
        <?php while ($hotel = mysqli_fetch_assoc($resultado)) { ?>
    <tr>
        <td><?php echo $hotel['nome']; ?></td>
        <td><?php echo $hotel['cidade']; ?></td>
        <td><?php echo $hotel['estrelas']; ?>estrelas</td>
        <td>
            <a href="ver_quartos.php?id_hotel=<?php echo
            $hotel['id']; ?>">Ver Quartos Disponíveis</a>
        </td>
    </tr>
    <?php } ?>
    </tbody>
    </table>

</body>    
</html>