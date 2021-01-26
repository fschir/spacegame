<?php

include("../src/sql.php");

class Staat_c{

    private planet_c $planet;
    private int $staatID;
    private string $staatsname;
    private string $anfuehrer;
    private string $spezies;
    var $planeten = array();

    public function getStaatsname(){
        return $this->staatsname;
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
        $this->planet = new planet_c($this->staatID());
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

    private function retrievePlaneten(){
        $querydb = <<<EOT
            SELECT 
            FROM STAAT
            WHERE UserID = $this->staatID;
        EOT;
    }
}

