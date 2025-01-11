<?php
require('conexao.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cidade_id = $_POST['cidade_id'];
    $titulo = trim($_POST['titulo']);
    $descricao = trim($_POST['descricao']);
    $categoria = trim($_POST['categoria']);
    $data = date('Y-m-d H:i:s');

    $q = "INSERT INTO melhorias (cidade_id, titulo, descricao, categoria, data) 
          VALUES ('$cidade_id', '$titulo', '$descricao', '$categoria', '$data')";
    mysqli_query($con, $q);

    header("Location: melhorias.php?cidade_id=$cidade_id");
    exit;
}

$cidade_id = $_GET['cidade_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Melhoria</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>Adicionar Melhoria</h1>
    <form method="post">
        <input type="hidden" name="cidade_id" value="<?= $cidade_id ?>">
        Título: <input type="text" name="titulo" required><br>
        Descrição: <textarea name="descricao" required></textarea><br>
        Categoria: <input type="text" name="categoria" required><br>
        <button type="submit">Adicionar</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
