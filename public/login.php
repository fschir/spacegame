<?php $title = 'SpaceGame9000';

echo __DIR__;

require __DIR__ . '/../vendor/autoload.php';

include_once ("../src/functions.php");
#include_once ("../src/sql.php");

session_start();

if (!isset($Username))
{
    $Username = "Gast";
}


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

if(array_key_exists("NavbarSignUpButton", $_POST))
{
    include_once "../public/register.php";
}

include_once "../html/footer.html";


