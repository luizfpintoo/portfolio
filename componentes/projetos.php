<?php

$projetos = [
    [
        "titulo" => "Portfólio Dev",
        "ano" => 2025,
        "data" => "2025-03-02",
        "finalizado" => false,
        "descricao" => "Este é meu primeiro projeto que estou desenvolvendo em PHP, tem como objetivo compartilhar a minha evolução nessa stack, aplicando na pratica em projetos reais conhecimento absorvido no dia a dia de trabalho e estudo.",
        "stack" => ["HTML", "CSS", "JavaScript", "PHP"],
        "img" => "assets/images/portfolio.png"
    ],
    
];
?>

<?php foreach ($projetos as $projeto): ?>
    <div class="bg-slate-800 rounded-md flex p-3 mb-4">
        <div class="w-1/2">
            <img src="<?= $projeto["img"]; ?>" alt="" class="rounded-md object-cover">
        </div>
        <div class="w-3/4 ml-10">
            <div class="flex justify-between gap-3">
                <div>

                    <?php if ($projeto["finalizado"]) : ?>
                        ✅ <h3 class="inline font-semibold text-1xl">
                            <?= $projeto["titulo"]; ?>
                        </h3>
                        <span class="font-bold text-sm italic text-gray-400">
                            (Finalizado em <?= $projeto["ano"]; ?>)
                        </span>

                    <?php else: ?>
                        👨‍💻 <h3 class="inline font-semibold text-1xl">
                            <?= $projeto["titulo"]; ?>
                        </h3>
                        <span class="font-bold text-sm italic text-gray-400">
                            (Em Desenvolvimento)
                        </span>
                    <? endif; ?>
                </div>
                <div>
                    <?php
                    $cores = [
                        "HTML" => "red",
                        "CSS" => "sky",
                        "JavaScript" => "yellow",
                        "PHP" => "indigo"
                    ];
                    foreach ($projeto["stack"] as $linguagem):
                    ?>
                        <?php foreach ($cores as $key => $value) : ?>
                            <?php if ($linguagem == $key): ?>
                                <span class="text-xs text-<?= $value; ?>-800 font-semibold py-1 px-3 rounded-xl bg-<?= $value; ?>-400"><?= $linguagem; ?></span>
                            <?php endif; ?>
                        <? endforeach; ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="mt-3">
                <p class="leading-8 text-gray-300"><?= $projeto["descricao"]; ?></p>
            </div>
        </div>
    </div>
<?php endforeach; ?>