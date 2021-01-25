<?php
include("planet.php");
function CreateSystem($StaatID)
{
    $PlanetenAnzahl = random_int(3, 10);
    sqlSonnenSystem($PlanetenAnzahl,$StaatID);
    valplanets($PlanetenAnzahl);
}
function valplanets($PlanetenAnzahl)
{
    include("../src/sql.php");
    $sql_select = "SELECT SystemID FROM Sonnensystem Order by SystemID desc limit 1";
    if (isset($conn)) {
        $result = $conn->query($sql_select, MYSQLI_STORE_RESULT)->fetch_all();
            for ($i = 0; $i < $PlanetenAnzahl; $i++) {
            createPlanet($result[0][0]);
        }
    }
}
function sqlSonnenSystem($PlanetenAnzahl, $StaatID)
{
    $x = random_int(1, 9999);
    $y = random_int(1, 9999);
    $z = random_int(1, 9999);
    include("../src/sql.php");
    if ($StaatID != 0) {
        $sql_insert = "INSERT INTO Sonnensystem (MaxPlaneten,StandpunktX,StandpunktY,StandpunktZ,StaatID) 
                VALUES ('$PlanetenAnzahl','$x','$y','$z','$StaatID')";
        if (isset($conn)) {
            if ($conn->query($sql_insert) === TRUE) {
            } else {
                echo "Error: " . $sql_insert . "<br>" . $conn->error;
            }
        }
    }
}
/*$new = new sonnensystem();
$new->CreateSystem();
$new->sql(1);
$new->planets(1);*/

