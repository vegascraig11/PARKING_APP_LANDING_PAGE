<?php
/**
 * Created by PhpStorm.
 * User: Fetiha K
 * Date: 7/10/2017
 * Time: 4:16 PM
 */

$email_to = isset($_POST['email'])?$_POST['email']:'';
$email_subject = 'Download MYCAR application Download Link ';
$email_message = "https://play.google.com/store/apps/details?id=com.oneworldsolutions.android.mycar";

$headers = 'From: ' . $email_from . "\r\n" .
    'Reply-To: ' . $email_from . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message);
error_reporting(E_ALL ^ E_WARNING);
header("Location: {$_SERVER["HTTP_REFERER"]}");