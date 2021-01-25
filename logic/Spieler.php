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
    }
    private string $username;
    public function setMetall(int $menge){
        $this->metall = $menge;
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
}