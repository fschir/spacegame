<?php

include("../src/sql.php");
include_once("../logic/Planet.php");

class Staat{

    private Planet $planet;
    private int $staatID;

    /**
     * @return int
     */
    public function getStaatID(): int
    {
        return $this->staatID;
    }
    private string $staatsname;
    private string $anfuehrer;
    private string $spezies;
    var $planeten = array();

    public function getStaatsname(){
        return $this->staatsname;
    }

    public function getPlanet(){
        return $this->planet;
    }

    public function __construct($UserID){
        $querydb = <<<EOT
            SELECT StaatID, Name, Anfuehrer, Spezie
            FROM STAAT
            WHERE UserID = $UserID
        EOT;

        if (isset($_SESSION["Mysql"])) {
            if ($_SESSION["Mysql"]->query($querydb) == TRUE) {
                $results = $_SESSION["Mysql"]->query($querydb)->fetch_all();
                $this->staatID = $results[0][0];
                $this->staatsname = $results[0][1];
                $this->anfuehrer = $results[0][2];
                $this->spezies = $results[0][3];
            }

        }
        else {
            echo "<b>CONN NOT SET</b><br>";
        }
        $this->planet = new Planet($this->getStaatID(), TRUE);
    }

    private function retrievePlaneten()
    {
        $querydb = <<<EOT
            SELECT planet_id,planet_name,max_count_buildings,curr_count_buildings,belongs_to_staat
            FROM Planeten
            WHERE belongs_to_staat = $this->staatID;
        EOT;

        if (isset($_SESSION["Mysql"])) {
            if ($_SESSION["Mysql"]->query($querydb) == TRUE) {
                $results = $_SESSION["Mysql"]->query($querydb)->fetch_all();
                $this->planeten = $results;
            }
        }
    }
}

