<?php
if (!empty($_REQUEST['nome']) && !empty($_REQUEST['idade'])){
    $nome = $_REQUEST['nome'];
    $idade = intval($_REQUEST['idade']);
    echo "Olá $nome, você tem $idade anos.";
};

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <form method="post">
        <input type="text" name="nome" placeholder="Seu nome aqui..">
        <input type="number" name="idade" placeholder="Sua idade aqui.." >
        <button type="submit">Aperte aqui!</button>
    </form>
</body>
</html>