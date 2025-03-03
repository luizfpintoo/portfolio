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
            "titulo" => "Sistema de Gerenciamento de Tarefas",
            "ano" => 2025,
            "data" => "2025-03-03",
            "finalizado" => false,
            "descricao" => "Um sistema para criar, editar e acompanhar tarefas usando PHP e MySQL"
        ],
        [
            "titulo" => "E-commerce Simples",
            "ano" => 2025,
            "data" => "2025-03-04",
            "finalizado" => false,
            "descricao" => "Uma loja virtual básica com carrinho de compras e integração com API de pagamento"
        ],
        [
            "titulo" => "Chat em Tempo Real",
            "ano" => 2025,
            "data" => "2025-03-05",
            "finalizado" => false,
            "descricao" => "Um chat online utilizando PHP, JavaScript e WebSocket para mensagens instantâneas"
        ],
        [
            "titulo" => "Blog com Painel Administrativo",
            "ano" => 2025,
            "data" => "2025-03-06",
            "finalizado" => false,
            "descricao" => "Um blog com interface de postagem e painel para o administrador"
        ],
        [
            "titulo" => "Sistema de Controle de Estoque",
            "ano" => 2025,
            "data" => "2025-03-07",
            "finalizado" => true,
            "descricao" => "Aplicativo que gerencia entradas e saídas de produtos com relatórios detalhados"
        ]
    ];


    function verificarFinalizado($projeto)
    {
        if ($projeto["finalizado"]) {
            return '<span class="green">Finalizado ✅</span>';
        } else {
            return '<span class="red">Não finalizado ⛔</span>';
        }
    }

    function filtrarProjetos($projetos, $finalizado = null)
    {

        if (is_null($finalizado)) {
            return $projetos;
        }

        $filtrados = [];

        foreach ($projetos as $projeto) {
            if (! is_null($finalizado) && $projeto["finalizado"]) {
                $filtrados[] = $projeto;
            }
        }

        return $filtrados;
    }


    ?>

    <?php foreach (filtrarProjetos($projetos, true) as $projeto): ?>
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