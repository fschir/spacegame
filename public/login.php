<?php $title = 'SpaceGame9000';

require __DIR__ . '/../vendor/autoload.php';
use League\OAuth2\Client\Provider\Google;
include_once("../src/functions.php");

$database = new SGpdo();

if (!isset($Username))
{
    $Username = "Gast";
}

include_once "../html/header.phtml";
include_once "../html/navbar.phtml";

if(array_key_exists("NavbarLoginButton", $_POST))
{
    showLogin();
}

include_once "../html/footer.html";