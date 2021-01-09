<?php
include("planet.php");

class sonnensystem
{
    private int $PlanetenAnzahl;
    private int $x;
    private int $y;
    private int $z;

    function CreateSystem()
    {
        $this->Standpunkt();
        $this->PlanetenAnzahl = random_int(3, 10);
        for ($i = 0; $i < $this->PlanetenAnzahl; $i++) {
            $this->test = new planet;
            $this->test->create();
            echo $this->test->verteidigen(1000);
            echo "<br>";
            echo $this->test->besetzt();
            echo "<br>";
        }
    }

    function Standpunkt()
    {
        $this->x = random_int(1, 9999);
        $this->y = random_int(1, 9999);
        $this->z = random_int(1, 9999);
    }

    function getCount()
    {

    }

    function sql($StaatID)
    {
        include_once("../src/sql.php");
        if ($StaatID != 0) {
            $sql_insert = "INSERT INTO Sonnensystem (MaxPlaneten,StandpunktX,StandpunktY,StandpunktZ,StaatID) VALUES ('$this->PlanetenAnzahl','$this->x','$this->y','$this->z','$StaatID')";
            if (isset($conn)) {
                if ($conn->query($sql_insert) === TRUE) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $sql_insert . "<br>" . $conn->error;
                }
            }
        }
    }
}
        $new = new sonnensystem();
        $new->CreateSystem();
        $new->sql("1");
