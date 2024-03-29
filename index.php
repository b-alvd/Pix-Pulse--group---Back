<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Pix&Pulse société basée à Lyon qui a pour domaine le développement web, web mobile et le graphisme. Pix&Pulse comprend aussi plusieurs filiales.">
        <meta name="keywords" content="developpement, dev, development, web, web mobile, mobile, lyon, Lyon, Pix&Pulse, Pix, pix, &, Pulse, pulse">
        <meta name="author" content="Basile ALEVEQUE-DESSOLIN">
        <meta name="copyright" content="Pix&Pulse Group">
        <meta name="robots" content="index,nofollow"/>
        
        <title>Pix&Pulse Group | Accueil</title>
        <link rel="icon" type="image/webp" href="./public/assets/logo.webp" />

        <!-- Fonts -->
        <!-- Roboto Regular 400 -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    
        <!-- Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
        <!-- Styles -->
        <link rel="stylesheet" href="./public/css/global.css">
        <link rel="stylesheet" href="./public/css/header.css">
        <link rel="stylesheet" href="./public/css/subsidiaries.css">
        <link rel="stylesheet" href="./public/css/presentation.css">
        <link rel="stylesheet" href="./public/css/contact.css">
        <link rel="stylesheet" href="./public/css/footer.css">
        <link rel="stylesheet" href="./public/css/popup_identification.css">
    </head>

    <body>
        <header id="home_top">
            <div class="header_topBar">
                <div class="header_topBar__content">
                    <section>
                        <i class="fa-solid fa-phone header_topBar_icon"></i><span>07-81-84-01-05</span>
                    </section>
                    <section>
                        <i class="fa-solid fa-envelope header_topBar_icon"></i>
                        <span>contact@pix&pulse.com</span>
                    </section>
                </div>
            </div>
        
            <div id="navbar" class="header_navBar">
                <div class="header_navBar__content">
                    <a href="#" class="header_navBar_logo">
                        <img class="header_navBar_logo__img" src="./public/assets/logo.webp" alt="Logo de l'entreprise">
                        <span class="header_navBar_logo__text">Pix&Pulse</span>
                    </a>
                
                    <nav class="header_nav">
                        <ul class="header_nav__list">
                            <li class="header_nav__item"><a class="header_nav__link" href="#home_top">Accueil</a></li>
                            <li class="header_nav__item dropdown">
                                <a class="header_nav__link_drop" href="#subsidiaries" id="filialesDropdown">Filiales
                                    <span class="dropdown_icon">&#9660;</span>
                                </a>
                                <div class="dropdown_content">
                                    <a href="#subsidiaries_dev">P&P Web / Web Mobile</a>
                                    <a href="#subsidiaries_graphism">P&P Graphisme</a>
                                    <a href="#subsidiaries_heberg">P&P Hébergement</a>
                                    <a href="#subsidiaries_music">P&P Musique</a>
                                </div>
                            </li>
                            <li class="header_nav__item"><a class="header_nav__link" href="#presentation">Présentation/Histoire</a></li>
                            <li class="header_nav__item"><a class="header_nav__link" href="#contact">Contact</a></li>
                            <li class="header_nav__item"><a class="header_nav__btn" href="#" id="loginLink">S'identifier</a></li>
                        </ul>
                    </nav>
            
                    <div class="header_hamburger">
                        <div class="header_hamburger_bar"></div>
                        <div class="header_hamburger_bar"></div>
                        <div class="header_hamburger_bar"></div>
                    </div>
                </div>
            </div>
        </header>

        <section id="home">
            <h1>Bienvenue chez Pix&Pulse</h1>
            <p>Transformer l'ordinaire en extraordinaire</p>
            <a href="">Faire un devis</a>
        </section>
        <div class="point"></div>

        <main>
            <section id="subsidiaries">
                <div class="subsidiaries_container">
                    <article id="subsidiaries_dev" class="subsidiaries_cards">
                        <img src="./public/assets/logo.webp" alt="">
                        <h2>P&P Web / Web Mobile</h2>
                        <p>Notre service de développement Web vous permet de créer des solutions numériques sur mesure, de la conception à la livraison.</p>
                        <a href="">En savoir plus...</a>
                    </article>
                    <article id="subsidiaries_graphism" class="subsidiaries_cards">
                        <img src="./public/assets/logo.webp" alt="">
                        <h2>P&P Graphisme</h2>
                        <p>Notre service de graphisme offre des designs créatifs et percutants pour renforcer votre identité visuelle.</p>
                        <a href="">En savoir plus...</a>
                    </article>
                    <article id="subsidiaries_heberg" class="subsidiaries_cards">
                        <img src="./public/assets/logo.webp" alt="">
                        <h2>P&P Hébergement</h2>
                        <p>Notre service d'hébergement propose des solutions fiables/sécurisées pour assurer la disponibilité/performance de votre site web.</p>
                        <a href="">En savoir plus...</a>
                    </article>
                    <article id="subsidiaries_music" class="subsidiaries_cards">
                        <img src="./public/assets/logo.webp" alt="">
                        <h2>P&P Musique</h2>
                        <p>Notre service musical offre une plateforme complète pour découvrir, partager et créer autour de la musique.</p>
                        <a href="">En savoir plus...</a>
                    </article>
                </div>
            </section>
            <section id="presentation">
                <div class="presentation_left">
                    <div class="presentation_card">
                        <img src="./public/assets/bg_header.webp" alt="">
                        <div class="infos">
                            <h2>Fondation de Pix&Pulse</h2>
                            <p>
                                Au cœur de Lyon, animé par sa passion pour la technologie et le design, le fondateur a jeté les bases de ce qui allait devenir Pix&Pulse. Dans l'incertitude des débuts, l'idée était simple : créer une entreprise qui incarnerait l'essence de l'innovation numérique, fusionnant les pixels de la technologie avec l'énergie pulsée de l'imagination pour façonner un avenir numérique captivant.
                            </p>
                        </div>
                    </div>
                    <div class="presentation_card">
                        <img src="./public/assets/bg_header.webp" alt="">
                        <div class="infos">
                            <h2>Les Premiers Pas de l'Innovation</h2>
                            <p>
                                Les premiers pas de Pix&Pulse étaient solitaires mais chargés de promesses. Avec une détermination sans faille, le fondateur s'est plongé dans le monde du développement web, du web mobile et du design graphique. Chaque obstacle était une occasion d'apprendre, chaque succès un pas de plus vers la réalisation de la vision ambitieuse de Pix&Pulse.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="presentation_right">
                    <div class="presentation_card">
                        <img src="./public/assets/bg_header.webp" alt="">
                        <div class="infos">
                            <h2>La Vision de Pix&Pulse</h2>
                            <p>
                                Porté par une conviction profonde, le fondateur de Pix&Pulse s'est engagé à fournir des solutions numériques innovantes et sur mesure. Guidé par la volonté d'offrir une expérience exceptionnelle à chaque client, il s'efforce de repousser les limites de la créativité et de l'ingéniosité. Chez Pix&Pulse, chaque projet est plus qu'un simple travail ; c'est une mission pour créer quelque chose d'extraordinaire à partir de rien.
                            </p>
                        </div>
                    </div>
                    <div class="presentation_card">
                        <img src="./public/assets/bg_header.webp" alt="">
                        <div class="infos">
                            <h2>L'Avenir de l'Innovation</h2>
                            <p>
                                Alors que Pix&Pulse entre dans un avenir prometteur, le fondateur reste animé par la même excitation et la même ambition du premier jour. Armé de sa passion et de sa détermination, il est prêt à relever tous les défis qui se présentent à lui. Pour le fondateur de Pix&Pulse, l'avenir est une toile vierge, prête à être peinte avec les couleurs de l'innovation et de la créativité.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section id="contact">
                <img src="./public/assets/contact.webp" alt="Enveloppe sur un avion en papier">
                <form action="">
                    <h2>Contactez nous</h2>
                    <label for="fname">Nom & Prénom <span class="required">*</span></label>
                    <input type="text" id="fname" name="firstname" placeholder="Votre nom et prénom" required>
                
                    <label for="sujet">Sujet <span class="required">*</span></label>
                    <input type="text" id="sujet" name="sujet" placeholder="L'objet de votre message" required>
                
                    <label for="emailAddress">Email <span class="required">*</span></label>
                    <input id="emailAddress" type="email" name="email" placeholder="Votre email" required>

                    <label for="phoneNumber">Numéro de téléphone <span class="required">*</span></label>
                    <input id="phoneNumber" type="tel" name="phone" pattern="[0-9]-[0-9]-[0-9]-[0-9]-[0-9]" placeholder="Votre numéro de téléphone">
                
                    <label for="subject">Message <span class="required">*</span></label>
                    <textarea id="subject" name="subject" placeholder="Votre message" required></textarea>
                
                    <input type="submit" value="Envoyer">

                    <p class="info">Si une demande est succédée de ce symbole ( <strong><span class="required">*</span></strong> ) il est requis de l'inscrire pour envoyer le formulaire</p>
                </form>
            </section>
        </main>

        <footer>
            <section id="footer_top">
                <a href="#"><img src="./public/assets/logo.webp" alt="Logo de l'entreprise"></a>
                <section class="website_links">
                    <h3>Liens du site :</h3>
                    <ul>
                        <li><a href="#home_top">Accueil</a></li>
                        <li><a href="#subsidiaries">Filiales</a></li>
                        <li><a href="#presentation">Presentation/Histoire</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </section>
                <section class="legal">
                    <h3>Légal :</h3>
                    <ul>
                        <li><a href="./public/pages/cgu.php">CGU</a></li>
                        <li><a href="./public/pages/rights.php">Droits</a></li>
                        <li><a href="./public/pages/credits.php">Crédits</a></li>
                        <li><a href="./public/pages/informations.php">Informations</a></li>
                    </ul>
                </section>
                <section class="social">
                    <h3>Retrouvez-nous sur :</h3>
                    <ul>
                        <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-tiktok"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-x"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-discord"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-youtube"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-github"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
                    </ul>
                </section>
            </section>
            <p>Copyright &copy; 2024 All Rights Reserved by <a href="#">Pix&Pulse Group</a></p>
        </footer>

        <div id="popup_identification" class="popup_identification">
            <div class="popup_identification_content">
                <span class="close">&times;</span>
                <div id="loginForm">
                    <h2>Connexion</h2>
                    <form class="form_identification" method="post" action="login.php">
                        <input type="text" name="username" placeholder="Nom d'utilisateur" required>
                        <input type="password" name="password" placeholder="Mot de passe" required>
                        <button type="submit" name="login_submit">Se connecter</button>
                    </form>
                    <p>Pas encore de compte ? <a href="#" id="signupLink">S'inscrire</a></p>
                </div>
                <div id="signupForm" style="display:none;">
                    <h2>Inscription</h2>
                    <form class="form_identification" method="post" action="signup.php">
                        <input type="text" name="username" placeholder="Nom d'utilisateur" required>
                        <input type="email" name="email" placeholder="Email" required>
                        <input type="tel" name="phone" placeholder="Numéro de téléphone" required>
                        <input type="password" name="password" placeholder="Mot de passe" required>
                        <button type="submit" name="signup_submit">S'inscrire</button>
                    </form>
                </div>
            </div>
        </div>
    </body>

    <script src="./public/js/header.js"></script>
    <script src="./public/js/navbar.js"></script>
    <script src="./public/js/dropdown.js"></script>
    <script src="./public/js/popup_identification.js"></script>
</html>