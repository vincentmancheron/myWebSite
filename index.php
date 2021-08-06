<?php
if (!isset($_GET['nav'])) {
    $additionnalLink = '<link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">';
    $metaTitle = "Vincent Mancheron - Développeur Web Junior - Site personnel";
    $metaDesc = "Site Web de Vincent Mancheron, Développeur Web Junior en Formation à La Manu Amiens. Vous y retrouverez ses Offres, son Portfolio, son CV ainsi que son Blog.";
    $header = '/views/home/header.html';
    $currentPage = '/views/home/root.php';
    $additionnalScript = '<script src="/assets/js/home.js"></script>';
} else {
    switch ($_GET['nav']) {
        case 'cv':
            $additionnalLink = 
            '<link rel="stylesheet" href="/assets/css/cv.css">
            <link rel="stylesheet" href="/assets/css/timelines.css">';
            $metaTitle = "Vincent Mancheron - Développeur Web Junior - Mon CV";
            $metaDesc = "CV de Vincent Mancheron, Développeur Web Junior en Formation à La Manu Amiens. Vous y retrouverez l'ensemble de son expérience et de ses compétences.";
            $header = '/views/cv/header.html';
            $currentPage = '/views/cv/root.php';
            $additionnalScript = '<script src="/assets/js/cv.js"></script>';
            break;
        case 'portfolios':
            $metaTitle = "Vincent Mancheron - Développeur Web Junior - Mon portfolio";
            $metaDesc = "Portfolios de Vincent Mancheron, Développeur Web Junior en Formation à La Manu Amiens. Vous y retrouverez l'ensemble de son portfolio.";
            $currentPage = '/views/portfolios/portfolios.php';
            break;
        case 'veille':
            $metaTitle = "Vincent Mancheron - Développeur Web Junior - Ma page de Veille";
            $metaDesc = "Page de veille sur le thème de par Vincent Mancheron, Développeur Web Junior en Formation à La Manu Amiens. Vous y retrouverez toutes les actualités sur ce domaine.";
            $currentPage = '/views/templates/noPage.html';
            break;
        case 'esport':
            $metaTitle = "Vincent Mancheron - Développeur Web Junior - Mon activité Esport";
            $metaDesc = "Page Esport de Vincent Mancheron, Développeur Web Junior en Formation à La Manu Amiens. Vous y retrouverez l'ensemble de son implication dans la structure esportive ATH_Community.";
            $currentPage = '/views/templates/noPage.html';
            break;
        case 'blog':
            $metaTitle = "Vincent Mancheron - Développeur Web Junior - Mon blog";
            $metaDesc = "Blog de Vincent Mancheron, Développeur Web Junior en Formation à La Manu Amiens. Vous y retrouverez des articles traitant de sa vie personnelle.";
            $currentPage = '/views/templates/noPage.html';
            break;
    }
}

// Executing Page:
include(dirname(__FILE__).'/views/templates/header/head.php');

if (isset($header)) {
    include(dirname(__FILE__).$header);
}

include(dirname(__FILE__).'/views/templates/header/navBar.html');

include(dirname(__FILE__).$currentPage);

include(dirname(__FILE__).'/views/templates/footer/root.php');