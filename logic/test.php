<?php
include_once("gebäude.php");


class test
{

}
$test = new gebäude();
$test->create("mine");
echo $test->getART();