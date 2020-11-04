<?php

include_once("../templates/navbar.php");

function showLogin()
{
    echo file_get_contents("../html/loginBox.html");
}