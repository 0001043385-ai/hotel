<?php

require_once 'conexao.php';

$sql = "SELECT * FROM quartos";
$resultado = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Quartos</title>
</head>
<body>
    
    <h1>Quartos Cadastrados</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Hotel</th>
                <th>Número do quarto</th>

                <th>Tipo</th>
                <th>Preço da Diária</th>

            </tr>
        </thead>

        <tbody>

        <?php while ($quarto = mysqli_fetch_assoc($resultado)) { ?>
                                                
            <tr>
                <td><?php echo $quarto['id']; ?></td>
                <td><?php echo $quarto['hotel_id']; ?></td>
                <td><?php echo $quarto['numero']; ?></td>
                <td><?php echo $quarto['tipo']; ?></td>
                <td>R$ <?php echo $quarto['preco_diaria']; ?></td>
            </tr>
        
        <?php } ?>

        </tbody>
    </table>

    <br>

    <a href="cadastrar_quarto.html">Cadastrar novo quarto</a>

    <br><br>

    <a href="logout_hotel.php">Voltar/Sair</a>

</body>
</html>