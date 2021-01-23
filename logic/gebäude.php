<?php


class gebäude
{
    private int $HP;
    private int $MAX_BEWOHNER;
    private string $ART;
    private int $PRODUKTION;

    function create($type)
    {
        $this->MAX_BEWOHNER = random_int(10,20);
        $this->ART = $type;
        if ($this->ART == "mine") {
            $this->c_mine();
        } elseif ($this->ART == "werft") {
            $this->c_werft();
        }
    }

    function c_mine()
    {
        $this->PRODUKTION = random_int(10, 100);
        $this->HP = 250;
    }

    function c_werft()
    {
        $this->HP = 1000;
    }

    function getART()
    {
        return $this->ART;
    }
    function sql($PlanetenID){
        include("../src/sql.php");
        if($PlanetenID != 0) {
            $sql_insert = "INSERT INTO Gebaeude (HP,Bewohner,Nutzen,Produktion) VALUES ('$this->HP','$this->MAX_BEWOHNER','$this->ART','$this->PRODUKTION')";
            if (isset($conn)) {
                if ($conn->query($sql_insert) === TRUE) {
                } else {
                    echo "Error: " . $sql_insert . "<br>" . $conn->error;
                }
            }
            /*$sql_select = "SELECT MAX(GebauedeID) FROM Gebaeude";
            if (isset($conn)) {
                $results = $conn->query($sql_select)->fetch_assoc();*/
                $result = "1";

            }
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