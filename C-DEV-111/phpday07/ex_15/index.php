<?php
include_once("ex_15.php");

$spaceMarine = new \Imperium\Soldier("Gessart");
$chaosSpaceMarine = new \Chaos\Soldier("Ruphen");

echo $spaceMarine.PHP_EOL;
echo $chaosSpaceMarine.PHP_EOL;
$spaceMarine->doDamage($chaosSpaceMarine);
echo $spaceMarine.PHP_EOL;
echo $chaosSpaceMarine.PHP_EOL;
?>