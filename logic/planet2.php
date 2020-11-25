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

    function create()
    {
        $this->pName = "Planet-".random_int(1,9999);
        $this->besitzer = "";
        $this->abwehrkraft = random_int(1000,9000);
        $this->abbaurateMineralien = random_int(1,10);
        $this->abbaurateEnergie = random_int(1,10);
        $this->abbaurateLegierungen = random_int(1,10);
        $this->abbaurateNahrung = random_int(1,10);
        echo $this->pName;
        echo "<Br>";
        var_dump($this->abwehrkraft);
        echo "<Br>";
        var_dump($this->abbaurateNahrung);
        echo "<Br>";
        var_dump($this->abbaurateLegierungen);
        echo "<Br>";
        var_dump($this->abbaurateEnergie);
        echo "<Br>";
        var_dump($this->abbaurateMineralien);
    }
    function besetzt()
    {
        if ($this->besitzer == "") {
            return "free";
        } else {
            return $this->besitzer;
        }
    }
    function verteidigen($angriff)
    {
        if ($this->abwehrkraft<$angriff) {
            return "Success";
        } else {
            $this->gebaeudeSchaden($this->abwehrkraft-$angriff);
            return $this->abwehrkraft-$angriff;
        }
    }
    function gebaeudeSchaden($diff){
        $var = "";
        //gebäudeliste
        $var = $diff / random_int(1,2);
        echo "<br>";
        echo "Schaden von ".$var." an allen Gebäuden";
        echo "<br>";
    }
    function applyBoni($boni){

    }

}
