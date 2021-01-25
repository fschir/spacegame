<?php

include("../logic/Staat.php");

class Spieler
{
    private int $userid;

    private int $metall;
    private int $gold;
    private int $energie;
    private Staat_c $staat;


    /**
     * @return int
     */
    public function getMetall(){
        return $this->metall;
    }
    public function getGold(): int
    {
        return $this->gold;
    }
    /**
     * @param int $gold
     */
    public function setGold(int $gold): void
    {
        $this->gold = $gold;
        $this->updateGold($gold);
    }
    /**
     * @return int
     */
    public function getEnergie(): int
    {
        return $this->energie;
    }
    /**
     * @param int $energie
     */
    public function setEnergie(int $energie): void
    {
        $this->energie = $energie;
        $this->updateEnergie($energie);
    }
    private string $username;
    public function setMetall(int $menge){
        $this->metall = $menge;
        $this->updateMetall($menge);
    }
    public function getUsername(){
        return $this->username;
    }
    public function getUserID(){
        return $this->userid;
    }
    public function getStaat(){
        return $this->staat;
    }

    public function __construct(int $userid, string $username, int $gold, int $energie, int $metall){
        $this->username = $username;
        $this->metall = $metall;
        $this->gold = $gold;
        $this->energie = $energie;
        $this->userid = $userid;
        $this->staat = new Staat_c($this->getUserID());
        #var_dump($this);
    }

    public function initStaat() : Staat_c{
        if(isset($this->user_id)) {
            return new Staat_c($this->getUserID());
        }
    }
    public function updateGold($gold){
        include("../src/sql.php");
        $sql_update = <<<EOT
            UPDATE users SET Gold = $gold WHERE UserID = $this->userid;
        EOT;
        if (isset($_SESSION["Mysql"])) {
            if ($_SESSION["Mysql"]->query($sql_update) === TRUE) {
            } else {
                echo "Error: " . $sql_update . "<br>" . $_SESSION["Mysql"]->error;
            }
        }
    }
    public function updateMetall($metall)
    {
        $sql_update = <<<EOT
            UPDATE users SET Metall = $metall WHERE UserID = $this->userid;
        EOT;
        if (isset($_SESSION["Mysql"])) {
            if ($_SESSION["Mysql"]->query($sql_update) === TRUE) {
            } else {
                echo "Error: " . $sql_update . "<br>" . $_SESSION["Mysql"]->error;
            }
        }
    }
    public function updateEnergie($energie){
        $sql_update = <<<EOT
            UPDATE users SET Energie = $energie WHERE UserID = $this->userid;
        EOT;
        if (isset($_SESSION["Mysql"])) {
            if ($_SESSION["Mysql"]->query($sql_update) === TRUE) {
            } else {
                echo "Error: " . $sql_update . "<br>" . $_SESSION["Mysql"]->error;
            }
        }
    }
}