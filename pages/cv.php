<!-- Head -->
<?php include('../includes/content/common/head.php') ?>
    <link rel="stylesheet" href="/assets/css/cv.css">
    <link rel="stylesheet" href="/assets/css/timelines.css">
    <title>CV - Vincent Mancheron - Développeur Web Junior</title>
</head>
<!-- Fin Head -->

<body class="container-fluid">
    <!-- Photo de couverture -->
    <header id="cvHeader" class="row">
            <img class="w-100" src="/assets/img/couv.jpg" alt="Photo de couverture">
    </header>
    <!-- Fin Photo de couverture -->

    <main class="row">
        <!-- NavBar -->
        <?php include('../includes/content/common/navBar.php') ?>

        <!-- Corps de page -->
        <div id="main2" class="col">
            <!-- Expériences -->
            <?php include('../includes/content/specifics/cv/exp.php'); ?>

            <!-- Formations -->
            <?php include('../includes/content/specifics/cv/train.php'); ?>

            <!-- Compétences -->
            <?php include('../includes/content/specifics/cv/skills.php'); ?>

            <!-- Loisirs -->
            <?php include('../includes/content/specifics/cv/hobbies.php'); ?>

            <!-- Redirection -->
            <?php include('../includes/content/specifics/cv/redirect.php'); ?>
        </div>
        <!-- Fin Corps de page -->

    <!-- Footer -->
    <?php include('../includes/content/common/footer/main.php') ?>

    <!-- Script JS -->
    <script src="/assets/js/cv.js"></script>
    <?php include('../includes/content/common/script.php') ?>
    <!-- Fin Script JS -->
</body>

</html>