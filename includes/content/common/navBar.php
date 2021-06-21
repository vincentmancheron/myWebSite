<nav id="nav" class="col navbar sticky-top navbar-expand-lg navbar-light bg-light py-1">
    <a href="/pages/cv.php" class="navbar-brand ml-4">Mon CV</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-around" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active mx-4">
                <a class="nav-link" href="/index.php#offers">Offres</a>
            </li>
            <li class="nav-item active mx-4">
                <a class="nav-link" href="/index.php#portfolios">Portfolios</a>
            </li>
            <li class="nav-item active mx-4">
                <a class="nav-link" href="/index.php#contact">Contact</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item active mx-4">
                <a class="nav-link disabled" href="/pages/veille.php">Veille</a>
            </li>
            <li class="nav-item active mx-4">
                <a class="nav-link disabled" href="/pages/veille.php">eSport</a>
            </li>
            <li class="nav-item active mx-4">
                <a class="nav-link disabled" href="/pages/veille.php">Blog</a>
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
                <a class="dropdown-item" href="/assets/ress/CV_Vincent_Mancheron.odt" download>CV Papier</a>
                <a class="dropdown-item disabled" href="">Lettre de motivation</a>
            </div>
        </div>
        <div id="language" class="dropdown nav-item mx-lg-2 my-lg-0 py-2">
            <button id="buttonFlag" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img id="flag" class="py-2" src="/assets/img/en.png" alt="English version">
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <ul>
                    <li>
                        <img id="en" class="flagSelect py-2" src="/assets/img/en.png" alt="English version">
                    </li>
                    <li>
                        <img id="fr" class="flagSelect py-2" src="/assets/img/fr.png" alt="English version">
                    </li>
                </ul>
            </div>
        </div>
        <div class="nav-item active mx-lg-2 my-lg-0 py-2">
            <button class="btn btn-primary" id="colorMod">Light Mode</button>
        </div>
    </div>
</nav>