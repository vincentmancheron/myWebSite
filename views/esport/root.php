<!-- Head -->
<?php include(dirname(__FILE__).'/../templates/head.html') ?>
    <title>Vincent Mancheron - Développeur Web Junior - Site personnel</title>
    <meta name="description" content="Site Web de Vincent Mancheron, Développeur Web Junior en Formation à La Manu Amiens.
    Vous y retrouverez ses Offres, son Portfolio, son CV ainsi que son Blog.">
</head>
<!-- Fin Head -->

<body class="container-fluid">
    <main class="row">
        <!-- NavBar -->
        <?php include(dirname(__FILE__).'/../templates/navBar.html') ?>
        <!-- Fin NavBar -->
        
        <!-- Corps de page -->
        <div id="main2" class="col d-flex flex-column align-items-center">
            <?php include(dirname(__FILE__).'/../templates/noPage.html') ?>
        </div>
        <!-- Fin Corps de page -->

    <!-- Footer -->
    <?php include(dirname(__FILE__).'/../templates/footer/main.php') ?>
    <!-- Fin Footer -->

    <!-- Script JS -->
    <?php include(dirname(__FILE__).'/../templates/script.html') ?>
    <!-- Fin Script JS -->
</body>

</html>