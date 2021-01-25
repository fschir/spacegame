<?php
function createPlanet($SystemID)
{
    $string = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $pName = "Planet-".random_int(1,9999).$string[mt_rand(0, strlen($string) - 1)];;
    $besitzer = "";
    $abwehrkraft = random_int(1000,9000);
    $abbaurateMineralien = random_int(1,10);
    $abbaurateEnergie = random_int(1,10);
    $abbaurateLegierungen = random_int(1,10);
    $abbaurateNahrung = random_int(1,10);
    /*echo $this->pName;
    echo "<Br>";
    var_dump($this->abwehrkraft);
    echo "<Br>";
    var_dump($this->abbaurateNahrung);
    echo "<Br>";
    var_dump($this->abbaurateLegierungen);
    echo "<Br>";
    var_dump($this->abbaurateEnergie);
    echo "<Br>";
    var_dump($this->abbaurateMineralien);*/
    sqlPlanet($SystemID,$pName,$abbaurateMineralien,$abwehrkraft);
}
function Planetbesetzt($ID)
{
    include("../src/sql.php");
    $sql_select = "SELECT IstBesetztVon FROM Planeten WHERE PlanetenID ='$ID'";
    if (isset($conn)) {
        $besitzer = $conn->query($sql_select, MYSQLI_STORE_RESULT)->fetch_all();
        if($ID = NULL){
            return "free";
        }else{
            return $besitzer[0][0];
        }
    }

}
function Planetverteidigen($attackFlotte,$defend)
{
    include("../src/sql.php");
    $sql_select = "SELECT Staerke FROM Flotte WHERE Flottenname ='$attackFlotte'";
    if (isset($conn)) {
        $atk = $conn->query($sql_select, MYSQLI_STORE_RESULT)->fetch_all();

        $sql_select = "SELECT Abwehrkraft FROM Planeten WHERE PlanetenID  ='$defend'";
        $def = $conn->query($sql_select, MYSQLI_STORE_RESULT)->fetch_all();

        if ($def[0][0] > $atk[0][0]) {
            return "Successful Defense";
        } else {
            return "Successful Attack";
        }
    }

}
function PlanetgebaeudeSchaden($diff){
    $var = "";
    //gebäudeliste
    $var = $diff / random_int(1,2);
    echo "Schaden von ".$var." an allen Gebäuden";
}
function sqlPlanet($SystemID,$pName,$abbaurateMineralien,$abwehrkraft){
    include("../src/sql.php");
    if($SystemID != 0) {
        $sql_insert = "Insert Into Planeten (Planetentyp,Resourcenabbaurate,Abwehrkraft,SystemID) 
            Values ('$pName','$abbaurateMineralien','$abwehrkraft','$SystemID')";
        if (isset($conn)) {
            if ($conn->query($sql_insert) === TRUE) {
            } else {
                echo "Error: " . $sql_insert . "<br>" . $conn->error;
            }
        }
    }
}


