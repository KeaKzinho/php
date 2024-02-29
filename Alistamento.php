<?php
$idade = intval($_REQUEST['idade']);
$sexo = $_REQUEST['sexo'];

if ($idade>=18 && $sexo="masculino"){
    echo "Obrigado a se alistar.";
} else{
    echo "Você pode ficar a vontade.";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sexo e Idade</title>
</head>
<body>
    <form method="post">
        <input type="number" name="idade" placeholder="Informe sua idade: ">
        <select name="sexo">
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
        </select>
        <button type="submit">Aperte aqui!</button>
    </form>
</body>
</html>