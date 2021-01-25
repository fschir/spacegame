<?php
function Staatcreate($userid,$n,$a,$s){
    $Name = $n;
    $Anfuehrer = $a;
    $Spezie = $s;
    sqlStaat($userid,$Name,$Anfuehrer,$Spezie);
}
function Staatspezies ($sp){ //Legt Attribut Terraform fest

}
function sqlStaat($userid,$Name,$Anfuehrer,$Spezie){
    include("../src/sql.php");
    if($userid != 0) {
        $sql_insert = "INSERT INTO STAAT (Name,Anfuehrer,UserID,Spezie) VALUES ('$Name','$Anfuehrer','$userid','$Spezie')";
        if (isset($conn)) {
            if ($conn->query($sql_insert) === TRUE) {
            } else {
                echo "Error: " . $sql_insert . "<br>" . $conn->error;
            }
        }
    }
}
/*
$test = new Staat();
$test->create("MoinMeista","Stalin","Russe");
$test->sql("1338");*/