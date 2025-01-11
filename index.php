<?php
require('conexao.php');

$q = "SELECT * FROM cidades ORDER BY nome ASC";
$cidades = mysqli_query($con, $q);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Cidades</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="header">
        <img src="imagem/bemvindo.jpg" alt="Bem-vindo" class="bem-vindo-img">
    </div>
    
    <div class="content">
        <h1>Bem-vindo ao Sistema Urbano</h1>
        <p>Escolha uma cidade ou cadastre uma nova para começar!</p>
    </div>
    
    <a href="adicionar_cidade.php">Adicionar Cidade</a>
    <ul>
        <?php while ($cidade = mysqli_fetch_assoc($cidades)) { ?>
            <li>
                <a href="melhorias.php?cidade_id=<?= $cidade['id'] ?>">
                    <?= $cidade['nome'] ?> (<?= $cidade['estado'] ?>)
                </a>
            </li>
        <?php } ?>
    </ul>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>