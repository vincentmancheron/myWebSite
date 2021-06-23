<!-- Head -->
<?php include('includes/common/head.php') ?>
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
    <!-- Header -->
    <?php include('includes/specifics/home/header.php') ?>    
    <!-- Fin Header -->

    <main class="row">
        <!-- NavBar -->
        <?php include('includes/common/navBar.php') ?>
        <!-- Fin NavBar -->
        
        <!-- Corps de page -->
        <div id="main2" class="col d-flex flex-column align-items-center">
            <!-- A propos -->
            <?php include('includes/specifics/home/propos.php') ?>
            <!-- Fin A propos -->
            
            <!-- Offres -->
            <?php include('includes/specifics/home/offers.php') ?>
            <!-- Fin Offres -->

            <!-- Portfolios -->
            <?php include('includes/specifics/home/portfolios.php') ?>
            <!-- Fin Portfolios -->

            <!-- Contact -->
            <?php include('includes/specifics/home/contact.php') ?>
            <!-- Fin Contact -->

            <!-- Carousel -->
            <?php include('includes/specifics/home/carousel.php') ?>
            <!-- Fin Carousel -->
        </div>
        <!-- Fin Corps de page -->

    <!-- Footer -->
    <?php include('includes/common/footer/main.php') ?>
    <!-- Fin Footer -->

    <!-- Script JS -->
    <script src="assets/js/home.js"></script>
    <?php include('includes/common/script.php') ?>
    <!-- Fin Script JS -->
</body>

</html>