<?php

class Gebäude
{

    private int $building_id;
    private string $building_name;
    public string $building_pic;

    public int $belongs_to_planet;
    public int $metal_cost;
    public int $energy_cost;
    public int $gold_cost;

    /**
     * @return string
     */
    public function getBuildingName(): string
    {
        return $this->building_name;
    }

    /**
     * @return string
     */
    public function getBuildingPic(): string
    {
        return $this->building_pic;
    }



    public function __construct($building_id)
    {

        $querydb = <<<EOT
            SELECT building_name, building_pic, belongs_to_planet, metal_cost, energy_cost, gold_cost
            FROM Building
            WHERE building_id = $building_id
EOT;

        if (isset($_SESSION["Mysql"])) {
            $results = $_SESSION["Mysql"]->query($querydb)->fetch_all();
            $this->building_name = $results[0][0];
            $this->building_pic = $results[0][1];
            $this->belongs_to_planet = $results[0][2];
            $this->metal_cost = $results[0][3];
            $this->energy_cost = $results[0][4];
            $this->gold_cost = $results[0][5];
        } else {
            echo "<b>CONN NOT SET</b><br>";

        }
    }
}