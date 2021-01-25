<?php
class planet
{
    private String $pName;
    private String $besitzer;
    private int $abwehrkraft;
    private int $abbaurateMineralien;
    private int $abbaurateEnergie;
    private int $abbaurateLegierungen;
    private int $abbaurateNahrung;

    function create($SystemID)
    {
        $string = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $this->pName = "Planet-".random_int(1,9999).$string[mt_rand(0, strlen($string) - 1)];;
        $this->besitzer = "";
        $this->abwehrkraft = random_int(1000,9000);
        $this->abbaurateMineralien = random_int(1,10);
        $this->abbaurateEnergie = random_int(1,10);
        $this->abbaurateLegierungen = random_int(1,10);
        $this->abbaurateNahrung = random_int(1,10);
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
        $this->besetzt();
        $this->sql($SystemID);
    }
    function besetzt()
    {
        if ($this->besitzer == "") {
            return "free";
        } else {
            return $this->besitzer;
        }
    }
    function verteidigen($attackFlotte,$defend)
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
    function gebaeudeSchaden($diff){
        $var = "";
        //gebäudeliste
        $var = $diff / random_int(1,2);
        echo "Schaden von ".$var." an allen Gebäuden";
    }
    function sql($SystemID){
        $bes = $this->besetzt();
        include("../src/sql.php");
        if($SystemID != 0) {
            $sql_insert = "Insert Into Planeten (Planetentyp,Resourcenabbaurate,IstBesetztVon,Abwehrkraft,SystemID) 
            Values ('$this->pName','$this->abbaurateMineralien','$bes','$this->abwehrkraft','$SystemID')";
            if (isset($conn)) {
                if ($conn->query($sql_insert) === TRUE) {
                } else {
                    echo "Error: " . $sql_insert . "<br>" . $conn->error;
                }
            }
        }
    }
}

