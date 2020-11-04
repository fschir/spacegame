



<?php $title = 'SpaceGame9000';
include_once ("../src/functions.php");

echo file_get_contents("../html/header.html");
echo file_get_contents("../html/navbar.html");

echo "tesat 123";

if(array_key_exists("NavbarLoginButton", $_POST))
{
    showLogin();
}
