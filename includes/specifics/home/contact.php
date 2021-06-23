<?php 
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
?>

<section id="contact" class="row">
    <?php var_dump($error['regMatch']) ?>
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

        <form id="contactForm" class="col-12 col-md-5" action="index.php#contactForm" method="POST">
            <div class="form-row">
                <div class="form-group col-md-6 mx-3 mx-md-0">
                    <label for="inputLastname">Nom</label>
                    <input type="text" class="form-control" id="inputLastname" name="inputLastname"
                        pattern="<?=$regAlpha?>" title="N'utilisez que des lettres."
                        value="<?= $lastname ?? '' ?>" placeholder="Mancheron">
                    <div class="error"><?= $error['empty']['lastname'] ?? '' ?></div>
                </div>
                <div class="form-group col-md-6 mx-3 mx-md-0">
                    <label for="inputFirstname">Prénom</label>
                    <input type="text" class="form-control" id="inputFirstname" name="inputFirstname"
                        pattern="<?=$regAlpha?>" title="N'utilisez que des lettres." value="<?= $firstname ?? '' ?>" placeholder="Vincent">
                    <div class="error"><?= $error['empty']['firstname'] ?? '' ?></div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6 mx-3 mx-md-0">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" name="inputEmail"
                        pattern="$<?=$regEmail?>" value="<?= $email ?? '' ?>" placeholder="vmancheron@yahoo.fr">
                    <div class="error"><?= $error['empty']['email'] ?? '' ?></div>
                </div>
                <div class="form-group col-md-6 mx-3 mx-md-0">
                    <label for="inputPhoneNumber">Téléphone</label>
                    <input type="text" class="form-control" id="inputPhoneNumber" name="inputPhoneNumber"
                        pattern="<?=$regPhoneNumber?>"
                        title="Indiquez une série de 10 chiffres sans caractère spéciaux."
                        value="<?= $phoneNumber ?? '' ?>" placeholder="07 88 22 87 29">
                    <div class="error"><?= $error['empty']['phoneNumber'] ?? '' ?></div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6 mx-3 mx-md-0">
                    <label for="inputCity">Ville</label>
                    <input type="text" class="form-control" id="inputCity" name="inputCity"
                        pattern="<?=$regAlpha?>" title="N'utilisez que des lettres." value="<?= $city ?? '' ?>" placeholder="Amiens">
                    <div class="error"><?= $error['empty']['city'] ?? '' ?></div>
                </div>
                <div class="form-group col-md-4 mx-3 mx-md-0">
                    <label for="inputState">Pays</label>
                    <select id="inputState" name="inputState" class="form-control">
                        <option><?= $state ?? 'Choisir' ?></option>
                    </select>
                    <div class="error"><?= $error['empty']['state'] ?? '' ?></div>
                </div>
                <div class="form-group col-md-2 mx-3 mx-md-0">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" id="inputZip" name="inputZip"
                        pattern="<?=$regZip?>" title="Indiquez une série de 5 chiffres."
                        value="<?= $zip ?? '' ?>" placeholder="80000">
                    <div class="error"><?= $error['empty']['zip'] ?? '' ?></div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-11 mx-auto mx-md-0">
                    <label for="inputText">Votre message</label>
                    <textarea class="form-control" id="inputText" name="inputText" value="<?= $message ?? '' ?>"></textarea>
                    <div class="error"><?= $error['empty']['message'] ?? '' ?></div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-check ml-3 ml-md-0">
                    <input class="form-check-input" type="checkbox" id="gridCheck" name="gridCheck"
                        value="Done">
                    <label class="form-check-label" for="gridCheck">
                        Je suis en accord avec les <a href=>CGC</a>.
                    </label>
                    <div class="error"><?= $error['empty']['gridCheck'] ?? '' ?></div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary ml-3 ml-md-0">Soumettre</button>
        </form>
    </div>
</section>