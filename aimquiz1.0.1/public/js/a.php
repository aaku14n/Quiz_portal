<?php
session_start();

//Include w3 client library 
include_once 'src/w3_Client.php';
include_once 'src/contrib/w3_Oauth2Service.php';

/*
 * Configuration and setup w3 API
 */
$clientId = 'Insertw3ClientID';
$clientSecret = 'Insertw3ClientSecret';
$redirectURL = 'http://localhost/login_with_w3_using_php/';

//Call w3 API
$w3Client = new w3_Client();
$w3Client->setApplicationName('Login to CodexWorld.com');
$w3Client->setClientId($clientId);
$w3Client->setClientSecret($clientSecret);
$w3Client->setRedirectUri($redirectURL);

$w3_oauthV2 = new w3_Oauth2Service($gClient);
?>