<?php

include_once("Gebäude.php");

class Planet
{

    private string $planet_name;
    private int $max_count_buildings;
    private int $curr_count_buildings;
    private int $planet_id;

    private $buildings_on_planet = array();


    /**
     * @return String
     */
    public function getPlanetName(): string
    {
        return $this->planet_name;
    }

    /**
     * @param String $planet_name
     */
    public function setPlanetName(string $planet_name): void
    {
        $this->planet_name = $planet_name;
    }

    /**
     * @return int
     */
    public function getMaxCountBuildings(): int
    {
        return $this->max_count_buildings;
    }

    /**
     * @param int $max_count_buildings
     */
    public function setMaxCountBuildings(int $max_count_buildings): void
    {
        $this->max_count_buildings = $max_count_buildings;
    }

    /**
     * @return int
     */
    public function getCurrCountBuildings(): int
    {
        return $this->curr_count_buildings;
    }

    /**
     * @param int $curr_count_buildings
     */
    public function setCurrCountBuildings(int $curr_count_buildings): void
    {
        $this->curr_count_buildings = $curr_count_buildings;
    }

    /**
     * @return int
     */
    public function getPlanetId(): int
    {
        return $this->planet_id;
    }

    /**
     * @param int $planet_id
     */
    public function setPlanetId(int $planet_id): void
    {
        $this->planet_id = $planet_id;
    }


    private bool $planet_exists;

    public function __construct($planet_id, $planet_exists)
    {
        $this->planet_id = $planet_id;

        if ($planet_exists) {
            $querydb = <<<EOT
            SELECT planet_id, planet_name, max_count_buildings, curr_count_buildings
            FROM Planeten
            WHERE planet_id = $planet_id
        EOT;

            if (isset($_SESSION["Mysql"])) {
                $results = $_SESSION["Mysql"]->query($querydb)->fetch_all();
                $this->planet_name = $results[0][1];
                $this->max_count_buildings = $results[0][2];
                $this->curr_count_buildings = $results[0][3];
                $this->getBuildings();
                var_dump($this);
            } else {
                echo "<b>CONN NOT SET</b><br>";
            }
        }
    }

    public function getBuildings()
    {
        $querydb = <<<EOT
            SELECT building_id FROM Building WHERE belongs_to_planet = $this->planet_id
            EOT;
        if (isset($_SESSION["Mysql"])) {
            $results = $_SESSION["Mysql"]->query($querydb)->fetch_all();
            foreach ($results as $list) {
                foreach ($list as $element) {
                    array_push($this->buildings_on_planet, new Gebäude($element));
                }
            }
        }
    }

    public function showBuildings()
    {
        $tt = "";
        foreach ($this->buildings_on_planet as $building) {
            $tt .= <<<EOT
                <img class="col-sm-3">
                    <div class="container" id="building-element">
                        <img src=$building->building_pic width="200" height="200"></img><br>
                        M: $building->metal_cost | E: $building->energy_cost | G: $building->gold_cost;
                        <button type="button" class="btn btn-primary" onclick="button($building->metalcost,$building->energy_cost,$building->gold_cost)">Bauen</button>                                            
                </div>
                EOT;
            return $tt;
        }
    }
}


