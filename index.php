<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio</title>
    <style>
        .green {
            color: green;
        }

        .red {
            color: red;
        }
    </style>
</head>
<body>
    <?php 
        $nome = "Luiz";
        $saudacao = "Olá bem vindo(a) ao portfólio do " . $nome;
        $titulo = "Muito bom ter você aqui!!!!";
        $ano = 2025;
        $tituloProjeto = "Meu Portfólio";

        //1° projeto escrito em php e html
        $projeto = "Meu Portfólio";
        $dataDoProjeto = "2022-03-02";
        $finalizado = true;
        $descricao = "Meu primeiro projeto escrito em PHP e HTML";
    ?>
   
    <h1>
        <?= $saudacao; ?>
    </h1>
    <h2>
        <?= $titulo . "<br>"; ?> 
        <?= $ano; ?> 
    </h2>

    <hr>

    <div
        <?php  if(($ano - 1994) > 30) : ?>
            style="background-color: red;"
        <?php endif; ?>
    >
        <h2><?= $tituloProjeto; ?></h2>
        <p><?= $descricao; ?></p>

        <div>
            <?= $dataDoProjeto; ?>
        </div>
        <div>
            <?php if(!$finalizado): ?>
                <span class="green">Finalizado ✅</span>
            <?php else: ?>
               <span class="red">Não finalizado ⛔</span> 
            <?php endif; ?>
        </div>
    </div>
</body>
</html>