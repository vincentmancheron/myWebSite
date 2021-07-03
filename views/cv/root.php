<!-- Head -->
<?php include(dirname(__FILE__).'/../templates/head.html') ?>
    <link rel="stylesheet" href="/assets/css/cv.css">
    <link rel="stylesheet" href="/assets/css/timelines.css">
    <title>CV - Vincent Mancheron - Développeur Web Junior</title>
</head>
<!-- Fin Head -->

<body class="container-fluid">
    <!-- Photo de couverture -->
    <header id="cvHeader" class="row">
            <img class="w-100" src="/assets/img/vincentM4b.png" alt="Photo de couverture">
    </header>
    <!-- Fin Photo de couverture -->

    <main class="row">
        <!-- NavBar -->
        <?php include(dirname(__FILE__).'/../templates/navBar.html') ?>
        <!-- Fin NavBar -->

        <!-- Corps de page -->
        <div id="main2" class="col">
            <!-- Expériences -->
            <?php include(dirname(__FILE__).'/exp.html'); ?>
            <!-- Fin Expériences -->

            <!-- Formations -->
            <?php include(dirname(__FILE__).'/train.html'); ?>
            <!-- Fin Formations -->

            <!-- Compétences -->
            <?php include(dirname(__FILE__).'/skills.html'); ?>
            <!-- Fin Compétences -->

            <!-- Loisirs -->
            <?php include(dirname(__FILE__).'/hobbies.html'); ?>
            <!-- Fin Loisirs -->

            <!-- Redirection -->
            <?php include(dirname(__FILE__).'/redirect.html'); ?>
            <!-- Fin Redirection -->
        </div>
        <!-- Fin Corps de page -->

    <!-- Footer -->
    <?php include(dirname(__FILE__).'/../templates/footer/main.php') ?>
    <!-- Fin Footer -->

    <!-- Script JS -->
    <script src="/assets/js/cv.js"></script>
    <?php include(dirname(__FILE__).'/../templates/script.html') ?>
    <!-- Fin Script JS -->
</body>

</html>