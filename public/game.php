<?php

include("../logic/Spieler.php");
include_once("../logic/Staat.php");
include("../src/sql.php");

session_start();

if(!isset($_SESSION["User"])){

    $querydb = "SELECT UserID, UserEmail, Gold, Energie, Metall FROM users 
                WHERE UserEmail = \"Admin@itc-studenten.de\"";

    if (isset($conn)) {
        $_SESSION["Mysql"] = $conn;
        if($conn->query($querydb) == TRUE){
            $results = $conn->query($querydb)->fetch_all();
            $_SESSION["User"] = new Spieler(
                $results[0][0],
                $results[0][1],
                $results[0][2],
                $results[0][3],
                $results[0][4],
            );
        }
    }
    #var_dump($_SESSION["User"]);
    print($_SESSION["User"]->getStaat()->getStaatsname());

}



include("../html/G_Grundgeruest.phtml");
