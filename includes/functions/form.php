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