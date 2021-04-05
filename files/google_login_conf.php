<?php
require 'google_vendor/autoload.php';

$google_client = new Google_Client();
$google_client->setClientId("873428759453-sp3phmdt5uebdm370bo80haski5cnti3.apps.googleusercontent.com");
$google_client->setClientSecret("2Xv4btsgQCf4CYh4p7nsQRJV");
$google_client->setRedirectUri("http://localhost/dream_shop/userAuth.php");
$google_client->addScope("email");
$google_client->addScope("profile");
$google_client->getScopes();

?>