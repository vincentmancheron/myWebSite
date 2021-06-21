<!-- Fonctions PHP -->
<?php include('includes/functions/form.php') ?>

<!-- Head -->
<?php include('includes/content/common/head.php') ?>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
    <title>Vincent Mancheron - Développeur Web Junior - Site personnel</title>
    <meta name="description" content="Site Web de Vincent Mancheron, Développeur Web Junior en Formation à La Manu Amiens.
    Vous y retrouverez ses Offres, son Portfolio, son CV ainsi que son Blog.">
</head>
<!-- Fin Head -->

<!-- Figma: https://www.figma.com/file/uOyWpKxmXG1hKp6cLzTKMj/CV-num%C3%A9rique?node-id=0%3A1 -->

<!-- A faire:
-Refaire tous les commentaires de structuration avec un de début et un de fin.
-Light/DarkMode.
-Traduire en Anglais.
-Bouton télécharger CV + Refaire le cv.
-Faire fermer le menu hamburger après le clique.
-Faire défiler en un clique le header du home.
-Projet de Story Telling.
-Refaire les liens + les collapses dans la section Exp. 
-Rajouter VSCode dans Skills>Logiciels.
-Mettre les skills sous forme de listes.
-Refaire les couleurs des encadrés experiences.
-Passer la liste des pays en Français.
-Faire les CGC.
-Faire les offers.
-Intégrer un popover pour la map dans la bottomNavBar 
-Clean le code, améliorer le responsive (em ou % notamment pour les imgs.)
-Faire une barre vertical de navigation dans la page et nav bar devient global (accueil, cv, veille, blog)
-Rendre responsive la navbar du bas.
-Redirection Contact dans le CV -->

<!-- Navbars:
-Uniformiser les navbars du haut.
-Faire une barre de navigation verticale ? -->

<!-- Portfolios:
-id p1 p2 etc a refaire pour les hovers.
-Faire des hovers pour mettre toutes les infos importantes.
-Faire une bibliothèques ouvrable pour les mini-projets solos.
-Plus tard, faire une bibli ouvrable pour les projets word press. -->

<!-- Formulaire:
-Verif regex php formulaire
-Value Formulaire $_POST
-Finir mise en forme Formulaire
-Sécuriser le formulaire avec des technos + avancés -->

<!-- Bugs:
-Mettre les images en opacity 100%.
-Alignement horizontal de la navbar cv/Corriger sa structure.
-Flèche vers le bas du Home à réaligner.
-Enlever les bordures des cards dans exp et mettre les boutons à droite.
-Les hovers ne marche pas dans la timeline trainings.
-Le scroll Behavior ne marche plus.. 
-Mes a n'ont pas tous les text-decoration:none
-Non selection de base sur la liste des pays dans le formulaire.
-Carousel -->

