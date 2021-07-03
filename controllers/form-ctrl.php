<?php
// Declarations:
$error = [];
$lastname = trim(filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
$firstname = trim(filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
$email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
$phoneNumber = trim(filter_input(INPUT_POST, 'phoneNumber', FILTER_SANITIZE_NUMBER_INT));
$city = trim(filter_input(INPUT_POST, 'city', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
$state = trim(filter_input(INPUT_POST, 'state', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
$zip = trim(filter_input(INPUT_POST, 'zip', FILTER_SANITIZE_NUMBER_INT));
$text = trim(filter_input(INPUT_POST, 'text', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
$cgc = trim(filter_input(INPUT_POST, 'cgc', FILTER_SANITIZE_NUMBER_INT));
$vars = ['lastname'=>$lastname,'firstname'=>$firstname,'email'=>$email,'phoneNumber'=>$phoneNumber,'city'=>$city,'state'=>$state,'zip'=>$zip,'text'=>$text,'cgc'=>$cgc];
$requiredVars = ['lastname'=>$lastname,'firstname'=>$firstname,'email'=>$email,'text'=>$text,'cgc'=>$cgc];
define('regAlpha','[a-zA-Zéèçàùâêîûüëï ,\'"]*');
define('regNumber','\d*');
define('regPhoneNumber','(0|\+33)[1-9]( *[0-9]{2}){4}');
define('regEmail','[A-Z0-9a-z._%+-]+@[A-Za-z0-9.-]+\\.[A-Za-z]{2,64}');
// End Declarations

// Checking:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Empty Check:
    foreach($requiredVars as $key => $value) {
        if (empty($value)) {
            $error['empty'][$key] = "";
        }
    }
    // End Empty Check
    // RegMatch Check:
    foreach($vars as $key => $value) {
        switch ($value) {
            case ($value == $lastname || $value == $firstname || $value == $city || $value == $state || $value == $text):
                if (preg_match('/'.regAlpha.'/',$value)) {
                    $error['regMatch'][$key] = "";
                }
                break;
            case ($value == $email):
                if (preg_match('/'.regEmail.'/',$value)) {
                    $error['regMatch'][$key] = "";
                }
                break;
            case ($value == $phoneNumber || $value == $zip || $value == $cgc):
                if (preg_match('/'.regNumber.'/',$value)) {
                    $error['regMatch'][$key] = "";
                }
        }
    }
    // End RegMatch Check
    // Length Check:

    // End Length Check
    $retour = mail('vmancheron@yahoo.fr', 'Envoi depuis la page Contact', $_POST['text'], 'From :'.$_POST['email']);
}
// End Checking