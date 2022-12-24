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
                    <hr class="separator separator--dots">
                </div>
                <p>Je crée le site web qui vous correspond et m'occupe de son suivi. Passionné et très investi, j’ai le plaisir de vous proposer mes services : création du site internet, design, référencement, rédaction web, webmarketing, ...</p>
                <div class="d-flex justify-content-center">
                    <a href="#" id="aboutBis" class="jumbotron-btn scroll">Qui suis-je ?</a>&emsp;
                    <a href="#" id="achievementsBis" class="jumbotron-btn btn2 scroll">Mes projets</a>
                </div>
            </div>
        </section>

        <section class="about aboutBis py-5">
            <div class="container">
                <div class="col-12 text-light">
                    <h2 class="text-center">Faisons connaissance</h2>
                    <hr class="hr mb-5" style="height:0.3125rem">
                    <div class="d-flex align-items-center row">
                        <div class="d-none d-xl-block col-xl-2"><i class="fa-solid fa-code"></i></div>
                        <div class="col-12 col-xl-10 px-4">
                            <p>Hello ! Je m’appelle <b>Kevin Arigoni</b>, <b>développeur full stack</b> en recherche d'emploi, <b>créatif</b> et <b>passionné</b>. Je me suis lancé à 100% dans ce domaine en me documentant sur tous les thèmes possibles, en engrangeant de l’expérience durant mes études, dans mes différentes expériences professionnelles ainsi que durant mon expérience d’<b>entrepreneur</b>.</p>
                            <p><b>100% autonome</b>, <b>à l'écoute</b> et <b>force de proposition</b>, je suis prêt à m'investir pleinement dans votre projet et à m'adapter à vos besoins. Je vous apporte mon expertise pour : l'<b>intégration de maquettes</b>, la <b>création de tous types de projets web</b> : aussi bien un site vitrine, site wordpress, e-commerce ou sur mesure..., mais aussi le <b>rafraîchissement et l'optimisation du référencement SEO</b> d'un site existant.</p>
                            <p><u><b>Mes hobbies :</b></u> l'informatique et les nouvelles techniques (réalité virtuelle/augmentée, l'impression 3D, ....), les échecs et le karaté dont je suis ceinture marron 2ème DAN. J'ai réalisé plusieurs compétitions de karaté.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="skill pb-5">
            <div class="container">
                <div class="col-12 skill_bloc p-4">
                    <div class="d-flex align-items-center flex-column">
                        <h2>Mes Compétences</h2>
                        <hr class="hr mt-1" style="height:0.3125rem">
                        <p class="text-center subtitle mb-5">Elles sont en constantes améliorations car pour moi la joie de ce métier fait que l’on en apprend tous les jours, d’autant plus en étant impliqué, curieux et passionné.</p>
                    </div>
                    <p>Je suis en mesure d’intervenir à n’importe quel niveau technique de la pile des différentes couches qui constituent une application client/serveur.</p>
                    <p>De façon plus précise:</p>
                    <ul>
                        <li>&ensp;Concevoir, manipuler et interroger des <b>bases de données</b> &emsp;<span class="box">MongoDB</span>&ensp; <span class="box">MySQL</span></li>
                        <li>&ensp;Concevoir le <b>back-end</b> et les <b>API</b> sous forme de webservices &emsp;<span class="box">NodeJS</span>&ensp; <span class="box">PHP</span></li>
                        <li>&ensp;Concevoir le <b>front-end</b> et optimiser les <b>assets</b> &emsp;<span class="box">ReactJS</span>&ensp; <span class="box">VueJS</span>&ensp; <span class="box">JavaScript</span>&ensp; <span class="box">Sass</span>&ensp; <span class="box">Bootstrap</span>&ensp; <span class="box">HTML/CSS</span></li>
                        <li>&ensp;Concevoir un site à l'aide d'un <b>CMS</b> &emsp;<span class="box">Wordpress</span>&ensp; <span class="box">Woocommerce</span>&ensp; <span class="box">Prestashop</span></li>
                        <li>&ensp;Utilisation d'outil de <b>versionning</b> &emsp;<span class="box">Git</span>&ensp; <span class="box">Gitkraken</span>&ensp; <span class="box">Github</span></li>
                        <li>&ensp;Gérer un <b>projet</b> et sa <b>timeline</b> avec des méthodes de <b>développement agiles</b> &emsp;<span class="box">Trello</span></li>
                        <li>&ensp;Gérer une <b>prospection commerciale</b> &emsp;<span class="box">Zoho</span>&ensp; <span class="box">Pipe drive</span></li>
                        <li>&ensp;Réaliser des travaux divers avec des <b>logiciels</b> &emsp;<span class="box">VSCode</span>&ensp; <span class="box">OBS Studio</span>&ensp; <span class="box">Sony Vega Pro</span>&ensp; <span class="box">Photoshop</span>&ensp; <span class="box">Sketchup Pro</span></li>
                        <li>&ensp;Travailler et configurer les <b>systèmes d'exploitation</b> &emsp;<span class="box">Windows</span>&ensp; <span class="box">Linux</span></li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="iam">
            <div class="container">
                <div class="col-12 text-light text-center">
                    <h2 class="iam_Txt">Je suis un <span class="txt-rotate" data-period="2000" data-rotate='[ "Développeur Full Stack.", "Webmaster.", "Intégrateur Web.", "Commercial." ]'></span></h2>
                    <p>Tous les projets sont un challenge pour moi. Votre réussite est la mienne !</p>
                </div>
            </div>
        </section>

        <section class="exp py-5">
            <div class="container">
                <div class="col-12">
                    <div class="d-flex align-items-center flex-column">
                        <h2>Mes Expériences</h2>
                        <hr class="hr mt-1" style="height:0.3125rem">
                        <p class="text-center subtitle mb-5">Ayant de l’expérience dans de multiples domaines, voici une liste des expérience la plus significtive.</p>
                    </div>
                    <?php require("./Exp.php"); ?>
                </div>
            </div>
        </section>

        <section class="testimony py-5">
            <div class="container">
                <div class="col-12">
                    <h2 class="text-center text-light">Témoignages</h2>
                    <hr class="hr mb-5" style="height:0.3125rem">
                </div>
            </div>
        </section>

        <section class="achievements achievementsBis py-5">
            <div class="container">
                <div class="col-12">
                    <div class="d-flex align-items-center flex-column text-light">
                        <h2>Mes Réalisations</h2>
                        <hr class="hr mt-1" style="height:0.3125rem">
                        <p class="text-center subtitle mb-5">Une partie des projets sur lesquels j'ai travaillé.</p>
                    </div>
                    <?php require("./Portfolio.php"); ?>
                </div>
            </div>
        </section>
        
        <section class="contactMe py-5">
            <div class="container">
                <div class="col-12">
                    <h2 class="text-center">Disponibilité & Contact</h2>
                    <hr class="hr mb-5" style="height:0.3125rem">
                    <div class="d-flex justify-content-evenly contactMe_Dispo">
                        <div><i class="fa-solid fa-house-user"></i>&emsp;Travaille à distance</div>
                        <div><i class="fa-regular fa-clock"></i>&emsp;Disponible à plein temps</div>
                        <div><i class="fa-regular fa-envelope"></i>&emsp;Réponse rapide assurée</div>
                    </div>
                    <div class="row justify-content-between align-items-center flex-wrap mt-5 contactMe_form p-5">
                        <div class="col-12 col-xl-6">
                            <p class="contactMe_SubTitle">Envoyez moi un message</p>
                            <p class="contactMe_Title">Écrivez-moi quelques mots sur votre projet: </p>
                            <p class="contactMe_Title-bis pb-1 pt-3"><i class="fa-solid fa-phone"></i> <a href="tel:+33782088698" title="Téléphone">+33 7 82 08 86 98</a></p>
                            <p class="contactMe_Title-bis pb-1"><i class="fa-solid fa-envelope"></i> <a href="mailto:contact@arigoni-kevin.fr" title="Mail">contact@arigoni-kevin.fr</a></p>
                            <p class="contactMe_Title-bis"><i class="fa-solid fa-link"></i> <a href="https://www.arigoni-kevin.fr/" title="Site web">https://www.arigoni-kevin.fr</a></p>
                            <p class="social mt-5">Réseau sociaux</p>
                            <div>
                                <a href="https://www.facebook.com/profile.php?id=100050100790571" title="Facebook" class="social_media"><i class="fa-brands fa-facebook"></i></a>&emsp;
                                <a href="https://github.com/arigoni?tab=repositories" title="Github" class="social_media"><i class="fa fa-github" aria-hidden="true"></i></a>&emsp;
                                <a href="https://www.linkedin.com/in/kevin-arigoni" title="Linkedin" class="social_media"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6">
                            <form id="contact" class="row" method="post" action="traitement.php">
                                <div class="form-group col-lg-4">
                                    <label class="form-control-label" for="nom">Nom</label>
                                    <input type="text" class="form-control" id="nom" name="nom">
                                </div>
                                <div class="form-group col-lg-4">
                                    <label class="form-control-label" for="email">Email</label>
                                    <input type="text" class="form-control" id="email" name="email">
                                </div>
                                <div class="form-group col-lg-4">
                                    <label class="form-control-label" for="objet">Objet</label>
                                    <input type="text" class="form-control" id="objet" name="objet">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label class="form-control-label" for="message">Message</label>
                                    <textarea class="form-control" id="message" name="message" rows="6"></textarea>
                                </div>
                                <div class="form-group col-lg-12">
                                    <button class="btn btn-info float-end mt-2" type="submit" name="envoi">Envoyer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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