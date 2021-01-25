<?php


class SGpdo
{
    private $servername = "fschirmer.info";
    private $username = "spacegame";
    private $password = "itc2020";
    private $dbname = "spacegame";

    public $PDO;

    public function __construct(){
        $this->PDO = new PDO("mysql:dbname=" . $this->dbname . ";" . "host=" . $this->servername,
                                    $this->username, $this->password);
    }

}