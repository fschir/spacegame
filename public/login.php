<?php $title = 'SpaceGame9000';

session_start();

require __DIR__ . '/../vendor/autoload.php';
use League\OAuth2\Client\Provider\Google;
include_once ("../src/functions.php");

if (!isset($Username))
{
    $Username = "Gast";
}

//printf("Session: %s", var_dump($_SESSION));

$clientID = "351761789625-7jpfoh99kiaguejb1fbv68088cb8qcvj.apps.googleusercontent.com";
$clientSecret = "ZEbg1UdXEwCLCWM1nWS89M--";

$provider = new Google([
    'clientId' => $clientID,
    'clientSecret' => $clientSecret,
    'redirectUri' => 'http://fschirmer.info/spacegame/public/login.php',
    'hostedDomain' => 'fschirmer.info', // optional; used to restrict access to users on your G Suite/Google Apps for Business accounts
]);



if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
    echo "token set <br>";
}
else {
    try{
        $_SESSION['access_token'] = $provider->getAccessToken('authorization_code', [
            'code' => $_GET['code']
        ]);
    }
    catch (Exception $e) {}
}

########### TEST

$g_discovery_document = "https://accounts.google.com/.well-known/openid-configuration";

$provider->getAuthenticatedRequest()



##################

### OAuth2


/*

LEGACY TEST

$username = "flo@gmx.de";
$Username = "Flo";
$password = "test123";

$sql_select = "SELECT userEmail, userPassword FROM 
users WHERE userEmail='$username' AND userPassword='$password'";

if (isset($conn)) {
    $results = $conn->query($sql_select, MYSQLI_STORE_RESULT)->fetch_all();
    printf("Hallo %s mit Passwort %s", $results[0][0], $results[0][1]);
}


*/

include_once "../html/header.phtml";
include_once "../html/navbar.phtml";

if(array_key_exists("NavbarLoginButton", $_POST))
{
    showLogin();
}

include_once "../html/footer.html";


