<?php
include_once("gebäude.php");
include_once("Flotte.php");
include_once("Schiffstyp.php");
include_once("sonnensystem.php");
include_once("Staat.php");


Staatcreate(1338,"MoinMeista","Stalin","Russe");

CreateSystem(1);

CreateFlotte(1,"Uebermacht",true,20,20,20);
FlotteupgradeChange(1,"Uebermacht");
Flotteupgrade("Uebermacht");
FlotteReise(10,10,10,"Uebermacht");

Planetverteidigen("Uebermacht",3);

createGebaeude("mine",1);