<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARIGONI Kevin - Développeur Web - Gestion de Vos Projets Web</title>
    <meta name="description" content="Développeur web fullstack et créateur de site internet depuis 2006. Développement web, création ou refonte de site internet, intégration, référencement (SEO & SEA), marketing digital, etc...">
    <meta name="keywords" content="arigoni, kévin, kev, kevin, developpeur, dev, full-stack, frontend, backend, code, codeur, freelance, indépendant, entrepreneur, webmaster, Webmaster, créateur, createur, site, 2.0, 3.0">
    <!-- Bootstrap / CSS / Fontawesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="public/css/index.css">
    <script src="https://kit.fontawesome.com/a62e0cc052.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Dosis:700" rel="stylesheet">
    <!-- Référencement / Twitter Card data / Open Graph data - Facebook -->
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.arigoni-kevin.fr">
    <link rel="shortcut icon" href="favicon.ico">
    <meta name="twitter:card" content="summary">
    <meta property="og:type" content="website">
    <meta property="og:title" content="ARIGONI Kevin - Développeur Web - Gestion de Vos Projets Web">
    <meta property="og:description" content="Développeur web, je vous assiste pour créer vos sites web & optimiser votre présence grâce au référencement (SEO) et au marketing digital.">
    <meta property="og:url" content="https://www.arigoni-kevin.fr">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DM9WPMJ6SX"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-DM9WPMJ6SX');
    </script>
</head>
<body>
    <!-- En-tête -->
    <?php require("./Header.php"); ?>
    <!-- FIN -->

    <!-- Corps de page -->
    <main>
        <section class="jumbotron">
            <div class="jumbotron_info text-light p-5">
                <div class="jumbotron_center">
                    <p class="jumbotron_class">Développeur Full Stack - Webmaster</p>
                    <h1>Bienvenue, je suis Kevin</h1>
                    <hr class="separator separator--dots" />
                </div>
                <p>Je crée le site web qui vous correspond et m'occupe de son suivi. Passionné et très investi, j’ai le plaisir de vous proposer mes services : création du site internet, design, référencement, rédaction web, webmarketing, ...</p>
                <div class="d-flex justify-content-center">
                    <a href="#" id="about" class="jumbotron-btn scroll">Qui suis-je ?</a>&emsp;
                    <a href="#" id="projects" class="jumbotron-btn btn2 scroll">Mes projets</a>
                </div>
            </div>
        </section>
        <section class="about py-5">
            <div class="container">
                <div class="col-12 text-light">
                    <h2 class="text-center">Faisons connaissance</h2>
                    <hr class="hr mb-5" style="height:0.3125rem">
                    <div class="d-flex align-items-center">
                        <div class="col-2"><i class="fa-solid fa-code"></i></div>
                        <div class="col-10 px-4">
                            <p>Hello ! Je m’appelle <b>Kevin Arigoni</b>, <b>développeur full stack</b> en recherche d'emploi, <b>créatif</b> et <b>passionné</b>. Je me suis lancé à 100% dans ce domaine en me documentant sur tous les thèmes possibles, en engrangeant de l’expérience durant mes études, dans mes différentes expériences professionnelles ainsi que durant mon expérience d’<b>entrepreneur</b>.</p>
                            <p><b>100% autonome</b>, <b>à l'écoute</b> et <b>force de proposition</b>, je suis prêt à m'investir pleinement dans votre projet et à m'adapter à vos besoins. Je vous apporte mon expertise pour : la <b>prospection commerciale</b>, l'<b>intégration de maquettes</b>, la <b>création de tous types de projets web</b> : aussi bien un site vitrine, site wordpress, e-commerce ou sur mesure..., mais aussi le <b>rafraîchissement et l'optimisation du référencement SEO</b> d'un site existant.</p>
                            <p><u><b>Mes hobbies :</b></u> l'informatique et les nouvelles techniques (réalité virtuelle/augmentée, l'impression 3 D, ....), les échecs et le karaté dont je suis ceinture marron 2ème DAN. J'ai réalisé plusieurs compétitions de karaté.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section></section>
    </main>
    <!-- FIN -->

    <!-- Pied-de-page -->
    <?php require("./Footer.php"); ?>
    <!-- FIN -->

    <!-- Scripts : JS Bundle with Popper / Jquery / JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="public/js/index.js"></script>
</body>
</html>