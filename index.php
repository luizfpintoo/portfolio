<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <title>Portfólio</title>
</head>

<body class="bg-slate-900 text-white">
    <?php include("./componetes/header.php"); ?>

    <main class="mx-auto max-w-5xl px-3 py-3 mt-30">
        <section class="flex gap-x-3 items-center" data-aos="fade-down" data-aos-delay="100">
            <div>
                <h1 class="text-4xl font-semibold pb-3">Olá, bem-vindo(a) ao meu Portfólio</h1>
                <p class="text-1xl leading-8 mt-3 text-gray-300">
                Meu nome é Luiz Felipe e sou desenvolvedor web. Especializado na criação de sites e sistemas dinâmicos, atualmente atuo como desenvolvedor backend na Raízes Soluções, utilizando principalmente PHP em minha stack. Aqui no meu site, você pode acompanhar meus projetos, ficar por dentro das novidades e, se tiver interesse em algum trabalho, não hesite em entrar em contato comigo!
                </p>
                    <a title="Link para projetos" href="#projetos" class="inline-block pt-2 font-bold hover:underline">Conheça meus projetos</a>
            </div>
            <div class="w-2/3 flex items-center justify-center hover-image">
                <div>
                    <img src="./assets/images/perfil.png" alt="">
                </div>
            </div>
        </section>

        <section class="mx-auto max-w-5xl mt-20" data-aos="fade-up" data-aos-duration="2000">
            <div id="projetos">
                <h2 class="text-2xl font-semibold mb-4">Meus Projetos</h2>
            </div>

            <?php include("./componetes/projetos.php"); ?>
        </section>
    </main>

    <?php include("./componetes/footer.php"); ?>

    <script src="./assets/js/index.js"></script>
</body>

</html>