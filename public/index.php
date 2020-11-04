

<?php $title = 'SpaceGame9000';
include_once ("../src/functions.php");
include_once ("../src/sql.php");

echo file_get_contents("../html/header.html");
echo file_get_contents("../html/navbar.html");

if(array_key_exists("NavbarLoginButton", $_POST))
{
    showLogin();
}

$username = "flo@gmx.de";
$password = "test123";

$sql_select = "SELECT userEmail, userPassword FROM 
users WHERE userEmail='$username' AND userPassword='$password'";

if (isset($conn)) {
    $results = $conn->query($sql_select, MYSQLI_USE_RESULT);
    echo "SQL: $results";
}

function login(){

}

echo file_get_contents("../html/footer.html");
