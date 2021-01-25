<?php

include("../src/sql.php");

class Staat_c
{
    private int $staatID;
    private string $staatsname;
    private string $anfuehrer;
    private string $spezies;
    var $planeten = array();

    public function getStaatsname(){
        return $this->staatsname;
    }

    public function __construct($UserID)
    {
        $querydb = <<<EOT
            SELECT StaatID, Name, Anfuehrer, Spezie
            FROM STAAT
            WHERE UserID = $UserID
        EOT;

        if (isset($_SESSION["Mysql"])) {
            echo "conn set";
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
    }
}

