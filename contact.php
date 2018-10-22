<?php


// require('php/recaptcha-master/src/autoload.php');
error_reporting(-1);
ini_set('display_errors', 1);
set_error_handler("var_dump");

$sendTo = 'support@ukemi.ninja.test-google-a.com';
$okMessage = 'Contact form successfully submitted.  You will hear from us soon!';
$errMessage = 'There was an error while submitting the form.  Please try again later.';
// $recaptchaSecret = '6Lfmx10UAAAAAGBhbvh_nTTZOKCtczGTiCfKNxMz';

try {
  if (!empty($_POST)) {
    // if (!$_POST['g-recaptcha-response']) {
    //   echo "ReCaptcha is not set.";
    // }

    // $recaptcha = new \ReCaptcha\ReCaptcha($recaptchaSecret, new \ReCaptcha\RequestMethod\CurlPost());
    // $response = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

    // if (!$response->isSuccess()) {
    //   echo 'ReCaptcha was not validated.';
    // }
    $from = $_POST['name'].'<'.$_POST['email'].'>';
    $subject = "[Contact Form] " . $_POST['subject'];
    $emailText = "You have a new message from your contact form\n=============================\n" . "Name: " . $_POST['name'] . "\nEmail: " . $_POST['email'] . "\nPhone Number: " . $_POST['phone'] . "Subject: " . $_POST['subject'] . "\nMessage: " . $_POST['message'];

    $emailText = wordwrap($emailText,70);

    $headers = array('Content-Type: text/plain; charset="UTF-8";',
    'From: ' . $from,
    'Reply-To: ' . $from,
    'Return-Path: ' . $from,
    );

    echo $from."\n";
    echo $subject."\n";
    echo $emailText."\n";

    // mail('noreply@ukemi.ninja', 'cunt', 'monkey', implode("\n", $headers));
    
    $success = mail($sendTo, $subject, $emailText, implode("\n", $headers));
    if (!$success) {
      print_r(error_get_last()['message']);
    }

    $responseArray = array('type' => 'success', 'message' => $okMessage);
  }
} catch (\Exception $e) {
  $responseArray = array('type' => 'danger', 'message' => $e->getMessage());
}











//     $responseArray = array('type' => 'success', 'message' => $okMessage);
  // }
// } catch (\Exception $e) {
//   $responseArray = array('type' => 'danger', 'message' => $e->getMessage());
// }

// if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
//   $encoded = json_encode($responseArray);

//   header('Content-Type: application/json');

//   echo $encoded;
// } else {
//   echo $responseArray['message'];
// }
?>