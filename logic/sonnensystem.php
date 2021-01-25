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
        $this->PlanetenAnzahl = 1;//random_int(3, 10);

    }
    function planets($SystemID)
    {
        for ($i = 0; $i < $this->PlanetenAnzahl; $i++) {
            $this->test = new planet;
            $this->test->create($SystemID);
        }
    }

        function Standpunkt()
        {
            $this->x = random_int(1, 9999);
            $this->y = random_int(1, 9999);
            $this->z = random_int(1, 9999);
        }
        function sql($SystemID)
        {
            include("../src/sql.php");
            if ($SystemID != 0) {
                $sql_insert = "INSERT INTO Sonnensystem (MaxPlaneten,StandpunktX,StandpunktY,StandpunktZ,StaatID) VALUES ('$this->PlanetenAnzahl','$this->x','$this->y','$this->z','$SystemID')";
                if (isset($conn)) {
                    if ($conn->query($sql_insert) === TRUE) {
                    } else {
                        echo "Error: " . $sql_insert . "<br>" . $conn->error;
                    }
                }
            }
        }
    }

        /*$new = new sonnensystem();
        $new->CreateSystem();
        $new->sql(1);
        $new->planets(1);*/