<body class="container-fluid">
    <!-- Header Index -->
    <header id="home" class="row justify-content-around">
        <div id="profilPicture" class="d-none d-md-block col-md-5">
            <img class="h-100" src="assets/img/photo.png" alt="Portrait personnel">
        </div>
        <div class="col-12 col-md-7 d-flex align-items-center justify-content-around">
            <div class="my-5">
                <div>
                    <h1>Vincent Mancheron</h1>
                    <h2>&lt;Développeur Web Junior/&gt;</h2>
                </div>
            </div>
            <a href="#nav">
                <button id="fleche-bas" class="align-self-bottom">
                    <img src="assets/img/fleche-bas.jpg" alt="Descendre">
                </button>
            </a>
        </div>
    </header>
    <!-- Fin Header Index -->

    <main class="row">
        <!-- NavBar -->
        <?php include('includes/content/common/navBar.php') ?>
        
        <!-- Corps de page -->
        <div id="main2" class="col d-flex flex-column align-items-center">
            <!-- A propos -->
            <section id="aPropos" class="row">
                <h3>A propos de moi</h3>
                <div class="row justify-content-center border mx-5">
                    <div class="col-12 col-lg-10 col-xl-8">
                        <figure id="manu" class="row align-items-center">
                            <!-- Le Lien vers la manu devra être dupliqué ailleurs, ex: dans formations. -->
                            <a id="p0" class="col-12 col-md-4"
                                href="https://lamanu.fr/campus/amiens-formation-numerique/" target="_blank">
                                <img class="img-fluid" src="assets/img/logo_La_Manu.png" alt="La Manu">
                            </a>
                            <p class="col-12 col-md-8 m-0">
                                J'étudie en ce moment à la Manu Amiens, une école dont la marque est distribué par Novei
                                Formations.<br>
                                L'ensemble de mon portfolio se résume aux projets réalisés en son sein.<br>
                                J'ai fait exprès de ne pas retoucher à la structure et à l'identité graphique afin que
                                vous
                                puissiez constater ma progression !
                            </p>
                        </figure>
                    </div>
                </div>
                <div class="row text-center border mx-5 py-3">
                    <div class="col-12">
                        <h4>Pourquoi me faire confiance ?</h4>
                        <p>Je suis formé par le grand maître Thierry Lachat, Chancelier suprême de la
                            programmation<br>
                            et Monarque des Divs qui se centrent. Google j'attend votre appel, bisous.</p>
                    </div>
                </div>
            </section>
            <!-- Fin A propos -->

            <!-- Offres -->
            <section id="offers" class="row">
                <h3 class="col">Offres</h3>
                <h4 class="col error text-center">Section en voie de construction, mon activité personnelle n'existe pas
                    encore,
                    étant actuellement en formation.</h4>
                <div class="col">
                    <div class="row justify-content-around">
                        <div class="col-12 col-md-5 border">
                            <h4>Création d’un site Web:</h4>
                            <p>Commandez votre site Web construit de A à Z, avec des renforcements SEO et en
                                Cybersécurité.</p>
                            <!-- <button>Demander un devis</button> -->
                        </div>
                        <div class="col-12 col-md-5 border">
                            <h4>Audit SEO:</h4>
                            <p>Augmenter votre visibilité grâce à mon expertise SEO.<br>
                                Je ferais en sorte que votre site gagne en référencement sur les moteurs de recherche
                                tel que
                                Google.</p>
                            <!-- <button>Demander un devis</button> -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- Fin Offres -->

            <!-- Portfolios -->
            <section id="portfolios" class="row">
                <h3>Portfolios</h3>
                <h6 class="text-center p-0">L'ensemble de ce portfolio à été développé dans le cadre de ma formation à
                    la
                    Manu.</h6>
                <div class="row">
                    <div class="col">
                        <h4 class="ml-5 mt-4">Mon projet principal: shop.ATH</h4>
                        <div class="row justify-content-around my-3">
                            <figure class="col-12 col-lg-3">
                                <a id="p1" href="" target="_blank">
                                    <img class="img-fluid" src="assets/img/logoath_c.jpg" alt="Trello shop.ATH">
                                </a>
                                <figcaption>Le Trello</figcaption>
                            </figure>
                            <figure class="col-12 col-lg-3">
                                <a id="p2" href="" target="_blank">
                                    <img class="img-fluid" src="assets/img/logoath_c.jpg" alt="Maquette shop.ATH">
                                </a>
                                <figcaption>La Maquette</figcaption>
                            </figure>
                            <figure class="col-12 col-lg-3">
                                <a id="p3" href="" target="_blank">
                                    <img class="img-fluid" src="assets/img/logoath_c.jpg" alt="Site shop.ATH">
                                </a>
                                <figcaption>Le Site</figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 offset-3 border"></div>
                </div>
                <div class="row">
                    <div class="col">
                        <h4 class="ml-5 mt-4">Mes projets Solo:</h4>
                        <div class="row justify-content-around my-3">
                            <figure class="col-12 col-lg-3">
                                <a id="p1" href="https://vincentmancheron.github.io/JournalATH/" target="_blank">
                                    <img class="img-fluid" src="assets/img/logoath_c.jpg" alt="ATH News">
                                </a>
                                <figcaption>1er projet: ATH News</figcaption>
                            </figure>
                            <figure class="col-12 col-lg-3">
                                <a id="p1" href="https://vincentmancheron.github.io/JournalATH/" target="_blank">
                                    <img class="img-fluid" src="assets/img/logoath_c.jpg" alt="ATH News">
                                </a>
                                <figcaption>Mini-projet: Shifumi</figcaption>
                            </figure>
                            <figure class="col-12 col-lg-3">
                                <a id="p3" href="https://cedricgallet.github.io/Quattro_Stagioni/" target="_blank">
                                    <img class="img-fluid" src="assets/img/resto_Quattro_Stagioni2.png" alt="Quattro Stagioni">
                                </a>
                                <figcaption>Elagage80</figcaption>
                                <!-- 5eme projet, 1er Wordpress -->
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h4 class="ml-5 mt-4">Mes projets de groupe:</h4>
                        <div class="row justify-content-around my-3">
                            <figure class="col-12 col-lg-3">
                                <a id="p2" href="https://ludovicarduino.github.io/littleitaly/" target="_blank">
                                    <img class="img-fluid" src="assets/img/littleitalyweb.png" alt="Little Italy">
                                </a>
                                <figcaption>2ème projet: Little Italy</figcaption>
                            </figure>
                            <figure class="col-12 col-lg-3">
                                <a id="p3" href="https://cedricgallet.github.io/Quattro_Stagioni/" target="_blank">
                                    <img class="img-fluid" src="assets/img/resto_Quattro_Stagioni2.png" alt="Quattro Stagioni">
                                </a>
                                <figcaption>3ème projet: Quattro Stagioni</figcaption>
                            </figure>
                            <figure class="col-12 col-lg-3">
                                <a id="p2" href="https://ludovicarduino.github.io/littleitaly/" target="_blank">
                                    <img class="img-fluid" src="assets/img/littleitalyweb.png" alt="Little Italy">
                                </a>
                                <figcaption>4ème projet: sneakers.Shop</figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Fin Portfolios -->

            <!-- Contact -->
            <section id="contact" class="row">
                <h3>Contact</h3>
                <div class="row justify-content-around">
                    <div class="col-12 col-md-5">
                        <div class="row justify-content-center">
                            <p class="border col-8 col-md-8 col-lg-6">
                                <a href="tel:+3323232425">Tel:<br>
                                    07.88.22.87.29<br><br>
                                    <a href="mailto:vmancheron@yahoo.fr">Mail:<br>
                                        vmancheron@yahoo.fr</a><br><br>
                                    <a href="https://goo.gl/maps/GvfHcFbvjrcBQaz59" target="_blank">Ville:<br>
                                        Amiens, France</a>
                            </p>
                        </div>
                        <div class="row justify-content-center mt-5 mb-0">
                            <a class="mx-2 my-2" href="" target="_blank">
                                <img src="assets/img/linkedin.png" alt="Linkedin">
                            </a>
                            <a class="mx-2 my-2" href="https://github.com/vincentmancheron" target="_blank">
                                <img id="github" src="assets/img/github.png" alt="GitHub">
                            </a>
                        </div>
                        <div class="row d-flex justify-content-center mt-0 mb-5">
                            <a class="mx-2 my-2" href="https://www.facebook.com/vincent.mancheron80/" target="_blank">
                                <img src="assets/img/fb.png" alt="Facebook">
                            </a>
                            <a class="mx-2 my-2" href="https://www.instagram.com/oxwigzoo/" target="_blank">
                                <img src="assets/img/logoig.png" alt="Instagram">
                            </a>
                        </div>
                    </div>

                    <form id="contactForm" class="col-12 col-md-5" action="index.php" method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputLastname">Nom</label>
                                <input type="text" class="form-control" id="inputLastname" name="inputLastname"
                                    pattern="<?=$regAlpha?>" title="N'utilisez que des lettres."
                                    placeholder="Mancheron">
                                <div class="error"><?= $error['empty']['lastname'] ?? '' ?></div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputFirstname">Prénom</label>
                                <input type="text" class="form-control" id="inputFirstname" name="inputFirstname"
                                    pattern="<?=$regAlpha?>" title="N'utilisez que des lettres." placeholder="Vincent">
                                <div class="error"><?= $error['empty']['firstname'] ?? '' ?></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail">Email</label>
                                <input type="email" class="form-control" id="inputEmail" name="inputEmail"
                                    pattern="$<?=$regEmail?>" placeholder="vmancheron@yahoo.fr">
                                <div class="error"><?= $error['empty']['email'] ?? '' ?></div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPhoneNumber">Téléphone</label>
                                <input type="text" class="form-control" id="inputPhoneNumber" name="inputPhoneNumber"
                                    pattern="<?=$regPhoneNumber?>"
                                    title="Indiquez une série de 10 chiffres sans caractère spéciaux."
                                    placeholder="07 88 22 87 29">
                                <div class="error"><?= $error['empty']['phoneNumber'] ?? '' ?></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">Ville</label>
                                <input type="text" class="form-control" id="inputCity" name="inputCity"
                                    pattern="<?=$regAlpha?>" title="N'utilisez que des lettres." placeholder="Amiens">
                                <div class="error"><?= $error['empty']['city'] ?? '' ?></div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">Pays</label>
                                <select id="inputState" name="inputState" class="form-control">
                                    <option>Choisir</option>
                                </select>
                                <div class="error"><?= $error['empty']['state'] ?? '' ?></div>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputZip">Zip</label>
                                <input type="text" class="form-control" id="inputZip" name="inputZip"
                                    pattern="<?=$regZip?>" title="Indiquez une série de 5 chiffres."
                                    placeholder="80000">
                                <div class="error"><?= $error['empty']['zip'] ?? '' ?></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="inputText">Votre message</label>
                                <textarea class="form-control" id="inputText" name="inputText"></textarea>
                                <div class="error"><?= $error['empty']['message'] ?? '' ?></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck" name="gridCheck"
                                    value="Done">
                                <label class="form-check-label" for="gridCheck">
                                    Je suis en accord avec les <a href=>CGC</a>.
                                </label>
                                <div class="error"><?= $error['empty']['gridCheck'] ?? '' ?></div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Soumettre</button>
                    </form>
                </div>
            </section>
            <!-- Fin Contact -->

            <!-- Carousel -->
            <section id="carousel" class="row carousel slide carousel-fade d-none" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-interval="3000">
                        <a target="_blank">
                            <img class="d-block w-100">
                        </a>
                        <div class="carousel-caption d-none d-md-block"></div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Précédent</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Suivant</span>
                </a>
            </section>
            <!-- Fin Carousel -->
        </div>
        <!-- Fin Corps de page -->

    <!-- Footer -->
    <?php include('includes/content/common/footer/main.php') ?>

    <!-- Script JS -->
    <script src="assets/js/home.js"></script>
    <?php include('includes/content/common/script.php') ?>
    <!-- Fin Script JS -->
</body>

</html>