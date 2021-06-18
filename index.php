<?php
    // Formulaire:
    $error = ['empty','regMatch'];
    $error['empty'] = [];
    $error['regMatch'] = [];

    // Vérification Empty:
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!empty($_POST['inputLastname'])) {
            $lastname = $_POST['inputLastname'];
        } else {
            $error['empty']['lastname'] = 'Le champ Nom est vide.';
        }
    
        if (!empty($_POST['inputFirstname'])) {
            $firstname = $_POST['inputFirstname'];
        } else {
            $error['empty']['firstname'] = 'Le champ Prénom est vide.';
        }
    
        if (!empty($_POST['inputEmail'])) {
            $email = $_POST['inputEmail'];
        } else {
            $error['empty']['email'] = 'Le champ Email est vide.';
        }
    
        if (!empty($_POST['inputPhoneNumber'])) {
            $phoneNumber = $_POST['inputPhoneNumber'];
        } else {
            $error['empty']['phoneNumber'] = 'Le champ Numéro de Téléphone est vide.';
        }
    
        if (!empty($_POST['inputCity'])) {
            $city = $_POST['inputCity'];
        } else {
            $error['empty']['city'] = 'Le champ Ville est vide.';
        }
    
        if (!empty($_POST['inputState'])) {
            $state = $_POST['inputState'];
        } else {
            $error['empty']['state'] = 'Le champ Pays est vide.';
        }
    
        if (!empty($_POST['inputZip'])) {
            $zip = $_POST['inputZip'];
        } else {
            $error['empty']['zip'] = 'Le champ Zip est vide.';
        }
    
        if (!empty($_POST['inputMessage'])) {
            $message = $_POST['inputMessage'];
        } else {
            $error['empty']['message'] = 'Le champ Message est vide.';
        }

        if (!empty($_POST['gridCheck'])) {
            $gridCheck = $_POST['gridCheck'];
        } else {
            $error['empty']['gridCheck'] = 'Il faut lire et accepter les CGCs.';
        }
    }

    // Vérification Regex:
    $regAlpha = '[a-zA-Z]*';
    $regZip = '\d{5}';
    $regPhoneNumber = '(0|\+33)[1-9]( *[0-9]{2}){4}';
    $regEmail = '[A-Z0-9a-z._%+-]+@[A-Za-z0-9.-]+\\.[A-Za-z]{2,64}';

    // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //     if (!empty($_POST['lastname'])) {
    //         preg_match($regAlpha, $lastname, $answer, PREG_OFFSET_CAPTURE);
    //         if ($answer) {
    //             $error['regMatch']['lastname'] = false;
    //         }
    //     }
    // }
    // Fin Formulaire
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/media.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <title>Vincent Mancheron - Développeur Web Junior - Site personnel</title>
    <meta name="description" content="Site Web de Vincent Mancheron, Développeur Web Junior en Formation à La Manu Amiens.
    Vous y retrouverez ses Offres, son Portfolio, son CV ainsi que son Blog.">
</head>

<!-- Figma: https://www.figma.com/file/uOyWpKxmXG1hKp6cLzTKMj/CV-num%C3%A9rique?node-id=0%3A1 -->

