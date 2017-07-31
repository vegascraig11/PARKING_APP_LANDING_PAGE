<?php
/**
 * Created by PhpStorm.
 * User: Fetiha K
 * Date: 7/28/2017
 * Time: 6:30 PM
 */
$email_to = 'info@mycarparking.com';
$email_subject = 'Subscription';
$email_message = isset($_POST['email'])?$_POST['email']:'';

$headers = 'From: ' . $email_from . "\r\n" .
    'Reply-To: ' . $email_from . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message);
error_reporting(E_ALL ^ E_WARNING);
header("Location: {$_SERVER["HTTP_REFERER"]}");