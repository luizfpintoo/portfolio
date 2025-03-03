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

    $projetos = [
        [
            "titulo" => "Meu Portfólio",
            "ano" => 2025,
            "data" => "2025-03-02",
            "finalizado" => true,
            "descricao" => "Meu primeiro projeto escrito em PHP e HTML"
        ],
        [
            "titulo" => "Projeto 2",
            "ano" => 2025,
            "data" => "2025-03-02",
            "finalizado" => false,
            "descricao" => "Meu primeiro projeto escrito em PHP e HTML"
        ],
        [
            "titulo" => "Projeto 3",
            "ano" => 2025,
            "data" => "2025-03-02",
            "finalizado" => false,
            "descricao" => "Meu primeiro projeto escrito em PHP e HTML"
        ]
    ];

    function verificarFinalizado($projeto)
    {
        if ($projeto["finalizado"]) {
            return '<span class="green">Finalizado ✅</span>';
        }else {
            return '<span class="red">Não finalizado ⛔</span>';
        }
    }


    ?>

    <?php foreach ($projetos as $projeto): ?>
        <div
            <?php if (($projeto["ano"] - 1994) > 30) : ?>
            style="background-color:rgb(141, 208, 234);"
            <?php endif; ?>>
            <h2><?= $projeto["titulo"]; ?></h2>
            <p><?= $projeto["descricao"]; ?></p>

            <div>
                <?= $projeto["data"]; ?>
            </div>
            <div>
                <?= verificarFinalizado($projeto); ?>
            </div>
        </div>
    <?php endforeach; ?>
</body>

</html>