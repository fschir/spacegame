<?php
function createGebaeude($type,$pID)
{
    $MAX_BEWOHNER = random_int(10,20);
    if ($type == "mine") {
        c_mine($type,$MAX_BEWOHNER,$pID);
    } elseif ($type == "werft") {
        c_werft($type,$MAX_BEWOHNER,$pID);
    }
}

function c_mine($type,$Max_Bewohner,$pID)
{
    $PRODUKTION = random_int(10, 100);
    $HP = 250;
    sqlGebaeude($pID,$HP,$Max_Bewohner,$type,$PRODUKTION);
}

function c_werft($type,$Max_Bewohner,$pID)
{
    $HP = 1000;
    sqlGebaeude($pID,$HP,$Max_Bewohner,$type,0);
}

function getART($ID)
{
    include("../src/sql.php");
    $sql_select = "SELECT Nutzen  From Gebaeude Where GebaeudeID = '$ID'";
    if (isset($conn)) {
        if ($conn->query($sql_select) === TRUE) {
        } else {
            echo "Error: " . $sql_select . "<br>" . $conn->error;
        }
    }
    return $sql_select[0][0];
}
function sqlGebaeude($PlanetenID,$HP,$MAX_BEWOHNER,$ART,$PRODUKTION){
    include("../src/sql.php");
    if($PlanetenID != 0) {
        $sql_insert = "INSERT INTO Gebaeude (HP,Bewohner,Nutzen,Produktion) VALUES ('$HP','$MAX_BEWOHNER','$ART','$PRODUKTION')";
        if (isset($conn)) {
            if ($conn->query($sql_insert) === TRUE) {
            } else {
                echo "Error: " . $sql_insert . "<br>" . $conn->error;
            }
        }
        /*$sql_select = "SELECT MAX(GebauedeID) FROM Gebaeude";
        if (isset($conn)) {
            $results = $conn->query($sql_select)->fetch_assoc();*/
        $result = 1;
        $sql_insert = "INSERT INTO PlanetenGebaeude (PlanetenID,GebaeudeID) VALUES ('$PlanetenID','$result')";
        if (isset($conn)) {
            if ($conn->query($sql_insert) === TRUE) {
            } else {
                echo "Error: " . $sql_insert . "<br>" . $conn->error;
            }
        }
    }
}

/*
$test = new gebäude();
$test->create("mine");
$test->sql(2);*/