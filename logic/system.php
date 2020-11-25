<?php
include ("planet2.php");
class system
{
    private int $MaxPlaneten;
    private int $BoniGanzesSystem;
    private int $Standpunkt;
    private bool $alle;

    function CreateSystem(){
        for($i = 0; $i < 10; $i++){
            $test = new planet;
            $test->create();
            echo $test->verteidigen(1000);
            echo "<br>";
            echo $test->besetzt();
            echo "<br>";
        }
    }
    function Boni()
    {
        if ($this->alle) {

        }
    }
}
$new = new system();
$new->CreateSystem();
