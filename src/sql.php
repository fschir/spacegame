<?php

$servername = "fschirmer.info";
$username = "spacegame";
$password = "itc2020";
$dbname = "spacegame";

global $conn;
$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error)
{
    die("connection failed: " . $conn->connect_error);
}