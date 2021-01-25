<?php
include_once("gebäude.php");
include_once("Flotte.php");
include_once("Schiffstyp.php");
include_once("sonnensystem.php");
include_once("Staat.php");


$test = new Staat();
$test->create("MoinMeista","Stalin","Russe");
$test->sql("1337");

$new = new sonnensystem();
$new->CreateSystem();
$new->sql(1);
$new->planets(1);

$test = new Flotte();
$test->Create("Uebermacht",20,20,20);
$test->upgradeChange(1,"Uebermacht");
$test->upgrade("Uebermacht");
$test->sqltest(1);
$test->Reise(10,10,10,"Uebermacht");

$test = new planet();
$test->verteidigen("Uebermacht",3);

$test = new gebäude();
$test->create("mine");
$test->sql(1);