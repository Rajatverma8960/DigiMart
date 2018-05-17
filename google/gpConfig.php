<?php
//session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '893290129130-r6iiroi8k4gcft0a5kmuavq9uo69t2ok.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'qIyE_dDhbVwYP7mtv8Ovsy77'; //Google client secret
//$redirectURL = 'http://localhost/google/'; //Callback URL
$redirectURL = 'http://localhost/digital-project-mart/google'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>