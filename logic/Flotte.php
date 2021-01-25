<?php
function createFlotte($StaatID,$Flottenname,$upgradeable,$X,$Y,$Z){
    $BestehtAus = random_int(1,4);
    $Staerke = random_int(500,1500)*$BestehtAus;
    $HP = 1000;
    sqlFlotte($StaatID,$Flottenname,$Staerke,$upgradeable,$HP,$BestehtAus,$X,$Y,$Z);
}
function FlotteupgradeChange(int $state,$fn){
    include("../src/sql.php");
    $sql_update = "UPDATE Flotte SET Upgrade = '$state' WHERE Flottenname = '$fn'";
    if (isset($conn)) {
        if ($conn->query($sql_update) === TRUE) {
        } else {
            echo "Error: " . $sql_update . "<br>" . $conn->error;
        }

    }
}
function Flotteupgrade($fn)
{
    include("../src/sql.php");
    $sql_select = "SELECT Upgrade FROM Flotte WHERE Flottenname ='$fn'";
    if (isset($conn)) {
        $result = $conn->query($sql_select, MYSQLI_STORE_RESULT)->fetch_all();
        if ($result[0][0]) {
            $insert = Random_int(100, 1000);
            $sql_update = "UPDATE Flotte SET Staerke = '$insert'WHERE Flottenname = '$fn'";
            if ($conn->query($sql_update) === TRUE) {
            } else {
                echo "Error: " . $sql_update . "<br>" . $conn->error;
            }
        }
    }
}
function FlotteReise($Tx1,$Ty1,$Tz1,$fn){
    include("../src/sql.php");
    $sql_select = "SELECT StandpunktX, StandpunktY,StandpunktZ FROM Flotte WHERE Flottenname ='$fn'";
    if (isset($conn)) {
        $results = $conn->query($sql_select, MYSQLI_STORE_RESULT)->fetch_all();
    }
    $temp = pow($results[0][2]-$Tz1,2)+pow($results[0][1]-$Ty1,2)+pow($results[0][0]-$Tx1,2);
    $output = sqrt($temp)/10;
    echo "Reisedauer von : ".$output." Sekunden!";
    ob_implicit_flush(true);
    ob_end_flush();
    @ob_flush();
    sleep ($output);
    echo "Ziel nach : ".$output." Sekunden erreicht!";
    $sql_update = "UPDATE Flotte SET StandpunktX = '$Tx1',StandpunktY = '$Ty1',StandpunktZ = '$Tz1' WHERE Flottenname = '$fn'";
    if (isset($conn)) {
        if ($conn->query($sql_update) === TRUE) {
        } else {
            echo "Error: " . $sql_update . "<br>" . $conn->error;
        }
    }
}
function sqlFlotte($StaatID,$Flottenname,$Staerke,$upgradeable,$HP,$BestehtAus,$X,$Y,$Z){
    include("../src/sql.php");
    if($StaatID != 0) {
        $sql_insert = "Insert Into Flotte (Flottenname,Staerke,Upgrade,HP,BestehtAus,StandpunktX,StandpunktY,StandpunktZ,StaatID) 
            Values ('$Flottenname','$Staerke','$upgradeable','$HP','$BestehtAus','$X','$Y','$Z','$StaatID')";
        if (isset($conn)) {
            if ($conn->query($sql_insert) === TRUE) {
            } else {
                echo "Error: " . $sql_insert . "<br>" . $conn->error;
            }
        }
    }
}