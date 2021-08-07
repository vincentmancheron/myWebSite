<?php
// Function's declarations:
function emptyCheck($value,$index) {
    if (empty($value)) {
        return true;
    }
}

function regMatchCheck($value,$index,$regex) {
    if (!empty($value)) {
        if (!preg_match('/'.$regex.'/',$value)) {
            return true;
        }
    }
}

function lengthCheck($value,$index,$min,$max) {
    if (!empty($value)) {
        if (strlen($value)<$min || strlen($value)>$max) {
            return true;
        }
    }
}

// Regex's declarations:
if (!defined('REGALPHA')) {
    define('REGALPHA','[a-zA-Zéèçàùâêîûüëï ,\'"]+');
    define('REGNUM','\d*');
    define('REGEMAIL','[A-Z0-9a-z._%+-]+@[A-Za-z0-9.-]+\\.[A-Za-z]{2,64}');
    define('REGTEL','(0|\+33)[1-9]( *[0-9]{2}){4}');
    define('REGCHECKBOX','1');
}

// Including Form:
include(dirname(__FILE__).'/../views/home/contact/form.php');

// Cleaning variables:
$error = [];
$lastname = trim(filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
$firstname = trim(filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
$email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
$tel = trim(filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_NUMBER_INT));
$subject = trim(filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
$text = trim(filter_input(INPUT_POST, 'text', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
$cgc = trim(filter_input(INPUT_POST, 'cgc', FILTER_SANITIZE_NUMBER_INT));

// Checking:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $lastname = trim(filter_input(INPUT_POST,'lastname',FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
    emptyCheck($lastname,'lastname') ? $error['empty']['lastname'] = 1 : '';
    regMatchCheck($lastname,'lastname',REGALPHA) ? $error['regMatch']['lastname'] = 1 : '';
    lengthCheck($lastname,'lastname',2,50) ? $error['length']['lastname'] = 1 : '';

    $firstname = trim(filter_input(INPUT_POST,'firstname',FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
    regMatchCheck($firstname,'firstname',REGALPHA) ? $error['regMatch']['firstname'] = 1 : '';
    lengthCheck($firstname,'firstname',2,50) ? $error['length']['firstname'] = 1 : '';

    $email = trim(filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL));
    emptyCheck($email,'email') ? $error['empty']['email'] = 1 : '';
    regMatchCheck($email,'email',REGEMAIL) ? $error['regMatch']['email'] = 1 : '';
    lengthCheck($email,'email',5,70) ? $error['length']['email'] = 1 : '';

    $tel = trim(filter_input(INPUT_POST,'tel',FILTER_SANITIZE_NUMBER_INT));
    regMatchCheck($tel,'tel',REGTEL) ? $error['regMatch']['tel'] = 1 : '';

    $subject = trim(filter_input(INPUT_POST,'subject',FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
    regMatchCheck($subject,'subject',REGALPHA) ? $error['regMatch']['subject'] = 1 : '';
    lengthCheck($subject,'subject',3,100) ? $error['length']['subject'] = 1 : '';

    $body = trim(filter_input(INPUT_POST,'body',FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
    emptyCheck($body,'body') ? $error['empty']['body'] = 1 : '';
    regMatchCheck($body,'body',REGALPHA) ? $error['regMatch']['body'] = 1 : '';
    lengthCheck($body,'body',25,1500) ? $error['length']['body'] = 1 : '';

    $cgc = trim(filter_input(INPUT_POST,'cgc',FILTER_SANITIZE_NUMBER_INT));
    emptyCheck($cgc,'cgc') ? $error['empty']['cgc'] = 1 : '';
    regMatchCheck($cgc,'cgc',REGCHECKBOX) ? $error['regMatch']['cgc'] = 1 : '';
}
// End Checking

use PHPMailer\PHPMailer\PHPMailer;
// Displaying Views:
if ($_SERVER['REQUEST_METHOD'] == 'POST' && empty($error)) {
    // Sending Mail:
    // $retour = mail('vmancheron@yahoo.fr', 'Envoi depuis la page Contact', $_POST['text'], 'From :'.$_POST['email']);
    include(dirname(__FILE__).'/../phpMailer/PHPMailer.php');
    include(dirname(__FILE__).'/../phpMailer/SMTP.php');
    include(dirname(__FILE__).'/../phpMailer/Exception.php');

    $mail = new PHPMailer();

    //smtp settings
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "mancheronv@gmail.com";
    $mail->Password = '#fg3rTxFninqL!TnrBdPjXoC$Poi38K5habrtq8G';
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";

    //email settings
    $mail->isHTML(true);
    $mail->setFrom($email, $lastname);
    $mail->addAddress("mancheronv@gmail.com");
    $mail->Subject = ("$email ($subject)");
    $mail->Body = $body;

    if($mail->send()){
        $status = "success";
        $response = "Email is sent!";
    }
    else
    {
        $status = "failed";
        $response = "Something is wrong: <br>" . $mail->ErrorInfo;
    }

    // exit(json_encode(array("status" => $status, "response" => $response)));
}