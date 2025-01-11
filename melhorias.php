<?php
require('conexao.php');

$cidade_id = $_GET['cidade_id'];

$q = "SELECT * FROM melhorias WHERE cidade_id = '$cidade_id' ORDER BY data DESC";
$melhorias = mysqli_query($con, $q);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Melhorias</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>Melhorias para a Cidade</h1>
    <a href="adicionar_melhoria.php?cidade_id=<?= $cidade_id ?>">Adicionar Melhoria</a>
    <ul>
        <?php while ($melhoria = mysqli_fetch_assoc($melhorias)) { ?>
            <li>
                <?= $melhoria['titulo'] ?> - <?= $melhoria['data'] ?>
                <a href="detalhes_melhoria.php?id=<?= $melhoria['id'] ?>">Ver Detalhes</a>
            </li>
        <?php } ?>
    </ul>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>