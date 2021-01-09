<?php


class Staat
{
    private string $Name;
    private string $Anführer;
    private string $Spezie;
    private bool $IstImKrieg;
    private $verbuendete;
    private bool $TerraForm;

    function create($n,$a,$s){
        $this->Name = $n;
        $this->Anführer = $a;
        $this->Spezie = $s;
    }
    function spezies ($sp){ //Legt Attribut Terraform fest

    }
    function sql($userid){
        include_once ("../src/sql.php");
        if($userid != 0) {
            $sql_insert = "INSERT INTO STAAT (Name,Anfuehrer,UserID,Spezie) VALUES ('$this->Name','$this->Anführer','$userid','$this->Spezie')";
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
$test = new Staat();
$test->create("MoinMeista","Stalin","Russe");
$test->sql("1338");