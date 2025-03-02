<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio</title>
</head>
<body>
    <h1>
        <?php 
            $nome = "Luiz";
            $saudacao = "Olá bem vindo(a) ao portfólio do " . $nome;
            $titulo = "Muito bom ter você aqui!!!!";
            $ano = 2025;
            echo $saudacao;
        ?>
    </h1>
    <h2>
        <?= $titulo . "<br>"; ?> 
        <?= $ano; ?> 
    </h2>
</body>
</html>