<!-- A faire:
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
-Verif regex php formulaire
-Value Formulaire $_POST
-Finir mise en forme Formulaire
-Sécuriser le formulaire avec des technos + avancés 
-Redirection Contact dans le CV -->

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
        <div id="profilPicture" class="col-12 col-md-5">
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
        <!-- Top NavBar Index -->
        <nav id="nav" class="col navbar sticky-top navbar-expand-lg navbar-light bg-light py-1">
            <a href="pages/cv.html" class="navbar-brand ml-4">Mon CV</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active mx-4">
                        <a class="nav-link" href="#offers">Offres</a>
                    </li>
                    <li class="nav-item active mx-4">
                        <a class="nav-link" href="#portfolios">Portfolios</a>
                    </li>
                    <li class="nav-item active mx-4">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item active mx-4">
                        <a class="nav-link disabled" href=>Blog</a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse justify-content-end pr-2 mr-5" id="navbarNav">
                <div class="nav-item active mx-lg-2 my-lg-0 py-2">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Télécharger
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="assets/ress/CV_Vincent_Mancheron.odt" download>CV Papier</a>
                        <a class="dropdown-item" href="#">Lettre de motivation</a>
                    </div>
                </div>
                <div id="language" class="dropdown nav-item mx-lg-2 my-lg-0 py-2">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img id="flag" class="flag py-2" src="assets/img/en.png" alt="English version">
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <ul>
                            <li>
                                <img id="en" class="flag flagSelect py-2" src="assets/img/en.png" alt="English version">
                            </li>
                            <li>
                                <img id="fr" class="flag flagSelect py-2" src="assets/img/fr.png" alt="English version">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="nav-item active mx-lg-2 my-lg-0 py-2">
                    <button class="btn btn-primary" id="colorMod">Light Mode</button>
                </div>
            </div>
        </nav>
        <!-- Fin Top Navbar Index -->

        <!-- Carousel -->
        <section id="carousel" class="col carousel slide carousel-fade" data-ride="carousel">
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

        <!-- Offres -->
        <section id="offers" class="col">
            <h3>Offres</h3>
            <h4 class="error text-center">Section en voie de construction, mon activité personnelle n'existe pas encore,
                étant actuellement en formation.</h4>
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
        </section>
        <!-- Fin Offres -->

        <!-- Portfolios -->
        <section id="portfolios" class="col">
            <h3>Portfolios</h3>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-8">
                    <figure id="manu" class="row border align-items-center">
                        <!-- Le Lien vers la manu devra être dupliqué ailleurs, ex: dans formations. -->
                        <a id="p0" class="col-12 col-md-4" href="https://lamanu.fr/campus/amiens-formation-numerique/"
                            target="_blank">
                            <img src="assets/img/logo_La_Manu.png" alt="La Manu">
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
            <div class="row justify-content-around my-3">
                <figure class="col-12 col-lg-3">
                    <a id="p1" href="https://vincentmancheron.github.io/JournalATH/" target="_blank">
                        <img src="assets/img/logoath_c.jpg" alt="ATH News">
                    </a>
                    <figcaption>1er projet (solo): ATH News</figcaption>
                </figure>
                <figure class="col-12 col-lg-3">
                    <a id="p2" href="https://ludovicarduino.github.io/littleitaly/" target="_blank">
                        <img src="assets/img/littleitalyweb.png" alt="Little Italy">
                    </a>
                    <figcaption>2ème projet: Little Italy</figcaption>
                </figure>
                <figure class="col-12 col-lg-3">
                    <a id="p3" href="https://cedricgallet.github.io/Quattro_Stagioni/" target="_blank">
                        <img src="assets/img/resto_Quattro_Stagioni2.png" alt="Quattro Stagioni">
                    </a>
                    <figcaption>3ème projet: Quattro Stagioni</figcaption>
                </figure>
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
        <!-- Fin Portfolios -->

        <!-- Contact -->
        <section id="contact" class="col">
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
                                pattern="<?=$regAlpha?>" title="N'utilisez que des lettres." placeholder="Mancheron">
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
                            <input type="text" class="form-control" id="inputZip" name="inputZip" pattern="<?=$regZip?>"
                                title="Indiquez une série de 5 chiffres." placeholder="80000">
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

        <!-- Faux Footer -->
        <div id="footer" class="col d-flex justify-content-around">
            <ul>
                <h5>Accueil</h5>
                <li>
                    <a href="#offers">Offres</a>
                </li>
                <li>
                    <a href="#portfolios">Portfolios</a>
                </li>
                <li>
                    <a href="#contact">Contact</a>
                </li>
                <li>
                    <a href="">Blog</a>
                </li>
            </ul>
            <ul>
                <h5>CV</h5>
                <li>
                    <a href="pages/cv.html#exp">Expériences</a>
                </li>
                <li>
                    <a href="pages/cv.html#trainings">Formations</a>
                </li>
                <li>
                    <a href="pages/cv.html#skills">Compétences</a>
                </li>
                <li>
                    <a href="pages/cv.html#hobbies">Loisirs</a>
                </li>
                <li>
                    <a href="pages/cv.html#portfolios">Portfolios</a>
                </li>
                <li>
                    <a href="pages/cv.html#contact">Contact</a>
                </li>
            </ul>
        </div>
        <!-- Fin Faux Footer -->

        <!-- Bottom NavBar -->
        <nav id="stickybot" class="col navbar d-none d-lg-block navbar-expand-lg py-0">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-around" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="tel:+33788228729">
                            <img src="assets/img/tel.png" alt="Téléphone">
                            07.88.22.87.29
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="mailto:vmancheron@yahoo.fr">
                            <img src="assets/img/mail.png" alt="Mail">
                            vmancheron@yahoo.fr
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="https://goo.gl/maps/GvfHcFbvjrcBQaz59" target="_blank">
                            <img src="assets/img/map.png" alt="Map">
                            Amiens (80),France
                        </a>
                    </li>
                    <!-- <li class="nav-item active">
                        <div class="nav-link">
                            <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover"
                                data-placement="top" data-content="Top popover">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d82240.25896853098!2d2.2145980207410108!3d49.89865138453622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e78413d78b760b%3A0x40af13e816220e0!2sAmiens!5e0!3m2!1sfr!2sfr!4v1619872140589!5m2!1sfr!2sfr"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                                    Amiens (80), France
                                </iframe>
                            </button>
                        </div>
                    </li> -->
                </ul>
            </div>
        </nav>

        <nav>
            <!-- Button trigger modal -->
            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#contactModal">
                <img src="assets/img/mail.png" alt="Mail">
                Contact
            </button>
        </nav>

        <!-- Modal -->
        <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="contactModalLabel">Contact</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <a href="tel:+3323232425">
                            <img src="assets/img/tel.png" alt="Téléphone">
                            07.88.22.87.29
                        </a>
                        <a href="mailto:vmancheron@yahoo.fr">
                            <img src="assets/img/mail.png" alt="Mail">
                            vmancheron@yahoo.fr
                        </a>
                        <a href="https://goo.gl/maps/GvfHcFbvjrcBQaz59" target="_blank">
                            <img src="assets/img/map.png" alt="Map">
                            Amiens (80),France
                        </a>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin Bottom NavBar -->
    </main>

    <!-- Footer -->
    <footer class="row pt-2 justify-content-center">
        <p class="m-0">
            CV codé en HTML5/CSS3 avec Bootstrap 4.6 par Vincent Mancheron &copy;2021 V.0.85
        </p>
    </footer>
    <!-- Fin Footer -->

    <!-- Script Java -->
    <script src="assets/js/script.js"></script>
    <script src="assets/js/home.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <!-- Fin Script Java -->
</body>

</html>