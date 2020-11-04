<?php

$servername = "fschirmer.info";
$username = "spacegame";
$password = "password";

$conn = new mysqli($servername, $username, $password);

if($conn->connect_error)
{
    die("connection failed: " . $conn->connect_error);
}