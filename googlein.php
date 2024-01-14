<?php
if ( isset( $clientID) || isset( $clientSecret) || isset( $redirectURL) ) {
     
require_once 'index.html';

$clientID = '555047666164-u78u9h9mukb2pa9sk52vac1ql9shirno.apps.googleusercontent.com';
$clientSecret = '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';
$redirectURL = 'https://localhost.com';

$client = new Google_Client();
$client = setClientID($clientID);
$client = setSlientSecret($clientSecret);
$client = setRedirectSURL($redirectURL);
$client = addscope('profile');
$client = addscope('email');

if (isset($_GET['code'])){

}
else
$token=$client->fetchAccessTokenWithAuthCode($_GET['code']);
$clientAccsessToken($token);
 
$gauth = new Google_Service_Oauth($client);
$google_info = $gauth->userinfo->GET();
$email = google_info->email;
$name = google_info->name; 
}  