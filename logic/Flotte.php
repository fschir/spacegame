<?php


class Flotte
{

    private int $Stärke;
    private bool $upgradeable;
    private int $HP;
    private String $Flottenname;
    private String $BestehtAus;
    private int $x;
    private int $y;
    private int $z;

    function Create($fn,$x1,$y1,$z1){
        $this->upgradeable = true;
        $this->Flottenname = $fn;
        $this->x = $x1;
        $this->y = $y1;
        $this->z = $z1;
    }
    function upgrade(bool $state){
        $this->upgradeable = $state;
        var_dump( $this->upgradeable);
    }
    function Reise($x1,$y1,$z1){
        $xtemp = $x1-$this->x;
        $ytemp = $y1-$this->y;
        $ztemp = $z1-$this->z;
        $temp = $ztemp*$ztemp+$ytemp*$ytemp+$xtemp*$xtemp;
        return round(sqrt($temp));
    }

    function sqltest(){
        include_once ("../src/sql.php");
        $username = "flo@gmx.de";
        $password = "test123";

        $sql_select = "SELECT userEmail, userPassword FROM users WHERE userEmail='$username' AND userPassword='$password'";
        if (isset($conn)) {
            $results = $conn->query($sql_select, MYSQLI_STORE_RESULT)->fetch_all();
            printf("Hallo %s mit Passwort %s", $results[0][0], $results[0][1]);
        }
        $sql_select = "SELECT * FROM users";
        if (isset($conn)) {
            $results = $conn->query($sql_select, MYSQLI_STORE_RESULT)->fetch_all();
            var_dump($results);
        }

    }
}
$test = new Flotte();
$test->Create("SS",20,20,20);
echo $test->Reise(9,1313,50);
echo $test->upgrade(false);
echo $test->sqltest();