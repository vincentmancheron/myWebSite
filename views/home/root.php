<!-- Head -->
<?php include(dirname(__FILE__).'/../templates/head.html') ?>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
    <title>Vincent Mancheron - Développeur Web Junior - Site personnel</title>
    <meta name="description" content="Site Web de Vincent Mancheron, Développeur Web Junior en Formation à La Manu Amiens.
    Vous y retrouverez ses Offres, son Portfolio, son CV ainsi que son Blog.">
</head>
<!-- Fin Head -->

<body class="container-fluid">
    <!-- Header -->
    <?php include(dirname(__FILE__).'/header.html') ?>    
    <!-- Fin Header -->

    <main class="row">
        <!-- NavBar -->
        <?php include(dirname(__FILE__).'/../templates/navBar.html') ?>
        <!-- Fin NavBar -->
        
        <!-- Corps de page -->
        <div id="main2" class="col d-flex flex-column align-items-center">
            <!-- A propos -->
            <?php include(dirname(__FILE__).'/propos.html') ?>
            <!-- Fin A propos -->
            
            <!-- Offres -->
            <!-- Fin Offres -->

            <!-- Portfolios -->
            <?php include(dirname(__FILE__).'/portfolios.html') ?>
            <!-- Fin Portfolios -->

            <!-- Contact -->
            <?php include(dirname(__FILE__).'/contact.php') ?>
            <!-- Fin Contact -->

            <!-- Carousel -->
            <!-- Fin Carousel -->
        </div>
        <!-- Fin Corps de page -->

    <!-- Footer -->
    <?php include(dirname(__FILE__).'/../templates/footer/main.php') ?>
    <!-- Fin Footer -->

    <!-- Script JS -->
    <script src="assets/js/home.js"></script>
    <?php include(dirname(__FILE__).'/../templates/script.html') ?>
    <!-- Fin Script JS -->
</body>

</html>